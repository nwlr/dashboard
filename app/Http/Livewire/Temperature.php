<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Temperature extends Component
{
    public $data;

    public function mount(){

       $data = $this->temperature();
    }

    public function temperature(){

        $response = Http::withOptions(['verify' => false])
                    ->get('http://dashboard.test/jsontest')
                    ['Temperature'];
                
        $this->data = $response;
    }

    public function render()
    {
        return view('livewire.temperature',[
            'data' => $this->temperature()
        ]);
    }
}