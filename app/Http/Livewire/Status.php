<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Status extends Component
{

    public $data;

    public function mount(){

       $data = $this->status();
    }

    public function status(){

        $response = Http::withOptions(['verify' => false])
                    ->get('http://dashboard.test/jsontest')
                    ['DetectedPersons'];
                
        $this->data = $response;
    }


    public function render()
    {
        return view('livewire.status',[
            'data' => $this->status()
        ]);
    }
}
