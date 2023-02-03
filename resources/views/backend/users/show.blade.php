<x-master title="User Details">
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
                            <x-card-header title="Users Details">
                                <a class="btn btn-info" href="#"> <i class="fa fa-plus"></i> New Sale </a>
                                <a class="btn btn-info" href="#"> <i class="fa fa-plus"></i> New Purchase </a>
                                <a class="btn btn-info" href="#"> <i class="fa fa-plus"></i> New Payment </a>
                                <a class="btn btn-info" href="#"> <i class="fa fa-plus"></i> New Receipt </a>
                                <a href="{{ route('admin.users.index') }}" class="btn btn-info"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
                            </x-card-header>
                            <div class="card-body">
                                <x-list-profile 
                                    :headers="[
                                        'group'     => 'Group:', 
                                        'name'      => 'Name:', 
                                        'email'     => 'Email:', 
                                        'phone'     => 'Phone:', 
                                        'address'   => 'Address:'
                                    ]"
                                    :user="$user"
                                    class="font-weight-bold text-capitalize"
                                >
                                </x-list-profile>                                
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