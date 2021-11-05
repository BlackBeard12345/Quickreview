<?php

namespace App\Listeners;


use App\Events\ResetPasswordEvent;
use App\Jobs\ResetPasswordJob;

class ResetPasswordListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param ResetPasswordEvent $event
     * @return void
     */
    public function handle(ResetPasswordEvent $event)
    {
        ResetPasswordJob::dispatch($event);
    }
}
