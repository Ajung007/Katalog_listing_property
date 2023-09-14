@extends('layouts.detail')

@section('title')
    Contact Us
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
                                <a href="{{ route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Contact Us
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card card-details card-right">
                        <h2>Contact Us</h2>
                        <hr>
                        <table class="house-informations">
                            <tr>
                                <th>
                                    PT. Bank Mandiri
                                </th>
                            </tr>
                            <tr>
                                <th>
                                   <i class="fas fa-map-marker fa-md"></i> Jl. Mpu Tantular No 19 Lantai 2, Semarang 50137
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <i class="fas fa-phone fa-md"></i> (024)86403170
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    rmd.semarang@bankmandiri.co.id
                                </th>
                            </tr>
                        </table>
                        <hr>
                        <h2>Regional</h2>
                        <table class="house-informations">
                            <thead class="my-1">
                                <tr>
                                    <th>
                                        <hr>
                                        Area
                                        <hr>
                                    </th>
                                    <th>
                                        <hr>
                                        Alamat
                                        <hr>
                                    </th>
                                    <th>
                                        <hr>
                                        Email
                                        <hr>
                                    </th>
                                    <th>
                                        <hr>
                                        No Telpon
                                        <hr>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="p-3">
                                <tr class="my-1">
                                    <td>Semarang</td>
                                </tr>
                                <tr>
                                    <td>Yogyakarta</td>
                                </tr>
                                <tr>
                                    <td>Solo</td>
                                </tr>
                                <tr>
                                    <td>Tegal</td>
                                </tr>
                                <tr>
                                    <td>Purwokerto</td>
                                </tr>
                                <tr>
                                    <td>Kudus</td>
                                </tr>
                                <tr>
                                    <td>Magelang</td>
                                </tr>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>

</main>
@endsection