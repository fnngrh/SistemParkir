@extends ('base')
 @section ('konten')

                <div class="container">
                 <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                  <div class="card-body">
                  <div class="add-items d-flex">
                  <a href="{{route('pemilik.create')}}" class="float-right btn btn-primary btn-sm">Tambah Data </a>
                    
                  </div>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> Id_Pemilik </th>
                          <th> Nama Pemilik </th>
                          <th> Alamat </th>
                          <th> Telepon </th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($pemilik as $value)
                        <tr>
                        <td>{{ $value->id_pemilik}} </td>
                        <td>{{ $value->nama_pemilik}}</td>
                        <td>{{ $value->alamat}} </td>
                        <td>{{ $value->telp}}</td>
                        <td width="1">
                            <div class="btn-group">
                              <a href="{{route('pemilik.edit',$value->id_pemilik)}}" class="btn btn-success btn-sm far fa-edit"></a>
                            </div>
                          </td>
                          <td width="1">
                            <form action="{{route('pemilik.destroy',$value->id_pemilik)}}" method="POST">
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
