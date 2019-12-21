@extends ('base')
 @section ('konten')

 <div class="container">
              <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                  <div class="card-body">
                  <div class="add-items d-flex">
                  <a href="{{route('kendaraan.create')}}" class="float-right btn btn-primary btn-sm">Tambah Data </a>
                    
                  </div>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> id Kendaraan </th>
                          <th> No Polisi </th>
                          <th> Nama Kendaraan </th>
                          <th> Nama Pemilik </th>
                          <th> Jenis Kendaraan </th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($kendaraan as $value)
                        <tr>
                        <td>{{ $value->id_kendaraan}} </td>
                        <td>{{ $value->no_polisi}}</td>
                        <td>{{ $value->nama_kendaraan}}</td>
                        <td>{{ $value->nama_pemilik}}</td>
                        <td>{{ $value->jenis_kendaraan}} </td>
                        <td width="1">
                            <div class="btn-group">
                              <a href="{{route('kendaraan.edit',$value->id_kendaraan)}}" class="btn btn-success btn-sm far fa-edit"></a>
                            </div>
                          </td>
                          <td width="1">
                            <form action="{{route('kendaraan.destroy',$value->id_kendaraan)}}" method="POST">
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
