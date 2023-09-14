@extends('layouts.admin')

@section('title')
    House Package
@endsection

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">House Package</h1>
        <a href="{{route('house-package.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"> Tambah House Package</i>
        </a>
    </div>

    <div class="row">
        <div class="col card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" collspasing="0">
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Area</th>
                                <th>Tipe</th>
                                <th>Unit</th>
                                <th>Contact Person</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->title}}</td>
                                <td>{{ $item->cities}}</td>
                                <td>{{ $item->tipe}}</td>
                                <td>
                                    Total:&nbsp;{{ $item->total_units}} <br>
                                    Sisa &nbsp;:&nbsp;{{ $item->remain_units}} 
                                </td>
                                <td>
                                    Nama:&nbsp;{{ $item->name_person}} <br>
                                    No HP:&nbsp;{{ $item->no_hp}} 
                                </td>
                                <td>
                                    @if ($item->lowest_price > 1000)
                                    {{ $item->lowest_price/1000}} Miliar
                                    @else
                                    {{ $item->lowest_price}} Juta
                                    @endif
                                    s/d
                                    @if ($item->highest_price > 1000)
                                    {{ $item->highest_price/1000}} Miliar
                                    @else
                                    {{ $item->highest_price}} Juta
                                    @endif
                                </td>
                                {{-- <td>{{ $item->lowest_price}} Juta s/d {{ $item->highest_price/1000}} Miliar</td> --}}
                                <td>
                                    <a href="{{route('house-package.edit', $item->id)}}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i></a>
                                    <form action="{{route('house-package.destroy', $item->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="11" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody> 
                    </table>
                    <div class="d-flex justify-content-center mt-5">
                        {!! $items->onEachSide(2)->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
        

</div>
<!-- /.container-fluid -->
@endsection