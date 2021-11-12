<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNews extends Mailable
{
    use Queueable, SerializesModels;
    public $contentMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $contentMail)
    {
        $this->contentMail = $contentMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emailNews');
    }
}
