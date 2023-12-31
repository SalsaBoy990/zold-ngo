<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="/">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">{{ __('FAQ') }}</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">{{ __('Blog') }}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <li><a class="dropdown-item" href="{{ route('blog.home') }}">{{ __('Blog Home') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('blog.post') }}">{{ __('Blog Post') }}</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">{{ __('Portfolio') }}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                        <li><a class="dropdown-item"
                               href="{{ route('portfolio.overview') }}">{{ __('Portfolio Overview') }}</a></li>
                        <li><a class="dropdown-item" href="{{ route('portfolio.item') }}">{{ __('Portfolio Item') }}</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
