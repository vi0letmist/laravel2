<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Peringatan</h4>
        </div>
        <form action="{{$url}}" method="post">
            <div class="modal-body text-center">
                <span class="fa fa-exclamation-triangle fa-5x" style="color: orange;"></span>
                <input type="hidden" name="_method" value="DELETE">
                <h3>Apakah anda yakin akan menghapus {{$hal}}?</h3>
                {!! csrf_field() !!}
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger waves-effect">HAPUS</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">BATAL</button>
            </div>
        </form>
    </div>
</div>
