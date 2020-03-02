<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VoucherMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this
            ->from('chong.bkksoft@gmail.com')
            ->subject('มีใบสำคัญจ่ายใหม่ กรุณาตรวจสอบ')
            ->view('MailinVoice.sendinvoice')
            ->with( 'data', $this->data );
    }
}
