<nav class="navbar nav-custom nav-custom-bg-light navbar-expand">
    <div class="container-fluid hide-in-mobile-xs hide-in-mobile-sm">
        <div class="container">
            <ul class="navbar-nav nav-justified w-100 align-items-center">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link text-center">
                        <img src="{{ asset('assets/img/svg/ic-home.svg') }}">
                        <p class="m-0 nav-text">Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('rewards.index') }}" class="nav-link text-center">
                        <img src="{{ asset('assets/img/svg/ic-giftbox.svg') }}">
                        <p class="m-0 nav-text">Hadiah</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-center">
                        <img src="{{ asset('assets/img/svg/ic-chart.svg') }}">
                        <p class="m-0 nav-text">Leaderboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('topups.index') }}" class="nav-link text-center">
                        <img src="{{ asset('assets/img/svg/ic-wallet.svg') }}">
                        <p class="m-0 nav-text">Top Up</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-center">
                        <img src="{{ asset('assets/img/svg/ic-user.svg') }}">
                        <p class="m-0 nav-text">Profile</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="navbar-nav nav-justified w-100 align-items-center hide-in-mobile-md hide-in-mobile-lg hide-in-mobile-xl hide-in-mobile-xxl">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link text-center">
                <img src="{{ asset('assets/img/svg/ic-home.svg') }}">
                <p class="m-0 nav-text">Home</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-center">
                <img src="{{ asset('assets/img/svg/ic-giftbox.svg') }}">
                <p class="m-0 nav-text">Hadiah</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-center">
                <img src="{{ asset('assets/img/svg/ic-chart.svg') }}">
                <p class="m-0 nav-text">Leaderboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-center">
                <img src="{{ asset('assets/img/svg/ic-wallet.svg') }}">
                <p class="m-0 nav-text">Top Up</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-center">
                <img src="{{ asset('assets/img/svg/ic-user.svg') }}">
                <p class="m-0 nav-text">Profile</p>
            </a>
        </li>
    </ul>
</nav>