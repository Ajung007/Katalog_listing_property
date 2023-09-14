@extends('layouts.detail')

@section('title')
    Browse Rumah
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
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Category
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    <section class="section-browse-content">
        <div class="container">
            <div class="section-browse-house row justify-content-center">
                @forelse ($browse as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-browse d-flex flex-column" style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image):''}}')">
                    </div>
                    <div class="browse-title"><a href="{{ route('detail', $item->slug)}}">{{ \Illuminate\Support\Str::limit($item->title, 22, '..')}}</a></div>
                    <div class="browse-subtitle">{{ $item->cities }}, Indonesia</div>
                </div>
                @empty
                    <div class="col mt-5 text-center p-5">
                        <img src="{{ url('/frontend/images/no_data.svg') }}" alt="" width="277px" >
                        <h3 class="mt-5">No Data</h3>
                    </div>
                @endforelse
            </div>
            <div class="d-flex justify-content-center mt-3">
                {!! $browse->onEachSide(2)->links() !!}
            </div>
        </div>
    </section>
</section>

</main>
@endsection