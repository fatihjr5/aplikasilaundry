@extends('layouts.app')

@section('content')
<div class="container px-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm rounded border-0">
                <h5 class="m-3 mb-0 pb-3" style="border-bottom: 1px solid #8888">Form Order</h5>
                <div class="p-3">
                    <form method="post" action="{{ route('orders.update', $order->id) }}" >
                        @csrf
                        @method('PUT')
                        <section class="d-flex flex-column">
                            <label class="mb-2" for="user_name">Nama pelanggan</label>
                            <input class="w-100" type="text" placeholder="Masukkan nama pelanggan" name="user_name" value="{{ $order->user_name }}" required >
                        </section>
                        <section class="d-flex flex-column mt-2">
                            <label class="mb-2" for="total_weight">Berat / jumlah barang</label>
                            <input class="w-100" type="number" placeholder="Masukkan Total barang" name="total_weight" id="total_weight"  value="{{ $order->total_weight }}" required>
                        </section>
                        <section class="d-flex flex-column mt-2">
                            <label for="layanan_id">Pilih Layanan</label>
                            <select  class="form-select" aria-label="Default select example" name="layanan_id" id="layanan_id"  required>
                                <option value="" selected>Pilih Layanan</option>
                               @foreach ($layanan as $item )
                                   <option value="{{$item->id}}" {{ $order->layanan_id === $item->id ? 'selected' : '' }} data-name="{{ $item->id }}" data-price="{{ $item->price }}">{{ $item->name }}</option>
                               @endforeach
                            </select>
                        </section>
                     
                        <section class="d-flex flex-column mt-2">
                            <label class="mb-2" for="date_in">Tanggal Masuk</label>
                            <input class="w-100" type="date" name="date_in" required value="{{ $order->date_in }}">
                        </section>
                        <section class="d-flex flex-column mt-2">
                            <label class="mb-2" for="date_out">Tanggal Selesai</label>
                            <input class="w-100" type="date" name="date_out" required value="{{ $order->date_out }}">
                        </section>

                        <section class="d-flex flex-column mt-2">
                            <label for="layanan_id">Status</label>
                            <select  class="form-select" aria-label="Default select example" name="status" id="status"  required>
                                <option value="">Status</option>
                                <option value="1"  {{ $order->status === "1" ? 'selected' : '' }} >On Progress</option>
                                <option value="2"  {{ $order->status === "2" ? 'selected' : '' }}>Done</option>
                                <option value="3"  {{ $order->status === "3" ? 'selected' : '' }}>Picked</option>
                            </select>
                        </section>
                     
 
                        <section class="d-flex flex-column mt-2">
                            <label class="mb-2" for="price">Total keseluruhan</label>
                            <input class="w-100" type="number" id="price" placeholder="terisi otomatis" name="price" required value="{{ $order->price }}">
                        </section>
                        <button class="bg-black border-none w-100 text-center text-white mt-4 py-2 rounded-lg">Buat Pesanan</button>
                    <form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>


 var price=0;
$('#layanan_id').change(function() {
    var opt = $(this.options[this.selectedIndex]);
    price = opt.attr('data-price');
    var berat = $('#total_weight').val();
    var total_price = berat*price; 
    $('#price').val(total_price)
});

$('#total_weight').change(function() {
    console.log(price)
    var berat = $('#total_weight').val();
    var total_price = berat*price; 
    $('#price').val(total_price)
});
// end

</script>
@endsection
