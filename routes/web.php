<?php

use Illuminate\Support\Facades\Route;

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
Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'FrontEnd\LanguageController@switchLang']);
Route::get('/signup', function () {
        return view('frontend.template.sign-up-as-meeting-planner');
    })->name('signup');

Route::model('page', 'App\Models\Page');

Route::get('/package/{id}/{type}', 'FrontEnd\RegistrationController@package')->name('get_package');
Route::post('/package/{id}/{type}', 'FrontEnd\RegistrationController@addUser')->name('post_package');
Route::post('/customer/register', 'FrontEnd\RegistrationController@addCustomer')->name('customer_register');

Route::get('/', 'FrontEnd\PageController@index')->name('home');
Route::get('/hotel-detail/{slug}', 'Hotel\HotelController@details')->name('hotel_detail');

// Gmail Login Routes - Mehroz Update 08 September 2020
Route::get('/auth/redirect/{provider}', 'GoogleLoginController@redirect');
Route::get('/callback/{provider}', 'GoogleLoginController@callback');

// Facebool Login Routes - Mehroz Update 08 September 2020
Route::get('/redirect/facebook', 'SocialAuthFacebookController@redirect');
Route::get('/callback/facebook', 'SocialAuthFacebookController@callback');

// forget password - Mehroz Update 08 September 2020
Route::get('/sendforgetpasswordemail/{email}', 'ForgetPasswordController@sendforgetpasswordemail');
Route::get('/forget/{token}', 'ForgetPasswordController@forget');
Route::any('/reset_submit', 'ForgetPasswordController@reset_submit');

//hotel user
Route::group(['prefix' => 'hotel','middleware' => 'roles'], function() {

    Route::get('/dashboard', function () {
        return view('hotel.dashboard');
    })->name('hotel_dashboard');

    Route::get('/booking/inquries', function () {
        return view('hotel.dashboard');
    })->name('hotel_booking_inquiries');

    Route::get('/booking/proposal/sent', function () {
        return view('hotel.dashboard');
    })->name('hotel_booking_proposal_sent');

    Route::get('/booking/pending', function () {
        return view('hotel.dashboard');
    })->name('hotel_pending');

    Route::get('/booking/confirmed', function () {
        return view('hotel.dashboard');
    })->name('hotel_confirmed');

    Route::get('/booking/cancelled', function () {
        return view('hotel.dashboard');
    })->name('hotel_cancelled');

    Route::get('/hotel', function () {
        return view('hotel.dashboard');
    })->name('hotel_hotel');

});

//hotel dmc
Route::group(['prefix' => 'dmc','middleware' => 'roles'], function() {

    Route::get('/dashboard', function () {
        return view('dmc.dashboard');
    })->name('dmc_dashboard');

    Route::get('/dmc/list', 'DMC\DMCController@index')->name('dmc_dmc');
    Route::get('/add/dmc', 'DMC\DMCController@add')->name('add_dmc');
    Route::post('/add/dmc', 'DMC\DMCController@Addprocess')->name('post_dmc');
    Route::get('/edit/dmc/{id}', 'DMC\DMCController@edit')->name('get_edit');
    Route::post('/edit/dmc/{id}', 'DMC\DMCController@editProcess')->name('post_edit');
    Route::get('/delete/dmc/{id}}', 'DMC\DMCController@delete')->name('dmc_delete');
    // Route::get('/add/dmc', 'DMC\DMCController@index')->name('edit_dmc');
    // Route::post('/add/dmc', 'DMC\DMCController@index')->name('post_edit_dmc');
    // Route::get('/add/dmc', 'DMC\DMCController@index')->name('delete_dmc');
    // Route::get('/add/dmc', 'DMC\DMCController@index')->name('account_dmc');

});
// Mehroz - DMC 23-September-2020 Start
Route::get('account_settings', 'Admin\UserManagementController@accountsetting')->name('account_settings');
Route::post('update', 'Admin\UserManagementController@updatedmchoteluser')->name('account_info_update');
// Mehroz - DMC 23-September-2020 End

