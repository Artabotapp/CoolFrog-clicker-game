<?php

namespace Database\Seeders;

use App\Models\Mission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $missions = [
            ['name' => Mining', 'mission_type_id' => 1, 'image' => '/images/missions/1.png'],
            ['name' => 'Wallet Security', 'mission_type_id' => 1, 'image' => '/images/missions/2.png'],
            ['name' => 'Trading', 'mission_type_id' => 1, 'image' => '/images/missions/3.png'],
            ['name' => 'Community Building', 'mission_type_id' => 1, 'image' => '/images/missions/4.png'],
        ];

        foreach ($missions as $key => $mission) {
            \App\Models\Mission::updateOrCreate(['id' => $key + 1], ['id' => $key + 1, ...$mission]);
        }

        Mission::all()->each(function ($mission) {
            $mission->levels()->createMany([
                ['level' => 1, 'cost' => 100, 'production_per_hour' => 1],
                ['level' => 2, 'cost' => 200, 'production_per_hour' => 3],
                ['level' => 3, 'cost' => 300, 'production_per_hour' => 7],
                ['level' => 4, 'cost' => 400, 'production_per_hour' => 9],
                ['level' => 5, 'cost' => 500, 'production_per_hour' => 12],
                ['level' => 6, 'cost' => 600, 'production_per_hour' => 17],
                ['level' => 7, 'cost' => 700, 'production_per_hour' => 20],
                ['level' => 8, 'cost' => 800, 'production_per_hour' => 25],
                ['level' => 9, 'cost' => 900, 'production_per_hour' => 35],
                ['level' => 10, 'cost' => 1500, 'production_per_hour' => 45],
                ['level' => 11, 'cost' => 2100, 'production_per_hour' => 55],
                ['level' => 12, 'cost' => 3200, 'production_per_hour' => 67],
                ['level' => 13, 'cost' => 4300, 'production_per_hour' => 78],
                ['level' => 14, 'cost' => 5400, 'production_per_hour' => 99],
                ['level' => 15, 'cost' => 6500, 'production_per_hour' => 111],
                ['level' => 16, 'cost' => 7100, 'production_per_hour' => 121],
                ['level' => 17, 'cost' => 8200, 'production_per_hour' => 133],
                ['level' => 18, 'cost' => 9300, 'production_per_hour' => 144],
                ['level' => 19, 'cost' => 10400, 'production_per_hour' => 155],
                ['level' => 20, 'cost' => 11500, 'production_per_hour' => 166],                                           
            ]);
        });
    }
}
