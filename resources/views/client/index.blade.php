@extends('layouts.landing') @section('content')

<div class="main-container">
  <div class="container-fluid">
    <div class="row">
      {{-- Form Section --}}
      <div class="col-lg-7 col-md-5 col-sm-12">
        <h2 class="text-center form-title-landing">Kontrakin Management System</h2>
        <div class="container">
          <form>
            <div class="row">
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="namaKontrakan">Nama Kontrakan</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="namaKontrakan" />
                </div>
              </div>
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="namaOwner">Nama Owner</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="namaOwner" />
                </div>
              </div>
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="noHP">Email address</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="noHP" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="alamatKontrakan">Alamat Kontrakan</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="alamatKontrakan" />
                </div>
              </div>
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="jenisKontrakan">Jenis Kontrakan</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="jenisKontrakan"/>
                </div>
              </div>
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="rangeHarga">Range Harga</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="rangeHarga"/>
                </div>
              </div>
            </div>
            <div class="form-group ">
                <label for="keteranganTambahan">Keterangan</label>
                <textarea class="rounded-lg shadow p-3 bg-white rounded form-control" id="keteranganTambahan" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success">Success</button>
            </div>
            
          </form>
        </div>
      </div>

      {{-- List Section --}}
      <div class="col-lg-5 col-md-5 col-sm-5 landing-list">
        <p class="text-center btn-list">
          <button type="button" class="btn btn-primary" >LIST KONTRAKAN</button>
        </p>
        <p class="text-center img-list">  
          <img src="{{asset('img/empty.svg')}}" alt="" srcset="" width="385px" class="img-fluid">
        </p>
      </div>
    </div>

    
    <div class="lists">
      <h3 style="text-bold">List Kontrakan Terbaru</h3>
      <p>cari rumah, ruko dan tanah yang sesuai</p>
      <div class="row ">
        
        <div class="col-3">
          <div class="card" >
          <img class="card-img-top" src="{{asset('img/eee.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ruko</h5>
              <p class="card-text">Some quick example text to build on the Ruko and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" >
          <img class="card-img-top" src="{{asset('img/eee.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ruko</h5>
              <p class="card-text">Some quick example text to build on the Ruko and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" >
          <img class="card-img-top" src="{{asset('img/eee.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ruko</h5>
              <p class="card-text">Some quick example text to build on the Ruko and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" >
          <img class="card-img-top" src="{{asset('img/eee.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ruko</h5>
              <p class="card-text">Some quick example text to build on the Ruko and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>

@endsection
