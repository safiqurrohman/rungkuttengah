<?php

namespace App\Livewire\Publik;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Produk as ModelProduk;

class Produkumkm extends Component
{
    use WithPagination;
    
    public $search = '';
    public $kategori = 'Semua';
    
    protected $paginationTheme = 'bootstrap';

    public function updatedSearch(){
        $this->resetPage();
    }

    public function setKategori($kategori)
    {
        $this->kategori = $kategori;
        $this->resetPage();
    }
    public function render()
    {
        $query = ModelProduk::with('kategori')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('nama_umkm', 'like', '%' . $this->search . '%')
                    ->orWhere('pemilik', 'like', '%' . $this->search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->kategori && $this->kategori !== 'Semua', function ($query) {
                $query->whereHas('kategori', function ($q) {
                    $q->where('nama_kategori', $this->kategori);
                });
            });

        // Ambil jumlah total sesuai filter
        $totalUmkm = $query->count();

        // Ambil data dengan paginate
        $produk = $query->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('livewire.publik.produkumkm', compact('produk', 'totalUmkm'));
    }

}
