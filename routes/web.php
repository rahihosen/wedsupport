<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UsersubscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('pages.index');
// })->name("index");

Route::get('/', [HomeController::class, 'index'])->name('index');


//Rabiul_Code
Route::get('link', function(){
   Artisan::call('storage:link'); 
});



// Route::get('/information', function ()
// {
//     return view('information');
// })->name('information');
Route::get('error', function () {
    return view('error');
});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route::get('/',[HomeController::class,'index']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/redirects',[HomeController::class,'redirects'])->name('redirects');

Route::middleware(['auth:sanctum', 'verified'])->get('/redirects', [HomeController::class, 'redirects'])->name('redirects');

// Route::get('/redirects',[HomeController::class,'redirects'])->name('redirects');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');




//admin
 //Route::get('/users', [AdminController::class, 'user'])->name('users');
 Route::middleware(['auth:sanctum', 'verified'])->get('/redirects', [HomeController::class, 'redirects'])->name('redirects');
// Route::get('/users', function () {
//     return view('auth.adminLogin');
// })->name('adminLogin');


// Route::post('/adminpage', [AdminController::class, 'AdminLogin'])->name('admin.login');


Route::delete('/deleteuser/{id}', [AdminController::class, 'deleteuser'])->name('deleteuser');
Route::get('/changeStatus', [AdminController::class, 'deleteuser'])->name('changeStatus');

Route::get('/member_request', [AdminController::class, 'memberRequest'])->name('member.request');
Route::post('/member_approved/{id}', [AdminController::class, 'memberApproved'])->name('member.approved');

Route::post('/member_create_by_admin/{id}', [AdminController::class, 'memberCreate'])->name('member.create.admin');
//admin end
Route::get('/upgrade', function () {
    return view('pages.upgrade');
})->name('upgrade');

Route::post('/subscription', [UsersubscriptionController::class, 'store'])->name('subscription.store');

// Route::get('/information',[UserinfoController::class,'info'])->name('information');
// Route::get('/addinfo',[AddinfoController::class,'addInfo'])->name('addinfo');
// Route::post('/addinfo',[AddinfoController::class,'saveInfo'])->name('addinfo.store');
// Route::get('/updateinfo',[AddinfoController::class,'updateInfo'])->name('updateinfo');
// Route::post('/updateinfo',[AddinfoController::class,'saveInfo'])->name('addinfo.store');
// Route::get('/setting',[HomeController::class,'setting'])->name('setting');





Route::get('/information', [MemberController::class, 'info'])->name('information');
Route::get('/addinfo', [MemberController::class, 'addInfo'])->name('addinfo');
Route::post('/addinfo', [MemberController::class, 'saveInfo'])->name('addinfo.store');
Route::get('/updateinfo', [MemberController::class, 'updateInfo'])->name('updateinfo');
Route::post('/updateinfo', [MemberController::class, 'saveInfo'])->name('addinfo.store');
Route::get('/setting', [MemberController::class, 'setting'])->name('setting');
Route::get('/photos', [MemberController::class, 'photos'])->name('photos');
Route::post('/addImage', [MemberController::class, 'saveImage'])->name('addImage');
Route::get('/showprofile/{id}', [MemberController::class, 'showProfile'])->name('showprofile');


Route::post('/showPeopleuser', [MemberController::class, 'searchPeople'])->name('search.people');

// Route::get('/redirects',[MemberController::class,'showUser']);

Route::resource('block', BlockController::class);








// Route::post('/logged_in', [LoginController::class, 'authenticate']);
// Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// Route::get('login', function () {
//     return view('pages.login');
// })->name("login");

// Route::get('register', function () {
//     return view('pages.register');
// })->name("register");

Route::get('about', function () {
    return view('pages.about');
})->name("about");

Route::get('contact', function () {
    return view('pages.contact');
})->name("contact");

Route::get('testimonial', function () {
    return view('pages.testimonial');
})->name("testimonial");

// Route::get('female_members', function () {
//     return view('pages.female_members');
// })->name("female_members");

Route::get('male_members', function () {
    return view('pages.male_members');
})->name("male_members");

// Route::get('photo', function () {
//     return view('pages.photo');
// })->name("photo");

Route::get('email', function () {
    return view('pages.email');
})->name("email");

Route::get('password', function () {
    return view('pages.password');
})->name("password");

Route::get('forget_pass', function () {
    return view('pages.forget_pass');
})->name("forget_pass");

Route::get('billing', function () {
    return view('pages.billing');
})->name("billing");

Route::get('notification', function () {
    return view('pages.notification');
})->name("notification");

Route::get('profile_setting', function () {
    return view('pages.profile_setting');
})->name("profile_setting");

Route::get('switch_off', function () {
    return view('pages.switch_off');
})->name("switch_off");

Route::get('upgrade', function () {
    return view('pages.upgrade');
})->name("upgrade");

Route::get('join_free', function () {
    return view('pages.join_free');
})->name("join_free");

Route::get('payment', function () {
    return view('pages.payment');
})->name("payment");

Route::get('new', function () {
    return view('pages.new');
})->name("new");

Route::get('view_profile', function () {
    return view('pages.view_profile');
})->name("view_profile");

Route::get('edit_profile', function () {
    return view('pages.edit_profile');
})->name("edit_profile");

// Route::get('visitor', function () {
//     return view('pages.visitor');
// })->name("visitor");

Route::get('visitor_view_profile', function () {
    return view('pages.visitor_view_profile');
})->name("visitor_view_profile");

Route::get('faq', function () {
    return view('pages.faq');
})->name("faq");

Route::get('services', function () {
    return view('pages.services');
})->name("services");

Route::get('terms', function () {
    return view('pages.terms');
})->name("terms");

Route::get('privacy', function () {
    return view('pages.privacy');
})->name("privacy");


Route::get('navbar', function () {
    return view('pages.navbar');
})->name("navbar");

Route::get('billing', function () {
    return view('pages.billing');
})->name("billing");




Route::get('/addlike', [MemberController::class, 'addlike'])->name('addlike');

Route::get('/addfvrt', [MemberController::class, 'addfvrt'])->name('addfvrt');


Route::get('/likepage', [MemberController::class, 'likepage'])->name('likepage');
Route::get('/fvrtpage', [MemberController::class, 'fvrtpage'])->name('fvrtpage');
Route::get('/profileviewpage', [MemberController::class, 'profileviewpage'])->name('profileviewpage');
Route::get('/showlike/{id_staff}', [MemberController::class, 'showlike'])->name('showlike');
Route::get('/showfvrt/{id_staff}', [MemberController::class, 'showfvrt'])->name('showfvrt');



//redoan
Route::get('/addReview', [ReviewController::class, 'addReview'])->name('addReview');
Route::post('/addReview', [ReviewController::class, 'storeReview'])->name('addReview.store');

// nogod api 
Route::get('/nagad/callback', [NagadController::class,'callback'])->name('nagad.callback');


// Route::get('view_profile', function () {
//     return view('pages.view_profile');
// })->name("view_profile");
// Route::get('switch_off', function () {
//     return view('pages.switch_off');
// })->name("switch_off");
// Route::get('email', function () {
//     return view('pages.email');
// })->name("email");
// Route::get('password', function () {
//     return view('pages.password');
// })->name("password");
// Route::get('profile_setting', function () {
//     return view('pages.profile_setting');
// })->name("profile_setting");
