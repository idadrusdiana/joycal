<?php

namespace App\Mail;

use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->target = $user;
    }

    public function build()
    {
        return $this
        ->from('sumrochkaryaIndonesia@gmail.com')
        ->view('email.test')
        ->with([
            // 'untuk' => request()->untuk
            'name' => $this->target->first_name .' '. $this->target->last_name,
            'username' => $this->target->name,
            'password' => $this->target->password,
            'merk'     => 'Joycal',
            'store_name' => $this->target->store_id,
            'email'     => $this->target->email
        ]);
    }
}
