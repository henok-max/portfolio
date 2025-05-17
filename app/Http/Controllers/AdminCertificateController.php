<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCertificateController extends Controller
{
    // List all certificates
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificates.index', compact('certificates'));
    }

    // Show create form
    public function create()
    {
        return view('admin.certificates.create');
    }

    // Store new certificate
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'issue_date' => 'required|date',
            'certificate_file' => 'required|file|mimes:pdf,png,jpg|max:2048',
        ]);

        // Store file
        $path = $request->file('certificate_file')->store('certificates', 'public');
        $data['certificate_url'] = $path;

        Certificate::create($data);
        return redirect()->route('admin.certificates.index')->with('success', 'Certificate added!');
    }

    // Show edit form
    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    // Update certificate
    public function update(Request $request, Certificate $certificate)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'issue_date' => 'required|date',
            'certificate_file' => 'nullable|file|mimes:pdf,png,jpg|max:2048',
        ]);

        // Update file if new one is uploaded
        if ($request->hasFile('certificate_file')) {
            Storage::disk('public')->delete($certificate->certificate_url);
            $path = $request->file('certificate_file')->store('certificates', 'public');
            $data['certificate_url'] = $path;
        }

        $certificate->update($data);
        return redirect()->route('admin.certificates.index')->with('success', 'Certificate updated!');
    }

    // Delete certificate
    public function destroy(Certificate $certificate)
    {
        Storage::disk('public')->delete($certificate->certificate_url);
        $certificate->delete();
        return redirect()->route('admin.certificates.index')->with('success', 'Certificate deleted!');
    }
}
