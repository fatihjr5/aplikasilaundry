@extends('layouts.app')

@section('content')
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        body{
            font-family: Poppins;
        }
    </style>
    <div id="app">
        <div class="my-4 mt-5 container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-12 col-md-6">
                    <h5 style="font-size: 48px; font-weight:600;">Lacak status orderan laundrymu</h5>
                    <div class="bg-white shadow-sm w-75 px-4 py-2 rounded-3 mt-2">
                        <form method="GET" class=" d-flex justify-content-between" action="{{ route('cek') }}" style="gap: .25rem;">
                            <input type="text" name="code" placeholder="Masukkan kode disini" class="w-100" style="border:none">
                            <button class="btn btn-primary px-4 py-2">Cari</button>
                        </form>
                    </div>
                    <div class="w-75 px-4 py-2 mt-3 rounded-pill bg-white shadow-sm">
                        @if ($order)
                        @if ($order->status=== "1")
                            Order anda dalam proses
                        @elseif ($order->status=== "2")
                            Order anda sudah selesai 
                        @else
                            Barang anda sudah diambil
                        @endif
                        @else
                            order tidak ditemukan
                        @endif
                   </div>
                </div>
                <div class="col-12 col-md-6">
                    <img class="w-100" src='./foto.png' alt="">
                </div>
            </div>           
        </div>
    </div>

@endsection
