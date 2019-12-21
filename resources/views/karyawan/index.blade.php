@extends ('base')
 @section ('konten')

<div class="container">
 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="add-items d-flex">
                  <a href="{{route('karyawan.create')}}" class="float-right btn btn-primary btn-sm">Tambah Data </a>
                  </div>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> id Karyawan </th>
                          <th> Nama Karyawan</th>
                          <th> Lokasi Pos </th>
                          <th> Jadwal Shift </th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($karyawan as $value)
                        <tr>
                        <td>{{ $value->id_karyawan}} </td>
                          <td>{{ $value->nama_karyawan}}</td>
                          <td>{{ $value->lokasi_pos}}</td>
                          <td>{{ $value->jadwal_shift}} </td>
                          <td width="1">
                            <div class="btn-group">
                              <a href="{{route('karyawan.edit',$value->id_karyawan)}}" class="btn btn-success btn-sm far fa-edit"></a>
                            </div>
                          </td>
                          <td width="1">
                            <form action="{{route('karyawan.destroy',$value->id_karyawan)}}" method="POST">
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
