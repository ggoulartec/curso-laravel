<header class="bg-white border-b-2 flex items-center justify-between p-4">
  {{--  LOGO--}}
  <div>LOGO</div>
  {{--  GITHUB--}}
  <div class="flex items-center gap-2">
    github
    @auth
      <form action="{{ route('auth.logout') }}" method="POST">
        @csrf
        <button type="submit" class="bg-white p-2 border-2 cursor-pointer">
          Sair
        </button>
      </form>
    @endauth

    @guest
      <a href="{{ route('site.login') }}" class="bg-white p-2 border-2">
        Entrar
      </a>
    @endguest
  </div>
</header>
