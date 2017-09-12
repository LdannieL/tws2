<?php

namespace App\Registration\Events;

use App\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserHasRegistered
{
	use Dispatchable, SerializesModels;
    
    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

}
