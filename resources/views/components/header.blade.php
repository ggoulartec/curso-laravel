<header class="bg-white border-b-2 flex items-center justify-between p-4">
  {{--  LOGO--}}
  <div class="font-extrabold text-stone-800 tracking-tight text-lg">
    <a href="{{ route('site.index') }}">CURSO LARAVEL</a>
  </div>
  
  {{--  ACTIONS--}}
  <div class="flex items-center gap-4">
    @auth
      <a href="{{ route('site.dashboard') }}" class="text-sm font-semibold text-stone-600 hover:text-stone-900 transition-all">
        Dashboard
      </a>
      <a href="{{ route('site.admin') }}" class="text-sm font-semibold text-stone-600 hover:text-stone-900 transition-all">
        Admin
      </a>
      <form action="{{ route('auth.logout') }}" method="POST" class="m-0">
        @csrf
        <button type="submit" class="bg-white hover:bg-stone-55 p-2 border-2 cursor-pointer rounded-lg text-sm font-semibold text-stone-750 transition-all">
          Sair
        </button>
      </form>
    @endauth

    @guest
      <a href="{{ route('login') }}" class="bg-white hover:bg-stone-55 p-2 border-2 rounded-lg text-sm font-semibold text-stone-750 transition-all">
        Entrar
      </a>
    @endguest
  </div>
</header>
