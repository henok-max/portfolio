<?php

namespace App\Http\Controllers;

use App\Models\Certificate; // Add this line
use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller
{
    // Homepage
    public function home()
    {
        return view('home', [
            'recentCertificates' => Certificate::latest()->take(3)->get(),
            'skills' => ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS', 'JavaScript', 'Git']
        ]);
    }

    // Projects page
    public function index()
    {
        $portfolioItems = PortfolioItem::latest()->get();
        return view('projects', compact('portfolioItems'));
    }
    public function show(PortfolioItem $portfolioItem)
    {
        // For related projects (optional):
        // $relatedProjects = PortfolioItem::where('id', '!=', $portfolioItem->id)
        //     ->inRandomOrder()
        //     ->limit(3)
        //     ->get();

        return view('projects.show', [
            'portfolioItem' => $portfolioItem,
            // 'relatedProjects' => $relatedProjects
        ]);
    }
    public function about()
    {
        return view('about');
    }
    // Contact page
    public function contact()
    {
        return view('contact');
    }

    // Handle contact form submission
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10'
        ]);

        try {
            Mail::to('henokayalew31@gmail.com')->send(
                new ContactFormMail($validated)
            );

            return redirect()->back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to send message. Please try again.');
        }
    }
    // app/Http/Controllers/PortfolioController.php
    public function certificates()
    {
        $certificates = Certificate::all();
        return view('certificates', compact('certificates'));
    }
}
