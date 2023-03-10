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
                        <x-top-header 
                            title="Category List" 
                            class="btn btn-info" 
                            href="{{ route('admin.category.create') }}"
                            content="Add new category"
                            icon="fa fa-plus"
                        />
                        <div class="card shadow mb-4">
                            <x-card-header title="Category"/>                           
                            <x-card-body>
                                <x-backend.message></x-backend.message>
                                <div class="table-responsive">
                                    <x-table :headers="['SL', 'Title', ['name' => 'Action', 'align' => 'right'] ]">
                                        @foreach ($categories as $category)
                                            <tr>
                                                <x-td>{{ $loop->iteration }}</x-td>
                                                <x-td>{{ $category->title }}</x-td>
                                                <x-td align="right">
                                                    <x-form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                                        <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-info btn-sm">Edit</a>
                                                        @method('DELETE')
                                                        <x-btn 
                                                            type="submit"
                                                            class="btn btn-danger btn-sm"
                                                            btnText="Delete "
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