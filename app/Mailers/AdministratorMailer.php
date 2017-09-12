<?php

namespace App\Mailers;

use App\User;
use Illuminate\Mail\Mailer as Mail;

class AdministratorMailer extends Mailer {
    /**
     * @param User $user
     */

    function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }


    public function sendTo($user, $subject, $view, $data = [])
    {
        $registeredUser = User::first();
        $id = $registeredUser->id;
        $registeredUserEmail = $registeredUser->email;

        $data = array(
                'id' => $id,
                'registeredUserEmail' => $registeredUserEmail
            );

        $this->mail->queue($view, $data, function($message) use ($user, $subject, $id, $registeredUserEmail)
        {
            $message->to($user->email)->subject($subject);
        });
    }

    public function sendWelcomeMessageTo(User $user)
    {
        $user = User::find(1);
        $subject = 'User Has Registered!';
        $view = 'emails.registration.activate';

        return $this->sendTo($user, $subject, $view);
    }

}
