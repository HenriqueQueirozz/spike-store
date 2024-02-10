<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Seller;
use App\Models\Sale;
use App\Mail\salesReports;
use Illuminate\Support\Facades\Mail;
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $sellers = Seller::all();
            $modelSale = new Sale;
            $date = date('Y-m-d');

            $sales = $modelSale->listar_vendas('', $date, $date);
            $value_total = $modelSale->soma_vendas_periodo('', $date, $date);

            foreach($sellers as $seller){
                Mail::to($seller)->send(new salesReports($seller, $sales, $value_total));
            }
        })->timezone('America/Sao_Paulo')->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
