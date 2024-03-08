<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

        <div class="logo">
            <a href="{{ route('home') }}">
                <img
                    src="{{ asset('assets/img/logo_name.png') }}"
                    alt="{{ config('app.name') }}"
                    class="img-fluid"
                >
            </a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="{{ active('/') }}" href="{{ route('home') }}">
                        {{ __('Home') }}
                    </a>
                </li>
                <li>
                    <a class="{{ active('about*') }}" href="{{ route('about') }}">
                        {{ __('About Us') }}
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="services.html">Services</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="testimonials.html">Testimonials</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="pricing.html">Pricing</a>--}}
{{--                </li>--}}
                <li>
                    <a class="{{ active('portfolios*') }}" href="{{ route('portfolios.index') }}">
                        {{ __('Portfolio') }}
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="blog.html">Blog</a>--}}
{{--                </li>--}}
                <li>
                    <a class="{{ active('contact-us*') }}" href="{{ route('contact-us.index') }}">
                        {{ __('Contact Us') }}
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
