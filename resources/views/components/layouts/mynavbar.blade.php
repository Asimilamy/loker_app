<header class="nav-holder make-sticky">
    <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
        <div class="container">
            <a href="index.html" class="navbar-brand home" style="margin-top: 5px;">
                <h2><i class="fa fa-building"></i> {{ config('app.name', 'Laravel') }}</h2>
            </a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>
            <div id="navigation" class="navbar-collapse collapse">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('home') }}">
                            {{ __('Home') }}
                        </a>
                    </li>
                    @include('components.layouts.navbar.' . session('type'))
                    <li class="nav-item dropdown">
                        <a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">
                            {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="{{ url('account') }}" class="nav-link">Accounts</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ url('logout') }}" class="nav-link">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="search" class="collapse clearfix">
                <form role="search" class="navbar-form">
                    <div class="input-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-template-main">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>