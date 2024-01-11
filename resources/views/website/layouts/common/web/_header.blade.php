<!-- Start New Navbar -->
<div class="welcome_statement"></div>
    <div class="border_top_container">
      <div class="block1"></div>
      <div class="block2"></div>
      <div class="block3"></div>
      <div class="block4"></div>
      <div class="block5"></div>
      <div class="block6"></div>
      <div class="block7"></div>
      <div class="block8"></div>
      <div class="block7"></div>
      <div class="block8"></div>
      <div class="block7"></div>
      <div class="block8"></div>
      <div class="block7"></div>
      <div class="block14"></div>
      <div class="block15"></div>
      <div class="block16"></div>
      <div class="block17"></div>
      <div class="block18"></div>
      <div class="block19"></div>
      <div class="block20"></div>
      <div class="block21"></div>
      <div class="block22"></div>
      <div class="block23"></div>
      <div class="block24"></div>
      <div class="block25"></div>
      <div class="block26"></div>
      <div class="block27"></div>
    </div>

<header class="header_mmx">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a href="{{route('website.home')}}" class="logo">
        <img src="{{ asset('website/resources/dashboard/resource/img/logo.png') }}" alt="company logo" />
      </a>

      <ul class="main_menu">
        <li class="nav_item {{ request()->routeIs('website.home')  ? 'active' : null }}">
          <a href="{{route('website.home')}}" class="nav_link">Home</a>
          <span class="page_name">Go to home</span>
        </li>
        <li class="nav_item {{ request()->routeIs('website.prices.index')  ? 'active' : null }}">
          <a href="{{route('website.prices.index')}}" class="nav_link">Price</a>
          <span class="page_name">Go to price</span>
        </li>
      
        <li class="nav_item {{ request()->routeIs('website.examples.index')  ? 'active' : null }}">
          <a href="{{route('website.examples.index')}}" class="nav_link">Example</a>
          <span class="page_name">Go to Example</span>
        </li>
      

        @auth('web')
        <li class="nav_item" class="{{ request()->routeIs('website.orders.index')  ? 'active' : null }}">
          <a href="{{route('website.orders.index')}}" class="nav_link">ORDER</a>
          <span class="page_name">Go to ORDER</span>
        </li>
        @endauth


        <li class="nav_item {{ request()->routeIs('website.tour.step_one')  ? 'active' : null }}">
          <a href="{{route('website.tour.step_one')}}" class="nav_link">Tour</a>
          <span class="page_name">Go to tour</span>
        </li>

        <li class="nav_item {{ request()->routeIs('website.faq')  ? 'active' : null }}">
          <a href="{{route('website.faq')}}" class="nav_link">FAQ</a>
          <span class="page_name">Go to faq</span>
        </li>

        @guest('web')
        <li class="nav_item {{ request()->routeIs('login')  ? 'active' : null }}">
          <a href="{{ route('login') }}" class="nav_link">Sign In</a>
          <span class="page_name">Login To Your Account</span>
        </li>
        <!--<li class="nav_item {{ request()->routeIs('register')  ? 'active' : null }}">-->
        <!--  <a href="{{ route('register') }}" class="nav_link">Register</a>-->
        <!--  <span class="page_name">Register New Account</span>-->
        <!--</li>-->
        @else
        @if(Route::currentRouteName() !== 'website.client.dashboard')
        <li class="nav_item" class="{{ request()->routeIs('website.client.dashboard')  ? 'active' : null }}">
          <a href="{{ route('website.client.dashboard') }}" class="nav_link">Dashboard</a>
          <span class="page_name">@auth('web') {{ get_user_data()->name }} @endauth</span>
        </li>
        @endif
        @endguest
        @auth('web')
        <li class="nav_item">
          <a href="#" onclick="event.preventDefault(); document.getElementById('user-log-out').submit();"
            class="nav_link">Sign-Out</a>
          <form id="user-log-out" action="{{ route(get_guard_name().'.logout') }}" method="POST">
            @csrf
          </form>
          <span class="page_name"></span>
        </li>
        @endauth
      </ul>
    </nav>
  </div>
</header>
<!-- End New Navbar -->