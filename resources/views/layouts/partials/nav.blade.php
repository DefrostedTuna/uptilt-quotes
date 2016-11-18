<div class="nav__full--container">
    <div class="nav__full--wrap">
        <a href="{{ route('home') }}" class="nav__logo"><strong>Uptilt</strong> Quotes</a>
        <ul class="nav__links hide-on-small-and-down">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('quotes.index') }}">Quotes</a>
            </li>
            <li>
                <a href="{{ route('authors.index') }}">Authors</a>
            </li>
            <li>
                <a href="{{ route('documentation') }}">API</a>
            </li>
        </ul>
        <ul class="nav__links hide-on-med-and-up">
            <li><a class="btn__mobile-nav-toggle hamburger"><i class="material-icons">menu</i></a></li>
        </ul>
    </div>
</div>