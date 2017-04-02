<?php

namespace Modules\User\Listeners;

use Modules\User\Events\UserCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use Modules\User\Emails\VerificationMail;

class SendVerificationMail
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
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        Mail::to('me.suman11@gmail.com')
        ->send(new VerificationMail());
        dd($event->user);

    }
}
