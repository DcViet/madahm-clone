<?php

namespace App\Livewire;

use Livewire\Component;

class ExampleComponent extends Component
{
    public $message = 'Hello, World!';
    public function render()
    {
        return view('livewire.example-component');
    }
}
