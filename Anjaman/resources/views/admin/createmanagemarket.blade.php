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
                        <h1 class="h3 mb-0 text-gray-800 mt-4">Create Market</h1>
                
                    </div>
                    
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="/admin/createmanagemarket" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="title">Market Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="name" value="">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="d-block w-100 form-control" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="travel_packages_id">Category Anyaman</label>
                                    <select name="category" id="category" class="form-control" value="">
                                        <option value="Tas Anyaman">Tas Anyaman</option>
                                        <option value="Topi Anyaman">Topi Anyaman</option>
                                        <option value="Pot Anyaman">Pot Anyaman</option>
                                        <option value="Keranjang Anyaman">Keranjang Anyaman</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image" id="image" placeholder="image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="images">Image Gallery</label>
                                    <input type="file" class="form-control" name="image1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="images">Image Gallery</label>
                                    <input type="file" class="form-control" name="image2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="title">Market Name</label>
                                    <input type="text" class="form-control" name="stock" id="stock" placeholder="stock" value="">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" id="price" placeholder="price" value="">
                                </div>
                                <button type="submit" class="btn btn-success btn-block">
                                    Add
                                </button>
                            </form>    
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