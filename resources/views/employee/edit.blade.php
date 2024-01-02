<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="{{ Vite::asset('resources/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ Vite::asset('resources/css/starter-template.css') }}" rel="stylesheet">
    <link href="{{ Vite::asset('resources/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ Vite::asset('resources/css/one-page-wonder.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/bootstrap-theme.min.css') }}">
    <link href="{{ Vite::asset('resources/css/mystyle.css') }}" rel="stylesheet" />
    <link href="{{ Vite::asset('resources/css/bstyle.css') }}" rel="stylesheet" />
    <link href="{{ Vite::asset('resources/css/bootstrap.min.css') }}" rel="stylesheet">

</head>


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
                    <li role="presentation"><a href="{{ route('about') }}" class="active">About</a></li>
                    <li><a href="{{ route('employees.create') }}">Contact</a></li>
                    <li  class="active"><a href="{{ route('employees.index') }}">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a href="{{ route('login') }}" class="nav text-dark">Login</a></li>
                    @else
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <a class="nav" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container-sm mt-lg-5 ">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container">
            <div class="starter-template">
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>
                                    <center>Edit</center>
                                </h4>
                            </div> <br> <br>
                            <form action="{{ route('employees.store' , ['employee' => $employee->id]) }}" method="POST"
                                class="form-horizontal" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $errors->any() ? old('name') : $employee->name }}" id="name" name="name"
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
                                            value="{{ $errors->any() ? old('age') : $employee->age }}" id="age" name="age"
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
                                            value="{{ $errors->any() ? old('email') : $employee->email }}" id="email" name="email"
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
                                            value="{{ $errors->any() ? old('alamat') : $employee->alamat }}" id="alamat" name="alamat"
                                            placeholder="Your city name" />
                                    </div>
                                    @error('alamat')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="masukan">Message</label>
                                    <div class="col-md-8">
                                        <textarea id="masukan" class="form-control @error('masukan') is-invalid @enderror "
                                            name="masukan" rows="7">{{ $errors->any() ? old('masukan') : $employee->masukan }}</textarea>
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
                </div>
            </div>
        </div>

    </div>
    @vite('resources/js/app.js')

</body>

</html>
