@extends('layouts.app')

@section('title')
    House Catalog
@endsection

@section('content')
<section class="section-header jumbotron">
    <div class="container row">
        <div class="jumbotron-banner col-sm-12 col-md-8 col-lg-6" data-aos="fade-up-right"
        data-aos-duration="500">
            <div class="title-header">KPR Mandiri </div>
            <div class="subtitle-header" style="color: #000000;">
                Pilihlah rumah impianmu, jadikanlah <br />
                masa tuamu menyenangkan dengan tinggal <br />
                di rumah impianmu.
            </div>
            <a href="#show" class="justify-content-center btn btn-show-me">Show Me</a>
            <div class="row">
                <div class="icon-sets col-lg-3 col-md-3 col-sm-2 mt-5 text-center" data-aos="fade-up"
                data-aos-duration="1000">
                    <i class="fas fa-home fa-md"></i>
                    <p class="mt-1">{{ $house }} <span style="color:rgb(100, 100, 248)9;"> Rumah</span></p>
                </div>
                <div class="icon-sets col-lg-3 col-md-3 col-sm-2 mt-5 text-center" data-aos="fade-up"
                data-aos-duration="1200">
                    <i class="fas fa-map-marker-alt fa-md"></i>
                    <p class="mt-1">7<span style="color:rgb(100, 100, 248)9;">  Kota</span></p>
                </div>
                <div class="icon-sets col-lg-3 col-md-3 col-sm-2 mt-5 text-center" data-aos="fade-up"
                data-aos-duration="1400">
                    <i class="fas fa-percent  fa-md"></i>
                    <p class="mt-1">4<span style="color:rgb(100, 100, 248)9;">  Promo</span></p>
                </div>
            </div>
        </div>
        <div class="jumbotron-image d-sm-none d-md-block col-md-4 col-lg-6 justify-content-center" data-aos="fade-up-left"
        data-aos-duration="500">
            <img src="{{ url('frontend/images/header1.jpg')}}" alt="" class="image-header">
        </div>
    </div>
</section>

<section class="section-most-picked" id="show">
        <h2 data-aos="fade-up" data-aos-delay="100">Terbaru</h2>
        <div class="most-content" data-aos="fade-up" data-aos-delay="200">

            @for ($i = 0; $i < 1; $i++)
            <div class="most-img" style="background-image: url('{{$most_header[$i]->galleries->count() ? Storage::url($most_header[$i]->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}');">
                <div class="most-title"><a href="{{ route('detail', $most_header[$i]->slug)}}">{{ $most_header[$i]->title}}</a></div>
                <div class="most-subtitle">{{ $most_header[$i]->cities}}, Indonesia</div>
            </div>
            @endfor
          

            <div class="most-img-option">
                <div class="img-1" style="background-image: url('{{$most_header[1]->galleries->count() ? Storage::url($most_header[1]->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}');" data-aos="fade-up" data-aos-delay="300">
                    <div class="most-title"><a href="{{ route('detail', $most_header[1]->slug)}}">{{ $most_header[1]->title}}</a></div>
                    <div class="most-subtitle">{{ $most_header[1]->cities}}, Indonesia</div>
                </div>
                <div class="img-2" style="background-image: url('{{$most_header[2]->galleries->count() ? Storage::url($most_header[2]->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}');" data-aos="fade-up" data-aos-delay="400">
                    <div class="most-title"><a href="{{ route('detail', $most_header[2]->slug)}}">{{ $most_header[2]->title}}</a></div>
                    <div class="most-subtitle">{{ $most_header[2]->cities}}, Indonesia</div>
                </div>

                <div class="img-3" style="background-image: url('{{$most_header[3]->galleries->count() ? Storage::url($most_header[3]->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}');" data-aos="fade-up" data-aos-delay="500">
                    <div class="most-title"><a href="{{ route('detail', $most_header[3]->slug)}}">{{ $most_header[3]->title}}</a></div>
                    <div class="most-subtitle">{{ $most_header[3]->cities}}, Indonesia</div>
                </div>
                <div class="img-4" style="background-image: url('{{$most_header[4]->galleries->count() ? Storage::url($most_header[4]->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}');" data-aos="fade-up" data-aos-delay="600">
                    <div class="most-title"><a href="{{ route('detail', $most_header[4]->slug)}}">{{ $most_header[4]->title}}</a></div>
                    <div class="most-subtitle">{{ $most_header[4]->cities}}, Indonesia</div>
                </div>

      

        
            </div>
        </div>
