<?php

namespace App\Mailers;

use App\Models\User;

class UserMailer extends Mailer {

    /**
     * @param User $user
     */
    public function sendWelcomeMessageTo(User $user)
    {
        $subject = 'Welcome to TWS!';
        $view = 'emails.registration.welcome';

        return $this->sendTo($user, $subject, $view);
    }

}

