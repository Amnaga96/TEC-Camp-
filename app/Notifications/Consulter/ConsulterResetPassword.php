<?php

namespace App\Notifications\Consulter;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ConsulterResetPassword extends Notification
{

    public $token;


    public function __construct($token)
    {
        $this->token = $token;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('You are receiving this email because we received a password reset request for your account.')
            ->action('Reset Password', url(config('app.url').route('consulter.password.reset', $this->token, false)))
            ->line('If you did not request a password reset, no further action is required.');
    }
}
