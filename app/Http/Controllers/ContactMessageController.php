<?php

namespace App\Http\Controllers;

use App\Models\contactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'sujet' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = contactMessage::create($validated);

        // Envoi de mail au responsable
        Mail::to('papemoussadiedhiou272@gmail.com')->send(new \App\Mail\ContactNotification($contact));

        return back()->with('success', 'Votre message a bien été envoyé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(contactMessage $contactMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contactMessage $contactMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contactMessage $contactMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contactMessage $contactMessage)
    {
        //
    }
}
