<x-layout>
  <main class="py-10">
    <h1>Dashboard</h1>
  </main>

  @if (auth()->check())
    <p>Bem vindo(a)! {{ auth()->user()->name }}</p>

    <a href="{{ route('auth.logout') }}">Sair</a>
  @else
    <p>Você não tem permissão para acessar o dashboard</p>
  @endif
</x-layout>
