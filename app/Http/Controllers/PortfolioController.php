<?php

namespace App\Http\Controllers;

use App\Models\Certificate; // Add this line
use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

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
    // Contact page
    public function contact()
    {
        return view('contact');
    }

    // Handle contact form submission
    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Send email
        Mail::to(env('CONTACT_FORM_RECIPIENT'))->send(new ContactFormMail($request->all()));
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    // app/Http/Controllers/PortfolioController.php
    public function certificates()
    {
        $certificates = Certificate::all();
        return view('certificates', compact('certificates'));
    }
}
