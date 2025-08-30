<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('backend.contact.index', compact('messages'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        toast('Data deleted successfully!', 'success');
        return back();
    }
    public function show($id)
{
    $message = Contact::findOrFail($id);

    if (!$message->status) {
        $message->status = 1;
        $message->save();
    }

    return view('backend.contact.show', compact('message'));
}
}
