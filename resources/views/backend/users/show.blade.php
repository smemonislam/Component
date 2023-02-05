<x-master title="User">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <x-sidebar title="Dashboard"></x-sidebar>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <x-header></x-header>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <x-content>
                        <div class="card shadow mb-4">
                            <div class="row clearfix page_header p-3">
                                <div class="col-md-4">
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-info"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>		
                                </div>
                            
                                <div class="col-md-8 text-right">
                                    <a class="btn btn-info" href="#"> <i class="fa fa-plus"></i> New Sale </a>
                                    <a class="btn btn-info" href="#"> <i class="fa fa-plus"></i> New Purchase </a>
                                    <a class="btn btn-info" href="#"> <i class="fa fa-plus"></i> New Payment </a>
                                    <a class="btn btn-info" href="#"> <i class="fa fa-plus"></i> New Receipt </a>
                                </div>
                            </div>
                            <div class="p-3">                                
                                <div class="row clearfix mt-5">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills">
                                            <a class="nav-link active" href="">User Info</a>
                                            <a class="nav-link" href="">Sales</a>
                                            <a class="nav-link" href="">Purchases</a>
                                            <a class="nav-link" href="">Payments</a>
                                            <a class="nav-link" href="">Receipts</a>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary"> {{ $user->name }} </h6>
                                            </div>
                                            <table class="table table-borderless table-striped">
                                                <tr>
                                                    <th class="text-right">Group :</th>
                                                    <td> {{ $user->group->title }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right">Name : </th>
                                                    <td> {{ $user->name }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right">Email: </th>
                                                    <td> {{ $user->email }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right">Phone : </th>
                                                    <td> {{ $user->phone }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="text-right">Address : </th>
                                                    <td> {{ $user->address }} </td>
                                                </tr>
                                            </table>
                                        </div> 
                                    </div>
                                </div>                               
                            </div>
                        </div>  
                    </x-content>                   
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <x-footer></x-footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</x-master>