<?php

namespace  App\Handler;

use Illuminate\Http\Request;
use Spatie\WebhookClient\Exceptions\InvalidConfig;
use Spatie\WebhookClient\SignatureValidator\SignatureValidator;
use Spatie\WebhookClient\WebhookConfig;

class ClockifySignatureValidator implements SignatureValidator
{

    public function isValid(Request $request, WebhookConfig $config): bool
    {
//        return true;
        $signature = $request->header($config->signatureHeaderName);
        if (! $signature) {
            return false;
        }
        return true;
//        $signature = trim(str_replace("sha1=", "", $signature));
//        $signingSecret = $config->signingSecret;
//
//        if (empty($signingSecret)) {
//            throw InvalidConfig::signingSecretNotSet();
//        }
//        $computedSignature = hash_hmac('sha1', $request->getContent(), $signingSecret);
//        return hash_equals($signature, $computedSignature);
    }
}
