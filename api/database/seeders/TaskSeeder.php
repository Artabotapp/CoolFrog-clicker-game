<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $tasks = [
            [
                'name' => 'Watch Tutorial Video',
                'description' => 'Watch our game tutorial video on YouTube.',
                'reward_coins' => 100,
                'link' => 'https://youtube.com/@ArtinToken',
                'type' => 'video',
                'action_name' => 'Watch Video',
            ],
            [
                'name' => 'Join Our Discord',
                'description' => 'Join our official Discord server and say hello in the #welcome channel.',
                'reward_coins' => 200,
                'link' => 'https://discord.gg/ArtinToken',
                'type' => 'other',
                'action_name' => 'Join'
            ],
            [
                'name' => 'Follow on Twitter',
                'description' => 'Follow our official Twitter account and retweet our pinned tweet.',
                'reward_coins' => 350,
                'link' => 'https://twitter.com/ArtinToken',
                'type' => 'other',
                'action_name' => 'Follow'
            ],
            [
                'name' => 'Like Facebook Page',
                'description' => 'Like our Facebook page and leave a comment on our latest post.',
                'reward_coins' => 100,
                'link' => 'https://facebook.com/ArtinToken',
                'type' => 'other',
                'action_name' => 'Like'
            ],
            [
                'name' => 'Follow on Instagram',
                'description' => 'Follow our Instagram account and like our most recent post.',
                'reward_coins' => 125,
                'link' => 'https://instagram.com/ArtinToken',
                'type' => 'other',
                'action_name' => 'Follow'
            ],
            [
                'name' => 'Join Telegram channel',
                'description' => 'Join our Telegram Channel and introduce yourself on Telegram Group.',
                'reward_coins' => 175,
                'link' => 'https://t.me/ArtinToken',
                'type' => 'other',
                'action_name' => 'Join'
            ],
            [
                'name' => 'pay Gas Fee',
                'description' => 'The transaction will only proceed once the gas fee is paid.',
                'reward_coins' => 8000,
                'link' => 'https://artinapp.ir/GASFEE',
                'type' => 'other',
                'action_name' => 'Complete pay Transaction'
            ],
            [
                'name' => 'Test Transaction',
                'description' => ' Send or receive a small amount of tokens within the app.',
                'reward_coins' => 20000,
                'link' => 'https://artinapp.ir/GASFEE',
                'type' => 'other',
                'action_name' => 'Complete Test Transaction'
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
