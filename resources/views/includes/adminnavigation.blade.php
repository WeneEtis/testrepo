<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="assets/img/logo1.png"/></a>
            </div>

            <span class="logout-spn" >
                  <a href="{{ url('/homepage') }}" style="color:#fff;">LOGOUT</a>
            </span>
        </div>
    </div>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">



                <li class="active-link">
                    <a href="{{ url('/admin') }}" ><i class="fa fa-desktop "></i>Dashboard <!--span class="badge">Included</span--></a>
                </li>

                <li>
                    <a href="{{ url('/homepage') }}"><i class="fa fa-home"></i>Home</a>
                </li>

            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ADMIN DASHBOARD</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

            <!-- /. ROW  -->
            <div class="row text-center pad-top">

                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                    <div class="div-square">
                        <a href="blank.html" >
                            <i class="fa fa-user fa-5x"></i>
                            <h4>Register User</h4>
                        </a>
                    </div>


                </div>

                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                    <div class="div-square">
                        <a href="blank.html" >
                            <i class="fa fa-users fa-5x"></i>
                            <h4>See Users</h4>
                        </a>
                    </div>


                </div>
                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                    <div class="div-square">
                        <a href="blank.html" >
                            <i class="fa fa-key fa-5x"></i>
                            <h4>Add Product </h4>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                    <div class="div-square">
                        <a href="blank.html" >
                            <i class="fa fa-gamepad fa-5x" aria-hidden="true"></i>
                            <h4>List Products </h4>
                        </a>
                    </div>

                </div>

            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>