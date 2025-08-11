<?php

namespace App\Livewire\Publik;

use Livewire\Component;
use App\Models\Katalog as ModelKatalog;

class Katalogproduk extends Component
{

    public $produk_id;
    public function mount($produk_id)
    {
        $this->produk_id = $produk_id;
    }
    public function render()
    {
        $katalog = ModelKatalog::where('produk_id', $this->produk_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.publik.katalogproduk', compact('katalog'));
    }
}
