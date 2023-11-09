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

     public function admin_contacts_index()
    {
        $contacts = Contact::all();

        return view('admin.contacts.index')->with('contacts',$contacts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|min:1',
        ]);

        $user = Auth::user();
        $name = $user->name;
        $email = $user->email;

        $this->contact->user()->associate($user);
        $this->contact->message = $request->message;

        $this->contact->save();

        return redirect()->route('contact')->with('message', 'You succeeded in sending a message.');
    }

    public function destroy($id)
    {
        $contact = $this->contact->findOrFail($id);

        $this->contact->destroy($id);

        return redirect()->route('admin.contacts.index');
    }
}
