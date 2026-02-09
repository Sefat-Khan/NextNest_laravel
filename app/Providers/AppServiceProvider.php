<?php

namespace App\Providers;

use App\Models\AllInfo;
use App\Models\Fevicon;
use App\Models\Offer;
use App\Models\Scholarship;
use App\Models\University;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with([
                'studyInfo' => AllInfo::all(),
                'europeStudy' => AllInfo::where('tag', 'Europe')->get(),
                'offersData' => Offer::where('status', 'active')->latest()->first(),
                'universityCount' => University::count(),
                'scholarshipCount' => Scholarship::count(),
                'recentUniversities' => University::latest()->take(5)->get(),
                'recentScholarships' => Scholarship::with('university')
                                    ->latest()
                                    ->take(5)
                                    ->get(),
                'fevicon' => Fevicon::latest()->first(),
            ]);
        });
    }
}
