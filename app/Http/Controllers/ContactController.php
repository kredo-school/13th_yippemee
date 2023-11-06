<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function contact(){
        return view('contact.user_contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|min:1|max:10',
            'email' => 'required|min:1|max:50',
            'message' => 'required|min:1|max:50',
        ]);

        $this->contact->username = $request->username;
        $this->contact->email = $request->email;
        $this->contact->message = $request->message;

        $this->contact->save();

        return redirect()->route('contact');
    }
}
