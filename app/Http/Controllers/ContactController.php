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
        // $all_contacts = $this->contact->latest()->get();
        $contacts = Contact::all();

        return view('admin.contacts.index')->with('contacts',$contacts);
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

    public function destroy($id)
    {
        $contact = $this->contact->findOrFail($id);

        $this->contact->destroy($id);

        return redirect()->route('admin.contacts.index');
    }
}
