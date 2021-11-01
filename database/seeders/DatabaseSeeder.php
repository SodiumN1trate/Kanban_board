<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Ticket::create([
            "column" => 0,
            "position" => 0,
            "title" => "Twilio integration",
            "content" => "Create new note via SMS. Support text, audio, links, and media.",
            "color" => "pink"
        ]);

        \App\Models\Ticket::create([
            "column" => 0,
            "position" => 1,
            "title" => "Markdown support2",
            "content" => "Markdown shorthand converts to formatting",
            "color" => "periwinkle"
        ]);

        \App\Models\Badge::create([
            "title" => "Forwarding"
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
