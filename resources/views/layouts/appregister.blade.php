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
            
        </div>
        <!-- Javascript files-->
        @include('layouts.scripts')
    </body>
</html>
