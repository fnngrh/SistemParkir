@extends ('base')
@section ('konten')
<div class="container">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="{{route('tempat_parkir.store')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Polisi</label>
                        <select name="no_polisi" class="form-control" id="exampleInputEmail1">
                            @foreach($array as $value)
                            <option value="{{$value->id_kendaraan}}">{{$value->no_polisi}}</option>
                            @endforeach
                        </select>
                        </br>
                        <label for="exampleInputEmail1">Waktu Masuk</label>
                        <input type="time" name="waktu_masuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </br>
                        <label for="exampleInputEmail1">Waktu Keluar</label>
                        <input type="time" name="waktu_keluar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </br>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>      

@endsection