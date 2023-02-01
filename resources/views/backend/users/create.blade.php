<x-master title="Users">
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
                        <div class="card shadow mb-4 p-3">
                            <x-card-header title="Add new user">
                                <a href="{{ route('admin.users.index') }}" class="btn btn-info"><i class="fa fa-plus"></i> Back</a>
                            </x-card-header>                            
                            <div class="card-body">
                                <x-backend.message></x-backend.message>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <x-form action="{{ route('admin.users.store') }}" method="POST">
                                    <x-select 
                                        id="inputSelect" 
                                        label="Group" 
                                        name="group_id" 
                                        class="form-control"
                                        :options="$groups"
                                        value=""
                                    />
                                    <x-input-text
                                        id="inputName"
                                        type="text"
                                        name="name"
                                        placeholder="Enter your name"
                                        class="form-control"
                                        label="Name"
                                    />

                                    <x-input-text
                                        id="inputEmail"
                                        type="email"
                                        name="email"
                                        placeholder="Enter your email"
                                        class="form-control"
                                        label="Email"
                                    />

                                    <x-input-text
                                        id="inputPhone"
                                        type="text"
                                        name="phone"
                                        placeholder="Enter your phone"
                                        class="form-control"
                                        label="Phone Number"
                                    />

                                    <x-text-area
                                        id="inputAddress"
                                        name="address"
                                        placeholder="Enter your address."
                                        class="form-control"
                                        label="Address"
                                        rows="3"
                                    />

                                    <x-btn 
                                        type="submit"
                                        class="btn btn-primary"
                                        btnText="Submit"
                                    />                                    
                                </x-form>
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