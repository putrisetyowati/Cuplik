@include('layout.member.header')
<body>
    @include('layout.member.navbar')
    @yield('content')

    @include('layout.member.footer')

    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="member/lib/easing/easing.min.js"></script>
    <script src="member/lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="member/js/main.js"></script>
</body>
</html>