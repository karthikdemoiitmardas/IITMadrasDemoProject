<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $categories = [
            ['name' => 'CFI Student Projects','slug'=>str()->slug('CFI Student Projects')],
            ['name' => 'Infrastructure','slug'=>str()->slug('Infrastructure')],
            ['name' => 'Events','slug'=>str()->slug('Events')],
            ['name' => 'Research & Development','slug'=>str()->slug('Research & Development')],
            ['name' => 'General Fund','slug'=>str()->slug('General Fund')],
            ['name' => 'Batch Reunion Project','slug'=>str()->slug('Batch Reunion Project')],
            ['name' => 'Students Project','slug'=>str()->slug('Students Project')],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => $category['slug'],
            ]);
        }


        $projects = [
            [
                'category_id' => 1,
                'title' => 'Outdoor Wall Mounted LED TV at Himalaya Mess',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1716894812_d9391078d1088d3abe6746f136d33eafc054b8a3.jpg',
                'min' => '4',
                'max' => '6L'
            ],
            [
                'category_id' => 1,
                'title' => 'IIT Madras Sharks Aquatics Team Fund',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1720514447_aquatics.png',
                'min' => '54K',
                'max' => '6L'
            ],
            [
                'category_id' => 1,
                'title' => 'Global Hyperloop Competition',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1717486085_1.png',
                'min' => '0',
                'max' => '1.5cr'
            ],
            [
                'category_id' => 2,
                'title' => '1964 - 65 Diamond Reunion Fund - Krishna Hostel Common Room',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1718098496_1691749499_krishna.jpg',
                'min' => '0',
                'max' => '30cr'
            ],
            [
                'category_id' => 2,
                'title' => 'Team Raftar - Formula Student Germany 2024',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1714730579_raftar.jpg',
                'min' => '3.28L',
                'max' => '30L'
            ],
            [
                'category_id' => 2,
                'title' => 'Team Avishkar Hyperloop 2024',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1702637910_img_20230723_wa0048.jpg',
                'min' => '23.28L',
                'max' => '40L'
            ],
            [
                'category_id' => 3,
                'title' => 'Cricket League Sports Event in Applied Mechanics Department',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1711083071_img_9121.jpg',
                'min' => '8k',
                'max' => '1.5L'
            ],
            [
                'category_id' => 3,
                'title' => 'CEA Fest 2023',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1679909158_bsb_1.png',
                'min' => '25k',
                'max' => '10L'
            ],
            [
                'category_id' => 4,
                'title' => 'Outdoor Wall Mounted LED TV at Himalaya Mess',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1716894812_d9391078d1088d3abe6746f136d33eafc054b8a3.jpg',
                'min' => '4',
                'max' => '6L'
            ],
            [
                'category_id' => 4,
                'title' => 'Amalgam 2024 - Annual Materials Engineering Fest',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1706182186_screenshot_2024_01_25_at_16_57_17_donate_page_for_for_amalgam_metsa_annual_materials_engineering_fest_jog_adminatalumniiitmacin_indian_institute_of_technology_madras_mail.png',
                'min' => '6k',
                'max' => '15L'
            ],
            [
                'category_id' => 4,
                'title' => 'Student Mess Fund',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1708681863_dijwosiuwae5jig.jpg',
                'min' => '26.82L',
                'max' => '99L'
            ],
            [
                'category_id' => 5,
                'title' => '1964 - 65 Diamond Reunion Fund - Krishna Hostel Common Room',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1718098496_1691749499_krishna.jpg',
                'min' => '0L',
                'max' => '30L'
            ],
            [
                'category_id' => 5,
                'title' => '1964 - 65 Diamond Reunion Fund - Cauvery Hostel Common Room',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1718097514_1704798658_1702016747_cau2.jpg',
                'min' => '0L',
                'max' => '30L'
            ],
            [
                'category_id' => 5,
                'title' => '1974 Batch Golden Reunion',
                'image' => 'https://joyofgiving.alumni.iitm.ac.in/data/gjafprojects/1714713529_1691737183_alasdfankananda.jpg',
                'min' => '0L',
                'max' => '30L'
            ],
        ];

        foreach ($projects as $project) {
            Project::create([
                'title' => $project['title'],
                'category_id' => $project['category_id'],
                'image' => $project['image'],
                'min' => $project['min'],
                'max' => $project['max'],
            ]);
        }
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
