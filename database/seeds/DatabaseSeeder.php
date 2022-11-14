<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call('EmailtemplateSeeder');
        $this->call('UserSeeder');
        $this->call('LanguageSeeder');
        $this->call('PageSeeder');
        $this->call('BlogSeeder');
        $this->call('MenuSeeder');
        $this->call('ContactSeeder');
        $this->call('ActivationsSeeder');
        $this->call('LanguagesSeeder');
        $this->call('SiteSettingsSeeder');
        $this->call('PagesSeeder');
        $this->call('PackagesSeeder');
        $this->call('HotelsSeeder');
        $this->call('SubscriberSeeder');

        $this->command->info('Admin User created with username admin@admin.com and password admin0101');
    }
}
