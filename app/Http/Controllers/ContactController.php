<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('name')->get();
        return view('index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone-number' => 'required|min:9|max:9|unique:contacts,contact',
            'email' => 'required|email|max:255|unique:contacts,email'
        ]);

        $contact = Contact::create([
            'name' => $request->input('name'),
            'contact' => $request->input('phone-number'),
            'email' => $request->input('email')
        ]);

        return redirect()->route('contact.show', $contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {   
        return view('contact-profile', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {   
        $request->validate([
            'name' => 'required|max:255',
            'phone-number' => 'required|min:9|max:9|unique:contacts,contact,'.$contact->id,
            'email' => 'required|email|max:255|unique:contacts,email,'.$contact->id,
        ]);

        $contact->update([
            'name' => $request->input('name'),
            'contact' => $request->input('phone-number'),
            'email' => $request->input('email')
        ]);

        return redirect()->route('contact.show', $contact);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contact.index');
    }
}
