@extends('layouts.detail')

@section('title')
    {{ $item->title }}
@endsection

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 p-0 mt-3">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Details {{ $item->tipe }}
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-4 mr-auto d-sm-block d-flex p-0">
                    <div class="details-house text-center">
                        <div class="title-details"><span>{{ $item->title }}</span></div>
                        <p>{{ $item->cities }}, Indonesia</p>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 pl-lg-0">
                    <div class="card-left">
                        @if ($item->galleries->count())

                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{Storage::url($item->galleries->first()->image)}}" alt="" class="xzoom" id="xzoom-default" xoriginal="{{Storage::url($item->galleries->first()->image)}}">
                            </div>
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $gallery)
                                <a href="{{Storage::url($gallery->image)}}">
                                    <img src="{{Storage::url($gallery->image)}}" alt="" class="xzoom-gallery" width="128" xpreview="{{Storage::url($gallery->image)}}">
                                </a>
                                @endforeach
                            </div>
                        </div>

                        @endif
                        <h2>Deskripsi</h2>
                        <p>{!! $item->about !!}</p>
                        <div class="features row mt-5">
                            <div class="col-md-3 text-center">
                                <i class="fas fa-bed fa-2x"></i>
                                <p class="mt-1"><span style="color: #000;">{{ $item->bedrooms }}</span> Kamar Tidur</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <i class="fas fa-bath fa-2x"></i>
                                <p class="mt-1"><span style="color: #000;">{{ $item->bathups }}</span> Kamar Mandi</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <i class="fas fa-door-open fa-2x"></i>
                                <p class="mt-1"><span style="color: #000;">{{ $item->doors }}</span> Pintu</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <i class="fas fa-couch fa-2x"></i>
                                <p class="mt-1"><span style="color: #000;">{{ $item->living }}</span> Ruang Tamu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Spesifikasi Rumah</h2>
                        <hr>
                        <table class="house-informations">
                            <tr>
                                <th>
                                    Tipe
                                </th>
                                <td class="text-right">
                                    {{ $item->tipe }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Luas Bangunan
                                </th>
                                <td class="text-right">
                                    {{ $item->building_area }} M<sup>2</sup>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Luas Tanah
                                </th>
                                <td class="text-right">
                                    {{ $item->surface_area }} M<sup>2</sup>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Total Unit
                                </th>
                                <td class="text-right">
                                    {{ $item->total_units }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Sisa Unit
                                </th>
                                <td class="text-right">
                                    {{ $item->remain_units }}
                                </td>
                            </tr>
                        </table>
                        <h2>Fasilitas & Lokasi</h2>
                        <hr>
                        <table class="house-informations">
                            <tr>
                                <th>
                                    Lokasi
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $item->location }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Fasilitas Proyek
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $item->project_facilities }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Fasilitas Penunjang
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $item->supporting_facilities }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Point of Interest
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    {{ $item->point_of_interest }}
                                </td>
                            </tr>
                        </table>
                    </table>
                    <h2>Informasi</h2>
                    <hr>
                    <table class="house-informations">
                        <tr>
                            <th>
                                Kontak
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-phone fa-md" style="color: #000;"></i>
                                {{ $item->name_person }}&nbsp; - &nbsp;
                                {{ $item->no_hp }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Harga
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <i class="fas fa-dollar-sign fa-md" style="color: #000;"></i>
                                @if ($item->lowest_price > 1000)
                                    Rp. {{ $item->lowest_price/1000}} Miliar
                                @else
                                    Rp. {{ $item->lowest_price}} Juta
                                @endif
                                    &nbsp; - &nbsp;
                                @if ($item->highest_price > 1000)
                                    Rp. {{ $item->highest_price/1000 }} Miliar
                                @else
                                    Rp. {{ $item->highest_price }} Juta
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="text-center">
                                Maps
                            </th>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <a href="{{ $item->maps }}" target="_blank"><i class="fas fa-map-marker fa-lg" style="color: #000;"></i>
                                </a>
                            </td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row py-2">
                <div class="col-md-10">
                    <h2>Rumah lainnya</h2>
                </div>
            </div>
            <div class="section-random-house row justify-content-center">
                @foreach ($random as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-random d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image):''}}')">
                    </div>
                    <div class="random-title"><a href="{{ route('detail', $item->slug)}}">{{ \Illuminate\Support\Str::limit($item->title, 22, '..')}}</a></div>
                    <div class="random-subtitle">{{ $item->cities }}, Indonesia</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url ('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
<script src="{{ url ('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.xzoom,.xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush

@push('addon-style')
    
@endpush