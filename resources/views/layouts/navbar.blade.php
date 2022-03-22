


<div class="topnav">

    <a class="logo" href={{route('home')}}><img src="{{ asset('Logo.svg') }}" alt="Logo"></a>
    <div class="searchProduct ">
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="search" required/>
        <button class="btn btn-dark" type="submit">Search</button>
    </form>
    </div>
    <div class="link">
    @if(Auth::check())
        <form action="{{ route('logout') }}" method="POST">
    @csrf
        <button class="deco" type="submit">deconnecter</button>
        </form>
      @else
    <a style="background-color: #1A96D9; color: #ffffff"  href="{{ route('login') }}">Connexion</a>
    @endif
    <a href="{{ route('cart.edit', 1) }}">Mon panier</a>
    <a href="{{route('aboutus')}}">A propos</a>
    <a href="{{ route("backoffice.index") }}">BackOffice</a>
    <a href="{{route('products')}}">Diplômes</a>
    </div>

</div>
