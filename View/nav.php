<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/ExiaStoreProjet"><span class="glyphicon glyphicon-home"> Home</span></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="shoppingCart"><a href="?page=cart"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
        <li id="catalog"><a href="?page=catalog"><span class="glyphicon glyphicon-list-alt"></span>Catalog</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Account<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a onclick="logintest()"><span class="glyphicon glyphicon-leaf"></span> Login</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Management</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>