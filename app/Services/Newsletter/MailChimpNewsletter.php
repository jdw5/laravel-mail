<?php

namespace App\Services\Newsletter;

use Mailchimp;
use App\Services\Newsletter\Contracts\NewsletterContract;

class MailChimpNewsletter implements NewsletterContract
{
    protected $client;

    public function __construct(Mailchimp $client)
    {
        $this->client = $client;
    }
    public function subscribe($listId, $email, $mergeVars = [])
    {
        try {
            $this->client->lists->subscribe($listId, [
                'email' => $email
            ], $mergeVars);
        }
        catch (MailChimpListAlreadySubscribed $e) {

        }
    }
}