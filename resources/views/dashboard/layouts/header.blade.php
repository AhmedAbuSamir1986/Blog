<header class="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
        <a class="navbar-brand" href="{{ route('dashboard.index') }}" style="background-image: url({{ asset($setting->logo) }})"></a>
        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-left hidden-md-down">
            <li class="nav-item">
                <a class="nav-link aside-toggle" href="#"><i class="icon-bell"></i><span class="tag tag-pill tag-danger">5</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="icon-list"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('adminassets/img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="hidden-md-down">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-xs-center">
                        <strong>{{ __('words.setting') }}</strong>
                    </div>
                    <a class="dropdown-item" href="{{ route('dashboard.users.edit', auth()->user()) }}"><i class="fa fa-user"></i> {{ __('words.profile') }}</a>
                    <a class="dropdown-item" href="{{ route('dashboard.settings') }}"><i class="icon-settings"></i> {{ __('words.setting') }}</a>
                    <!--<a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="tag tag-default">42</span></a>-->
                    <div class="divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         <i class="fa fa-lock"></i> 
                            {{ __('words.logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="hidden-md-down">{{ LaravelLocalization::getCurrentLocaleNative() }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-xs-center">
                        <strong>{{ __('words.languages') }}</strong>
                    </div>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    @endforeach
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link navbar-toggler aside-toggle" href="#">&#9776;</a>
            </li>

        </ul>
    </div>
</header>