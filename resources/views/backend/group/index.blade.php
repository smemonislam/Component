<x-master title="Group">
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
                        <div class="card shadow mb-4">
                            <x-card-header title="Group List">
                                <a href="{{ route('admin.groups.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Add new group</a>
                            </x-card-header>
                            <div class="card-body">
                                <x-backend.message></x-backend.message>
                                <div class="table-responsive">
                                    <x-table :headers="['SL', 'Title', ['name' => 'Action', 'align' => 'right'] ]">
                                        @foreach ($groups as $group)
                                            <tr>
                                                <x-td>{{ $loop->iteration }}</x-td>
                                                <x-td>{{ $group->title }}</x-td>
                                                <x-td align="right">
                                                    <x-form action="{{ route('admin.groups.destroy', $group->id) }}" method="POST">
                                                        <a href="{{ route('admin.groups.edit', $group->id) }}" class="btn btn-info btn-sm">Edit</a>
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