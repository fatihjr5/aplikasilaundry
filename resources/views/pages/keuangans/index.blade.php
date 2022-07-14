@extends('layouts.app')

@section('content')

    <div class="container px-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                 <th scope="col">kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Berat/Jumlah</th>
                <th scope="col">Layanan</th>
                 <th scope="col">Tgl masuk & jadi</th>
                 <th scope="col">Total Harga</th>
               
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $item)
                
             
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->code }}</td>
                <td>{{ $item->user_name }}</td>
                <td>{{ $item->total_weight }} kg</td>
                <td>{{ $item->layanan->name }}</td>
               
                <td>{{ $item->date_in }}& {{ $item->date_out }}</td>
                  <td>Rp. {{ $item->price }}</td>
              
              </tr>
               @endforeach
             
            </tbody>
      </table>
    </div>
@endsection
