<?php

namespace App\Lib;


use Pusher\Pusher;

class PusherFactory
{
    public static function make()
    {
        // You can get all this keys from pusher.com. After register of your app.
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true
        );
        return new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
    }
}