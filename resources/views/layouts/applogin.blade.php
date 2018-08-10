<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.htmlheader')
    </head>
    <body>
        <div>
            <section class="dashboard-counts section-padding">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
            <footer class="main-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Reposteria &copy; 2018-2019</p>
                        </div>
                        <div class="col-sm-6 text-right">
                            <p>
                                Design by 
                                <a href="#" class="external">Said</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Javascript files-->
        @include('layouts.scripts')
    </body>
</html>
