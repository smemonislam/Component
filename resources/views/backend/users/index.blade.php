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
                        <div class="card shadow mb-4">
                            <x-card-header title="Users List">
                                <a href="{{ route('admin.users.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Add new user</a>
                            </x-card-header>
                            <div class="card-body">
                                <x-backend.message></x-backend.message>
                                <div class="table-responsive">
                                    <x-table :headers="['SL', 'Group', 'Name', 'Email', 'Phone', 'Address', 'Action']">
                                        @foreach ($users as $user)
                                            <tr>
                                                <x-td>{{ $loop->iteration }}</x-td>
                                                <x-td>{{ $user->group->title }}</x-td>
                                                <x-td>{{ $user->name }}</x-td>
                                                <x-td>{{ $user->email }}</x-td>
                                                <x-td>{{ $user->phone }}</x-td>
                                                <x-td>{{ $user->address }}</x-td>
                                                <x-td>
                                                    <x-form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                                        <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary btn-sm">Show</a>
                                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a>
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