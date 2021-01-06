<?php

namespace App\Http\Livewire\Asets;

use App\Models\Asets;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelController extends TableComponent
{
    use HtmlComponents;

    public function query(): Builder
    {
        return Asets::with('asetskategori');
    }

    public function columns(): array
    {
        return [
            Column::make('Asets','name')->searchable(),
        ];
    }

}
