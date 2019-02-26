<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Pusher\Laravel\Facades\Pusher;

class PusherTrigger implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $channel;
    protected $event;
    protected $contents;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $channel, string $event, array $contents)
    {
        $this->channel = $channel;
        $this->event = $event;
        $this->contents = $contents;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Pusher::trigger($this->channel, $this->event, $this->contents);
    }
}
