<?php

namespace App\Http\Livewire\Delivery;

use Livewire\Component;
use App\Models\Delivery;

class Add extends Component
{
    public $recipient ,$address, $description,$expectual_arrival, $actual_arrival;

    public function add()
    {
        Delivery::create([
            'recipient' => $this -> recipient,
            'address' => $this -> address,
            'expected_arrival' => $this -> expectual_arrival,
            'actual_arrival' => $this -> actual_arrival,
            'description' => $this -> description
        ]);

        $this -> emitTo('product.show', '$refresh');
    }

    public function render()
    {
        return view('livewire.delivery.add');
    }
}
