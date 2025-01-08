<!-- Navigation -->
<nav>
    @if (!Auth::check())
    <a href="{{ route('register') }}">Register</a>
    <span> | </span>
    <a href="{{ route('login') }}">Login</a>
    <br>
    @else
    <h3>Has hecho login como {{ Auth::user()->name }}</h3>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
    @endif
    <br>
    <a href="{{ route('home') }}">Inicio</a>
    <span> | </span>
    <a href="{{ route('cuenta_list') }}">Cuentas</a>
    <span> | </span>
    <a href="{{ route('cliente_list') }}">Clientes</a>
</nav>