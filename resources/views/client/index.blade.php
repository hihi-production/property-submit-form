@extends('layouts.landing') @section('content')

<div class="main-container">
  <div class="container-fluid">
    <div class="row">
      {{-- Form Section --}}
      <div class="col-7">
        <h2 class="text-center form-title-landing">Kontrakin Management System</h2>
        <div class="container">
          <form>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label for="namaKontrakan">Nama Kontrakan</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="namaKontrakan" />
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="namaOwner">Nama Owner</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="namaOwner" />
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="noHP">Email address</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="noHP" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label for="alamatKontrakan">Alamat Kontrakan</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="alamatKontrakan" />
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="jenisKontrakan">Jenis Kontrakan</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="jenisKontrakan"/>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label for="rangeHarga">Range Harga</label>
                  <input type="text" class="rounded-lg shadow p-3 bg-white rounded form-control" id="rangeHarga"/>
                </div>
              </div>
            </div>
            <div class="form-group ">
                <label for="keteranganTambahan">Keterangan Hindu</label>
                <textarea class="rounded-lg shadow p-3 bg-white rounded form-control" id="keteranganTambahan" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success">Success</button>
            </div>
            
          </form>
        </div>
      </div>

      {{-- List Section --}}
      <div class="col-5 landing-list">
        <p class="text-center btn-list">
          <button type="button" class="btn btn-primary" >LIST KONTRAKAN</button>
        </p>
        <p class="text-center">  
          <img src="{{asset('img/empty.svg')}}" alt="" srcset="" width="385px" class="img-fluid">
        </p>
      </div>
    </div>
  </div>
</div>

@endsection
