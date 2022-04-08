<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    @include('layouts.dash.head')

    <body class="layout-default">

        <div class="preloader"></div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            @include('layouts.dash.header')

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                     data-push
                     data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">

                        <div class="container-fluid page__heading-container">
                            <div class="page__heading d-flex align-items-center">
                                <div class="flex">
                                    <h1 class="m-0">@yield('title', config('app.name'))</h1>
                                </div>

                                <a href="{{ route('invoices.create') }}"
                                   class="btn btn-success ml-1">Create New Invoice</a>
                            </div>
                        </div>

                        @yield('content')

                    </div>
                    <!-- // END drawer-layout__content -->
                    @include('layouts.dash.sidebar')
                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->

        @include('layouts.dash.js')

    </body>

</html>
