<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WebsiteSetting;

use Illuminate\Support\Facades\Log;


class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        // Reset cached roles and permissions
        // app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // // Create users

        $settings = [
            [
                'header_image' => 'banner.png',
                'header_title' => 'Digital Thinkers Conference',
                'contact_form_email' => 'admin@sarep.com',
                'feedback_form_email' => 'admin@sarep.com',
            ],
        ];
        
        foreach($settings as $setting){
            WebsiteSetting::Create([
                'header_image' => $setting['header_image'],
                'header_title' => $setting['header_title'],
                'contact_form_email' => $setting['contact_form_email'],
                'feedback_form_email' => $setting['feedback_form_email'],
            ]);
        }

    }
}
