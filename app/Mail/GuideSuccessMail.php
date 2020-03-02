<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GuideSuccessMail extends Mailable
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
            ->subject('การลงทะเบียน Guide/TL ของคุณสำเร็จแล้ว')
            ->view('mail.guide.success')
            ->with( 'data', $this->data );
    }
}
