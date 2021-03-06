<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.layouts.head-tag')
    @yield('head-tag')

</head>

<body dir="rtl">

    @include('Admin.layouts.header')



    <section class="body-container">

        @include('Admin.layouts.sidebar')


        <section id="main-body" class="main-body">

            @yield('content')

        </section>
    </section>


    @include('Admin.layouts.script')
    @yield('script')

    <section class="toast-wrapper flex-row-reverse">
        @include('Admin.Alerts.toast.error')
        @include('Admin.Alerts.toast.success')

    </section>

    @include('Admin.Alerts.sweetalert.error')
    @include('Admin.Alerts.sweetalert.success')
    {{-- @include('Admin.Alerts.sweetalert.delete-confirm') --}}


</body>
</html>
