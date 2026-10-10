<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Public Notice: Extended Office Hours During Court Week',
                'slug' => 'public-notice-extended-office-hours-during-court-week',
                'excerpt' => 'All woreda justice offices will remain open until 6:30 PM throughout the regional court week to serve more citizens.',
                'body' => '<p>All woreda justice offices will remain open until 6:30 PM throughout the regional court week to serve more citizens. This measure is part of the Bureau\'s commitment to improving access to justice across the Afar region.</p>',
                'status' => 'published',
                'category' => 'Public Notice',
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => "Call for Community Elders: Mad'aa Council Registration Open",
                'slug' => 'call-for-community-elders-madaa-council-registration-open',
                'excerpt' => "The bureau invites recognized customary elders to register for the regional Mad'aa council roster before the end of the month.",
                'body' => '<p>The bureau invites recognized customary elders to register for the regional Mad\'aa council roster before the end of the month. Registered elders will participate in customary dispute resolution processes recognized by the formal justice system.</p>',
                'status' => 'published',
                'category' => 'Customary Justice',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Tender Announcement: Legal Case Management System',
                'slug' => 'tender-announcement-legal-case-management-system',
                'excerpt' => 'Qualified vendors are invited to bid for the supply and deployment of a digital case management platform.',
                'body' => '<p>Qualified vendors are invited to bid for the supply and deployment of a digital case management platform for the Afar Regional Justice Bureau. Bid documents can be collected from the Bureau\'s procurement office in Semera.</p>',
                'status' => 'published',
                'category' => 'Tender',
                'published_at' => now()->subDays(8),
            ],
            [
                'title' => 'Temporary Closure of Dubti Sub-Office for Renovation',
                'slug' => 'temporary-closure-of-dubti-sub-office-for-renovation',
                'excerpt' => 'The Dubti woreda sub-office will operate from the mobile service unit during the renovation period.',
                'body' => '<p>The Dubti woreda sub-office will operate from the mobile service unit during renovation. All services will continue uninterrupted through the mobile unit stationed at the Dubti town center.</p>',
                'status' => 'published',
                'category' => 'Office Operations',
                'published_at' => now()->subDays(12),
            ],
        ];

        foreach ($items as $item) {
            $slug = $item['slug'];
            unset($item['slug']);
            Announcement::updateOrCreate(
                ['slug' => $slug],
                $item
            );
        }
    }
}
