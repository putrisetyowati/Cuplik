@include('layout.member.header')
<body>
    
    @yield('content')

    @include('layout.member.footer')

    
    <!-- JavaScript Libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('member/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('member/lib/slick/slick.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('member/js/main.js') }}"></script>
</body>
</html>