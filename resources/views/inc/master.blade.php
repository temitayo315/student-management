<!DOCTYPE html>
<html>
@include('inc.head')
<body style="background-image: url('images/gray.jpg'); background-repeat: no-repeat;background-size: cover;">

	@include('inc.nav')
	@include('inc.carousel')
<div class="container">

		@yield('content')
		@yield('studentList')
		@yield('edit')
	</div>

<div class="footer">
    <footer>
        <h5>&copy;- 2020</h5>
        <small>Student Management Web App designed by Ayanda Temitayo</small>
    </footer>
</div>

<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function () {
       $('#index_table').dataTable();
    });
</script>
</body>
</html>