<?php

use App\SiteContent;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        Sitecontent::create([
            'name' => 'banner',
            'content' => json_encode([
                'title' => 'EVERY STUDENT YEARNS TO LEARN',
                'subtitle' => 'Making Your Students World Better',
                'desc' => "Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man",
            ])
        ]);

        Sitecontent::create([
            'name' => 'courses',
            'content' => json_encode([
                'title' => 'POPULAR COURSES',
                'subtitle' => 'Special Courses',
            ])
        ]);

        Sitecontent::create([
            'name' => 'testmonials',
            'content' => json_encode([
                'title' => 'TESIMONIALS',
                'subtitle' => 'Happy Students',
            ])
        ]);

        Sitecontent::create([
            'name' => 'footer',
            'content' => json_encode([
                'title' => 'Newsletter',
                'subtitle' => 'Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.',
                'desc' => "But when shot real her. Chamber her one visite removal six sending himself boys scot exquisite existend an But when shot real her hamber her",
            ])
        ]);

    }
}
