@extends ('base')
@section ('konten')

<div class="container">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="{{route('kendaraan.update',$kendaraan->id_kendaraan)}}" method="POST">
                @method('PUT')
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Polisi</label>
                        <input type="text" name="no_polisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan no polisi">
                        </br>
                        <label for="exampleInputEmail1">Nama Kendaraan</label>
                        <input type="text" name="nama_kendaraan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan merk kendaraan">
                        </br>
                        <label for="exampleInputEmail1">Jenis Kendaraan</label>
                        <select name="jenis_kendaraan" class="form-control" id="exampleInputEmail1">
                           
                            <option value="Motor">Motor</option>
                            <option value="Mobil">Mobil</option>
                            
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
                  

@endsection