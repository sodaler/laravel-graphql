<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Post;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected array $toTruncate = [
        User::class,
        Post::class,
        Event::class,
        Ticket::class,
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->toTruncate as $table) {
            $table::query()->delete();
        }

        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            EventSeeder::class,
            TicketSeeder::class,
        ]);
    }
}
