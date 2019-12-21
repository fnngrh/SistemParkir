@extends ('base')
 @section ('konten')

 <div class="container">
                <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                  <div class="card-body">
                  <div class="add-items d-flex">
                  <a href="{{route('shift.create')}}" class="float-right btn btn-primary btn-sm">Tambah Data </a>
                    
                  </div>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> Id Shift </th>
                          <th>Jadwal Shift</th>
                          <th> Hari </th>
                          <th> Jam </th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($shift as $value)
                        <tr>
                        <td>{{$value->id_shift}}</td>
                        <td>{{$value->jadwal_shift}}</td>
                        <td>{{$value->hari}}</td>
                        <td>{{$value->jam}}</td>
                        <td width="1">
                            <div class="btn-group">
                              <a href="{{route('shift.edit',$value->id_shift)}}" class="btn btn-success btn-sm far fa-edit"></a>
                            </div>
                        </td>
                        <td width="1">
                            <form action="{{route('shift.destroy',$value->id_shift)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-sm far fa-trash-alt" type="submit"></button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
</div>

 @endsection
