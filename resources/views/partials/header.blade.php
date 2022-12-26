<header class="bg-light">
    <div class="container">

        <nav class="navbar navbar-expand navbar-light bg-light">
            {{-- Logo --}}
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fa-brands fa-laravel"></i>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Nav --}}
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
