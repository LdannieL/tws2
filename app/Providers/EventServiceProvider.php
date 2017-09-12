<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->app['events']->listen('App.*', 'App\Handlers\EmailNotifier');
        // $this->app['events']->listen('App.*', 'App\Handlers\AdminEmailNotifier');
        $this->app['events']->listen('App.*', 'App\Handlers\SubscribeUserToNewsletter');
    }
}
