<x-master title="Home Page">
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
                                <a href="{{ route('admin.users.index') }}" class="btn btn-info"><i class="fa fa-plus"></i> Back</a>
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