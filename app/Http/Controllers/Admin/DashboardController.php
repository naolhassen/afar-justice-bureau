<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\ActivityLog;
use App\Models\Announcement;
use App\Models\Document;
use App\Models\News;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Vacancy;

class DashboardController extends Controller
{
    public function index()
    {
        $counts = [
            'news' => News::count(),
            'announcements' => Announcement::count(),
            'vacancies' => Vacancy::count(),
            'documents' => Document::count(),
            'pages' => Page::count(),
            'services' => Service::count(),
            'abouts' => About::count(),
            'settings' => Setting::count(),
        ];

        $recent = ActivityLog::with('user')
            ->latest()
            ->take(10)
            ->get();

        $latest = [
            'news' => News::latest('updated_at')->take(3)->get(),
            'announcements' => Announcement::latest('updated_at')->take(3)->get(),
            'documents' => Document::latest('updated_at')->take(3)->get(),
        ];

        return view('admin.dashboard', compact('counts', 'recent', 'latest'));
    }
}
