@extends('layouts.profile')

@section('title')
Anjaman | Profile
@endsection

@section('content')
    <!-- Page Wrapper -->
    <div class="container-fluid" id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-black-800" style="font-weight: bold; padding-top: 30px;">My Account</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold" style="color:#8E654E">Contact Information</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $user->fullname }}</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>{{ $user->username }}</td>
                                        </tr>    
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $user->email }}</td>
                                        </tr> 
                                        <tr>
                                            <th>Phone </th>
                                            <td>{{ $user->phone_number }}</td>
                                        </tr> 
                                    </table>
                                    
        
                                </div>
                            </div>
                        </div>
                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold" style="color:#8E654E">Address</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <address>
                                    <p class="fw-bold">{{ $addresses->fullname }}</p>
                                    <p>T: {{ $addresses->phone_number }}</p>
                                    <p>{{ $addresses->address}}</p>
                                    <p>{{ $addresses->subdistrict . ', ' . $addresses->city . ', ' . $addresses->province }}
                                    <p>Zip Code : {{ $addresses->postal_code }}</p>
                                    </address>
                                    <a style="color:#8E654E" href="/user/editaddress/{{ $addresses->id }}">Edit Address</a>
                                </div>
                            </div>
                        </div>
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold" style="color:#8E654E">My Orders</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Invoice No.</th>
                                                <th>Ship To</th>
                                                <th>Date/Time</th>
                                                <th>Status</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Shipping Fee</th>
                                                <th>Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$addresses->fullname}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>{{$order->status}}</td>
                                        
                                                <td> 
                                                    @foreach ($order_details as $order_detail) 
                                                        @if ($order_detail->order_id == $order->id)
                                                            {{ $order_detail->name }}<br> 
                                                        @endif 
                                                    @endforeach
                                                </td>
                                                <td> 
                                                    @foreach ($order_details as $order_detail) 
                                                        @if ($order_detail->order_id == $order->id)
                                                            x {{ $order_detail->quantity }}<br> 
                                                        @endif 
                                                    @endforeach
                                                </td>
                                                @php
                                                $subtotal = 0;
                                                    foreach ($order_details as $order_detail) {
                                                        if ($order_detail->order_id == $order->id)
                                                            $subtotal += $order_detail->quantity * $order_detail->price ;
                                                    }
                                                @endphp
                                                <td> {{$order->shipper}} </td>
                                                <td> {{$subtotal + $order->shipper}} </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- End of Main Content -->

    </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
@endsection