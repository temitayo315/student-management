<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container head">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{'/'}}" style="color: #ffbf00">SCHOOL LOGO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right nav-text">
        <li class="active"><a href="{{'/'}}">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="{{url('/student')}}">Student Registration</a></li>
        <li><a href="{{url('/courseReg')}}">Course Registration</a></li>
      </ul> 
    </div>
  </div>
</nav>  