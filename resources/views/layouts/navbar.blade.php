


<div class="topnav">

    <a class="logo" href={{route('home')}}><img src="{{ asset('Logo.svg') }}" alt="Logo"></a>
    @if(Auth::check())
        <form action="{{ route('logout') }}" method="POST">
    @csrf
        <button type="submit">deconnecter</button>
        </form>
      @else
    <a style="background-color: #1A96D9; color: #ffffff"  href="{{ route('login') }}">Connexion</a>
    @endif
    <a href="{{ route('cart.edit', 1) }}">Mon panier</a>
    <a href="{{route('aboutus')}}">A propos</a>
    <a href="{{ route("backoffice.index") }}">BackOffice</a>
    <a href="{{route('products')}}">Diplômes</a>


</div>
