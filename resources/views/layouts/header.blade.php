<header class="mb-auto">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a href="{{ route('news.index') }}">
            <h2 class="navbar-brand text-white ml-5">MyNEWS</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link text-white me-2 " href="{{ route('personal') }}">{{ Auth::user()->login }}</a> 
                    </li>
                    
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <button type="submit" class="btn btn-primary me-2">Логин</button>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>