// Mehroz - User Profile 18-September 2020 Start
// Route::group(['prefix' => 'customer','middleware' => 'roles'], function() {
Route::get('/account-info', 'Customer\CustomerController@index')->name('customer_account_setting');
Route::post('customer/create', 'Customer\CustomerController@add')->name('customer_account_info_add');
Route::get('/account-info-edit', 'Customer\CustomerController@edit')->name('customer_account-info-edit');
Route::post('customer/update', 'Customer\CustomerController@update')->name('customer_account_info_update');
Route::get('/sent-rfp-acc', 'Customer\CustomerController@sentrfp')->name('customer_sent-rfp-acc');
Route::get('/sent-rfp-acc-detail', 'Customer\CustomerController@sentrfpdetails')->name('customer_sent-rfp-acc-detail');
Route::get('/saved-venues', 'Customer\CustomerController@savedvenues')->name('customer_saved-venues');
Route::get('/saved-rfp', 'Customer\CustomerController@savedrfp')->name('customer_saved-rfp');
Route::get('/received-proposals', 'Customer\CustomerController@receivedproposals')->name('customer_received-proposals');
Route::get('/received-proposals-detail', 'Customer\CustomerController@receivedproposalsdetail')->name('customer_received-proposals-detail');
// });
// Mehroz - User Profile 18-September 2020 End

Route::get('ban', 'Admin\UserManagementController@banUser')->name('admin_ban_user');


Route::get('/list-your-venue', function () {
    return view('page.list-your-venue');
});

Route::get('/list-your-venue-detail', function () {
    return view('page.list-your-venue-detail');
});

Route::get('/list-your-hotel-detail', function () {
    return view('page.list-your-hotel-detail');
});

Route::get('/list-your-dmc-detail', function () {
    return view('page.list-your-dmc-detail');
});

Route::get('/hotel-detail', function () {
    return view('page.hotel-detail');
});

Route::get('/blog-detail', 'Admin\BlogController@blogviewforfront');
Route::get('/blog', 'Admin\BlogController@blogviewforfront');
Route::get('/blog-detail/{slug}', 'Admin\BlogController@blogdetailsforfront');

//Route::get('/blog-detail', function () {
//    return view('page.blog-detail');
//});

Route::get('/booking-confirmed', function () {
    return view('user.booking-confirmed');
});

Route::get('/booking-canceled', function () {
    return view('user.booking-concelled');
});

Route::get('/booking-proposal-sent', function () {
    return view('user.booking-proposal-sent');
});

Route::get('/booking-pending', function () {
    return view('user.booking-pending');
});

Route::get('/booking-inquries', function () {
    return view('user.booking-inquries');
});

// Route::get('/user-management', function () {
//     return view('user.user-management');
// });

Route::get('/user-detail', function () {
    return view('user.user-detail');
});

// Route::get('/manage-hotels', function () {
//     return view('user.manage-hotels');
// });


Route::get('/add-hotel', 'Hotel\HotelController@add')->name('add_hotel_view')->middleware('roles');
Route::post('/add-hotel', 'Hotel\HotelController@addProcess')->name('add_hotel_process')->middleware('roles');
Route::get('/edit-hotel/{id}', 'Hotel\HotelController@edit')->name('edit_hotel_view')->middleware('roles');
Route::post('/edit-hotel/{id}', 'Hotel\HotelController@editProcess')->name('edit_hotel_process')->middleware('roles');
Route::post('/hotel-gallery/{id?}/{type?}', 'Hotel\HotelController@uploadHotelGallery')->name('hotel-gallery')->middleware('roles');
Route::post('/delete-hotel-gallery/{id?}/{type?}', 'Hotel\HotelController@removeHotelFiles')->name('delete-hotel-gallery')->middleware('roles');
Route::get('/delete-hotel/{id}', 'Hotel\HotelController@delete')->name('delete_hotel')->middleware('roles');
Route::get('/manage-hotels', 'Hotel\HotelController@HotelsList')->name('manage_hotels')->middleware('roles');

// Route::get('/manage-hotels-detail', function () {
//     return view('user.manage-hotels-detail');
// })->name('manage_hotels');

Route::get('/send-rfp-preview', function () {
    return view('user.send-rfp-preview');
});

Route::get('/booking-inquries-detail', function () {
    return view('user.booking-inquries-detail');
});

Route::get('/send-rfp', function () {
    return view('user.send-rfp');
});

Route::get('/sent-rfp', function () {
    return view('user.sent-rfp');
});

Route::get('/sent-rfp-client', function () {
    return view('user.sent-rfp-client');
});

Route::get('/manage-ads', function () {
    return view('user.manage-ads');
});

Route::get('/create-an-ad', function () {
    return view('user.create-an-ad');
});

Route::get('/create-banner-ad', function () {
    return view('user.create-banner-ad');
});

Route::get('/create-banner-ad-step', function () {
    return view('user.create-banner-ad-step');
});

Route::get('/create-banner-ad-pay', function () {
    return view('user.create-banner-ad-pay');
});

Route::get('/create-hot-deal', function () {
    return view('user.create-hot-deal');
});

Route::get('/create-hot-deal-pay', function () {
    return view('user.create-hot-deal-pay');
});


