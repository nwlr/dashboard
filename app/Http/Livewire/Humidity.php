<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Humidity extends Component
{
    public $data;

    public function mount(){

       $data = $this->humidity();
    }

    public function humidity(){

        $response = Http::withOptions(['verify' => false])
                    ->get('http://dashboard.test/jsontest')
                    ['Humidity'];
                
        $this->data = $response;
    }


    public function render()
    {
        return view('livewire.humidity',[
            'data' => $this->humidity()
        ]);
    }

}
