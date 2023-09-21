<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use App\Events\LogoutEvent;


class LogoutEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(LogoutEvent $event): void
    {
        $last_login = DB::table('logins')
        ->orderBy('id', 'DESC')
        ->where('user_name', $event->user)
        ->select('login_date')->first();

        DB::table('logins')->where('user_name', $event->user)
        ->where('login_date', $last_login->login_date)
        ->update(['logout_date' => date('Y-m-d H:i:s')]);
    }
}
