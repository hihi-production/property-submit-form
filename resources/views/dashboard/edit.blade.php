@extends('dashboard.index')
@section('content')
    

<section class="section">
    <div class="section-header ">
      <h4>Edit Kontrakan</h4>
      
    </div>

    <div class="section-body">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Edit Kontrakan</h4>
              </div>
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="namaKontrakan">Nama Kontrakan</label>
                    <input type="text" class="form-control" id="namaKontrakan" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="namaOwner">Nama Owner</label>
                    <input type="text" class="form-control" id="namaOwner" >
                  </div>
                  <div class="form-group col-md-4">
                    <label>No HP</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-phone"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number">
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>Alamat</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-map-marker-alt"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="jenisKontrakan">Jenis Kontrakan</label>
                    <input type="text" class="form-control" id="jenisKontrakan" >
                  </div>
                  <div class="form-group col-md-4">
                    <label>Range Harga</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-dollar-sign"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Keterangan Tambahan</label>
                  <textarea class="form-control"></textarea>
                </div>
                <button class="btn btn-primary">SAVE</button>
              </div>
             
            </div>
          </div>
  
        </div>
      </div>
      
      
    </div>
</section>
@endsection