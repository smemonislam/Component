<x-master title="Home Page">
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
                        <!-- Page Heading -->
                        <x-list-profile>
                            <table class="table table-borderless table-striped">
                                <tr>
                                    <th class="text-right">User Name :</th>
                                    <td> {{ Auth::user()->name }} </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Email : </th>
                                    <td> {{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th class="text-right">Phone: </th>
                                    <td> {{ Auth::user()->phone }} </td>
                                </tr>
                                <tr>
                                    <th class="text-right">Address : </th>
                                    <td> {{ Auth::user()->address }} </td>
                                </tr>
                           </table>
                        </x-list-profile>  
                         
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