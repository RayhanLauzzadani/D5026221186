@extends('master3')
@section('title','Database_Pegawai')

@section('judul_halaman')
	<h3>Data Nilai Kuliah</h3>
 
	<a href="/nilaikuliah/tambah"> + Tambah Nilai Baru</a>
	
	<br/>
	<br/>
 @endsection

 @section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->NRP }}</td>
			<td>{{ $k->NilaiAngka }}</td>
			<td>{{ $k->SKS }}</td>
            <td>
            @if ( $k->NilaiAngka >= 81) 
                A
            @elseif ($k->NilaiAngka >= 61 && $k->NilaiAngka <= 80) 
                B
            @elseif ($k->NilaiAngka >= 41 && $k->NilaiAngka <= 60) 
                C
            @else
                D
            @endif
            </td>
            <td>
                {{$k->SKS * $k->NilaiAngka}}
            </td>
            
			
		</tr>
		@endforeach
	</table>

 @endsection