<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sponsor;

use Illuminate\Support\Facades\Log;


class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        // Reset cached roles and permissions
        // app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // // Create users

        $sponsors = [
            [
                'name' => 'Sponsor_1',
                'image' => '1727603874.png',
            ],
            [
                'name' => 'Sponsor_2',
                'image' => '1727603889.png',
            ],
            [
                'name' => 'Sponsor_3',
                'image' => '1727603918.png',
            ],
            [
                'name' => 'Sponsor_4',
                'image' => '1727603929.png',
            ],
            [
                'name' => 'Sponsor_5',
                'image' => '1727603940.png',
            ],
            [
                'name' => 'Sponsor_6',
                'image' => '1727604198.png',
            ],
            [
                'name' => 'Sponsor_7',
                'image' => '1727604215.png',
            ],
            [
                'name' => 'Sponsor_8',
                'image' => '1727604224.png',
            ],
            [
                'name' => 'Sponsor_9',
                'image' => '1727604235.png',
            ],
            [
                'name' => 'Sponsor_10',
                'image' => '1727604245.png',
            ],
        ];
        
        foreach($sponsors as $sponsor){
            Sponsor::Create([
                'name' => $sponsor['name'],
                'image' => $sponsor['image'],
            ]);
        }

    }
}
