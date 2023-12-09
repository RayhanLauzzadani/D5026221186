@extends('master3')
@section('konten')
    <h3>Data Teh</h3>

    <a href="/teh"> Kembali</a>

    <br />
    <br />
    @foreach ($teh as $t)
        <form action="/teh/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->kodeteh }}">
            <div class ="form-group">
                <label for = "merkteh" class = "col-sm-2 control-label">Merk Teh</label>
                <div class = "col-sm-10">
                    <input required="required" name="merkteh" type = "text" class = "form-control" id = "merkteh" value="{{$t->merkteh}}">
                </div>
            </div>
            <div class="form-group">
                <label for="stockteh" class = "col-sm-2 control-label">Stock Teh</label>
                <div class="col-sm-10">
                    <input required="required" name="stockteh" type ="number" class ="form-control" id="stockteh" value="{{$t->stockteh}}">
                </div>
            </div>
            <div class="form-group d-flex flex-row">
                <input class="col-1"  type="checkbox" id="tersedia"  name="is_checked" {{ $t->tersedia == 'y' ? 'checked' : '' }}>
                <label for="tersedia" class="control-label">Ketersedian barang</label>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection