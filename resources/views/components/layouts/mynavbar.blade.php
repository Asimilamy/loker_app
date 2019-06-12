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
                    <li class="nav-item dropdown">
                        <a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">
                            {{ __('Home') }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="index.html" class="nav-link">Option 1: Default Page</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="index2.html" class="nav-link">Option 2: Application</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="index3.html" class="nav-link">Option 3: Startup</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="index4.html" class="nav-link">Option 4: Agency</a>
                            </li>
                            <li class="dropdown-item dropdown-submenu">
                                <a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown link</a>
                                <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu">
                                    <li class="dropdown-item"><a href="#" class="nav-link">Action</a></li>
                                    <li class="dropdown-item"><a href="#" class="nav-link">Another action</a></li>
                                    <li class="dropdown-item"><a href="#" class="nav-link">Something else here</a></li>
                                </ul>
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