<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

<div id="app">
    @include('partials.navbar')

    <div class="container-fluid">
        <div class="row">
            @include('partials.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>
</div>

@include('partials.scripts')
</body>
</html>
