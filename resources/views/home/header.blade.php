
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
                        @auth()
                            <li><a href="/logoutuser" data-toggle="modal">Logout</a></li>
                        @endauth
                        @guest()
                            <ul>

                                <li><a href="/loginuser" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                <li><a href="/registeruser" data-toggle="modal">Join</a></li>
                            </ul>
                        @endguest

                    </div>
                    <!-- Signup Modal -->
                    <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog"
                         aria-labelledby="mySignupModalLabel" aria-hidden="true">
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
                                        Already have an account? <a href="/login" data-dismiss="modal"
                                                                    aria-hidden="true" data-toggle="modal">Login</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end signup modal -->
                    <!-- Sign in Modal -->
                    <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog"
                         aria-labelledby="mySigninModalLabel" aria-hidden="true">
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
                        <a href="/"> <img src="{{asset('assets')}}/img/logo.png" alt="" class="logo"/></a>
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
                                        <a href="#">Projects <i class="icon-angle-down"></i></a>

                                        <ul class="dropdown-menu">
                                            @foreach($mainCategories as $rs)
                                                <li>
                                                    <a href="{{route('categoryprojects',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                                </li>

                                                @if(count($rs->children))
                                                    @include('home.categorytree',['children'=>$rs->children])
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="{{route('faq')}}">FAQ </a>
                                    </li>
                                    <li>

                                        <a href="{{route('contact')}}">Contact </a>
                                    </li>
                                    <li>

                                        <a href="/userpanel">PROFILE </a>
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
