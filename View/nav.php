<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/ExiaStoreProjet"><span class="glyphicon glyphicon-home"></span> Home</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a id="drop1" role="button" class="dropdown-toggle" data-toggle="dropdown">Catalog <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href='CD'>CD</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href='DVD'>DVD</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="">Other goodies</a></li>
          </ul>
        </li>
        <li id="shoppingCart"><a href="cart"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
        <li id="Administration"><a href="?page=administration"><span class="glyphicon glyphicon-tower"></span>Administration</a></li>
		  </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Account<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li id="login"><a onclick="logintest()"><span class="glyphicon glyphicon-leaf"></span> Login</a></li>
            <li id="logout"><a href="Model/login.php?log=logout"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
            <li id="settings"><a href="#"><span class="glyphicon glyphicon-cog"></span> Management</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>