@extends ('base')
@section ('konten')

<div class="container">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="{{route('shift.update',$shift->id_shift)}}" method="POST">
                @method('PUT')
                @csrf
                    <div class="form-group">
                    <label for="exampleInputEmail1">Jadwal Shift</label>
                        <input type="text" name="jadwal_shift" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan jadwal shift">
                        </br>
                        <label for="exampleInputEmail1">Hari</label>
                        <input type="text" name="hari" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan hari">
                        </br>
                        <label for="exampleInputEmail1">Jam</label>
                        <input type="text" name="jam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan jam">
                        </br>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
                  

@endsection