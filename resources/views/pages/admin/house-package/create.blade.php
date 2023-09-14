@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket house</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route ('house-package.store')}}" method="POST">
              @csrf
                <div class="form-group">
                  <label for="title">Judul</label>
                  <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ old('title') }}">
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <input type="text" class="form-control" name="tipe" placeholder="Tipe" value="{{ old('tipe') }}">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="form-group">
                            <label for="location">Lokasi</label>
                            <input type="text" class="form-control" name="location" placeholder="Lokasi" value="{{ old('location') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="form-group">
                            <label for="cities">Area</label>
                            <select name="cities" id="cities" class="form-control">
                                <option value="Semarang">Semarang</option>
                                <option value="Yogyakarta">Yogyakarta</option>
                                <option value="Solo">Solo</option>
                                <option value="Tegal">Tegal</option>
                                <option value="Purwokerto">Purwokerto</option>
                                <option value="Kudus">Kudus</option>
                                <option value="Magelang">Magelang</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="maps">Maps</label>
                            <input type="text" class="form-control" name="maps" placeholder="url maps" value="{{ old('maps') }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="about">Deskripsi</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">{{old('about')}}</textarea>
                </div> 
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="bedrooms">Kamar Tidur</label>
                            <input type="number" class="form-control" name="bedrooms" placeholder="Kamar Tidur" value="{{ old('bedrooms') }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="bathups">Kamar Mandi</label>
                            <input type="number" class="form-control" name="bathups" placeholder="Kamar Mandi" value="{{ old('bathups') }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="doors">Pintu</label>
                            <input type="number" class="form-control" name="doors" placeholder="Pintu" value="{{ old('doors') }}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="living">Ruang Tamu</label>
                            <input type="number" class="form-control" name="living" placeholder="Ruang Tamu" value="{{ old('living') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="building_area">Luas Bangunan M<sup>2</sup></label>
                            <input type="number" class="form-control" name="building_area" placeholder="Luas Bangunan" value="{{ old('building_area') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="surface_area">Luas Tanah M<sup>2</sup></label>
                            <input type="number" class="form-control" name="surface_area" placeholder="Luas Tanah" value="{{ old('surface_area') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="total_units">Total Unit</label>
                            <input type="number" class="form-control" name="total_units" placeholder="Total Unit" value="{{ old('total_units') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="remain_units">Sisa Unit</label>
                            <input type="number" class="form-control" name="remain_units" placeholder="Sisa Unit" value="{{ old('remain_units') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="project_facilities">Fasilitas Proyek</label>
                            <textarea name="project_facilities" rows="5" class="d-block w-100 form-control">{{old('project_facilities')}}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="supporting_facilities">Fasilitas Penunjang</label>
                            <textarea name="supporting_facilities" rows="5" class="d-block w-100 form-control">{{old('supporting_facilities')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="point_of_interest">Point of Interest</label>
                    <textarea name="point_of_interest" rows="5" class="d-block w-100 form-control">{{old('point_of_interest')}}</textarea>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="name_person">Nama Orang</label>
                            <input type="text" class="form-control" name="name_person" placeholder="Nama Orang" value="{{ old('name_person') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="number" class="form-control" name="no_hp" placeholder="No Hp" value="{{ old('no_hp') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="lowest_price">Harga Termurah</label>
                            <input type="number" class="form-control" name="lowest_price" placeholder="Harga Termurah" value="{{ old('lowest_price') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="highest_price">Harga Termahal</label>
                            <input type="number" class="form-control" name="highest_price" placeholder="Harga Termahal" value="{{ old('highest_price') }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
        

</div>
<!-- /.container-fluid -->
@endsection