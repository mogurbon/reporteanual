<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Notifications\ReportNotify;

class SendNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Para enviar notificaciones a los usuarios del sistema de reportes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo "Enviando Correos..";
    $users = User::all();

        Notification::send($users, new ReportNotify());
    }
}
