@include('website/header')

@include('website/topbar')




    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            
            @yield('content')

        </div>
        <!-- end container-fluid -->

    </div>
@include('website/footer')