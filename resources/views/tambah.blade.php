@extends('master2')
 
@section('judul_halaman')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
@endsection

@section('konten')
<div class="container-fluid row d-flex flex-column">
	<div class="col-md-8">
		<form action="/pegawai/store" method="post" class = "form-horizontal">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="nama" class="control-label text-dark">Nama</label>				
				<input type="text" name="nama" required="required" class="form-control"> 			
			</div>
			<div class="form-group">
				<label for="jabatan" class="control-label text-dark">Jabatan</label>	 
				<input type="text" name="jabatan" required="required" class="form-control"> 
			</div>
			<div class="form-group">
				<label for="umur" class="control-label text-dark">Umur</label>	
				<input type="number" name="umur" required="required" class="form-control"> 
			</div>
			<div class="form-group">
				<label for="alamat" class="control-label text-dark">Alamat</label>	
				<textarea name="alamat" required="required" class="form-control"></textarea> 
			</div>
		</form>
	</div>
	<div class="col-md-2">
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</div>
</div>
@endsection