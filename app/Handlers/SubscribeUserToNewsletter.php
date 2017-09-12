<?php
namespace App\Handlers;

use NZTim\Mailchimp\Mailchimp;
use App\Registration\Events\UserHasRegistered;
// use Laracasts\Commander\Events\EventListener;

class SubscribeUserToNewsletter
{

    public $mailchimp;
    public $listId = '4fd935ef45';
    // public $listId = env('MAILCHIMP_LIST_ID');

    public function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    /**
     * @param UserHasRegistered $event
     */
    public function handle(UserHasRegistered $user)
    {
        //$this->mailer->sendWelcomeMessageTo($event->user);
        try {
            if(!$this->mailchimp->check($this->listId, $user->email)) {
                $this->mailchimp->subscribe($this->listId, $user->email, $mergeFields = [], $confirm = false);
                return redirect()->back()->with('success','Email Subscribed successfully');
            } else {
                 return redirect()->back()->with('error','Email is Already Subscribed');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error','Error from MailChimp: ' . $e->getMassage());
        }
    }

} 