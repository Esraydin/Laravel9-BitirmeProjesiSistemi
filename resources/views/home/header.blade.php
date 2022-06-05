
<div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
        <div class="hidden-top-inner container">
            <div class="row">
                <div class="span12">
                    <ul>
                        <li><strong>We are available for any custom works this month</strong></li>
                        <li>Main office: Springville center X264, Park Ave S.01</li>
                        <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
        <div class="container ">
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
                        <a href="index.html"> <img src="{{asset('assets')}}/img/logo.png" alt="" class="logo"/></a>
                        <h1>Flat and trendy bootstrap template</h1>
                    </div>
                </div>
                <div class="span8">
                    <div class="navbar navbar-static-top">
                        <div class="navigation">
                            @php
                                use App\Http\Controllers\HomeController;$mainCategories= HomeController::maincategorylist()
                            @endphp
                            <nav>
                                <ul class="nav topnav">

                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('references')}}">References</a></li>


                                    <li class="dropdown">
                                        @foreach($mainCategories as $rs)
                                            <a href="#">Features <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                @if(count($rs->children))
                                                    @include('home.categorytree',['children'=>$rs->children])
                                                @endif

                                                <li><a href="{{$rs->title}}">{{$rs->title}}</a></li>
                                                <li><a href="table.html">{{$rs->title}}</a></li>
                                                <li><a href="components.html">{{$rs->title}}</a></li>
                                                <li class="dropdown"><a href="#">{{$rs->title}}<i
                                                            class="icon-angle-right"></i></a>
                                                    <ul class="dropdown-menu sub-menu-level1">
                                                        <li><a href="index.html">AAAAAA</a></li>
                                                        <li><a href="index-alt2.html">BBBBB</a></li>
                                                        <li><a href="index-alt3.html">Parallax slider</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                    </li>
                                    @endforeach

                                    <li class="dropdown">
                                        <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                            <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                                            <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                                            <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{route('contact')}}">Contact </a>
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

</div>
