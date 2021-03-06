@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-3" style="background: #FFF6A5; height: 100vh; padding-top: 80px">
            <div class="content px-3" style="width: 100%">
                <h1 class="text-custom text-center">ABOUT</h1>
                <hr>
                <a href="{{ route('dashboard') }}" class="btn btn-custom my-2" style="width: 100%">Home</a>
                <br>
                <a href="{{ route('print') }}" class="btn btn-custom my-2" style="width: 100%">Print</a>
            </div>

        </div>
        <div class="col-md-9 d-flex justify-content-center align-items-center">
            <div class="content m-5">
                <center>
                    <img style="width: 200px" src="{{ asset('image/dashboard_hero.png') }}" alt="dashboard hero">
                </center>
                <br>
                <h1>Apa itu OUT!?</h1>
                <hr>
                <p>OUT! adalah web yang <strong>menyediakan jasa print tugas seperti
                    makalah, skripsi, laporan dan lain sebagainya</strong>. OUT! juga
                    menyediakan jasa dalam harga yang relatif murah bagi para
                    pelajar dan juga menawarkan jasa antar hasil print ke alamat
                    yang telah pelanggan cantumkan. Biaya per lembar nya <strong>Rp.300</strong>
                    untuk daerah
                    darussalam tidak dikenakanan ongkos antar sedangkan untuk
                    daerah dengan jarak lebih <strong>3 km</strong> dari darussalama dikenakan
                    ongkos sebesar <strong>Rp.7000</strong>
                </p>
            </div>
        </div>
    </div>
@endsection
