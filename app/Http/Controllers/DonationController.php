<?php

namespace App\Http\Controllers;

use App\Mail\DonationMail;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DonationController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'required|email|max:255',
            'cause'  => 'required|string',
            'amount' => 'required|numeric|min:1',
        ]);

        $data = Donation::create($validated);
        Mail::to('admin@royalcarehome.org')->send(new DonationMail($data));

        return redirect()->back()->with('success', 'Submitted successfully, We will contact you to process your donation!');
    }
}
