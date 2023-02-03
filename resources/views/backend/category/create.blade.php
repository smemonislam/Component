<x-master title="Category">
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
                            <x-card-header title="Add new category">
                                <a href="{{ route('admin.category.index') }}" class="btn btn-info"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
                            </x-card-header>                            
                            <div class="card-body">
                                
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <x-form action="{{ route('admin.category.store') }}" method="POST">
                                    <div class="form-group row">
                                        <x-label for="inputName" class="col-sm-2 col-form-label" label="Category Name"></x-label>
                                        <div class="col-sm-6">
                                            <x-input-text
                                                id="inputName"
                                                type="text"
                                                name="title"
                                                placeholder="Enter your category name."
                                                class="form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 offset-sm-2">
                                            <x-btn type="submit" class="btn btn-primary" btnText="Submit"/>
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