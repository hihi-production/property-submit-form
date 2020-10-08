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
                    <label for="noHpOwner">No HP Owner</label>
                    <input type="text" class="form-control" id="noHpOwner" >
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="alamatKontrakan">Alamat Kontrakan</label>
                    <input type="text" class="form-control" id="alamatKontrak" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="jenisKontrakan">Jenis Kontrakan</label>
                    <input type="text" class="form-control" id="jenisKontrakan" >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="rangeHarga">Range Harga</label>
                    <input type="text" class="form-control" id="rangeHarga" >
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