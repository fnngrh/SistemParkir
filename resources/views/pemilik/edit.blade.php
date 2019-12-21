@extends ('base')
@section ('konten')


<div class="container">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="{{route('pemilik.update',$pemilik->id_pemilik)}}" method="POST">
                @method('PUT')
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama pemilik">
                        </br>
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan alamat">
                        </br>
                        <label for="exampleInputEmail1">No Telp</label>
                        <input type="text" name="telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan no telp">
                        </br>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
                  

@endsection