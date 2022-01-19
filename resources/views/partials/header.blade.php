<header>
    <section class="header-container">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/dc-logo.png') }}" alt="brand">
            </a>
        </div>
        <nav class="navbar">
            <ul>
                <li>
                    <a href="{{ route('home') }}"
                    @if (Request::route()->getName() === 'home') class="active" @endif
                    > comics</a>

                </li>
                <li>
                    <a href="{{ route('news') }}"
                    @if (Request::route()->getName() === 'news') class="active" @endif
                    > news </a>
                </li>
            </ul>
        </nav>
    </section>
</header>