
@include('header')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">
        <i class="fab fa-bootstrap"></i>
        Sembako
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @if (empty($halaman))            
                <li class="nav-item active"><a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a></li>
            @else
                <li class="nav-item"><a class="nav-link" href="/">Home </a></li>
            @endif

            @if (!empty($halaman) && ($halaman == 'about'))
                <li class="nav-item active"><a class="nav-link" href="{{ url('about') }}">About Program <span class="sr-only">(current)</span></a></li>                
            @else
                <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About Program</a>
            @endif
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Market
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="daftarpasar">
                    <a class="dropdown-item" href="#" myval="1">Pasar Gedebage</a>
                    <a class="dropdown-item" href="#" myval="2">Pasar Carigin</a>
                </div>
            </li>
            @if (!empty($halaman) && ($halaman == 'news'))
                <li class="nav-item active"><a class="nav-link" href="{{ url('news') }}">News</a></li>
            @else
                <li class="nav-item"><a class="nav-link" href="{{ url('news') }}">News</a></li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="#">Market Location</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
        </form>
    </div>
</nav>

<script type="text/javascript">
    $(document).ready(function() {
        $("#daftarpasar a").bind("click", function() 
        {  
            var idpasar = $(this).attr('myval');
            alert(idpasar);
        });
    });
</script>