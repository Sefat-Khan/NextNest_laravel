<?php

use App\Http\Controllers\AllInfoController;
use App\Http\Controllers\ContactEnquiryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\FeviconController;
use App\Http\Controllers\SearchController;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function() {
    return View('pages.about');
})->name('about');

Route::get('/study_destination', function() {
    return View('pages.study_destination');
})->name('study_destination');

Route::get('/work_permit', function() {
    return View('pages.work_permit');
})->name('work_permit');

Route::get('/tour_package', function() {
    return View('pages.tour_package');
})->name('tour_package');

Route::get('/english_test', function() {
    return View('pages.english_test');
})->name('english_test');

Route::get('/university_pathway', function() {
    return View('pages.university_pathway');
})->name('university_pathway');

Route::get('/success_stories', function() {
    return View('pages.success_stories');
})->name('success_stories');

Route::get('/contact', function() {
    return View('pages.contact');
})->name('contact');

Route::get('/our_campus', function() {
    return View('pages.our_campus');
})->name('our_campus');

Route::get('/visa_consulting', function() {
    return View('pages.visa_consulting');
})->name('visa_consulting');

Route::get('/immigration', function() {
    return View('pages.immigration');
})->name('immigration');

Route::get('/visa_success', function() {
    return View('pages.visa_success');
})->name('visa_success');

Route::get('/our_students', function() {
    return View('pages.our_students');
})->name('our_students');

Route::get('/study/{slug}', [StudyController::class, 'show'])->name('study');

Route::post('/contact-submit', [ContactEnquiryController::class, 'store'])
    ->name('contactSubmit');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return auth()->user()->isAdmin()
            ? redirect()->route('admin.dashboard')
            : redirect()->route('user.dashboard');
    })->name('dashboard');

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->middleware('admin')->name('admin.dashboard');

    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');


Route::get('/admin/all_info', [AllInfoController::class, 'index'])->name('allInfoIndex');
Route::get('/admin/all_info/create', [AllInfoController::class, 'create'])->name('allInfoCreate');
Route::post('/admin/all_info/store', [AllInfoController::class, 'store'])->name('allInfoStore');
Route::get('/admin/all_info/{id}/preview', [AllInfoController::class, 'preview'])->name('allInfoPreview');
Route::get('/admin/all_info/{id}/edit', [AllInfoController::class, 'edit'])->name('allInfoEdit');
Route::put('/admin/all_info/{id}', [AllInfoController::class, 'update'])->name('allInfoUpdate');
Route::delete('/admin/all_info/{id}', [AllInfoController::class, 'destroy'])->name('allInfoDestroy');

Route::get('/universities', function (Request $request) {
    $tag = strtolower(trim($request->query('tag', '')));

    $universities = University::when($tag, function ($q) use ($tag) {
        $q->whereRaw('LOWER(tag) LIKE ?', ['%' . $tag . '%']);
    })->get();

    return response()->json($universities);
});

Route::get('/scholarships-by-universities', function (Request $request) {
    $universityIds = $request->query('universities', []);

    if (empty($universityIds)) {
        return response()->json([]);
    }

    $scholarships = \App\Models\Scholarship::whereIn('university_id', $universityIds)
        ->where('status', 'active')
        ->get();

    return response()->json($scholarships);
});

Route::get('/admin/university', [UniversityController::class, 'index'])->name('universityIndex');
Route::get('/admin/university/create', [UniversityController::class, 'create'])->name('universityCreate');
Route::post('/admin/university/store', [UniversityController::class, 'store'])->name('universityStore');
Route::get('/admin/university/{id}/preview', [UniversityController::class, 'preview'])->name('universityPreview');
Route::get('/admin/university/{id}/edit', [UniversityController::class, 'edit'])->name('universityEdit');
Route::put('/admin/university/{id}', [UniversityController::class, 'update'])->name('universityUpdate');
Route::delete('/admin/university/{id}', [UniversityController::class, 'destroy'])->name('universityDestroy');

Route::get('/admin/scholarship', [ScholarshipController::class, 'index'])->name('scholarshipIndex');
Route::get('/admin/scholarship/create', [ScholarshipController::class, 'create'])->name('scholarshipCreate');
Route::post('/admin/scholarship/store', [ScholarshipController::class, 'store'])->name('scholarshipStore');
Route::get('/admin/scholarship/{id}/preview', [ScholarshipController::class, 'preview'])->name('scholarshipPreview');
Route::get('/admin/scholarship/{id}/edit', [ScholarshipController::class, 'edit'])->name('scholarshipEdit');
Route::put('/admin/scholarship/{id}', [ScholarshipController::class, 'update'])->name('scholarshipUpdate');
Route::delete('/admin/scholarship/{id}', [ScholarshipController::class, 'destroy'])->name('scholarshipDestroy');


Route::get('/admin/offer', [OfferController::class, 'index'])->name('offerIndex');
Route::get('/admin/offer/create', [OfferController::class, 'create'])->name('offerCreate');
Route::post('/admin/offer/store', [OfferController::class, 'store'])->name('offerStore');
Route::get('/admin/offer/{id}/preview', [OfferController::class, 'preview'])->name('offerPreview');
Route::get('/admin/offer/{id}/edit', [OfferController::class, 'edit'])->name('offerEdit');
Route::put('/admin/offer/{id}', [OfferController::class, 'update'])->name('offerUpdate');
Route::delete('/admin/offer/{id}', [OfferController::class, 'destroy'])->name('offerDestroy');

Route::get('/admin/fevicon', [FeviconController::class, 'index'])->name('feviconIndex');
Route::post('/admin/fevicon/store', [FeviconController::class, 'store'])->name('feviconStore');


Route::get('/admin/contact', [ContactEnquiryController::class, 'index'])
    ->name('contactIndex');

Route::get('/admin/contact/{id}', [ContactEnquiryController::class, 'show'])
    ->name('contactPreview');

Route::get('/admin/contact/{id}/edit', [ContactEnquiryController::class, 'edit'])->name('contactEdit');

Route::put('/admin/contact/{id}', [ContactEnquiryController::class, 'update'])
    ->name('contactUpdate');

Route::delete('/admin/contact/{id}', [ContactEnquiryController::class, 'destroy'])
    ->name('contactDestroy');


});


Route::get('/search', [\App\Http\Controllers\SearchController::class, 'search'])
    ->name('global.search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
