<div class="header" id="ban">
  <div class="container">
    <div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
      <div class="header-search">
        <div class="search">
          <input class="search_box" type="checkbox" id="search_box">
          <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
          <div class="search_form">
            <form action="#" method="post">
              <input type="text" name="Search" placeholder="Search...">
              <input type="submit" value="Send">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
      <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <nav class="link-effect-7" id="link-effect-7">
            <ul class="nav navbar-nav">
              <li class="active act"><a href="{{ url('/') }}">Beranda</a></li>
              <li><a href="{{ url('/about') }}">Profil Masjid</a></li>
              <li><a href="{{ url('/blog') }}">Album</a></li>
              <li><a href="{{ url('/gallery') }}">Kegiatan</a></li>
              <li><a href="{{ url('#') }}">Laporan</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </div>
    
    <div class="clearfix"> </div> 
  </div>
</div>