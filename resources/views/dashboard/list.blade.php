@extends('dashboard.index')
@section('content')
    

<section class="section">
    <div class="section-header card-header">
        <h4>List Kontrakan</h4>
    </div>

    <div class="section-body">
      <div class="container">
        <div class="card">
          <div class="card-header">
            <h4>List Kontrakan</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-md">
                <tbody><tr>
                  <th>#</th>
                  <th>Nama Kontrakan</th>
                  <th>Nama Owner</th>
                  <th>No HP</th>
                  <th>Alamat Kontrakan</th>
                  <th>Jenis Kontrakan</th>
                  <th>Range Harga</th>
                  <th>Keterangan Tambahan</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Horizon Residence</td>
                  <td>Steve</td>
                  <td>+62 82266085832</td>
                  <td>Jl.Uluwatu No.113x</td>
                  <td>Ruko</td>
                  <td>50Jt-100Jt</td>
                  <td>Lokasi Strategis</td>
                  <td>
                    <figure>
                      <div class="buttons">
                      <a href="{{route('dashboard.edit')}}" class="btn btn-warning">EDIT</a>
                      </div>
                    </figure>
                    <figure>
                      <div class="buttons">
                        <a href="#" class="btn btn-danger">DELETE</a>
                      </div>
                    </figure>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Horizon Residence</td>
                  <td>Steve</td>
                  <td>+62 82266085832</td>
                  <td>Jl.Uluwatu No.113x</td>
                  <td>Ruko</td>
                  <td>50Jt-100Jt</td>
                  <td>Lokasi Strategis</td>
                  <td>
                      <figure>
                        <div class="buttons">
                          <a href="#" class="btn btn-warning">EDIT</a>
                        </div>
                      </figure>
                      <figure>
                        <div class="buttons">
                          <a href="#" class="btn btn-danger">DELETE</a>
                        </div>
                      </figure>
                  </td>
                </tr>

              </tbody></table>
            </div>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
        
    </div>
</section>
@endsection