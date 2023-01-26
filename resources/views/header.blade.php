<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}

?>
<div class="header_nav">
  <nav class="navbar navbar-expand-lg nav_content">
    <a class="navbar-brand nav_logo" style="color:white;">EZShop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="fa fa-bars" style="color:white; font-size:28px;" aria-hidden="true"></i>
      </span>
    </button>

    <div class="collapse navbar-collapse nav_items" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>

        <!-- @if(Session::has('user'))
          <li class="nav-item"><a class="nav-link" href="/myorders">Order</a></li>
        @endif -->
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </ul>
      <ul class="nav navbar-nav navbar-right nav_right_panel">
        <li>
          @if(Session::has('user'))
          <a href="/myorders">Orders</a>
          @endif
          <a href="/cartlist">Cart({{$total}})</a>
        </li>

        <div class="dropdown_header">
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu custom_dropdown_menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <div class="user_panel">
              <li><a href="/login">Login</a>
                  <a href="/register">Register</a>
              </li>
          </div>
          @endif
        </div>
        

      </ul>
    </div>
  </nav>
</div>


<!-- 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand " href="/">EZShop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
        @if(Session::has('user'))
          <li class="nav-item"><a class="nav-link" href="/myorders">Order</a></li>
        @endif

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist">Cart({{$total}})</a></li>

        <div style="margin-left:10px" class="dropdown_header">
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <div class="user_panel">
              <li><a href="/login">Login</a>
                  <a href="/register">Register</a>
              </li>
          </div>
          @endif
        </div>
        

      </ul>
    </div>
  </nav> -->