// Route::get('/dmc/dashboard', function () {
//     return view('dmc.dashboard');
// });

Route::get('/dmc/booking-confirmed', function () {
    return view('dmc.booking-confirmed');
});

Route::get('/dmc/booking-canceled', function () {
    return view('dmc.booking-concelled');
});

Route::get('/dmc/booking-proposal-sent', function () {
    return view('dmc.booking-proposal-sent');
});

Route::get('/dmc/booking-pending', function () {
    return view('dmc.booking-pending');
});

Route::get('/dmc/booking-inquries', function () {
    return view('dmc.booking-inquries');
});

Route::get('/dmc/booking-inquries-detail', function () {
    return view('dmc.booking-inqurie-detail');
});

Route::get('/dmc/send-rfp', function () {
    return view('dmc.send-rfp');
});

Route::get('/dmc/send-rfp-preview', function () {
    return view('dmc.send-rfp-preview');
});

Route::get('/dmc/sent-rfp', function () {
    return view('dmc.sent-rfp');
});

Route::get('/dmc/sent-rfp-client', function () {
    return view('dmc.sent-rfp-client');
});


Route::get('/dmc/manage-ads', function () {
    return view('dmc.manage-ads');
});

Route::get('/dmc/create-an-ad', function () {
    return view('dmc.create-an-ad');
});

Route::get('/dmc/create-banner-ad', function () {
    return view('dmc.create-banner-ad');
});

Route::get('/dmc/create-banner-ad-step', function () {
    return view('dmc.create-banner-ad-step');
});

Route::get('/dmc/create-banner-ad-pay', function () {
    return view('dmc.create-banner-ad-pay');
});

Route::get('/dmc/create-hot-deal', function () {
    return view('dmc.create-hot-deal');
});

Route::get('/dmc/create-hot-deal-pay', function () {
    return view('dmc.create-hot-deal-pay');
});

Route::get('/dmc/dmc', function () {
    return view('dmc.dmc');
});

// Route::get('/dmc/add-dmc', function () {
//     return view('dmc.add-dmc');
// });

//Route::get('/payments', function () {
//    return view('user.payments');
//});

Route::get('/activities', function () {
    return view('user.activities');
});

Route::get('/account-setting', function () {
    return view('user.account-setting');
});

// Route::get('/cookie-policy', function () {
//     return view('page.cookie-policy');
// });

// Route::get('/privacy-policy', function () {
//     return view('frontend.template.privacy-policy');
// });

// Route::get('/faqs', function () {
//     return view('frontend.template.faq');
// });

Route::get('/dmc', function () {
    return view('page.dmc');
});

// Route::get('/terms-conditions', function () {
//     return view('frontend.template.terms');
// });
// Route::get('/edit', function () {
//     return view('admin.page.edit');
// });
// Route::get('/editb', function () {
//     return view('admin.blog.edit');
// });

//Contact Routes Hamza
Route::post('contact_post', 'Admin\ContactController@addProcess')->name('contact_post');
//Subscriber Routes Hamza
Route::post('subscriber_post', 'Admin\SubscriberController@addProcess')->name('subscriber_post');



Route::get('login', 'AuthController@getSignin')->name('login');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::post('login', 'AuthController@postSignin')->name('login_post');

