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
                        <x-top-header 
                            title="Products List" 
                            class="btn btn-info" 
                            href="{{ route('admin.products.create') }}"
                            content="Add new product"
                            icon="fa fa-plus"
                        />
                        <div class="card shadow mb-4">
                            <x-card-header title="Products"/>                           
                            <x-card-body>
                                <x-backend.message></x-backend.message>
                                <div class="table-responsive">
                                    <x-table :headers="['SL', 'Category', 'Title', 'Description', 'Cost Price', 'Price', ['name' => 'Action', 'align' => 'right'] ]">
                                        @foreach ($products as $product)
                                            <tr>
                                                <x-td>{{ $loop->iteration }}</x-td>
                                                <x-td>{{ $product->category->title }}</x-td>
                                                <x-td>{{ $product->title }}</x-td>
                                                <x-td>{{ $product->description }}</x-td>
                                                <x-td>{{ $product->cost_price }}</x-td>
                                                <x-td>{{ $product->price }}</x-td>
                                                <x-td align="right">
                                                    <x-form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                                        <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary btn-sm">Show</a>
                                                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-info btn-sm">Edit</a>
                                                        @method('DELETE')
                                                        <x-btn 
                                                            type="submit"
                                                            class="btn btn-danger btn-sm"
                                                            btnText="Delete"
                                                        />
                                                    </x-form>
                                                </x-td>
                                            </tr>
                                        @endforeach                                        
                                    </x-table>
                                </div>
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