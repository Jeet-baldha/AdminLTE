<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin LTE</title>

    @vite([
        'resources/admin/js/app.js',
        'resources/admin/js/adminlte.js',
    ])
    @vite([
        'resources/admin/css/scss/adminlte.scss',
        'resources/admin/css/app.css',
    ])

</head>




<body class="sidebar-expand-lg sidebar-mini sidebar-collapse bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        @include('admin.components.header')
        @include('admin.components.sidebar')
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">

                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->
        @include('admin.components.footer')
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->

    <!--end::Script-->
</body><!--end::Body-->



</html>