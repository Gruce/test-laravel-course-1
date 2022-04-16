<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class Show extends Component
{
    protected $listeners = [
        '$refresh',
    ];

    public function delete($id)
    {
        Product::findOrFail($id) -> delete();
        $this -> emitTo('product.show', '$refresh');
    }

    public function render()
    {
        $products = Product::get();

        return view('livewire.product.show',
        [
            'products' => $products
        ]);
    }
}
