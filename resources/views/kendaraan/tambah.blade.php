@extends ('base')
@section ('konten')

<div class="container">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="{{route('kendaraan.store')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Polisi</label>
                        <input type="text" name="no_polisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nomor polisi">
                        </br>
                        <label for="exampleInputEmail1">Nama Kendaraan</label>
                        <input type="text" name="nama_kendaraan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan merk kendaraan">
                        </br>
                        <label for="exampleInputEmail1">Jenis Kendaraan</label>
                        <select name="jenis_kendaraan" class="form-control" id="exampleInputEmail1">
                           
                            <option value="Motor">Motor</option>
                            <option value="Mobil">Mobil</option>
                            
                        </select>
                        </br>
                        <label for="exampleInputEmail1">Nama Pemilik</label>
                        <select name="nama_pemilik" class="form-control" id="exampleInputEmail1">
                            @foreach($array as $value)
                            <option value="{{$value->id_pemilik}}">{{$value->nama_pemilik}}</option>
                            @endforeach
                        </select>
                        </br>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
                  

@endsection