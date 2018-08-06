<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Karthick's Blog",
            'contact_email' => "karthiram165@gmail.com",
            'contact_number' => "8508458284"
        ]);
    }
}
