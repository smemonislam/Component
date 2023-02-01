<x-master title="Edit User">
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
                            <x-card-header title="Update User">
                                <a href="{{ route('admin.users.index') }}" class="btn btn-info"><i class="fa fa-plus"></i> Back</a>
                            </x-card-header>
                            <div class="card-body">
                                
                                <x-select 
                                    id="inputSelect" 
                                    label="Group" 
                                    name="gruop_id" 
                                    class="form-control"
                                    :options="$groups"
                                    value="{{ $user->group_id }}"
                                />
                                <x-form action="{{ route('admin.users.edit', $user->id) }}" method="POST">
                                    <x-input-text
                                        id="inputName"
                                        type="text"
                                        name="name"
                                        value="{{ $user->name }}"
                                        class="form-control"
                                        label="Name"
                                    />

                                    <x-input-text
                                        id="inputEmail"
                                        type="email"
                                        name="email"
                                        value="{{ $user->email }}"
                                        class="form-control"
                                        label="Email"
                                    />

                                    <x-input-text
                                        id="inputPhone"
                                        type="text"
                                        name="phone"
                                        value="{{ $user->phone }}"
                                        class="form-control"
                                        label="Phone Number"
                                    />

                                    <x-text-area
                                        id="inputAddress"
                                        name="address"
                                        value="{{ $user->address }}"
                                        class="form-control"
                                        label="Address"
                                        rows="3"       
                                    />

                                    <x-btn 
                                        type="submit"
                                        class="btn btn-primary"
                                        btnText="Update "
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