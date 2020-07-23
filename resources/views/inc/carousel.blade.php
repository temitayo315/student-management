  <div class="container" style="margin-top: 100px">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{url('images/images.jpg')}}" alt="Carousel" id="carousel">
      <div class="carousel-caption">
        <h1>WELCOME</h1>
        <p>This is a Demo School Management System</p>
      </div>
    </div>

    <div class="item">
      <img src="{{url('images/back2.jpg')}}" alt="Carousel" id="carousel">
      <div class="carousel-caption">
        <h1>SCHOOL MANAGEMENT SYSTEM</h1>
        <p>I am ready to learn and mix up with you</p>
      </div>
    </div>


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
