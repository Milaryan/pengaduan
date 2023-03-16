<div class="modal fade" id="show{{ $item->nik }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Detail Data {{ $menu }}</h4>
            </div>
            <div class="modal-body" style="text-align: left">
                <div class="row">
                    <div class="col-md-6">
                        <h4>ID Pengaduan</h4>
                        <strong>{{ $item->id_pengaduan }}</strong>
                    </div>
                    <div class="col-md-6">
                        <h4>Tanggal Pengaduan</h4>
                        <strong>{{ $item->tgl_pengaduan }}</strong>
                    </div>
                    <div class="col-md-6">
                        <h4>NIK</h4>
                        <strong>{{ $item->nik }}</strong>
                    </div>
                    <div class="col-md-6">
                        <h4>Nama</h4>
                        <strong>{{ $item->nama }}</strong>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
