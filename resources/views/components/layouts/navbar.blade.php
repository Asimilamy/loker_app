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
                    <li class="nav-item dropdown active">
                        <a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">
                            Home <b class="caret"></b>
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
                    <li class="nav-item dropdown menu-large">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            Features<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{ asset('assets/img/template-easy-customize.png') }}" alt="" class="img-fluid d-none d-lg-block">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h5>Shortcodes</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="template-accordions.html" class="nav-link">Accordions</a></li>
                                            <li class="nav-item"><a href="template-alerts.html" class="nav-link">Alerts</a></li>
                                            <li class="nav-item"><a href="template-buttons.html" class="nav-link">Buttons</a></li>
                                            <li class="nav-item"><a href="template-content-boxes.html" class="nav-link">Content boxes</a></li>
                                            <li class="nav-item"><a href="template-blocks.html" class="nav-link">Horizontal blocks</a></li>
                                            <li class="nav-item"><a href="template-pagination.html" class="nav-link">Pagination</a></li>
                                            <li class="nav-item"><a href="template-tabs.html" class="nav-link">Tabs</a></li>
                                            <li class="nav-item"><a href="template-typography.html" class="nav-link">Typography</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h5>Header variations</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="template-header-default.html" class="nav-link">Default sticky header</a></li>
                                            <li class="nav-item"><a href="template-header-nosticky.html" class="nav-link">No sticky header</a></li>
                                            <li class="nav-item"><a href="template-header-light.html" class="nav-link">Light header</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-large">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{ asset('assets/img/template-homepage.png') }}" alt="" class="img-fluid d-none d-lg-block">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h5>Portfolio</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                                            <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                                            <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                                            <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                                            <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                                            <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                                            <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                                            <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <h5>About</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                                            <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                                            <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                                            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                                        </ul>
                                        <h5>Marketing</h5>
                                        <ul class="list-unstyled">
                                            <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- ========== FULL WIDTH MEGAMENU ==================-->
                    <li class="nav-item dropdown menu-large">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle">All Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Home</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="index.html" class="nav-link">Option 1: Default Page</a></li>
                                            <li class="nav-item"><a href="index2.html" class="nav-link">Option 2: Application</a></li>
                                            <li class="nav-item"><a href="index3.html" class="nav-link">Option 3: Startup</a></li>
                                            <li class="nav-item"><a href="index4.html" class="nav-link">Option 4: Agency</a></li>
                                            <li class="nav-item"><a href="index5.html" class="nav-link">Option 5: Portfolio</a></li>
                                        </ul>
                                        <h5>About</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                                            <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                                            <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                                            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                                        </ul>
                                        <h5>Marketing</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Portfolio</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                                            <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                                            <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                                            <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                                            <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                                            <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                                            <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                                            <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                                        </ul>
                                        <h5>User pages</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="customer-register.html" class="nav-link">Register / login</a></li>
                                            <li class="nav-item"><a href="customer-orders.html" class="nav-link">Orders history</a></li>
                                            <li class="nav-item"><a href="customer-order.html" class="nav-link">Order history detail</a></li>
                                            <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                                            <li class="nav-item"><a href="customer-account.html" class="nav-link">Customer account / change password</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Shop</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="shop-category.html" class="nav-link">Category - sidebar right</a></li>
                                            <li class="nav-item"><a href="shop-category-left.html" class="nav-link">Category - sidebar left</a></li>
                                            <li class="nav-item"><a href="shop-category-full.html" class="nav-link">Category - full width</a></li>
                                            <li class="nav-item"><a href="shop-detail.html" class="nav-link">Product detail</a></li>
                                        </ul>
                                        <h5>Shop - order process</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="shop-basket.html" class="nav-link">Shopping cart</a></li>
                                            <li class="nav-item"><a href="shop-checkout1.html" class="nav-link">Checkout - step 1</a></li>
                                            <li class="nav-item"><a href="shop-checkout2.html" class="nav-link">Checkout - step 2</a></li>
                                            <li class="nav-item"><a href="shop-checkout3.html" class="nav-link">Checkout - step 3</a></li>
                                            <li class="nav-item"><a href="shop-checkout4.html" class="nav-link">Checkout - step 4</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Contact</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                            <li class="nav-item"><a href="contact2.html" class="nav-link">Contact - version 2</a></li>
                                            <li class="nav-item"><a href="contact3.html" class="nav-link">Contact - version 3</a></li>
                                        </ul>
                                        <h5>Pages</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                                            <li class="nav-item"><a href="text-left.html" class="nav-link">Text page - left sidebar</a></li>
                                            <li class="nav-item"><a href="text-full.html" class="nav-link">Text page - full width</a></li>
                                            <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                            <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                                        </ul>
                                        <h5>Blog</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="blog.html" class="nav-link">Blog listing big</a></li>
                                            <li class="nav-item"><a href="blog-medium.html" class="nav-link">Blog listing medium</a></li>
                                            <li class="nav-item"><a href="blog-small.html" class="nav-link">Blog listing small</a></li>
                                            <li class="nav-item"><a href="blog-post.html" class="nav-link">Blog Post</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                    <!-- ========== Contact dropdown ==================-->
                    <li class="nav-item dropdown">
                        <a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Contact <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="contact.html" class="nav-link">Contact option 1</a></li>
                            <li class="dropdown-item"><a href="contact2.html" class="nav-link">Contact option 2</a></li>
                            <li class="dropdown-item"><a href="contact3.html" class="nav-link">Contact option 3</a></li>
                        </ul>
                    </li>
                    <!-- ========== Contact dropdown end ==================-->
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