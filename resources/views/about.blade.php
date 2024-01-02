@extends('layouts.app')

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <h2 class="sr-only">Toggle navigation</h2>
                    <h2 class="icon-bar"></h2>
                    <h2 class="icon-bar"></h2>
                    <h2 class="icon-bar"></h2>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">Nadya's Kitchen</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li role="presentation" class="active"><a href="{{ route('about') }}" class="active">About</a></li>
                    <li><a href="{{ route('employees.create') }}">Contact</a></li>
                    <li><a href="{{ route('employees.index') }}">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a href="{{ route('login') }}" class="nav text-dark">Login</a></li>
                    @else
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="navbar-form navbar-right">
                                @csrf
                                <button type="submit" class="btn btn-link">Logout</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>


    <div class="container">

        <div class="starter-template">
            <h1>About Us</h1>
            <p class="lead">Selamat datang di Nadya's Kitchen, tempat di mana kami menghadirkan kelezatan kuliner
                dengan
                sentuhan kreativitas dan dedikasi. Kami adalah perusahaan kuliner yang berkomitmen untuk menyajikan
                pengalaman
                makanan yang tak terlupakan. Dengan menggunakan bahan berkualitas tinggi, resep unik, dan pelayanan
                profesional,
                kami menciptakan hidangan-hidangan lezat yang memanjakan lidah dan memenuhi preferensi Anda. Kami siap
                menghadirkan solusi kuliner yang sempurna untuk acara pribadi, pertemuan bisnis, atau acara khusus
                lainnya.
                Nikmati momen-momen tak terlupakan dan jelajahi dunia rasa yang menakjubkan bersama Nadya's Kitchen.</p>
        </div>

    </div>
    </div>
    <section id="services" class="services bg-primary">
        <div class="container">
            <center>
                <h2 class="featurette-heading">Our Services</h2>
            </center>

            <br>
            <!-- First Featurette -->
            <div class="featurette" id="about">
                <img class="featurette-image img-responsive center-block pull-right crop"
                    src="{{ Vite::asset('resources/images/pic-about-1.jpg') }}">
                <h2>Katering Acara Pribadi</h2>
                <p class="lead" align="justify">Kami siap menyajikan hidangan lezat untuk acara pribadi seperti ulang
                    tahun,
                    pernikahan, pertemuan keluarga, dan perayaan lainnya. Mulai dari hidangan pembuka hingga hidangan
                    penutup,
                    kami akan menciptakan menu yang sesuai dengan selera dan kebutuhan Anda. Tim kami akan bekerja sama
                    dengan
                    Anda untuk menyesuaikan menu dan memberikan pengalaman makan yang memuaskan bagi para tamu Anda.
                    <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#modal-1">Read
                        more</button>

                <div class="modal fade" id="modal-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <font color="black" size="3"> <a class="modal-title"><b>Katering Acara
                                            Pribadi</b></a>
                            </div>
                            <div class="modal-body">
                                <p align="left">Kami memiliki beragam layanan katering yang dirancang khusus untuk
                                    memenuhi kebutuhan
                                    acara pribadi Anda. Berikut adalah penjelasan lebih detail mengenai katering acara
                                    pribadi yang kami
                                    tawarkan: </p>
                                <p align="justify"> <b>Konsultasi Menu</b>: Tim kami akan bekerja sama dengan Anda untuk
                                    merancang menu
                                    katering yang sesuai dengan selera Anda dan kebutuhan acara. Kami akan
                                    mempertimbangkan preferensi
                                    makanan, alergi, dan kebutuhan diet khusus lainnya untuk memastikan bahwa setiap
                                    hidangan memenuhi
                                    harapan Anda. </p>
                                <p align="justify"> <b> Hidangan Pembuka</b>: Kami menyediakan hidangan pembuka yang
                                    lezat dan beragam,
                                    mulai dari canapés, finger food, hingga hidangan ringan yang menggugah selera. Kami
                                    akan membantu Anda
                                    memilih hidangan pembuka yang sesuai dengan tema acara dan menciptakan pengalaman
                                    yang menarik bagi
                                    para tamu Anda.</p>
                                <p align="justify"> <b> Hidangan Utama </b>: Dari hidangan daging, ayam, ikan, hingga
                                    hidangan
                                    vegetarian, kami menawarkan berbagai pilihan hidangan utama yang menggugah selera.
                                    Setiap hidangan
                                    disiapkan dengan menggunakan bahan berkualitas tinggi dan diproses dengan hati-hati
                                    untuk memberikan
                                    rasa yang sempurna. Kami akan memastikan bahwa hidangan utama yang disajikan
                                    mencerminkan keinginan
                                    Anda dan memberikan kepuasan kuliner kepada tamu Anda.</p>
                                <p align="justify"> <b> Hidangan Penutup</b>: Tidak lengkap rasanya sebuah acara tanpa
                                    hidangan penutup
                                    yang manis dan memikat. Kami menyajikan berbagai macam hidangan penutup seperti kue,
                                    puding, tart, dan
                                    hidangan manis lainnya yang akan memuaskan selera manis para tamu Anda. Hidangan
                                    penutup kami dipilih
                                    dengan cermat untuk memberikan kesan yang tak terlupakan di akhir acara Anda.</p>
                                <p align="justify"> <b> Pelayanan Profesional</b>: Tim kami yang terlatih dan ramah akan
                                    memastikan
                                    bahwa setiap aspek katering acara pribadi Anda berjalan lancar. Mereka akan
                                    melakukan penyajian dengan
                                    elegan, mengatur meja dengan indah, dan memastikan bahwa para tamu Anda merasa
                                    nyaman dan terlayani
                                    dengan baik selama acara.</p>
                                <p align="justify"> <b> Customisasi Menu</b>: AKami menyadari bahwa setiap acara pribadi
                                    memiliki
                                    kebutuhan yang unik. Oleh karena itu, kami menawarkan kemampuan untuk menyesuaikan
                                    menu katering Anda
                                    sesuai dengan keinginan Anda. Anda dapat menambahkan atau mengganti hidangan
                                    tertentu sesuai dengan
                                    preferensi pribadi Anda dan memastikan bahwa setiap tamu akan puas dengan hidangan
                                    yang disajikan.
                                </p>
                                </font>
                            </div>
                            <div class="modal-footer">
                                <a href="" class="btn btn-custom" data-dismiss="modal">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">
            <!-- Second Featurette -->
            <div class="featurette" id="services">
                <img class="featurette-image img-responsive center-block pull-left crop"
                    src="{{ Vite::asset('resources/images/pic-about-2.png') }}">
                <h2 class="featurette-heading">Katering Bisnis</h2>
                <p class="lead" align="justify">Untuk pertemuan bisnis, seminar, atau acara perusahaan, kami
                    menyediakan layanan
                    katering yang profesional dan dapat diandalkan. Hidangan yang lezat dan penyajian yang menarik akan
                    menjadi
                    tambahan yang sempurna untuk kesuksesan acara Anda. Kami memahami pentingnya memberikan kesan yang
                    baik kepada
                    klien atau rekan kerja Anda, dan penawaran kuliner kami akan membantu Anda meninggalkan kesan yang
                    tak
                    terlupakan.
                    <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#modal-2">Read
                        more</button>
                <div class="modal fade" id="modal-2">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <font color="black" size="3"> <a class="modal-title"><b>Katering
                                            Bisnis</b></a>
                            </div>
                            <div class="modal-body">
                                <p class="lead" align="justify">Kami mengerti betapa pentingnya mengesankan klien,
                                    mitra bisnis, atau
                                    rekan kerja Anda melalui pengalaman katering yang profesional. Berikut ini
                                    penjelasan lebih rinci
                                    mengenai layanan katering bisnis yang kami tawarkan:</p>
                                <p class="lead" align="justify"> <b>Konsultasi Menu </b>:Tim kami akan berkolaborasi
                                    dengan Anda untuk
                                    merancang menu katering yang sesuai dengan kebutuhan acara bisnis Anda. Kami akan
                                    mempertimbangkan
                                    preferensi makanan, gaya acara, dan budaya perusahaan Anda dalam menentukan hidangan
                                    yang paling tepat
                                    untuk menciptakan pengalaman yang mengesankan. </p>
                                <p class="lead" align="justify"> <b> Hidangan Pembuka </b>: Kami menyajikan hidangan
                                    pembuka yang elegan
                                    dan lezat untuk menyambut para tamu Anda. Dari canapés yang kreatif hingga hidangan
                                    pembuka yang
                                    beragam, kami akan menciptakan pengalaman kuliner yang memikat dan meninggalkan
                                    kesan yang baik. </p>
                                <p class="lead" align="justify"> <b> Hidangan Utama </b>: Kami menawarkan berbagai
                                    pilihan hidangan
                                    utama yang disiapkan dengan bahan-bahan berkualitas tinggi dan disajikan dengan
                                    presentasi yang
                                    menarik. Dari hidangan daging premium hingga hidangan laut yang segar, kami akan
                                    memastikan bahwa
                                    setiap hidangan memenuhi standar keunggulan dan memberikan kenikmatan kuliner kepada
                                    para tamu Anda.
                                </p>
                                <p class="lead" align="justify"> <b> Hidangan Pendamping </b>: Kami juga menyediakan
                                    hidangan pendamping
                                    yang sempurna untuk melengkapi hidangan utama. Mulai dari pilihan sayuran segar,
                                    hidangan nasi atau
                                    pasta yang lezat, hingga hidangan khas daerah tertentu, kami akan membantu Anda
                                    memilih hidangan yang
                                    sesuai dengan selera dan kebutuhan acara bisnis Anda. </p>
                                <p class="lead" align="justify"> <b> Hidangan Penutup </b>: Kami menawarkan hidangan
                                    penutup yang
                                    menggugah selera untuk menutup acara Anda dengan manis. Dari pilihan kue-kue
                                    istimewa hingga hidangan
                                    penutup yang elegan, kami akan memberikan sentuhan manis yang sempurna untuk
                                    mengakhiri pertemuan
                                    bisnis Anda dengan kesan yang tak terlupakan. </p>
                                <p class="lead" align="justify"> <b> Hidangan Penutup </b>: Kami menawarkan hidangan
                                    penutup yang
                                    menggugah selera untuk menutup acara Anda dengan manis. Dari pilihan kue-kue
                                    istimewa hingga hidangan
                                    penutup yang elegan, kami akan memberikan sentuhan manis yang sempurna untuk
                                    mengakhiri pertemuan
                                    bisnis Anda dengan kesan yang tak terlupakan. </p>
                                <p class="lead" align="justify"> <b> Layanan Pelayanan Profesional </b>: Tim kami
                                    yang berpengalaman
                                    akan memberikan pelayanan katering yang profesional dan terpercaya selama acara
                                    bisnis Anda. Mereka
                                    akan menjaga tingkat kebersihan, keamanan, dan presentasi yang tinggi. Dari
                                    penyajian yang rapi hingga
                                    pelayanan yang ramah, kami akan memastikan bahwa para tamu Anda merasa terlayani
                                    dengan baik. </p>
                                <p class="lead" align="justify"> <b> Customisasi Menu </b>: Kami siap untuk
                                    menyesuaikan menu katering
                                    Anda sesuai dengan kebutuhan khusus acara bisnis Anda. Anda dapat menambahkan atau
                                    mengganti hidangan
                                    tertentu, mempertimbangkan preferensi diet atau kebutuhan khusus lainnya. Kami akan
                                    bekerja sama
                                    dengan Anda untuk menciptakan pengalaman katering yang unik dan sesuai dengan visi
                                    bisnis Anda. </p>
                                </font>
                            </div>
                            <div class="modal-footer">
                                <a href="" class="btn btn-custom" data-dismiss="modal">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- Third Featurette -->
            <div class="featurette" id="contact">
                <img class="featurette-image img-responsive center-block pull-right crop"
                    src="{{ Vite::asset('resources/images/pic-about-3.png') }}">
                <h2 class="featurette-heading">Katering Acara Khusus </h2>
                <p class="lead" align="justify">Apakah Anda merencanakan gala, peluncuran produk, atau acara khusus
                    lainnya,
                    kami dapat memberikan pengalaman katering yang mewah dan berkelas. Masakan kreatif kami dan
                    penyajian yang
                    elegan akan memukau para tamu Anda dan meningkatkan suasana acara Anda. Kami memperhatikan setiap
                    detail untuk
                    memastikan bahwa acara spesial Anda benar-benar tak terlupakan.
                    <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#modal-3">Read
                        more</button>
                <div class="modal fade" id="modal-3">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <font color="black" size="3"> <a class="modal-title"><b>Katering Acara
                                            Khusus</b></a>
                            </div>
                            <div class="modal-body">
                                <p class="lead" align="justify">Berikut adalah penjelasan lebih detail mengenai
                                    layanan katering acara
                                    khusus yang kami tawarkan: </p>
                                <p class="lead" align="justify"> <b>Konsultasi Kreatif </b>: im kami akan
                                    berkolaborasi dengan Anda
                                    untuk merencanakan dan merancang acara katering yang sesuai dengan tema dan konsep
                                    acara khusus Anda.
                                    Kami akan mempertimbangkan preferensi kuliner Anda, dekorasi, suasana, dan setiap
                                    detail penting
                                    lainnya untuk menciptakan pengalaman yang unik dan sesuai dengan visi Anda.</p>
                                <p class="lead" align="justify"> <b> Menu Khusus </b>: Kami akan membuat menu khusus
                                    yang dirancang
                                    khusus untuk acara Anda. Mulai dari hidangan pembuka yang memikat, hidangan utama
                                    yang lezat, hingga
                                    hidangan penutup yang menggugah selera, setiap hidangan akan disesuaikan dengan
                                    kebutuhan tema dan
                                    preferensi kuliner Anda.</p>
                                <p class="lead" align="justify"> <b> Masakan Kreatif </b>: im koki kami yang
                                    berbakat dan berpengalaman
                                    akan menghadirkan masakan kreatif yang menggabungkan cita rasa khas dengan
                                    presentasi yang menawan.
                                    Kami akan menciptakan hidangan yang memikat dan berkelas, menggabungkan elemen
                                    tradisional dan
                                    inovatif untuk menciptakan pengalaman kuliner yang tak terlupakan.
                                </p>
                                <p class="lead" align="justify"> <b> Penyajian Elegan </b>: Kami akan menyajikan
                                    hidangan dengan
                                    penyajian yang elegan dan indah untuk meningkatkan suasana acara Anda. Dengan
                                    perhatian terhadap
                                    detail, kami akan mengatur hidangan dengan estetika yang menarik dan mengundang
                                    selera.</p>
                                <p class="lead" align="justify"> <b> Pelayanan Profesional </b>: Tim kami yang
                                    terlatih akan memberikan
                                    pelayanan katering yang profesional dan terpercaya selama acara khusus Anda. Mereka
                                    akan memastikan
                                    bahwa setiap aspek penyajian dan pelayanan berjalan lancar, memenuhi kebutuhan Anda,
                                    dan menjaga
                                    kepuasan tamu Anda.</p>
                                <p class="lead" align="justify"> <b> Dekorasi Meja </b>: Kami juga dapat membantu
                                    Anda dengan dekorasi
                                    meja yang sesuai dengan tema acara khusus Anda. Dengan perpaduan yang sempurna
                                    antara elemen dekoratif
                                    dan makanan, kami akan menciptakan meja yang menarik dan mengesankan. </p>
                                <p class="lead" align="justify"> <b> Pengaturan Area Makan </b>: Tim kami akan
                                    membantu mengatur area
                                    makan sesuai dengan kebutuhan acara Anda. Dengan perhatian terhadap detail, kami
                                    akan menciptakan
                                    lingkungan yang nyaman dan menarik bagi para tamu Anda. </p>
                                </font>
                            </div>
                            <div class="modal-footer">
                                <a href="" class="btn btn-custom" data-dismiss="modal">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </section>
    <!-- Footer -->
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center>
                        <p> &copy; Nadya's Kitchen</p>
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
                </center>
            </div>
    </div>
    </footer>
    </div>

    <script src="{{ Vite::asset('resources/js/jquery.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/bootstrap.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/ie10.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/jquery-2.1.1.min.j') }}s"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    @vite('resources/js/app.js')
</body>

</html>
