<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\Product;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'category' => Category::take(5)->get(),
            'product'  => Product::all(),
        ]);
    }
}