</section>
<main>
    <section class="section-category">
        <div class="container">
            @if ($semarang->count() > 0)
            <div class="row py-2" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-10">
                    <h2 >House at Semarang</h2>
                </div>
                <div class="show-all col-md-2 ml-auto py-2">  
                    <a href="{{ route ('cities', $semarang[0]->cities)}}">Liat Semua</a>
                </div>
            </div>
            <div class="section-random-house row justify-content-center">
                @php
                        $count=200
                @endphp
                @foreach ($semarang as $item)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $count }}">
                    <div class="card card-random d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}')">
                    </div>
                    <div class="random-title"><a href="{{ route('detail', $item->slug)}}">{{ \Illuminate\Support\Str::limit($item->title, 22, '..')}}</a></div>
                    <div class="random-subtitle">{{ $item->cities }}, Indonesia</div>
                </div>
                @php
                    $count+=100
                @endphp
                @endforeach
            </div>
            @else
            
            @endif
        </div>
        <div class="container">
            @if ($yogyakarta->count() > 0)
            <div class="row py-2" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-10">
                    <h2 >House at Yogyakarta</h2>
                </div>
                <div class="show-all col-md-2 ml-auto py-2">  
                    <a href="{{ route ('cities', $yogyakarta[0]->cities)}}">Liat Semua</a>
                </div>
            </div>
            <div class="section-random-house row justify-content-center">
                @php
                        $count=200
                @endphp
                @foreach ($yogyakarta as $item)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $count }}">
                    <div class="card card-random d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}')">
                    </div>
                    <div class="random-title"><a href="{{ route('detail', $item->slug)}}">{{ \Illuminate\Support\Str::limit($item->title, 22, '..')}}</a></div>
                    <div class="random-subtitle">{{ $item->cities }}, Indonesia</div>
                </div>
                @php
                    $count+=100
                @endphp
                @endforeach
            </div>
            @else
            
            @endif
        </div>
        <div class="container">
            @if ($solo->count() > 0)
            <div class="row py-2" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-10">
                    <h2 >House at Solo</h2>
                </div>
                <div class="show-all col-md-2 ml-auto py-2">  
                    <a href="{{ route ('cities', $solo[0]->cities)}}">Liat Semua</a>
                </div>
            </div>
            <div class="section-random-house row justify-content-center">
                @php
                        $count=200
                @endphp
                @foreach ($solo as $item)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $count }}">
                    <div class="card card-random d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}')">
                    </div>
                    <div class="random-title"><a href="{{ route('detail', $item->slug)}}">{{ \Illuminate\Support\Str::limit($item->title, 22, '..')}}</a></div>
                    <div class="random-subtitle">{{ $item->cities }}, Indonesia</div>
                </div>
                @php
                    $count+=100
                @endphp
                @endforeach
            </div>
            @else
            
            @endif
        </div>
        <div class="container">
            @if ($tegal->count() > 0)
            <div class="row py-2" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-10">
                    <h2 >House at Tegal</h2>
                </div>
                <div class="show-all col-md-2 ml-auto py-2">  
                    <a href="{{ route ('cities', $tegal[0]->cities)}}">Liat Semua</a>
                </div>
            </div>
            <div class="section-random-house row justify-content-center">
                @php
                        $count=200
                @endphp
                @foreach ($tegal as $item)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $count }}">
                    <div class="card card-random d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}')">
                    </div>
                    <div class="random-title"><a href="{{ route('detail', $item->slug)}}">{{ \Illuminate\Support\Str::limit($item->title, 22, '..')}}</a></div>
                    <div class="random-subtitle">{{ $item->cities }}, Indonesia</div>
                </div>
                @php
                    $count+=100
                @endphp
                @endforeach
            </div>
            @else
            
            @endif
        </div>
        <div class="container">
            @if ($purwokerto->count() > 0)
            <div class="row py-2" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-10">
                    <h2 >House at Purwokerto</h2>
                </div>
                <div class="show-all col-md-2 ml-auto py-2">  
                    <a href="{{ route ('cities', $purwokerto[0]->cities)}}">Liat Semua</a>
                </div>
            </div>
            <div class="section-random-house row justify-content-center">
                @php
                        $count=200
                @endphp
                @foreach ($purwokerto as $item)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $count }}">
                    <div class="card card-random d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}')">
                    </div>
                    <div class="random-title"><a href="{{ route('detail', $item->slug)}}">{{ \Illuminate\Support\Str::limit($item->title, 22, '..')}}</a></div>
                    <div class="random-subtitle">{{ $item->cities }}, Indonesia</div>
                </div>
                @php
                    $count+=100
                @endphp
                @endforeach
            </div>
            @else
            
            @endif
        </div>
        <div class="container">
            @if ($kudus->count() > 0)
            <div class="row py-2" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-10">
                    <h2 >House at Kudus</h2>
                </div>
                <div class="show-all col-md-2 ml-auto py-2">  
                    <a href="{{ route ('cities', $kudus[0]->cities)}}">Liat Semua</a>
                </div>
            </div>
            <div class="section-random-house row justify-content-center">
                @php
                        $count=200
                @endphp
                @foreach ($kudus as $item)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $count }}">
                    <div class="card card-random d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}')">
                    </div>
                    <div class="random-title"><a href="{{ route('detail', $item->slug)}}">{{ \Illuminate\Support\Str::limit($item->title, 22, '..')}}</a></div>
                    <div class="random-subtitle">{{ $item->cities }}, Indonesia</div>
                </div>
                @php
                    $count+=100
                @endphp
                @endforeach
            </div>
            @else
            
            @endif
        </div>
        <div class="container">
            @if ($magelang->count() > 0)
            <div class="row py-2" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-10">
                    <h2 >House at Magelang</h2>
                </div>
                <div class="show-all col-md-2 ml-auto py-2">  
                    <a href="{{ route ('cities', $magelang[0]->cities)}}">Liat Semua</a>
                </div>
            </div>
            <div class="section-random-house row justify-content-center">
                @php
                        $count=200
                @endphp
                @foreach ($magelang as $item)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $count }}">
                    <div class="card card-random d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image):'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}')">
                    </div>
                    <div class="random-title"><a href="{{ route('detail', $item->slug)}}">{{ \Illuminate\Support\Str::limit($item->title, 22, '..')}}</a></div>
                    <div class="random-subtitle">{{ $item->cities }}, Indonesia</div>
                </div>
                @php
                    $count+=100
                @endphp
                @endforeach
            </div>
     
            
            @endif
        </div>
    </section>

</main>
@endsection