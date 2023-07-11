<?php

namespace App\Console\Commands;

use App\Models\Event;
use Illuminate\Console\Command;

class SendEventNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-event-notification {evenId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envoie des notifications par E-mail les nouveaux inscrits';

    protected $arguments = [
        "eventId"
    ];

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $eventId = $this->argument("eventId");

        $event = Event::find($eventId);
        if($event) {
            $event->load("classes.eleves");
                $classes = $event->classes;
                foreach ($classes as $class) {
                    $eleves = $class->$eleves;
                    foreach ($eleves as $eleve) {
                        if($eleve->etat === "EN COURS") {
                            Mail::to($eleve->email)->send(new EventNotification());
                        }
                    }
                }
                $this->info("Les notifications par E-mails sontenvoyés");
        } else {
            $this->info("Evènement introuvable");
        }
    }
}
