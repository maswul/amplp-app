<?php

namespace App\Http\Livewire\Asets;

use App\Models\Asets;
use App\Models\AsetsKategori;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class FilterController extends Component
{
    public $arrTahun = [];
    public $arrKategori = [];
    public $tahun, $kategori, $asets, $asetsKat;
    protected function init()
    {
        $this->arrKategori = [];
        $this->arrTahun = [];
        $this->tahun = '';
        $this->kategori='';
    }

    public function changeTahun()
    {
        $this->emit("FilterTahun", $this->tahun);
    }

    public function changeKategori()
    {
        $this->emit('FilterKategori', $this->arrKategori);
    }

    public function mount()
    {
        $this->init();
        $this->asets = DB::table('asets')->select('tahun')->distinct()->get();
        $this->asetsKat = AsetsKategori::get();
    }

    public function render()
    {
        return view('livewire.asets.filter-controller');
    }
}
