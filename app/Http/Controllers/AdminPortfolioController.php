<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPortfolioController extends Controller
{
    // List all portfolio items
    public function index()
    {
        $portfolioItems = PortfolioItem::latest()->get();
        return view('admin.portfolio.index', compact('portfolioItems'));
    }

    // Show create form
    public function create()
    {
        return view('admin.portfolio.create');
    }

    // Store new portfolio item
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'github_url' => 'nullable|url',
            'skills' => 'nullable|string'
        ]);

        // Store image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('portfolio_images', 'public');
        }

        PortfolioItem::create($data);
        return redirect()->route('admin.portfolio.index')->with('success', 'Project added!');
    }

    // Show edit form
    public function edit(PortfolioItem $portfolioItem)
    {
        return view('admin.portfolio.edit', compact('portfolioItem'));
    }

    // Update portfolio item
    public function update(Request $request, PortfolioItem $portfolioItem)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'github_url' => 'nullable|url',
            'skills' => 'nullable|string'
        ]);

        // Update image
        if ($request->hasFile('image')) {
            // Delete old image only if it exists
            if ($portfolioItem->image) {
                Storage::disk('public')->delete($portfolioItem->image);
            }

            // Store new image
            $data['image'] = $request->file('image')->store('portfolio_images', 'public');
        }

        $portfolioItem->update($data);
        return redirect()->route('admin.portfolio.index')->with('success', 'Project updated!');
    }

    // Delete portfolio item
    public function destroy(PortfolioItem $portfolioItem)
    {
        if ($portfolioItem->image) {
            Storage::disk('public')->delete($portfolioItem->image);
        }
        $portfolioItem->delete();
        return redirect()->route('admin.portfolio.index')->with('success', 'Project deleted!');
    }
}
