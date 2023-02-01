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
                                
                                <x-form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                    @method('PUT')

                                    <div class="form-group row">
                                        <x-label for="inputSelect" class="col-sm-2 col-form-label" label="Group"/>
                                        <div class="col-sm-10">
                                            <x-select 
                                                id="inputSelect"  
                                                name="group_id" 
                                                class="form-control"
                                                :options="$groups"
                                                value="{{ $user->group_id }}"
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
                                                value="{{ $user->name }}"
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
                                                value="{{ $user->email }}"
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
                                                value="{{ $user->phone }}"
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
                                                value="{{ $user->address }}"
                                                class="form-control"
                                                rows="3"       
                                            />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10 offset-sm-2">
                                            <x-btn type="submit" class="btn btn-primary" btnText="Update"/>
                                        </div>
                                    </div>
                                                                        
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