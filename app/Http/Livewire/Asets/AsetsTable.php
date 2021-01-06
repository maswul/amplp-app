<?php

namespace App\Http\Livewire\Asets;

use App\Models\Asets;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class AsetsTable extends TableComponent
{
    use HtmlComponents;
    public function query(): Builder
    {
        return Asets::latest();
    }

    public function columns(): array
    {
        return [
            Column::make('Asets','name')->searchable(),
            Column::make( 'Detail', 'detail')->searchable(),
            Column::make('Status')->format(function (Asets $model){
                if (!$model->dipinjam){
                    return "Tidak Dipinjam";
                }else{
                    return "Dipinjam";
                }
            })->sortable(),
            Column::make('PIC', 'pic_name')->searchable()->sortable(),
            Column::make('Kategori','kategori')->sortable()->searchable(),
            Column::make('Lokasi Penyimpanan', 'lokasi_simpan')->sortable()->searchable(),
        ];
    }
}
