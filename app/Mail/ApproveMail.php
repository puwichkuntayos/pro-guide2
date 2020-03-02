<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApproveMail extends Mailable
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
            ->subject('ใบสำคัญจ่ายของคุณ ได้รับการอนุมัติแล้ว')
            ->view('MailinVoice.checkinvoice')
            ->with( 'data', $this->data );
    }
}
