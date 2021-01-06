<?php

namespace App\Http\Livewire\Asets;

use App\Models\Asets;
use App\Models\AsetsKategori;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class TambahController extends Component
{

    public $asets_id,$kategori_name, $kategoris, $name, $nomor, $detail, $tgl_beli, $lokasi_simpan, $dipinjam, $peminjam_id;
    public $kategori_id = '';
    public $pic_id='';
    public $pics='';

    public $editMode = false;

    protected $listeners = ['EditId','DelId'];

    public function EditId($id)
    {
        //$this->emit('logs', $id);
        $data = Asets::whereId($id)->first();

        //$this->resetFields();

        $this->asets_id = $data->id;
        $this->name = $data->name;
        $this->nomor = $data->nomor;
        $this->detail = $data->detail;
        $this->lokasi_simpan = $data->lokasi_simpan;
        $this->tgl_beli = $data->tgl_beli;
        $this->pic_id = $data->pic_id;
        $this->kategori_id = $data->kategori_id;

        $this->editMode = true;
        $this->emit('AsetsModal', 'show');

    }

    public function DelId($id)
    {
        Asets::whereId($id)->delete();
        $this->emit('AsetsRefresh');
    }

    protected function resetFields()
    {
        $this->asets_id = null;
        $this->name = '';
        $this->nomor='';
        $this->detail='';
        $this->kategori_id=-1;
        $this->tgl_beli='';
        $this->lokasi_simpan='';
        $this->pic_id=-1;
        $this->peminjam_id=0;
        $this->dipinjam = false;
        $this->kategoris = AsetsKategori::get();
        $this->pics = User::get();
    }



    public function addKategori()
    {
        if ($this->kategori_name) {
            AsetsKategori::updateOrCreate(["name" => $this->kategori_name], ["name" => $this->kategori_name]);
            $this->kategoris = AsetsKategori::get();
        }
    }

    protected function genNomor($id)
    {
        $tgl = Carbon::createFromDate($this->tgl_beli)->isoFormat("DD");
        $bln = Carbon::createFromDate($this->tgl_beli)->isoFormat("MM");
        $thn = Carbon::createFromDate($this->tgl_beli)->isoFormat("YYYY");
        return "AMPLP-{$thn}-{$bln}{$tgl}-{$id}";
    }

    public function store()
    {
        //$this->tgl_beli = Carbon::createFromFormat('mm/dd/yyyy',$this->tgl_beli)->isoFormat('YYYY-MM-DD');
        $aset = Asets::updateOrCreate(['id'=>$this->asets_id],[
            'name' => $this->name,
            'nomor' => $this->nomor,
            'detail' => $this->detail,
            'tgl_beli' => $this->tgl_beli,
            'tahun' => Carbon::createFromDate($this->tgl_beli)->isoFormat("YYYY"),
            'lokasi_simpan' => $this->lokasi_simpan,
            'kategori_id'=>$this->kategori_id,
            'pic_id' => $this->pic_id,
            'dipinjam'=>false,

        ]);
        if ($aset)
        {
            if ($this->nomor == '')
            {
                $this->nomor = $this->genNomor($aset->id);
                Asets::updateOrCreate(['id' => $aset->id],['nomor' => $this->nomor]);
            }
        }
        //$this->emit('AsetsModal', 'hide');
        $this->resetFields();
        $this->emit('AsetsRefresh');
        if ($this->editMode)
        {
            $this->editMode = false;
            $this->emit('AsetsModal', 'hide');
        }
        //info
    }

    public function openModal()
    {
        $this->resetFields();
        $this->emit('AsetsModal', 'show');

    }

    public function mount()
    {
        $this->resetFields();
    }

    public function render()
    {

        return view('livewire.asets.tambah-controller');
    }
}

