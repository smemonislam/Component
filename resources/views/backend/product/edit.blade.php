<x-master title="Edit Product">
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
                            title="Update Product" 
                            class="btn btn-info" 
                            href="{{ route('admin.products.index') }}"
                            content="Back"
                            icon="fas fa-arrow-alt-circle-left"
                        />
                        <div class="card shadow mb-4 p-3">
                            <x-card-header title="{{ $product->title }}"/>
                            <x-card-body>
                                <x-error></x-error>
                                <x-form action="{{ route('admin.products.update', $product->id) }}" method="POST">
                                    @method('PUT')  

                                    <div class="form-group row">
                                        <x-label for="inputSelect" class="col-sm-2 col-form-label" label="Category"/>
                                        <div class="col-sm-10">
                                            <x-select 
                                                id="inputSelect"  
                                                name="category_id" 
                                                class="form-control"
                                                :options="$categories"
                                                value="{{ $product->category_id }}"
                                            />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <x-label for="inputName" class="col-sm-2 col-form-label" label="Product Name"></x-label>
                                        <div class="col-sm-10">
                                            <x-input-text
                                                id="inputName"
                                                type="text"
                                                name="title"
                                                value="{{ $product->title }}"
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
                                                value="{{ $product->description }}"
                                                class="form-control"
                                                rows="4"       
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
                                                value="{{ $product->cost_price }}"
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
                                                value="{{ $product->price }}"
                                                class="form-control"
                                            />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10 offset-sm-2">
                                            <x-btn type="submit" class="btn btn-primary" btnText="Update"/>
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