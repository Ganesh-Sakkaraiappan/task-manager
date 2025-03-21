<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
class WriteLogJob implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue, SerializesModels;
    
    protected $message;
    
    /**
     * Create a new job instance.
     */
    public function __construct($message)
    {
        $this->message=$message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::info('Queued Message: ' . $this->message);
    }
}
