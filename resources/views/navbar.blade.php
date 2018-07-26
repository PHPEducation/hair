<nav class="navbar navbar-default navbar-fixed-top" id="fh5co-header">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#myPage"><img src="{{ asset('logo/cutmypic.png') }}" id="image_logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member 
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                    @if (Auth::check())
                        @role('manager')
                            <li><a href="/admin">Admin</a></li>
                        @endrole
                        <li><a href="/users/logout">Logout</a></li>
                    @else
                        <li><a href="/users/register">Register</a></li>
                        <li><a href="/users/login">Login</a></li>
                    @endif

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

