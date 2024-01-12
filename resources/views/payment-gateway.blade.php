@extends('layout')

@section('main-content')
    <div class="d-flex align-items-start justify-content-center mx-5 gap-5">
        <div class="d-flex flex-column align-items-center justify-content-center card bordered p-5">
            <h6 class="mb-4">Order Summary</h6>
            <table class="table table-bordered table-striped w-100">
                <thead>
                    <th>Product</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </thead>
                <tbody>
                    <tr>
                        <td>T-shirt</td>
                        <td>100.00</td>
                        <td>1</td>
                        <td>100.00</td>
                    </tr>
                    <tr>
                        <td>T-shirt</td>
                        <td>250.00</td>
                        <td>1</td>
                        <td>250.00</td>
                    </tr>
                    <tr>
                        <td>T-shirt</td>
                        <td>250.00</td>
                        <td>1</td>
                        <td>250.00</td>
                    </tr>
                </tbody>
            </table>
            <h5 class="m-0" style="align-self:flex-end;">Total: 600 PHP</h5>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center card bordered p-5">
            <h6 class="mb-4">Choose payment option</h6>
            <div class="d-flex align-items-center justify-content-center gap-3">
                <div class="card hoverable h-100">
                    <img style="width: 200px; height: auto; object-fit: cover;" class="p-5"
                        src="{{ asset('media/GCash.png') }}" alt="gcash-logo">
                </div>
                <div class="card hoverable h-100">
                    <img style="width:187px; height: auto; object-fit: cover;" class="p-5"
                        src="{{ asset('media/paymaya.jpg') }}" alt="gcash-logo">
                </div>
            </div>
        </div>

    @endsection
