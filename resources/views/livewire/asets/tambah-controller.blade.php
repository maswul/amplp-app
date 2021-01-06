<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="row btn-group float-right">
        <a name="" id="" class="btn btn-primary" href="#" role="button" wire:click.prevent="openModal">Tambah Asets</a>
        <a href="" class="btn btn-success" role="button">Import Excel</a>
        <a href="" class="btn btn-warning" role="button">Export Excel</a>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="AsetsModal" tabindex="-1" role="dialog" aria-labelledby="mdlTambah"
         aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    @if($editMode)
                        <h5 class="modal-title">Perbarui data asets</h5>
                    @else
                        <h5 class="modal-title">Tambah data asets</h5>
                    @endif
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='store()'>
                    <div class="modal-body">
                        @if($editMode)
                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label>Nomor Asets:</label>
                                    <input type="hidden" name="" wire:model.lazy="$asets_id">
                                    <input type="text" class="form-control" name="nomor" wire:model.lazy="nomor">
                                </div>

                            </div>
                        @endif
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label>Nama Asets:</label>
                                <input type="text" required class="form-control" name="name" wire:model.lazy="name">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label>Detail Asets:</label>
                                <textarea name="detail" required wire:model.lazy="detail" id="" class="form-control"
                                          rows="3"></textarea>
                            </div>
                        </div>
                        <div x-data="{open: false}">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="">Kategori <a @click="open=true"><i
                                                class="fa fa-plus-circle"></i></a></label>
                                    <select class="form-control" name="kategori_id" required
                                            wire:model.lazy="kategori_id">
                                        <option value="-1" >-- Silahkan pilih Kategori --</option>
                                        @foreach($kategoris as $item)
                                            <option wire:key="$item->id" value="{{$item->id}}">{{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <label for="">PIC</label>
                                    <select wire:model.lazy="pic_id" class="form-control" required>
                                        <option value="-1" >-- Pilih PIC --</option>
                                        @foreach($pics as $pic)
                                            <option wire:key="$pic->id" value="{{$pic->id}}" >{{$pic->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group" x-show="open" @click.away="open=false">
                                <div class="col-md-10">
                                    <input type="text" wire:model.lazy="kategori_name" class="form-control"
                                           placeholder="Kategori baru">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success" @click="open=false"
                                            wire:click.prevent="addKategori()">Tambah
                                    </button>

                                </div>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="">Lokasi Penyimpanan </label>
                                <input type="text" required name="lokasi_simpan" wire:model.lazy="lokasi_simpan"
                                       class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Tanggal Beli</label>
                                <input type="date" required class="form-control" wire:model.lazy="tgl_beli" name="tgl_beli">
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            $(document).ready(function () {
                //$("#sel_kategori").select2();
            });
            window.livewire.on('AsetsModal', (e) => {
                $("#AsetsModal").modal(e);
            });
            window.livewire.on('logs', (e) => {
                console.log(e);
            });
        </script>
    @endpush
</div>
