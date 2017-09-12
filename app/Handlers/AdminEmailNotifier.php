<?php namespace App\Handlers;

use App\Mailers\UserMailer;
use App\Mailers\AdministratorMailer;
use App\Registration\Events\UserHasRegistered;
// use Laracasts\Commander\Events\EventListener;

class AdminEmailNotifier
{

    /**
     * @var UserMailer
     */
    private $mailer;

    /**
     * @param UserMailer $mailer
     */
    public function __construct(AdministratorMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param UserHasRegistered $event
     */
    public function whenUserHasRegistered(UserHasRegistered $event)
    {
        $this->mailer->sendWelcomeMessageTo($event->user);
    }

} 