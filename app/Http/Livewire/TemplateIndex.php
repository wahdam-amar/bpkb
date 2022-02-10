<?php

namespace App\Http\Livewire;

use App\Models\Template;
use App\Services\TwelioService;
use Livewire\Component;

class TemplateIndex extends Component
{
    public Template $template;
    public $saved;
    public $phone;

    protected $rules = [
        'template.content' => 'required',
    ];

    public function mount()
    {
        $this->template = Template::find(1);
    }

    public function render()
    {
        return view('livewire.template-index');
    }

    public function sendMessage(TwelioService $twelio)
    {
        $twelio->content($this->template->content)->send($this->phone);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        $this->saved = $this->template->update([
            $validatedData,
        ]);
    }
}
