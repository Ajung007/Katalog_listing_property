<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
       <div class="logo-house">
        <a style="text-decoration: none;" href="{{ route('home') }}">House<span>Catalog. &nbsp;</span></a>
       </div>
       <button class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navb">
           <ul class="navbar-nav ml-auto mr-3">
               <li class="nav-item mx-md-2">
                   <a href="{{ route('home') }}" class="nav-link active">Home</a>
               </li>
               {{-- <li class="nav-item mx-md-2">
                    <a href="#backyard" class="nav-link">Backyard</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Listing Properti</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('cities', 'Semarang')}}" class="dropdown-item">Semarang</a>
                        <a href="{{ route('cities', 'Yogyakarta')}}" class="dropdown-item">Yogyakarta</a>
                        <a href="{{ route('cities', 'Solo')}}" class="dropdown-item">Solo</a>
                        <a href="{{ route('cities', 'Tegal')}}" class="dropdown-item">Tegal</a>
                        <a href="{{ route('cities', 'Purwokerto')}}" class="dropdown-item">Purwokerto</a>
                        <a href="{{ route('cities', 'Kudus')}}" class="dropdown-item">Kudus</a>
                        <a href="{{ route('cities', 'Magelang')}}" class="dropdown-item">Magelang</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('promo') }}" class="nav-link">Promo</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('browse')}}" class="nav-link">Browse</a>
                </li>
           </ul>
       </div> 
    </nav>
</div>