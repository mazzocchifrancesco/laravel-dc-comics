<header>
    <a href="{{ route('home') }}">Home</a>
        <div class="container d-flex justify-content-between">
    
            <img id="headLogo" src="/Assets/images/dc-logo.png" alt="">
            <nav class="d-flex gap-3 align-items-center">
                @foreach ($menuLinks as $link)
                <a class="text-decoration-none text-secondary fw-bold" href={{$link['url']}} >{{$link['testo']}}</a>
                @endforeach
            </nav>
        </div>
    </header>