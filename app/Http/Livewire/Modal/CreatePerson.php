<?php

namespace App\Http\Livewire\Modal;

use App\Models\Person;
use Wahdam\LivewireModal\LivewireModal;

class CreatePerson extends LivewireModal
{
    public Person $person;

    public function mount(Person $person)
    {
        $this->person = $person;
    }

    protected $rules = [
        'person.name' => 'required',
        'person.email' => 'required|email',
        'person.nickname' => 'required',
        'person.phone' => 'required',
        'person.address' => 'required',
        'person.job' => 'required',
        'person.birthdate' => 'required',
    ];

    public function title()
    {
        return 'Create Person';
    }

    public function content()
    {
        return 'livewire.modal.create-person';
    }

    public function save()
    {
        $this->validate();
        Person::create($this->person->toArray());
        $this->isOpen = false;
    }
}
