<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForgetPasswordmail extends Mailable
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
            ->subject('กดลิงค์เพื่อเปลี่ยนรหัสผ่าน')
             ->view('mail.guide.forget')
            ->with( 'data', $this->data );
    }
}
