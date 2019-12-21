@extends ('base')
@section ('konten')

<div class="container">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="{{route('karyawan.update',$karyawan->id_karyawan)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                        <label for="exampleInputEmail1">Nama Karyawan</label>
                        <input type="text" name="nama_karyawan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama anda">
                        </br>
                        <label for="exampleInputEmail1">Lokasi Pos</label>
                        <input type="text" name="lokasi_pos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </br>
                        
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
                  

@endsection