<?php

namespace App\Http\Livewire\Asets;

use App\Models\Asets;
use App\Models\AsetsKategori;
use Carbon\Carbon;
use Livewire\Component;

class TambahController extends Component
{

    public $asets_id,$kategori_name, $kategoris, $name, $nomor, $detail, $kategori_id, $tgl_beli, $lokasi_simpan, $pic_id, $dipinjam, $peminjam_id;
    public $editMode = false;

    protected function resetFields()
    {
        $this->asets_id = null;
        $this->name = '';
        $this->nomor='';
        $this->detail='';
        $this->kategori_id='';
        $this->tgl_beli='';
        $this->lokasi_simpan='';
        $this->pic_id=0;
        $this->peminjam_id=0;
        $this->dipinjam = false;
        $this->kategoris = AsetsKategori::get();
    }



    public function addKategori()
    {
        AsetsKategori::updateOrCreate(["name"=>$this->kategori_name],["name"=>$this->kategori_name]);
        $this->kategoris = AsetsKategori::get();
    }

    public function store()
    {
        //$this->tgl_beli = Carbon::createFromFormat('mm/dd/yyyy',$this->tgl_beli)->isoFormat('YYYY-MM-DD');
        Asets::updateOrCreate(['id'=>$this->asets_id],[
            'name' => $this->name,
            'nomor' => $this->nomor,
            'detail' => $this->detail,
            'tgl_beli' => $this->tgl_beli,
            'lokasi_simpan' => $this->lokasi_simpan,
            'kategori_id' => $this->kategori_id,
            'dipinjam'=>false,

        ]);
        $this->emit('AsetsModal', 'hide');
        //info
    }

    public function openModal()
    {
        $this->resetFields();
        $this->emit('AsetsModal', 'show');

    }

    public function render()
    {
        $this->resetFields();
        return view('livewire.asets.tambah-controller');
    }
}

