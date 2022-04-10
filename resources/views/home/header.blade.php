<header>
    <div class="container">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
            <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
            <div class="span12">
                <div class="headnav">
                    <ul>
                        <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                        <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
                    </ul>
                </div>
                <!-- Signup Modal -->
                <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Email</label>
                                <div class="controls">
                                    <input type="text" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputSignupPassword">Password</label>
                                <div class="controls">
                                    <input type="password" id="inputSignupPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                                <div class="controls">
                                    <input type="password" id="inputSignupPassword2" placeholder="Password">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="btn">Sign up</button>
                                </div>
                                <p class="aligncenter margintop20">
                                    Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end signup modal -->
                <!-- Sign in Modal -->
                <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label" for="inputText">Username</label>
                                <div class="controls">
                                    <input type="text" id="inputText" placeholder="Username">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputSigninPassword">Password</label>
                                <div class="controls">
                                    <input type="password" id="inputSigninPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="btn">Sign in</button>
                                </div>
                                <p class="aligncenter margintop20">
                                    Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end signin modal -->
                <!-- Reset Modal -->
                <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label" for="inputResetEmail">Email</label>
                                <div class="controls">
                                    <input type="text" id="inputResetEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="btn">Reset password</button>
                                </div>
                                <p class="aligncenter margintop20">
                                    We will send instructions on how to reset your password to your inbox
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end reset modal -->
            </div>
        </div>
        <div class="row">
            <div class="span4">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('assets')}}/img/logo.png" alt="" class="logo" /></a>
                    <h1>Flat and trendy bootstrap template</h1>
                </div>
            </div>
            <div class="span8">
                <div class="navbar navbar-static-top">

                    <div class="navigation">
                        <nav>
                            <ul class="nav topnav">
                                <li class="dropdown active">
                                    <a href="index.html">Home <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index-alt2.html">Homepage 2</a></li>
                                        <li><a href="index-alt3.html">Homepage 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Features <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="table.html">Table</a></li>
                                        <li><a href="components.html">Components</a></li>
                                        <li><a href="animations.html">56 Animations</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="icon-variations.html">Icon variations</a></li>
                                        <li class="dropdown"><a href="#">3 Sliders <i class="icon-angle-right"></i></a>
                                            <ul class="dropdown-menu sub-menu-level1">
                                                <li><a href="index.html">Nivo slider</a></li>
                                                <li><a href="index-alt2.html">Slit slider</a></li>
                                                <li><a href="index-alt3.html">Parallax slider</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="pricingbox.html">Pricing boxes</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                        <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                                        <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                                        <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Blog <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                        <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                                        <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- end navigation -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
