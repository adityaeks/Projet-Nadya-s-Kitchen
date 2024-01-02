@extends('layouts.app')

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Homepage.html">Nadya's Kitchen</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li role="presentation" class="active"><a class="top-menu-item-a top-menu-item-has-sub-menu-a"
                            href="Homepage.html">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('employees.create') }}">Contact</a></li>
                    <li><a href="{{ route('employees.index') }}">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a href="{{ route('login') }}" class="nav text-dark">Login</a></li>
                    @else
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="navbar-form navbar-right">
                                @csrf
                                <button type="submit" class="btn btn-link">Logout</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>



    @if (session('message'))
        <script>
            alert("{{ session('message') }}");
            window.location = "{{ route('home') }}";
        </script>
    @endif
    @if (session('success'))
        <div id="popup" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <h1>Nadya's Kitchen</h1>
                    <p>Selamat datang di Nadya's Kitchen, tempat di mana rasa memanjakan lidah dan hidangan istimewa
                        menjadi nyata.</p>
                    <hr>
                </center>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="{{ Vite::asset('resources/images/pic-home.jpg') }}" alt="">
            </div>
            <div class="col-md-6">
                <h4>
                    <p align="justify"> <b> Apakah Anda merencanakan acara besar </b>, pesta, atau pertemuan bisnis,
                        atau Anda hanya ingin menikmati makanan lezat tanpa repot memasak? Kami menyediakan layanan
                        katering makanan yang akan memastikan kebutuhan makanan Anda terpenuhi dengan baik.</p>
                </h4>
                <hr>
                <h4>
                    <p align="justify">Kami bekerja keras untuk menyajikan makanan berkualitas tinggi, lezat, dan segar.
                        Tim kami yang terlatih akan merencanakan menu sesuai dengan preferensi dan kebutuhan Anda. Kami
                        juga dapat mengakomodasi diet khusus, seperti vegetarian, vegan, bebas gluten, atau makanan
                        alergi tertentu.</p>
                </h4>
                <hr>
                <h4>
                    <p align="justify">Kami menyediakan penawaran harga gratis untuk layanan katering sesuai anggaran
                        dan jumlah tamu Anda. Harga kami bervariasi berdasarkan menu, jumlah porsi, dan layanan tambahan
                        yang Anda butuhkan. Hubungi kami melalui email atau kontak kami untuk informasi lebih lanjut
                        atau penawaran harga. Kami berkomitmen memberikan pengalaman katering yang luar biasa.<a
                            href="contact.html"> contact us </a>.</p>
                </h4>
            </div>
        </div>
        <br> <br> <br>
        <section id="contact" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <footer>
                        <div class="row">
                            <div class="col-lg-12">
                                <center>
                                    <p> &copy; Nadya's Kitchen 2021</p>
                                </center>
                            </div>
                            <center>
                                <div>
                                    <ul class="list-unstyled list-inline list-social-icons">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                </div>
                </center>
                </footer>
            </div>
    </div>
    </section>

    </div>
    <script>
        $('.carousel').carousel({
            interval: 4000 //changes the speed
        })

        function sFunction() {
            alert("Hello");
        }
    </script>
    </div>
    <script src="{{ Vite::asset('resources/js/jquery.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/bootstrap.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/ie10.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/jquery-2.1.1.min.j') }}s"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    @vite('resources/js/app.js')
    <script>
        $(document).ready(function() {
            // Mencari elemen dengan ID 'popup'
            var popup = $('#popup');

            // Menampilkan pesan pop-up
            popup.fadeIn();

            // Menghilangkan pesan pop-up setelah 3 detik
            setTimeout(function() {
                popup.fadeOut();
            }, 3000);
        });
    </script>
</body>

</html>
