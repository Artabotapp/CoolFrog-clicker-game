<?php

namespace Database\Seeders;

use App\Models\DailyTask;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DailyTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dailyTasks = [
            [
                'id' => 1,
                'name' => 'Day 1',
                'reward_coins' => 500,
                'required_login_streak' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Day 2',
                'reward_coins' => 1000,
                'required_login_streak' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Day 3',
                'reward_coins' => 2500,
                'required_login_streak' => 3,
            ],
            [
                'id' => 4,
                'name' => 'Day 4',
                'reward_coins' => 5500,
                'required_login_streak' => 4,
            ],
            [
                'id' => 5,
                'name' => 'Day 5',
                'reward_coins' => 7000,
                'required_login_streak' => 5,
            ],
            [
                'id' => 6,
                'name' => 'Day 6',
                'reward_coins' => 10_000,
                'required_login_streak' => 6,
            ],
            [
                'id' => 7,
                'name' => 'Day 7',
                'reward_coins' => 20_000,
                'required_login_streak' => 7,
            ],
            [
                'id' => 8,
                'name' => 'Day 8',
                'reward_coins' => 35_000,
                'required_login_streak' => 8,
            ],
            [
                'id' => 9,
                'name' => 'Day 9',
                'reward_coins' => 55_000,
                'required_login_streak' => 9,
            ],
            [
                'id' => 10,
                'name' => 'Day 10',
                'reward_coins' => 85_000,
                'required_login_streak' => 10,
            ],
            [
                'id' => 11,
                'name' => 'Day 11',
                'reward_coins' => 100_000,
                'required_login_streak' => 11,
            ],
            [
                'id' => 12,
                'name' => 'Day 12',
                'reward_coins' => 150_000,
                'required_login_streak' => 12,
            ],
            [
                'id' => 13,
                'name' => 'Day 13',
                'reward_coins' => 250_000,
                'required_login_streak' => 13,
            ],
            [
                'id' => 14,
                'name' => 'Day 14',
                'reward_coins' => 400_000,
                'required_login_streak' => 14,
            ],
            [
                'id' => 15,
                'name' => 'Day 15',
                'reward_coins' => 750_000,
                'required_login_streak' => 15,
            ],
            [
                'id' => 16,
                'name' => 'Day 16',
                'reward_coins' => 900_000,
                'required_login_streak' => 16,
            ],
            [
                'id' => 17,
                'name' => 'Day 17',
                'reward_coins' => 1_100_000,
                'required_login_streak' => 17,
            ],
            [
                'id' => 18,
                'name' => 'Day 18',
                'reward_coins' => 1_400_000,
                'required_login_streak' => 18,
            ],
            [
                'id' => 19,
                'name' => 'Day 19',
                'reward_coins' => 1_800_000,
                'required_login_streak' => 19,
            ],
            [
                'id' => 20,
                'name' => 'Day 20',
                'reward_coins' => 2_400_000,
                'required_login_streak' => 20,
            ],            
        ];

        foreach ($dailyTasks as $task) {
            DailyTask::updateOrCreate(['id' => $task['id']], $task);
        }
    }
}
