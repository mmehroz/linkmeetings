<?php

namespace App\Providers;

use App\Models\BlogToCategories;
use App\Models\EmailTemplate;
use Illuminate\Support\ServiceProvider;
use App\Models\SiteSetting;
use App\Models\Languages;
use App\Models\Page;
use App\Models\PageDescription;
use App\Models\Menu;
use App\Models\Membership;
use App\Models\Package;
use App\Models\PackageDescription;
use App\Models\MenuDescription;
use App\Models\Repositories\SiteSettingRepository;
use View;
use helpers;

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
        view()->composer('*', function($view){
          $view->with('menu_description', $this->getmenu());
        });


        if (\Schema::hasTable('site_settings')){
            $site_setting = new SiteSettingRepository(new SiteSetting);
            View::share('site_setting', $site_setting->getByCol(1));
        }
        if (\Schema::hasTable('languages')){
            $languages = Languages::where('status','Active')->get();
            View::share('languages', $languages);
        }
        // if (\Schema::hasTable('menu_description')){
        //     $language_id = $this->getmenu();
        //     $menu_description = MenuDescription::where('language_id',$language_id)
        //     ->leftJoin('pages', 'menu_description.page_id', '=', 'pages.id')
        //     ->leftJoin('menu', 'menu_description.menu_id', '=', 'menu.id')
        //     ->where('section',1)
        //     ->where('status','Active')
        //     ->get();


        //     View::share('menu_description', $menu_description);
        // }

        if (\Schema::hasTable('menu_description')){
            if(getlanguage()) {
            $language_id = getlanguage()->id;
            $menu_description_quicklinks = MenuDescription::where('language_id',$language_id)
            ->leftJoin('pages', 'menu_description.page_id', '=', 'pages.id')
            ->leftJoin('menu', 'menu_description.menu_id', '=', 'menu.id')
            ->where('section',4)
            ->where('status','Active')
            ->get();

            View::share('menu_description_quicklinks', $menu_description_quicklinks);
        }}

        if (\Schema::hasTable('menu_description')){
            if(getlanguage()) {
            $language_id = getlanguage()->id;
            $menu_description_helps = MenuDescription::where('language_id',$language_id)
            ->leftJoin('pages', 'menu_description.page_id', '=', 'pages.id')
            ->leftJoin('menu', 'menu_description.menu_id', '=', 'menu.id')
            ->where('section',3)
            ->where('status','Active')
            ->get();

            View::share('menu_description_helps', $menu_description_helps);
        }}

        if (\Schema::hasTable('menu_description')){
          if(getlanguage()) {
            $language_id = getlanguage()->id;
            $menu_description_partnerwithus = MenuDescription::where('language_id',$language_id)
            ->leftJoin('pages', 'menu_description.page_id', '=', 'pages.id')
            ->leftJoin('menu', 'menu_description.menu_id', '=', 'menu.id')
            ->where('section',5)
            ->where('status','Active')
            ->get();

            View::share('menu_description_partnerwithus', $menu_description_partnerwithus);
        }}

        if (\Schema::hasTable('membership')){
                if(getlanguage()) {
                        $language_id = getlanguage()->id;

                            $hotel_user_dashboard_details = Membership::
                                leftJoin('packages_description', 'membership.package_id', '=', 'packages_description.package_id')
                                ->leftJoin('users', 'membership.user_id', '=', 'users.id')
                                ->where('users.account_type','hotel')
                                ->where('language_id',$language_id)
                                ->first();

                View::share('hotel_user_dashboard_details', $hotel_user_dashboard_details);
            }}

        if (\Schema::hasTable('membership')){
            if(getlanguage()) {
                $language_id = getlanguage()->id;

                $dmc_user_dashboard_details = Membership::
                leftJoin('packages_description', 'membership.package_id', '=', 'packages_description.package_id')
                    ->leftJoin('users', 'membership.user_id', '=', 'users.id')
                    ->where('users.account_type','dmc')
                    ->where('language_id',$language_id)
                    ->first();

                View::share('dmc_user_dashboard_details', $dmc_user_dashboard_details);
            }}

        }


   public function getmenu(){
        $language_id = getlanguage()->id;
        $menu_description = MenuDescription::where('language_id',$language_id)
        ->leftJoin('pages', 'menu_description.page_id', '=', 'pages.id')
        ->leftJoin('menu', 'menu_description.menu_id', '=', 'menu.id')
        ->where('section',1)
        ->where('status','Active')
        ->get();

        return $menu_description;
    }
}
