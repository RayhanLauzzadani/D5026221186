@extends('master2')

@section('judul_halaman')
    <h3>View Pegawai</h3>
    <a href="/pegawai"> Kembali</a>

    <br />
    
    <br />
@endsection

@section('konten')
    <div class="container">
        <div class="mx-auto text-dark font-weight-bold">
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-white" style="height: 400px">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-9">
                            @foreach($pegawai as $p)
                            <form action="/pegawai/update" method="post" class="form-group flex-column">
                                {{ csrf_field() }}
                                <div class="form-group">                                   
                                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}" class="form-control">     
                                    <br/>Nama
                                </div>
                                <div class="form-group">
                                    <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control"> 
                                    <br/>Jabatan 
                                </div>
                                <div class="form-group">
                                    <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control"> 
                                    <br/>Umur
                                </div>
                                <div class="form-group">
                                    <input type="nurmbe" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control"> 
                                    <br/>Alamat 
                                </div>
                                <div class="form-group text-center">
                                    <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea><br/>                          
                                    <input type="submit" value="OK" class="btn btn-primary px-5 py-2">          
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
@endsection