<?php

// app/Listeners/WelcomeUserListener.php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeUserListener
{
    public function handle(UserLoggedIn $event)
    {
        // Kirim data pengguna ke view
        return view('dashboard', ['user' => $event->user]);
    }
}

