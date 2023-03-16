<div class="modal fade" id="show{{ $item->id_petugas }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Detail Data {{ $menu }}</h4>
            </div>
            <div class="modal-body" style="text-align: left">
                <div class="row">
                    <div class="col-md-6">
                        <h4>ID Petugas</h4>
                        <strong>{{ $item->id_petugas }}</strong>
                    </div>
                    <div class="col-md-6">
                        <h4>Nama Petugas</h4>
                        <strong>{{ $item->nama_petugas }}</strong>
                    </div>
                    <div class="col-md-6">
                        <h4>Username</h4>
                        <strong>{{ $item->username }}</strong>
                    </div>
                    <div class="col-md-6">
                        <h4>No Telp</h4>
                        <strong>{{ $item->telp }}</strong>
                    </div>
                    <div class="col-md-6">
                        <h4>Alamat</h4>
                        <strong>{{ $item->alamat }}</strong>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
