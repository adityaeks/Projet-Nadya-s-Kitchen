<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="{{ Vite::asset('resources/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ Vite::asset('resources/css/starter-template.css') }}" rel="stylesheet">
    <link href="{{ Vite::asset('resources/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ Vite::asset('resources/css/one-page-wonder.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
                    <li "><a class="top-menu-item-a top-menu-item-has-sub-menu-a"
                            href="{{ route('home') }}">Home</a></li>
                    <li><a  href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('employees.create') }}">Contact</a></li>
                    <li role="presentation" class="active" ><a href="{{ route('employees.index') }}">Admin</a></li>
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

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">Admin</h4>
            </div>
            {{-- <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">Create Employee</a>
                </div>
            </div> --}}
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Message</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                      @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->alamat }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->age }}</td>
                            <td>{{ $employee->masukan }}</td>
                            <td class="table-icon-column">
                                <a href="{{ route('employees.edit', ['employee' => $employee->id]) }}"
                                    class="btn btn-outline-dark btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <form action="{{ route('employees.destroy', ['employee' => $employee->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-dark btn-sm"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
            </div>
        </div>

        @vite('resources/js/app.js')
</body>

</html>
