<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sale extends Model
{
    use HasFactory;

    protected $primaryKey = 'sale_id';

    protected $fillable = ['seller_fk', 'value', 'commission', 'date'];

    protected $date = ['date'];

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id', 'seller_fk');
    }

    public function listar_vendas($seller_id = '', $data_inicial = '', $data_final = '')
    {
        $sales = DB::table('sales')
                    ->join('sellers', 'sales.seller_fk', '=', 'sellers.seller_id') 
                    ->select('sellers.name', 'sellers.email', 'sales.sale_id', 'sales.date', 'sales.value', 'sales.commission');

        if(!empty($seller_id)){
            $sales = $sales->where('sellers.seller_id', $seller_id);
        }

        if (!empty($data_inicial) && !empty($data_final)) {
            $sales = $sales->whereBetween('sales.date', [$data_inicial, $data_final]);
        }

        $sales = $sales->orderBy('sales.sale_id')->get();
        return $sales->toArray();
    }

    public function soma_vendas_periodo($seller_id = '', $data_inicial = '', $data_final = '')
    {
        $sales = DB::table('sales')
                    ->join('sellers', 'sales.seller_fk', '=', 'sellers.seller_id');

        if(!empty($seller_id)){
            $sales = $sales->where('sellers.seller_id', $seller_id);
        }

        if (!empty($data_inicial) && !empty($data_final)) {
            $sales = $sales->whereBetween('sales.date', [$data_inicial, $data_final]);
        }

        $sales = $sales->sum('sales.value');
        return $sales;
    }
}
