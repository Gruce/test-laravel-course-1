<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Add extends Component
{
    public $name, $price , $count, $description;

    public function add()
    {
        Product::create([
            'name' => $this -> name,
            'price' => $this -> price,
            'count' => $this -> count,
            'description' => $this -> description
        ]);

        $this -> emitTo('product.show', '$refresh');
    }

    public function render()
    {
        return view('livewire.product.add');
    }
}
