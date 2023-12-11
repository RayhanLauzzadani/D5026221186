@extends('master3')

@section('title', 'Kategori')

@section('konten')
<form action="/hasilcombo" method="POST">
    @csrf
    <div class="form-group">
        <label for="kategori">Pilih Kategori</label>
        <select name="kategori" id="kategori" class="form-control">
            @foreach($kategori as $kt)
                <option
                    value="{{ $kt->ID }}">{{ $kt->Nama }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">KIRIM</button>
</form>
@endsection