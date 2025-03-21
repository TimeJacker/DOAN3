<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('User/') }}/image/iconlogo.png" />

    <link rel="stylesheet" href="{{ asset('Admin/') }}/css/styles.min.css" />
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <style>
        .pagination a {
            color: #007BFF;
            /* Màu sắc liên kết */
            font-size: 16px;
            /* Kích thước font */
        }

        .pagination a:hover {
            background-color: #007BFF;
            /* Màu sắc nền khi hover */
            color: #fff;
            /* Màu sắc chữ khi hover */
        }

    </style>
        <script src="{{ asset('Admin/') }}/vendors/select2/select2.min.js"></script> --}}

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>


</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        {{--  sidebar --}}
        <aside class="left-sidebar">
            @include('Admin.partial.sidebar')
        </aside>
        <div class="body-wrapper">
            {{-- header --}}
            <header class="app-header">
                @include('Admin.partial.header')
            </header>


            {{-- content --}}
            {{-- <main> --}}
            @yield('content')
            {{-- </main> --}}
            {{-- </div> --}}
        </div>
        {{-- footer --}}

        <footer>
            @include('Admin.partial.footer')
        </footer>

        {{-- style js  --}}
        <script src="{{ asset('Admin/') }}/js/main.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"
            integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('Admin/') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('Admin/') }}/js/sidebarmenu.js"></script>
        <script src="{{ asset('Admin/') }}/js/app.min.js"></script>




        {{-- @stack('script') --}}
</body>

</html>
