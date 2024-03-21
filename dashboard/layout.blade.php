@include('dashboard/header')

@include('dashboard/topbar')

@include('dashboard/sidebar')


    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            @yield('content')

        </div>
        <!-- end container-fluid -->

    </div>
@include('dashboard/footer')