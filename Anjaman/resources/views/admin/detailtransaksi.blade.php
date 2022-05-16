@extends('layouts.admin')
<link rel="icon" href="{{ url('images/Anjaman_Logo.png') }}">
@section('title')
Anjaman | Transaksi
@endsection

    <!-- Page Wrapper -->
    <div id="wrapper">
    @section('content')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="flex-column" style="padding-left: 300px;">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 mt-4">Transaksi</h1>
                    </div>

                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Invoice ID</th>
                                    <td>{{$detail->id}}</td>
                                </tr>  
                                <tr>
                                    <th>Customer</th>
                                    <td>Bangchan</td>
                                </tr> 
                                <tr>
                                    <th>Product</th>
                                    <td>Tas Wanita Anyaman</td>
                                </tr> 
                                <tr>
                                    <th>Quantity</th>
                                    <td>2 pcs</td>
                                </tr> 
                                <tr>
                                    <th>Alamat</th>
                                    <td>Bojongswan</td>
                                </tr>
                                <tr>
                                    <th>Total Harga</th>
                                    <td>20000</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>Selesai</td>
                                </tr>
                            </table>
                        </div>    
                    </div>    
                </div>
                <!-- /.container-fluid -->

            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

</body>
@endsection