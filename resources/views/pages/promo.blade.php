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
                                Promo
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col">
                
                        <h3>Suku Bunga KPR</h3>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered border-secondary">
                                <thead>
                                    <tr>
                                      <th>Kategori Bunga</th>
                                      <th>Suku Bunga Fixed*</th>
                                      <th>Minumum Tenor</th>
                                      <th>Peruntukan</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td rowspan="4">Super Promo</td>
                                      <td>2.55% fixed 1 tahun</td>
                                      <td>12 tahun</td>
                                      <td rowspan="4">
                                        <ol class="numbered">
                                            <li>Pembelian properti baru dari proyek pilihan</li>
                                            <li>Pembelian properti baru dari broker pilihan</li>
                                            <li>Pembelian rumah baru/bekas/take over dari bank lain</li>
                                            <li>Pembelian oleh nasabah private dan prioritas bank mandiri</li>
                                            <li>Pembelian properti dari channel digital antara lain Aplikasi rumah idamanku, mandiri property online</li>
                                          </ol>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>3.45 fidex 3 tahun</td>
                                      <td>15 tahun</td>
                                    </tr>
                                    <tr>
                                      <td>4.55% fixed 5 tahun</td>
                                      <td>15 tahun</td>
                                    </tr>
                                    <tr>
                                      <td>5.55% fixed 5 tahun</td>
                                      <td>12 tahun</td>
                                    </tr>
                                    <tr>
                                      <td>Angsuran Tetap Fixed 10 Tahun</td>
                                      <td>7.88% fixed 10 tahun</td>
                                      <td>12 tahun</td>
                                      <td>Untuk pengajuan KPR baik untuk New Booking, Take Over, dan Top up</td>
                                    </tr>
                                    <tr>
                                      <td>Suku Bunga Fixed Berjenjang<br>Hingga 10 Tahun Sepsial Tengah Tahun</td>
                                      <td>6.88% fixed 3 th, selanjutnya 8.88% fixed 3th, selanjutnya 9.88% fixed 4th</td>
                                      <td>12 tahun</td>
                                      <td>Pengajuan KPR New Booking dan Take Over diskon provisi 50%</td>
                                    </tr>
                                  </tbody>                          
                                </table>
                                <span style="font-size: 15px">*) selanjutnya berlaku suku bunga floating</span>
                            </div>                          
                            <br>
                        Selain itu, Bank Mandiri juga hadirkan suku bunga kompetitif untuk <b>Multiguna(refinancing)</b>, sebagai berikut:
                    
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered border-secondary">
                                  <thead>
                                    <tr>
                                      <th scope="col">Suku Bunga Fixed*</th>
                                      <th scope="col">Minimum Tenor</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>12.50% fixed 1 tahun</td>
                                      <td>1 tahun</td>
                                    </tr>
                                    <tr>
                                        <td>10.50% fixed 2 tahun</td>
                                        <td>2 tahun</td>
                                      </tr>
                                    <tr>
                                        <td>7.75% fixed 3 tahun</td>
                                        <td>7 tahun</td>
                                    </tr>
                                    <tr>
                                        <td>8.55% fixed 5 tahun</td>
                                        <td>7 tahun</td>
                                    </tr>
                                    <tr>
                                        <td>8.88% fixed 10 tahun</td>
                                        <td>10 tahun</td>
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