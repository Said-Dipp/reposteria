<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.htmlheader')
    </head>
    <body>
        <!-- Side Navbar -->
        @include('layouts.sidebar')
        <div class="page">
            <!-- navbar-->
            @include('layouts.navbar')
            <!-- Section -->
            <section class="dashboard-counts section-padding">
                <div class="container-fluid">
                    @yield('content') 
                    <footer class="main-footer" style="background-color:rgba(255, 255, 255, 0)">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>RNOVA &copy; 2017-2019</p>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <p>
                                        Design by 
                                        <a href="#" class="external">RNOVA</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
        
            </section>
            
        </div>
        <!-- Javascript files-->
        @include('layouts.scripts')
    </body>
</html>