<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class People extends Component
{
    public $data;

    public function mount(){

       $data = $this->people();
    }

    public function people(){

        $response = Http::withOptions(['verify' => false])
                    ->get('http://dashboard.test/jsontest')
                    ['DetectedPersons'];
                
        $this->data = $response;
    }

    public function render()
    {
        return view('livewire.people',[
            'data' => $this->people()
        ]);
    }
}
