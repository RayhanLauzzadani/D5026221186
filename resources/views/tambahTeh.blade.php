@extends('master3')
@section('konten')
    <h3>Data Teh</h3>

    <a href="/teh"> Kembali</a>

    <br />
    <br />

    <form action="/teh/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        
        <div class = "form-group">
            <label for = "merkteh" class = "col-sm-2 control-label">Merk Teh</label>
            <div class = "col-sm-10">
                <input required="required" name="merkteh" type = "text" class = "form-control" id = "merkteh"
                    placeholder = "Masukan merk teh ..">
            </div>
        </div>
        <div class = "form-group">
            <label for = "stockteh" class = "col-sm-2 control-label">Stock Teh</label>
            <div class = "col-sm-10">
                <input required="required" name="stockteh" type = "number" class = "form-control" id = "stockteh"
                    placeholder = "Masukan Jumlah stock teh ..">
            </div>
        </div>
        <div class = "form-group d-flex flex-row">
            <input class="col-1"  name="is_checked" type = "checkbox" id = "tersedia" value="Ketersediaan barang">
            <label for = "tersedia" class = "control-label">Ketersedian barang</label>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection