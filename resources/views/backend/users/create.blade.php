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
                        <x-top-header 
                            title="Add new user" 
                            class="btn btn-info" 
                            href="{{ route('admin.users.index') }}"
                            content="Back"
                            icon="fas fa-arrow-alt-circle-left"
                        />
                        <div class="card shadow mb-4 p-3">   
                            <x-card-header title="Add New User"/>                         
                            <x-card-body>                                
                                <x-error></x-error>
                                <x-form action="{{ route('admin.users.store') }}" method="POST">
                                    <div class="form-group row">
                                        <x-label for="inputSelect" class="col-sm-2 col-form-label" label="Group"/>
                                        <div class="col-sm-10">
                                            <x-select 
                                                id="inputSelect"  
                                                name="group_id" 
                                                class="form-control"
                                                :options="$groups"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <x-label for="inputName" class="col-sm-2 col-form-label" label="Name"></x-label>
                                        <div class="col-sm-10">
                                            <x-input-text
                                                id="inputName"
                                                type="text"
                                                name="name"
                                                placeholder="Enter your name."
                                                class="form-control"
                                            />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <x-label for="inputEmail" class="col-sm-2 col-form-label" label="Email"></x-label>
                                        <div class="col-sm-10">
                                            <x-input-text
                                                id="inputEmail"
                                                type="email"
                                                name="email"
                                                placeholder="Enter your email"
                                                class="form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <x-label for="inputPhone" class="col-sm-2 col-form-label" label="Phone Number"></x-label>
                                        <div class="col-sm-10">
                                            <x-input-text
                                                id="inputPhone"
                                                type="text"
                                                name="phone"
                                                placeholder="Enter your phone"
                                                class="form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <x-label for="inputAddress" class="col-sm-2 col-form-label" label="Address"></x-label>
                                        <div class="col-sm-10">
                                            <x-text-area
                                                id="inputAddress"
                                                name="address"
                                                placeholder="Enter your address."
                                                class="form-control"
                                                rows="3"       
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 offset-sm-2">
                                            <x-btn type="submit" class="btn btn-primary" btnText="Submit"/>
                                        </div>
                                    </div>                                   
                                </x-form>
                            </x-card-body>
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