<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="logo" href="index.html"><img src="{{asset('assets/images/logo.png')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
          <li class="nav-item">
             <a class="nav-link" href="{{url('index')}}">Home</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{url('about')}}">About</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{url('blog')}}">Blog</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{url('features')}}">Features</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{url('login')}}">Login</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="#"><img src="{{asset('assets/images/serach-icon.png')}}"></a>
          </li>
       </ul>
    </div>
 </nav>