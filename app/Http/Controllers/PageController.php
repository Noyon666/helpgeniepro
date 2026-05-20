<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()         { return view('pages.home'); }
    public function platform()     { return view('pages.platform'); }
    public function solutions()    { return view('pages.solutions'); }
    public function pricing()      { return view('pages.pricing'); }
    public function integrations() { return view('pages.integrations'); }
    public function resources()    { return view('pages.resources'); }
    public function about()        { return view('pages.about'); }
    public function contact()      { return view('pages.contact'); }
    public function privacy()      { return view('pages.legal.privacy'); }
    public function terms()        { return view('pages.legal.terms'); }
    public function cookies()      { return view('pages.legal.cookies'); }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:120',
            'email'   => 'required|email|max:160',
            'company' => 'nullable|string|max:120',
            'team'    => 'nullable|string|max:60',
            'message' => 'required|string|max:3000',
        ]);

        // No database in this build — the request is simply acknowledged.
        return redirect()
            ->route('contact')
            ->with('sent', $validated['name'])
            ->withFragment('form');
    }
}
