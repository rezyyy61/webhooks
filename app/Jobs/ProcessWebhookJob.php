<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Spatie\WebhookClient\Models\WebhookCall;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;


class ProcessWebhookJob extends SpatieProcessWebhookJob
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public WebhookCall $webhookCall
    )
    {
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
//        var_dump($this->webhookCall->headers);
        $dat = json_decode($this->webhookCall, true);
//        $data = $dat['payload'];
//
//        if ($data['event'] == 'charge.success') {
//            // take action since the charge was success
//            // Create order
//            // Sed email
//            // Whatever you want
//            Log::info($data);
//        }
//
//        //Acknowledge you received the response
//        http_response_code(200);
    }
}
