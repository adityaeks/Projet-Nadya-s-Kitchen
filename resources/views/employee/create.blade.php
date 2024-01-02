@extends('layouts.app')

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
                <li role="presentation"><a href="{{ route('about') }}" class="active">About</a></li>
                <li class="active"><a href="{{ route('employees.create') }}">Contact</a></li>
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
<div class="container-sm mt-lg-5">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @csrf
    <div class="container">
        <div class="starter-template">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>
                                <center>Get a Quote</center>
                            </h4>
                        </div> <br> <br>
                        <form action="{{ route('employees.store') }}" method="POST" id="registration-form"
                            class="form-horizontal" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" id="name" name="name"
                                        placeholder="Your name" />
                                </div>
                                @error('name')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="age">Age</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control @error('age') is-invalid @enderror "
                                        value="{{ old('age') }}" id="age" name="age"
                                        placeholder="Your Age" />
                                </div>
                                @error('age')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="email">Email</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror "
                                        value="{{ old('email') }}" id="email" name="email"
                                        placeholder="Your Email" />
                                </div>
                                @error('email')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="alamat">City</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror "
                                        value="{{ old('alamat') }}" id="alamat" name="alamat"
                                        placeholder="Your city name" />
                                </div>
                                @error('alamat')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="masukan">Message</label>
                                <div class="col-md-8">
                                    <textarea class="form-control @error('masukan') is-invalid @enderror " value="{{ old('masukan') }}" id="masukan"
                                        name="masukan" rows="7" placeholder="Your enter your requirements" /></textarea>
                                </div>
                                @error('masukan')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-2">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>
                                <center> Our Office address</center>
                            </h4>
                        </div>
                        <div class="panel-body text-center">
                            <div>
                                <h4>Nadya's Kitchen ltd</h4><br />
                                Ketintang<br />
                                Wonokromo<br />
                                Surabaya<br />
                                <i class="fa fa-phone"></i>
                                <abbr title="Phone">P</abbr>: (+62) 123 1234 12345<br />
                                <i class="fa fa-envelope-o"></i>
                                <abbr title="Email">E</abbr>: <a
                                    href="#">NADYA_CATHERINE_AGNES_WAMAFMA@gmail.com</a><br />
                                <i class="fa fa-clock-o"></i>
                                <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p><br />
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
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <p> &copy; Nadya's Kitchen 2021</p>
                </center>
            </div>
        </div>

    </footer>


</div>
@vite('resources/js/app.js')

</body>

</html>
