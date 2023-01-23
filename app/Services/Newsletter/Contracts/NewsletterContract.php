<?php 

namespace App\Services\Newsletter\Contracts;

interface NewsletterContract
{
    public function subscribe($list, $email, $mergeVars = []);
    
}