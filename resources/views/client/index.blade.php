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
                  <input type="text" placeholder="Nama Kontrakan" class="rounded-lg shadow p-3 bg-white rounded form-control" id="namaKontrakan" />
                </div>
              </div>
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="namaOwner">Nama Owner</label>
                  <input type="text" placeholder="Nama Owner" class="rounded-lg shadow p-3 bg-white rounded form-control" id="namaOwner" />
                </div>
              </div>
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="noHP">Email address</label>
                  <input type="text" placeholder="Email" class="rounded-lg shadow p-3 bg-white rounded form-control" id="noHP" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="alamatKontrakan">Alamat Kontrakan</label>
                  <input type="text" placeholder="Alamat Kontrakan" class="rounded-lg shadow p-3 bg-white rounded form-control" id="alamatKontrakan" />
                </div>
              </div>
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="jenisKontrakan">Jenis Kontrakan</label>
                  <input type="text" placeholder="Jenis Kontrakan" class="rounded-lg shadow p-3 bg-white rounded form-control" id="jenisKontrakan"/>
                </div>
              </div>
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="form-group">
                  <label for="rangeHarga">Range Harga</label>
                  <input type="text" placeholder="range harga" class="rounded-lg shadow p-3 bg-white rounded form-control" id="rangeHarga"/>
                </div>
              </div>
            </div>
            <div class="form-group ">
                <label for="keteranganTambahan">Keterangan</label>
                <textarea placeholder="Keterangan" class="rounded-lg shadow p-3 bg-white rounded form-control" id="keteranganTambahan" rows="3"></textarea>
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
          <img class="card-img-top" src="https://images.unsplash.com/photo-1576941089067-2de3c901e126?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1143&q=80" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ruko</h5>
              <p class="card-text">Some quick example text to build on the Ruko and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" >
          <img class="card-img-top" src="https://images.unsplash.com/photo-1576941089067-2de3c901e126?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1143&q=80" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ruko</h5>
              <p class="card-text">Some quick example text to build on the Ruko and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" >
          <img class="card-img-top" src="https://images.unsplash.com/photo-1576941089067-2de3c901e126?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1143&q=80" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ruko</h5>
              <p class="card-text">Some quick example text to build on the Ruko and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card" >
          <img class="card-img-top" src="https://images.unsplash.com/photo-1576941089067-2de3c901e126?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1143&q=80" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ruko</h5>
              <p class="card-text">Some quick example text to build on the Ruko and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="banner">
      <div class="row">
        <div class="col-12">
          <div class="text-center">
            <h4>Punya Aset Tapi Kamu Bingung Manajemennya?<br>Di Kontrakin Aja</h4>
          <p>cara mudah mengiklankan kontrakan anda secara online</p>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
