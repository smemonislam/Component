<x-master title="Product">
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
                            <x-card-header title="Add new product">
                                <a href="{{ route('admin.products.index') }}" class="btn btn-info"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
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
                                <x-form action="{{ route('admin.products.store') }}" method="POST">
                                    <div class="form-group row">
                                        <x-label for="inputSelect" class="col-sm-2 col-form-label" label="Category"/>
                                        <div class="col-sm-10">
                                            <x-select 
                                                id="inputSelect"  
                                                name="category_id" 
                                                class="form-control"
                                                :options="$categories"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <x-label for="inputName" class="col-sm-2 col-form-label" label="Proudct Name"></x-label>
                                        <div class="col-sm-6">
                                            <x-input-text
                                                id="inputName"
                                                type="text"
                                                name="title"
                                                placeholder="Enter your product name."
                                                class="form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <x-label for="inputAddress" class="col-sm-2 col-form-label" label="Description"></x-label>
                                        <div class="col-sm-10">
                                            <x-text-area
                                                id="inputDescription"
                                                name="description"
                                                placeholder="Enter your product description."
                                                class="form-control"
                                                rows="3"       
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <x-label for="inputName" class="col-sm-2 col-form-label" label="Cost Price"></x-label>
                                        <div class="col-sm-6">
                                            <x-input-text
                                                id="inputCostPrice"
                                                type="text"
                                                name="cost_price"
                                                placeholder="Enter your product cost price."
                                                class="form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <x-label for="inputName" class="col-sm-2 col-form-label" label="Price"></x-label>
                                        <div class="col-sm-6">
                                            <x-input-text
                                                id="inputPrice"
                                                type="text"
                                                name="price"
                                                placeholder="Enter your product price."
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