<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeded extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Setting::create([
            'site_name'=>'Developers Blog',
            'address'=> 'Yaba, Lagos',
            'contact_number'=>'+2348136017579',
            'contact_email'=>'info@devblog.com'
         ]);
    }
}
