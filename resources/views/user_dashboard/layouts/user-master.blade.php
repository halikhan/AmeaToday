<!DOCTYPE html>
<html lang="en">

<head>
    @include('user_dashboard.layouts.head')
</head>

<body>

    <div>
        @include('user_dashboard.layouts.header')
        <section class="mt7 d-flex">
            @include('user_dashboard.layouts.sidebar')
            @yield('content')
        </section>
    </div>

    @include('user_dashboard.layouts.footer')


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('UserMessage'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
        case 'info':
        toastr.info(" {{ Session::get('UserMessage') }} ");
        break;
        case 'success':
        toastr.success(" {{ Session::get('UserMessage') }} ");
        break;
        case 'warning':
        toastr.warning(" {{ Session::get('UserMessage') }} ");
        break;
        case 'error':
        toastr.error(" {{ Session::get('UserMessage') }} ");
        break;
        }
        @endif
    </script>
</body>
</html>
