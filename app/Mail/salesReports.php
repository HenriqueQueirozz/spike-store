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

    /**
     * Create a new message instance.
     */
    public function __construct(Seller $seller, $sales)
    {
        $this->seller = $seller;
        $this->sales = $sales;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->seller->email, $this->seller->name),
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
                'sales' => $this->sales
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
