<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CorreoCorporativo extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;
    public $correoCorporativo;
    public $password;

    /**
     * creamos una instacia del mensaje.
     * @param $usuario
     * @param $correoCorporativo
     * @param $password
     */
    public function __construct($usuario, $correoCorporativo, $password)
    {
        $this->usuario = $usuario;
        $this->correoCorporativo = $correoCorporativo;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Detalle del correo corporativo')
            ->view('emails.correo_corporativo')
            ->with([
                'usuario' => $this->usuario,
                'correoCorporativo' => $this->correoCorporativo,
                'password' => $this->password,
            ]);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Correo Corporativo',
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
