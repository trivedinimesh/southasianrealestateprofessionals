<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

use Illuminate\Support\Facades\Log;


class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        // Reset cached roles and permissions
        // app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // // Create users

        $plans = [
            [
                'name' => 'VIP',
                'price' => 100,
                'duration' => 365,
            ],
        ];
        
        foreach($plans as $plan){
            Plan::Create([
                'name' => $plan['name'],
                'price' => $plan['price'],
                'duration' => $plan['duration'],
            ]);
        }

    }
}
