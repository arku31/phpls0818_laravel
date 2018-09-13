<?php

namespace App\Providers;

use App\Providers\PostCreatedMailSent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPostEmailNotification implements ShouldQueue
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
     * @param  PostCreatedMailSent  $event
     * @return void
     */
    public function handle(PostCreatedMailSent $event)
    {
        sleep(5);
    }
}
