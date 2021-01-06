<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="row btn-group">
        <a name="" id="" class="btn btn-primary" href="#" role="button" wire:click.prevent="openModal">Tambah Asets</a>
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
                                    <input type="text" class="form-control" name="name" wire:model.lazy="name">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label>Detail Asets:</label>
                                    <textarea name="detail" wire:model.lazy="detail" id="" class="form-control"
                                              rows="3"></textarea>
                                </div>
                            </div>

                            <div class="row form-group" x-data="{open: false}">
                                <div class="col-md-6">
                                    <label for="">Kategori <a @click="open=true"><i
                                                class="fa fa-plus-circle"></i></a></label>
                                    <select class="form-control" name="kategori_id" id="sel_kategori"
                                            wire:model.lazy="kategori_id">
                                        @foreach($kategoris as $item)
                                            <option
                                                value="{{ $item->id }}" {{ $kategori_id == $item->id ? 'selected="selected': '' }} >{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="row" x-show="open" @click.away="open=false">
                                        <div class="col-md-10"><input type="text" wire:model.lazy="kategori_name"
                                                                      class="form-control"></div>
                                        <div class="col-md-2"><a @click="open=false" wire:click.prevent="addKategori()"><i
                                                    class="fa fa-plus-circle"></i></a></div>

                                    </div>

                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="">Lokasi Penyimpanan </label>
                                    <input type="text" name="lokasi_simpan" wire:model.lazy="lokasi_simpan"
                                           class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tanggal Beli</label>
                                    <input type="date" class="form-control" wire:model.lazy="tgl_beli" name="tgl_beli">
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
    </div>
    @push('js')
        <script>
            $(document).ready(function () {
                //$("#sel_kategori").select2();
            });
            window.livewire.on('AsetsModal', (e) => {
                $("#AsetsModal").modal(e);
            });
        </script>
    @endpush
</div>
