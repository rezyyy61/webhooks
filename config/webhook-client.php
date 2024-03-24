<?php

use App\Handler\ClockifySignatureValidator;
use App\Jobs\ProcessWebhookJob;
use Spatie\WebhookClient\Models\WebhookCall;
use Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile;
use Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo;

return [
//    'configs' => [
//        [
//            /*
//             * This package supports multiple webhook receiving endpoints. If you only have
//             * one endpoint receiving webhooks, you can use 'default'.
//             */
//            'name' => 'clockify',
//
//            /*
//             * We expect that every webhook call will be signed using a secret. This secret
//             * is used to verify that the payload has not been tampered with.
//             */
//            'signing_secret' => "",
//
//            /*
//             * The name of the header containing the signature.
//             */
//            'signature_header_name' => 'clockify-signature',
//
//            /*
//             *  This class will verify that the content of the signature header is valid.
//             *
//             * It should implement \Spatie\WebhookClient\SignatureValidator\SignatureValidator
//             */
//            'signature_validator' => ClockifySignatureValidator::class,
//
//            /*
//             * This class determines if the webhook call should be stored and processed.
//             */
//            'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
//
//            /*
//             * This class determines the response on a valid webhook call.
//             */
//            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
//
//            /*
//             * The classname of the model to be used to store webhook calls. The class should
//             * be equal or extend Spatie\WebhookClient\Models\WebhookCall.
//             */
//            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
//
//            /*
//             * In this array, you can pass the headers that should be stored on
//             * the webhook call model when a webhook comes in.
//             *
//             * To store all headers, set this value to `*`.
//             */
//            'store_headers' => '*',
//
//            /*
//             * The class name of the job that will process the webhook request.
//             *
//             * This should be set to a class that extends \Spatie\WebhookClient\Jobs\ProcessWebhookClockifyJob.
//             */
//            'process_webhook_job' => ProcessWebhookJob::class,
//        ],
//    ],
    'configs' => [
        [
            'name' => 'clockify',
            'signing_secret' => '',
            'signature_header_name' => 'clockify-signature',
            'signature_validator' => ClockifySignatureValidator::class,
            'webhook_profile' => ProcessEverythingWebhookProfile::class,
            'webhook_response' => DefaultRespondsTo::class,
            'webhook_model' => WebhookCall::class,
            'store_headers' => '*',
            'process_webhook_job' => ProcessWebhookJob::class,
        ],
        [
            'name' => 'github',
            'signing_secret' => 'i4Vh2QjhMbrOVIyyeGishdIrg2KxyDxm',
            'signature_header_name' => 'X-Hub-Signature',
            'signature_validator' => ClockifySignatureValidator::class,
            'webhook_profile' => ProcessEverythingWebhookProfile::class,
            'webhook_response' => DefaultRespondsTo::class,
            'webhook_model' => WebhookCall::class,
            'store_headers' => '*',
            'process_webhook_job' => ProcessWebhookJob::class,
        ],
    ],


    /*
     * The integer amount of days after which models should be deleted.
     *
     * It deletes all records after 1 week. Set to null if no models should be deleted.
     */
    'delete_after_days' => 30,
];
