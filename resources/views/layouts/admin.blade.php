<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="/dist/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/dist/css/owl.carousel.css">
    <link rel="stylesheet" href="/dist/css/owl.theme.css">
    <link rel="stylesheet" href="/dist/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/layouts/button.css">
    <link rel="stylesheet" href="/dist/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/dist/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/dist/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="/dist/css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="/dist/css/notika-custom-icon.css">
    <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" type="text/css"  href="/layouts/bootstrap-select.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/dist/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/layouts/style.css">
    <!-- responsive CSS
		============================================ -->
        
    <link rel="stylesheet" href="/dist/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/dist/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     @yield('estilos')
</head>
<body>
@yield('extra')
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="/layouts/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menu"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <!--<div class="hd-mg-tt">
                                        <h2>Opciones</h2>
                                    </div>-->
                                    <div class="hd-message-info">
                                        <a href="{{route('logout')}}" id="linkLogout">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="/layouts/salida.png" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Cerrar sesion</h3>
                                                    
                                                </div>
                                            </div>
                                        </a>
                                        <form id="formLogout"  action="{{route('logout')}}"  method="POST">
                                        @csrf
                                        </form>
          
                                    <!--<div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>-->
                                </div>
                            </li>
                          <!--  <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>3</span></div></a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Notification</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/4.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>2</span></div></a>
                                <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Tasks</h2>
                                    </div>
                                    <div class="hd-message-info hd-task-info">
                                        <div class="skill">
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>HTML5 Validation Report</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Google Chrome Extension</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Social Internet Projects</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>75%</span> </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Bootstrap Admin</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 65%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>65%</span> </div>
                                            </div>
                                            <div class="progress progress-bt">
                                                <div class="lead-content">
                                                    <p>Youtube App</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="55%" style="width: 55%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>55%</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-chat"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Chat</h2>
                                    </div>
                                    <div class="search-people">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" placeholder="Search People" />
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Available</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>Last seen 3 hours ago</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/4.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>Last seen 2 minutes ago</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Available</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>Available</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                        --></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
  
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        
                        @if(Auth::user()->id_tipos_usuario == 0 )
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Usuarios</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Tareas</a>
                        </li>
                        @endif
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="index.html">Dashboard One</a>
                                </li>
                                
                            </ul>
                        </div>
                       
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('tareas.index')}}">Tareas</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('usuarios.index')}}">Usuarios</a>
                                </li>  
                                <li><a href="{{route('usuarios.create')}}"><i class="notika-icon notika-plus-symbol"></i>  Nuevo usuario</a>
                                </li>
                                
                               
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
             @if(Auth::user()->id_tipos_usuario == 0 )
             @endif
        </div>
    </div>
  <div class="breadcomb-area">
		<div class="container">
                     <div class="alert-list">
                         
                            @if(Auth::user()->id_tipos_usuario == 1 ||  Auth::user()->id_tipos_usuario == 2 )
                            <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
                                 Lo sentimos no tiene los permisos necesarios para acceder.
                         
                            </div>
                            @endif
                        </div>
         </div>
    </div>


    <!-- Main Menu area End-->
    <!-- Start Status area -->
    @yield('breadcrumbs')
  <section class="content">
        @yield('contenido')
    </section>



 <!-- JS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
@yield('scripts')
    <!-- bootstrap JS
		============================================ -->
    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/dist/js/jasny-bootstrap.min.js"></script>
    <script src="/dist/js/bootstrap-select/bootstrap-select.js"></script>
    
    <!-- wow JS
		============================================ -->
    <script src="/dist/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="/dist/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="/dist/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/dist/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="/dist/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="/dist/js/counterup/jquery.counterup.min.js"></script>
    <script src="/dist/js/counterup/waypoints.min.js"></script>
    <script src="/dist/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/dist/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="/dist/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="/dist/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="/dist/js/flot/jquery.flot.js"></script>
    <script src="/dist/js/flot/jquery.flot.resize.js"></script>
    <script src="/dist/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="/dist/js/knob/jquery.knob.js"></script>
    <script src="/dist/js/knob/jquery.appear.js"></script>
    <script src="/dist/js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="/dist/js/chat/jquery.chat.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="/dist/js/wave/waves.min.js"></script>
    <script src="/dist/js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="/dist/js/icheck/icheck.min.js"></script>
    <script src="/dist/js/icheck/icheck-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="/dist/js/todo/jquery.todo.js"></script>
    <!-- Login JS
		============================================ -->
    <script src="/dist/js/login/login-action.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="/dist/js/plugins.js"></script>
    
    <!-- main JS
		============================================ -->
    <script src="/dist/js/main.js"></script>
    <script>
  function doClickLinkLogout(e) {
    e.preventDefault();
    $("#formLogout").submit();
  }
  $(function() {
    $("#linkLogout").click(doClickLinkLogout);
  });
</script>

</body>

</html>