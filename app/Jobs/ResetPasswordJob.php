<?php

namespace App\Jobs;

use App\Events\ResetPasswordEvent;
use App\Mail\ResetPasswordMail;
use App\Mail\VacancyCreatedMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class ResetPasswordJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $event;

    /**
     * Create a new job instance.
     *
     * @param ResetPasswordEvent $event
     */
    public function __construct(ResetPasswordEvent $event)
    {
        $this->event = $event;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->event->email;

        Mail::to($email)
            ->send(new ResetPasswordMail($email, $this->event->password));
    }
}
