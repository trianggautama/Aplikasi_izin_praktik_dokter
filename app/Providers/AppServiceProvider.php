<?php

namespace App\Providers;

use App\Models\Inbox;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

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
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');

        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $inboxCount = Inbox::whereBiodataDiriId(Auth::user()->biodata_diri->id)->whereIsRead(0)->get()->count();

                $view->with('inboxCount', $inboxCount);
            }

        });

    }
}
