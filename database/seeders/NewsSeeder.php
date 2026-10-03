<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Afar Justice Bureau Launches Community Legal Aid Program',
                'slug' => 'afar-justice-bureau-launches-community-legal-aid-program',
                'excerpt' => 'The bureau launched a free legal aid program to provide accessible justice services to underserved communities across the region.',
                'body' => '<p>The Afar Regional Justice Bureau has officially launched a new community legal aid program designed to bring free legal assistance to remote and underserved areas of the region. The initiative, supported by federal and regional partners, aims to ensure that all citizens have access to legal representation regardless of their economic status or geographic location.</p><p>Mobile legal aid units will be deployed to pastoral communities, providing on-site consultations, document preparation, and court representation services.</p>',
                'image' => 'images/news/sample-1.jpg',
                'status' => 'published',
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Regional Conference on Transitional Justice Concludes in Semera',
                'slug' => 'regional-conference-on-transitional-justice-concludes-in-samara',
                'excerpt' => 'A three-day conference brought together elders, legal experts, and regional officials to chart the path for restorative justice in Afar.',
                'body' => '<p>A landmark three-day conference on transitional justice concluded in Semera, bringing together over 200 participants including community elders, legal professionals, government officials, and civil society representatives.</p><p>The conference focused on integrating traditional Afar conflict resolution mechanisms with formal legal frameworks, exploring how customary Mad\'aa practices can complement modern judicial processes to deliver more effective and culturally appropriate justice outcomes.</p>',
                'image' => 'images/news/sample-2.jpg',
                'status' => 'published',
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Mobile Court Services Reach Remote Woredas',
                'slug' => 'mobile-court-services-reach-remote-woredas',
                'excerpt' => 'New mobile court units have begun serving remote districts, cutting travel time for residents seeking legal recourse.',
                'body' => '<p>The Justice Bureau has deployed new mobile court service units to six remote woredas across the Afar region. These units are equipped to conduct hearings, process legal documents, and provide mediation services directly in pastoral communities that previously had to travel significant distances to access formal justice.</p><p>The mobile courts operate on a rotating schedule, visiting each woreda at least twice monthly, significantly reducing the burden on citizens and improving case processing times.</p>',
                'image' => 'images/news/sample-3.jpg',
                'status' => 'published',
                'published_at' => now()->subDays(6),
            ],
            [
                'title' => 'Justice Sector Reform Workshop Held for Regional Prosecutors',
                'slug' => 'justice-sector-reform-workshop-held-for-regional-prosecutors',
                'excerpt' => 'Prosecutors from across the region completed a capacity-building workshop on case management and human rights standards.',
                'body' => '<p>Over 60 regional prosecutors participated in a comprehensive capacity-building workshop organized by the Justice Bureau in collaboration with the Federal Attorney General\'s Office. The five-day training covered modern case management techniques, evidence handling procedures, human rights standards in prosecution, and the use of digital tools for case tracking.</p><p>Participants from all five administrative zones received certificates of completion and will serve as trainers in their respective zones.</p>',
                'image' => 'images/news/sample-4.jpg',
                'status' => 'published',
                'published_at' => now()->subDays(10),
            ],
        ];

        foreach ($items as $item) {
            News::firstOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }
    }
}