Route::group(['prefix' => 'admin','middleware' => 'roles'], function()
{
    //Dashboard
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    //Page
    Route::get('pages', 'Admin\PageController@index')->name('admin_pages');
    Route::get('pages/data', 'Admin\PageController@getData')->name('admin_pages_data');
    Route::get('page/create', 'Admin\PageController@add')->name('admin_page_add');
    Route::post('page/create', 'Admin\PageController@addProcess')->name('admin_page_add_post');
    Route::get('page/edit/{id}', 'Admin\PageController@edit')->name('admin_page_update');
    Route::post('page/{id}', 'Admin\PageController@editProcess')->name('admin_page_update_post');
    Route::get('page/delete/{id}', 'Admin\PageController@delete')->name('admin_page_delete');

    //Menu
    Route::get('menus', 'Admin\MenuController@index')->name('admin_menus');
    Route::get('menus/data', 'Admin\MenuController@getData')->name('admin_menus_data');
    Route::get('menu/create', 'Admin\MenuController@add')->name('admin_menu_add');
    Route::post('menu/create', 'Admin\MenuController@addProcess')->name('admin_menu_add_post');
    Route::get('menu/edit/{id}', 'Admin\MenuController@edit')->name('admin_menu_update');
    Route::post('menu/{id}', 'Admin\MenuController@editProcess')->name('admin_menu_update_post');
    Route::get('menu/delete/{id}', 'Admin\MenuController@delete')->name('admin_menu_delete');

    //Blog
    Route::get('blogs', 'Admin\BlogController@index')->name('admin_blogs');
    Route::get('blogs/data', 'Admin\BlogController@getData')->name('admin_blogs_data');
    Route::get('blog/create', 'Admin\BlogController@add')->name('admin_blog_add');
    Route::post('blog/create', 'Admin\BlogController@addProcess')->name('admin_blog_add_post');
    Route::get('blog/edit/{id}', 'Admin\BlogController@edit')->name('admin_blog_update');
    Route::post('blog/{id}', 'Admin\BlogController@editProcess')->name('admin_blog_update_post');
    Route::get('blog/delete/{id}', 'Admin\BlogController@delete')->name('admin_blog_delete');

    //BlogCategory
    Route::get('blogscategory', 'Admin\BlogCategoryController@index')->name('admin_blogscategory');
    Route::get('blogscategory/data', 'Admin\BlogCategoryController@getData')->name('admin_blogscategory_data');
    Route::get('blogcategory/create', 'Admin\BlogCategoryController@add')->name('admin_blogcategory_add');
    Route::post('blogcategory/create', 'Admin\BlogCategoryController@addProcess')->name('admin_blogcategory_add_post');
    Route::get('blogcategory/edit/{id}', 'Admin\BlogCategoryController@edit')->name('admin_blogcategory_update');
    Route::post('blogcategory/{id}', 'Admin\BlogCategoryController@editProcess')->name('admin_blogcategory_update_post');
    Route::get('blogcategory/delete/{id}', 'Admin\BlogCategoryController@delete')->name('admin_blogcategory_delete');
    // Faq - Mehroz 15 September 2020 Start
    Route::get('faqcategory', 'Admin\FaqCategoryController@index')->name('admin_faqcategory');
    Route::get('faqcategory/create', 'Admin\FaqCategoryController@add')->name('admin_faqcategory_add');
    Route::get('faqscategory/data', 'Admin\FaqCategoryController@getData')->name('admin_faqscategory_data');
    Route::post('faqcategory/create', 'Admin\FaqCategoryController@addProcess')->name('admin_faqcategory_add_post');
    Route::get('faqcategory/edit/{id}', 'Admin\FaqCategoryController@edit')->name('admin_faqcategory_update');
    Route::post('faqcategory/{id}', 'Admin\FaqCategoryController@editProcess')->name('admin_faqcategory_update_post');
    Route::get('faqcategory/delete/{id}', 'Admin\FaqCategoryController@delete')->name('admin_faqcategory_delete');

    Route::get('faq', 'Admin\FaqController@index')->name('admin_faq');
    Route::get('faq/create', 'Admin\FaqController@add')->name('admin_faq_add');
    Route::get('faq/data', 'Admin\FaqController@getData')->name('admin_faq_data');
    Route::post('faq/create', 'Admin\FaqController@addProcess')->name('admin_faq_add_post');
    Route::get('faq/edit/{id}', 'Admin\FaqController@edit')->name('admin_faq_update');
    Route::post('faq/{id}', 'Admin\FaqController@editProcess')->name('admin_faq_update_post');
    Route::get('faq/delete/{id}', 'Admin\FaqController@delete')->name('admin_faq_delete');
    // Faq - Mehroz 15 September 2020 End

    // Email Template - 17 September 2020 Start 
    Route::get('emaillist', 'Admin\EmailTemplateController@index')->name('admin_email_list');
    Route::get('email/data', 'Admin\EmailTemplateController@getData')->name('admin_email_data');
    Route::get('email/edit/{id}', 'Admin\EmailTemplateController@edit')->name('admin_email_update');
    Route::post('email/{id}', 'Admin\EmailTemplateController@editProcess')->name('admin_email_update_post');
    // Email Template - 17 September 2020 Start

    //Menu
    Route::get('packages', 'Admin\PackageController@index')->name('admin_packages');
    Route::get('packages/data', 'Admin\PackageController@getData')->name('admin_packages_data');
    Route::get('package/create', 'Admin\PackageController@add')->name('admin_package_add');
    Route::post('package/create', 'Admin\PackageController@addProcess')->name('admin_package_add_post');
    Route::get('package/edit/{id}', 'Admin\PackageController@edit')->name('admin_package_update');
    Route::post('package/{id}', 'Admin\PackageController@editProcess')->name('admin_package_update_post');
    Route::get('package/delete/{id}', 'Admin\PackageController@delete')->name('admin_package_delete');

    Route::get('manage/users', 'Admin\UserManagementController@index')->name('admin_manage_users');
    Route::get('manage/users/data', 'Admin\UserManagementController@getData')->name('admin_manage_users_list');
    Route::post('manage/user/add/', 'Admin\UserManagementController@addUserAdmin')->name('admin_add_user');
    // Route::post('/package/{id}/{type}', 'FrontEnd\RegistrationController@addUser')->name('post_package');
    Route::get('manage/user/edit/{id}', 'Admin\UserManagementController@edit')->name('admin_edit_user');
    Route::post('manage/user/edit/{id}', 'Admin\UserManagementController@update')->name('admin_post_edit_user');
    Route::get('manage/user/delete/{id}', 'Admin\UserManagementController@delete')->name('admin_delete_user');
    // Route::get('packages/data', 'Admin\PackageController@getData')->name('admin_packages_data');
    // Route::get('package/create', 'Admin\PackageController@add')->name('admin_package_add');
    // Route::post('package/create', 'Admin\PackageController@addProcess')->name('admin_package_add_post');
    // Route::get('package/edit/{id}', 'Admin\PackageController@edit')->name('admin_package_update');
    // Route::post('package/{id}', 'Admin\PackageController@editProcess')->name('admin_package_update_post');
    // Route::get('package/delete/{id}', 'Admin\PackageController@delete')->name('admin_package_delete');

    //Contact Hamza
    Route::get('contacts', 'Admin\ContactController@index')->name('admin_contacts');
    Route::get('contacts/data', 'Admin\ContactController@getData')->name('admin_contacts_data');

    //subscriber Hamza
    Route::get('subscribers', 'Admin\SubscriberController@index')->name('admin_subscribers');
    Route::get('subscribers/data', 'Admin\SubscriberController@getData')->name('admin_subscribers_data');

    // activation

    Route::get('member/{id}', 'Admin\UserManagementController@member')->name('admin_user_profile');

    Route::get('ban/{id}/{type}', 'Admin\UserManagementController@banUser')->name('admin_ban_user');

    //payment Hamza
    Route::get('payments', 'Admin\UserManagementController@getpaymentlist')->name('admin_payments');
    Route::get('getpayemtData', 'Admin\UserManagementController@getpayemtData')->name('admin_payments_data');
    Route::get('payment/edit/{id}', 'Admin\UserManagementController@edit')->name('admin_payment_update');

    Route::get('members', function () {
        return view('admin.members');
    })->name('admin_members');

    Route::get('disputes', function () {
        return view('admin.disputes');
    })->name('admin_disputes');

    Route::get('form-request', function () {
        return view('admin.form-request');
    })->name('admin_form_requests');

    Route::get('listed-items', function () {
        return view('admin.listed-items');
    })->name('admin_listed_items');

//    Route::get('payments', function () {
//        return view('admin.payments.payments');
//    })->name('admin_payments');

    Route::get('orders-for-sale', function () {
        return view('admin.orders');
    })->name('admin_orders');

    Route::get('orders-won-auctions', function () {
        return view('admin.won-auctions');
    })->name('admin_won_auctions');

    Route::get('shipping-request', function () {
        return view('admin.shipping-request');
    })->name('admin_shipping_requests');

    Route::get('my-account', function () {
        return view('admin.my-account');
    })->name('admin_my_account');

    Route::get('create-a-deal', function () {
        return view('admin.create-a-deal');
    })->name('admin_create_deal');


    Route::get('buyer-profile', function () {
        return view('admin.buyer-profile');
    })->name('admin_buyer_profile');


    Route::get('disputes-2', function () {
        return view('admin.disputes-2');
    })->name('admin_disputes2');

    Route::get('disputes-finished-2', function () {
        return view('admin.disputes-finished-2');
    })->name('admin_disputes_finished2');

    Route::get('listed-items-2', function () {
        return view('admin.listed-items-2');
    })->name('admin_listed_items2');

    Route::get('listed-items-auctions-2', function () {
        return view('admin.listed-items-auctions-2');
    })->name('admin_listed_items_auction2');

    Route::get('orders-2', function () {
        return view('admin.orders-2');
    })->name('admin_orders2');

    Route::get('won-auctions-2', function () {
        return view('admin.won-auctions-2');
    })->name('admin_won_auctions2');

    Route::get('site_settings', 'Admin\SiteSettingController@index')->name('site_settings');
    Route::post('site_settings', 'Admin\SiteSettingController@process')->name('site_settings_update');
});

//AccessForbidden Page
Route::get('access_denied', function () {
    return view('error.access_forbidden');
})->name('access_denied');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['roles']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/{name?}', 'FrontEnd\PageController@page')->name('page_view');