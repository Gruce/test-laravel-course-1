<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class Show extends Component
{
    protected $listeners = [
        '$refresh',
    ];

    public function delete($id)
    {
        Category::findOrFail($id) -> delete();
        $this -> emitTo('category.show', '$refresh');
    }

    public function render()
    {
        $categories = Category::get(['id','name']);

        return view('livewire.category.show',
        [
            'categories' => $categories
        ]);
    }
    
}
