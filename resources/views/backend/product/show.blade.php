<x-master title="Product Details">
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
                            title="Products Information" 
                            class="btn btn-info" 
                            href="{{ route('admin.products.index') }}"
                            content="Back"
                            icon="fas fa-arrow-alt-circle-left"
                        />
                        <div class="card shadow mb-4"> 
                            <x-card-header title="{{ $product->title }}"/>                           
                            <x-card-body>
                                <x-list-profile>
                                    <table class="table table-borderless table-striped">
                                        <tr>
                                            <th class="text-right">Category :</th>
                                            <td> {{ $product->category->title }} </td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Title : </th>
                                            <td> {{ $product->title }} </td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Description: </th>
                                            <td> {{ $product->description }} </td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Cost Price : </th>
                                            <td> {{ $product->cost_price }} </td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Sale Price : </th>
                                            <td> {{ $product->price }} </td>
                                        </tr>
                                   </table>
                                </x-list-profile>                                  
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