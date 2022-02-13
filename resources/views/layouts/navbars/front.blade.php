<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h2>EVIS</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            @if (request()->route()->uri == 'home')
                                <span class="sr-only">(current)</span>
                            @endif
                        </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('carslist') }}">Cars</a>
                        @if (request()->route()->uri == 'carslist')
                            <span class="sr-only">(current)</span>
                        @endif
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        @if (request()->route()->uri == 'contact')
                            <span class="sr-only">(current)</span>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
