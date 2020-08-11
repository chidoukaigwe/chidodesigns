<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top" id="navbar-header">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Chido Designs
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav custom-navbar">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/tech-skills">Tech Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/work-experience">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/clients">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/posts">Blog</a>
                    </li> --}}
                </ul>

            <!-- Right Side Of Navbar -->
            </div>
        </div>
    </nav>
