<div>
    {{-- Be like water. --}}
    <div class="row form-group">
        <div class="col-md-3">
        <select name="" id="" wire:model.lazy="tahun" wire:change="changeTahun()" class="form-control text-sm">
                <option value="">Pilih Tahun</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="" id="" wire:model.lazy="arrKategori" wire:change="changeKategori()" class="form-control text-sm">
                <option value="">Pilih Kategori</option>
                @foreach($asetsKat as $item)
                    <option value="{{ $item->id }}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
