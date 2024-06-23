<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span>PrimePicks</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: transparent; ">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('product_page') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('why_us')}}">Why Us</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Testimonial</a>
                </li> --}}
            </ul>
            <div class="user_option">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('mycart') }}" class="nav-link">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i> [{{ $count }}]
                        </a>
                        <a href="{{ url('order_summary') }}" class="nav-link">
                            <i class="fa fa-history" aria-hidden="true"></i> My orders
                        </a>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger" style="  border: none; color: inherit; cursor: pointer; margin: 0 40px;">
                                <i class="fa fa-sign-out" style="color: white;" aria-hidden="true"></i>
                                <span style="color: white;">Logout</span>
                            </button>
                        </form>
                    @else
                        <a href="{{ url('/login') }}" class="nav-link">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Login</span>
                        </a>
                        <a href="{{ url('/register') }}" class="nav-link">
                            <i class="fa fa-vcard" aria-hidden="true"></i>
                            <span>Register</span>
                        </a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>
</header>

<style>
.navbar-nav .nav-link{
    color: red;
}
.header_section {
    background-color: #1a1a1a;
    padding: 15px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.nav-item{
    color: #ffffff;

}
/* Branding */
.navbar-brand span {
    font-weight: bold;
    font-size: 1.8rem;
    color: #ffffff;
    transition: color 0.3s ease;
}

.navbar-brand span:hover {
    color: skyblue;
}

/* Navbar links */
.navbar-nav .nav-item .nav-link {
    color: #ffffff;
    margin: 0 15px;
    font-size: 1rem;
    font-weight: 500;
    transition: color 0.3s ease;
}

.navbar-nav .nav-item .nav-link:hover {
    color: skyblue;
}

/* User options styling */
.user_option .nav-link {
    color: #ffffff;
    margin-left: 20px;
    font-size: 1rem;
    font-weight: 500;
    transition: color 0.3s ease;
}

.user_option .nav-link:hover {
    color: skyblue;
}

.user_option .btn.nav-link {
    padding: 0;
    background: none;
    border: none;
    color: #ffffff;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 500;
    transition: color 0.3s ease;
}

.user_option .btn.nav-link:hover {
    color: skyblue;
}



/* Navbar collapse */
.collapse.navbar-collapse {
    justify-content: flex-end;
}


</style>
