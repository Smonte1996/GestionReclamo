<?php

namespace App\Mail;

use App\Models\Notification_service;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notificationservice extends Mailable
{
    use Queueable, SerializesModels;



    public $notification;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Notification_service $notification_service)
    {
        $this->notification = $notification_service;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email =  $this->markdown('mail.notificationservice')->subject('NOTIFICACIÓN DE UNA '.$this->notification->dissatisfaction_service->notification_type);
        // if (!is_null($this->notification->attached_files)) {
        //     foreach ($this->notification->attached_files as $file) {
        //         $email->attachFromStorage($file->path);
        //     }            
        // }

        return $email;
    }
}
