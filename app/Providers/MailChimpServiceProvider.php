<?php

namespace App\Providers;

use Mailchimp;
use App\Services\Newsletter\Contracts\NewsletterContract;
use App\Services\Newsletter\MailChimpNewsletter;
use Illuminate\Support\ServiceProvider;

class MailChimpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(NewsletterContract::class, function ($app) {
            $client = new Mailchimp($app->config->get('services.mailchimp.secret'));
            return new MailChimpNewsletter($client);
        });
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    
    }
}
