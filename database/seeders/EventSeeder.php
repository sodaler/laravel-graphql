<?php

namespace Database\Seeders;

use Database\Factories\EventFactory;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventFactory::new()->count(40)->create();
    }
}
