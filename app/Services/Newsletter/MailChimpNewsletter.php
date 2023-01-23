<?php

namespace App\Services\Newsletter;

use App\Services\Newsletter\Contracts\NewsletterContract;

class MailChimpNewsletter implements NewsletterContract
{
    public function subscribe($listId, $email, $mergeVars = [])
    {
        # code...
    }
}