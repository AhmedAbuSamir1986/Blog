<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}"><i class="icon-speedometer"></i> {{ __('words.dashboard') }}</a>
            </li>

            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle"><i class="fa fa-tags"></i> {{ __('words.categories') }}</a>
                <ul class="nav-dropdown-items">
                    @can('view', $setting)
                        <a class="nav-link" href="{{ route('dashboard.category.create') }}"><i class="fa fa-tag"></i> {{ __('words.add category') }}</a>
                    @endcan
                    <a class="nav-link" href="{{ route('dashboard.category.index') }}"><i class="fa fa-tags"></i> {{ __('words.categories') }}</a>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle"><i class="icon-puzzle"></i> {{ __('words.posts') }}</a>
                <ul class="nav-dropdown-items">
                    <a href="{{ route('dashboard.posts.create') }}" class="nav-link"><i class="icon-notebook"></i> {{ __('words.add post') }}</a>
                    <a href="{{ route('dashboard.posts.index') }}" class="nav-link"><i class="fa fa-newspaper-o"></i> {{ __('words.posts') }}</a>
                </ul>
            </li>

            @can('view', $setting)
                <li class="nav-item nav-dropdown">
                    <a href="#" class="nav-link nav-dropdown-toggle"><i class="icon-people"></i> {{ __('words.users') }}</a>
                    <ul class="nav-dropdown-items">
                        <a class="nav-link" href="{{ route('dashboard.users.create') }}"><i class="icon-user-follow"></i> {{ __('words.add user') }}</a>
                        <a class="nav-link" href="{{ route('dashboard.users.index') }}"><i class="icon-people"></i> {{ __('words.users') }}</a>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.settings') }}"><i class="icon-settings"></i> {{ trans('words.setting') }}</a>
                </li>
            @endcan
        </ul>
    </nav>
</div>