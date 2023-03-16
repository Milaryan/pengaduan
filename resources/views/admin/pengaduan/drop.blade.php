<div class="modal fade" id="drop{{ $item->nik }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
            </div>
            <div class="modal-body">
                Yakin Ingin Menghapus : {{ $item->nama }} ?
            </div>
            <div class="modal-footer">
                <form action="{{ route('dropmasyarakat', $item->nik) }}" method="get">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger text-white">Hapus!</button>
                </form>
            </div>
        </div>
    </div>
</div>
