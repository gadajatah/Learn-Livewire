<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactIndex extends Component
{
    protected $Listeners = [
        'contactStored' => 'handleStored'
    ];
    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->get()
        ]);
    }
    public function handleStored($contact)
    {
        dd($contact);
    }
}