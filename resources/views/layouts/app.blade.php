<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('contacts.index') }}">Contacts</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="{{ route('contacts.create') }}">Create Contact</a>
                </li>
            </ul>

            <form method="GET" action="{{ route('contacts.index') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by name or email" name="search"
                    value="{{ request('search') }}" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>

        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
