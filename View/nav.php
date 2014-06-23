<!-- <ul>
	<li>
		<a href="index.php">acceuil</a>
	</li>
	<li>
		<a href="catalogue">catalogue</a>
	</li>
	<li>
		<a href="panier">panier</a>
	</li>
</ul>
<ul>
	<li>
		<input type="button" value="log" src="login">
	</li>
	<li>
		<input type="button" value="register" src="register">
	</li>
	<li>
		<input type="button" value="gestion" src="gestionAccount">
	</li>
</ul> -->

<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"> Home</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="shoppingCart"><a href="#"><span class="glyphicon glyphicon-shopping-cart"> Cart</span></a></li>
        <li id="catalog"><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Catalog</a></li>
<!--         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Account<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#"><span class="glyphicon glyphicon-leaf"></span> connection</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-off"></span> deconnection</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-cog"></span> gestion</a></li>
            <!-- <li class="divider"></li>
            <li><a href="#">Separated link</a></li> -->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
