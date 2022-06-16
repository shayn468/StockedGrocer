@extends('layouts.front')

@section('title')
    Checkout

@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}">  Home </a> /

            <a href="{{ url('checkout') }}"> Checkout  </a>


        </h6>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6>Basic Details</h6>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="FirstName">First Name</label>
                            <input type="text" class= "form-control" placeholder="Enter First Name">
                        </div>

                        <div class="col-md-6">
                            <label for="LastName">Last Name</label>
                            <input type="text" class= "form-control" placeholder="Enter Last Name">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="">Email</label>
                            <input type="text" class= "form-control" placeholder="Enter Email">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="">Phone Number</label>
                            <input type="text" class= "form-control" placeholder="Enter Phone number">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="">Address 1</label>
                            <input type="text" class= "form-control" placeholder="Enter Address 1">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="">Address 2</label>
                            <input type="text" class= "form-control" placeholder="Enter Address 2">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="">City</label>
                            <input type="text" class= "form-control" placeholder="Enter your city">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="">State</label>
                            <input type="text" class= "form-control" placeholder="Enter State">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="">Country</label>
                            <input type="text" class= "form-control" placeholder="Enter Country">
                        </div>

                        <div class="col-md-6 mt-3">
                            <label for="">Pin code</label>
                            <input type="text" class= "form-control" placeholder="Enter Pin Code">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">

                    <h1>
                        Order Details
                    </h1>
                    <hr>
                    <table class= "table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartitems as $item )
                            <tr>
                                <td>{{ $item ->products->name }}</td>
                                <td>{{ $item->prod_qty }}</td>
                                <td>{{ $item->products->selling_price  }}</td>
                            
                            </tr>
                        
                            @endforeach

                        </tbody>
                    </table>
                    <hr>
                    <button class="btn btn-primary float-end"> Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection