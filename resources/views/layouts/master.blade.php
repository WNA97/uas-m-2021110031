<!DOCTYPE html>
<html lang="en">

    @include('components.head')

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            @include('components.topbar')

            @include('components.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                @yield('breadcrumbs')
                            </div>
                        </div>
                        <!-- end row -->
                        @yield('page-content-wrapper')
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                @include('components.footer')

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
            

        @include('components.js')

    </body>

</html>