<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use App\Models\GeneralSetting;
use App\Models\SocialSetting;
use App\Models\SeoSetting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['home', 'pages.about', 'pages.contact', 'pages.offers', 'pages.reservations', 'thankyou-offers', 'pages.thankyou-reservations', 'menu.all-categories', 'menu.single-menu', 'layouts.admin', 'layouts.landing-page', 'layouts.app'], function ($view) {
            $generalSettings = GeneralSetting::first();
            $socialSettings = SocialSetting::first();
            $seoSettings = SeoSetting::first();

            $settings = [
                'general' => $generalSettings,
                'social' => $socialSettings,
                'seo' => $seoSettings,
            ];

            $view->with('settings', $settings);
        });
    }
}
