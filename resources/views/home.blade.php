@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="my-5">
        <div class="row bg-white shadow-sm w-100">
            <div class="col-12 col-md-6 border border-1 p-4">
                <h5>Total order</h5>
                <span>{{ \App\Models\Order::count() }}</span>
            </div>
            <div class="col-12 col-md-6 border border-1 p-4">
                <h5>Dalam proses</h5>
                <span>{{ \App\Models\Order::where('status','1')->count() }}</span>
            </div>
            <div class="col-12 col-md-6 border border-1 p-4">
                <h5>Order selesai</h5>
                <span>{{ \App\Models\Order::where('status','2')->count() }}</span>
            </div>
            <div class="col-12 col-md-6 border border-1 p-4">
                <h5>Sudah diambil</h5>
                <span>{{ \App\Models\Order::where('status','3')->count() }}</span>
            </div>
        </div>
    </div>
</div>
@endsection
