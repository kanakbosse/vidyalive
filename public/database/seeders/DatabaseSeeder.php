<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            "name" => "Admin",
            "username" => "admin",
            "email" => "admin@admin.com",
            "role" => 3,
            "password" => "admin",
        ]);

        // \App\Models\Category::create([
        //     "title" => "Uncategorized",
        //     "slug" => "uncategorized",
        // ]);

        \App\Models\SiteSetting::create([
            "site_title" => "VidyaLive",
            "tagline" => "Eductional portal",
            "description" => "Educational Portal",
            "logo_dark" => "logo_dark.png",
            "logo_light" => "logo_light.png",
            "copyright_text" => "© Vidyalive, All Rights Reserved.",
            "enable_registration" => "1",
        ]);

        \App\Models\Menu::create([
            "header_menu" => json_encode([["href"=>"http://127.0.0.1:8000/","icon"=>"","text"=>"Home","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Cloud Computing","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Top Universities India","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Top Courses","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Entrance Exam","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Online Data Science & AI","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Blog","tooltip"=>"","children"=>[]]]),
            "footer_menu" => json_encode([["href"=>"http://127.0.0.1:8000/","icon"=>"","text"=>"Home","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Cloud Computing","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Top Universities India","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Top Courses","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Entrance Exam","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Online Data Science & AI","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"Blog","tooltip"=>"","children"=>[]]]),
        ]);
    }
}
