<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\Product;
use Livewire\WithPagination;

class ProductIndex extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    protected $QueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {  
        if($this->search) {
            $product = Product::where('nama', 'like', '%'.$this->search.'%')->get();
        }else {
            $product = Product::paginate(8);
        }

        return view('livewire.product', [
            'product'  => $product,
        ]);
    }
}
