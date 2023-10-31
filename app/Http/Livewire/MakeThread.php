<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MakeThread extends Component
{

    public $KeyForm;

    public function show()
    {

        dd("Holaaa");

    }

    public function render()
    {
        return view('livewire.make-thread',[
            $this->KeyForm
        ]);
    }
}
