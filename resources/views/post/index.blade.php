<!DOCTYPE html>
<html>
 <head>
 <title>test</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <link href="{{ asset('bootstrap-3.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet">
 <script src="{{ asset('bootstrap-3.3.6-dist/js/bootstrap.min.js') }}"></script>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <script src="{{ asset('js/jquery.js') }}"></script>
</head>
<body>
 <div class="container-fluid">
      <div class="row">
       
       <nav role="navigation" class="navbar navbar-inverse">
          <div class="container">
          <div class="navbar-header header">
            <div class="container">
              <div class="row">

                <div class="col-lg-4">
                  <h1><a href="{{url('index')}}">DefaultBlog</a></h1> 
                </div>
				<form class="form-inline col-lg-6 col-lg-push-2" role="form">
					<div class="form-group">
						<label class="sr-only" for="exampleInputEmail2">Login</label>
							<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label class="sr-only" for="exampleInputPassword2">Pass</label>
						<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary">Let`s Go</button>
				</form>
              </div>
            </div>
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
            <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
              <ul class="nav nav-pills">
                <li class="active"> <a href="">Blog</a> </li>
                <li> <a href="rating.html">Registration</a> </li>
                <li> <a href="contact.html">Contacts</a> </li>
              </ul>
            </div>
          </div>
       </nav>
      </div>
    <div class="row">
        <div class="col-lg-3 col-lg-push-9">
            <ul class="nav nav-pills">
                <li class="active"> <a href="{{url('post/newpost')}}">New Post</a> </li>
                <li class="active"> <a href="{{url('post/history')}}">History</a> </li>
            </ul>
        </div>
    </div>
     @yield('container')
 </div>

</body>
</html>
