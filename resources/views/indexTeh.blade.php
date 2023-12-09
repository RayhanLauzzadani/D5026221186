@extends('master3')
@section('title', 'Database Teh')

@section('judul_halaman')
    <h2>Data Teh</h2>

    <a href="/teh/tambah" class="btn btn-primary"> + Tambah Teh baru</a>
    <br>
@endsection
    
@section('konten')
    <p>Cari Data Teh :</p>
    <form action="/teh/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari teh berdasarkan merk .." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary ml-3">
    </form>
		
	<br/>
    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Teh</th>
            <th>Merk Teh</th>
            <th>Stock Teh</th>
            <th>Ketersediaan Teh</th>
            <th>Opsi</th>
        </tr>
        @foreach ($teh as $t)
            <tr>
                <td>{{ $t ->kodeteh}}</td>
                <td>{{ $t ->merkteh}}</td>
                <td>{{ $t ->stockteh}}</td>
                <td class="text-center">
                    <input type="checkbox" name="is_checked" {{ $t->tersedia == 'y' ? 'checked' : '' }} disabled>
                </td>
                <td>
					<a href="/teh/view/{{ $t->kodeteh }}" class="btn btn-success">View</a>
					|
                    <a href="/teh/edit/{{ $t->kodeteh }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/teh/hapus/{{ $t->kodeteh }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection