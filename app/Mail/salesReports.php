<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Seller;

class salesReports extends Mailable
{
    use Queueable, SerializesModels;

    private $seller;
    private $sales;
    private $value_total;

    /**
     * Create a new message instance.
     */
    public function __construct(Seller $seller, $sales, $value_total)
    {
        $this->seller = $seller;
        $this->sales = $sales;
        $this->value_total = $value_total;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('spikestore@gmail.com', 'Spike Star'),
            subject: '[Relatório de vendas] - '.date('d/m/Y'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.salesReports',
            with: [
                'seller' => $this->seller,
                'sales' => $this->sales,
                'value_total' => $this->value_total
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
