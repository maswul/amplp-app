<?php

namespace App\Http\Livewire\Asets;

use App\Models\Asets;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class AsetsTable extends TableComponent
{
    use HtmlComponents;

    protected $listeners=['FilterTahun'=>'filterTahun', 'FilterKategori'];
    public $tahun = '';
    public $kategori = '';

    public function query(): Builder
    {
        if (($this->tahun == '') && ($this->kategori == '')) {
            return Asets::query();
        }elseif (($this->tahun == '') && ($this->kategori <> ''))
        {
            return Asets::whereKategoriId($this->kategori);
        }elseif (($this->tahun <> '') && ($this->kategori == ''))
        {
            return Asets::whereTahun($this->tahun);
        }else{
            return Asets::where('tahun','=', $this->tahun)
                ->where('kategori_id','=', $this->kategori);
        }


    }

    public function filterTahun($tahun)
    {
        $this->emit('logs', $tahun);
        //return Asets::where('tahun','=',$tahun);
        $this->tahun=$tahun;

    }

    public function FilterKategori($kat)
    {
        $this->kategori = $kat;
    }

    public function columns(): array
    {
        return [
            Column::make('Asets','name')->searchable()->sortable(),
            Column::make( 'Detail', 'detail')->searchable(),
            Column::make('Kategori','kategori_id')->sortable()->format(function(Asets $model){
                return $model->kategori;
            }),
            Column::make('Tahun Pengadaan','tahun')->sortable(),
            Column::make('Status', 'dipinjam')->format(function (Asets $model){
                if (!$model->dipinjam){
                    return "Ada";
                }else{
                    return "Dipinjam";
                }
            })->sortable(),
            Column::make('PIC', 'pic_id')->sortable()->format(function(Asets $model){
                return $model->pic_name;
            }),
            Column::make('Lokasi', 'lokasi_simpan')->sortable()->searchable(),
        ];
    }
}
