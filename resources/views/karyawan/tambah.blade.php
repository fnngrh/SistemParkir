@extends ('base')
@section ('konten')

<div class="container">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="{{route('karyawan.store')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Karyawan</label>
                        <input type="text" name="nama_karyawan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama anda">
                        </br>
                        <label for="exampleInputEmail1">Lokasi Pos</label>
                        <input type="text" name="lokasi_pos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </br>
                        <label for="exampleInputEmail1">Jadwal Shift</label>
                        <select name="jadwal_shift" class="form-control" id="exampleInputEmail1">
                            @foreach($shift as $value)
                            <option value="{{$value->id_shift}}">{{$value->jadwal_shift}}</option>
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