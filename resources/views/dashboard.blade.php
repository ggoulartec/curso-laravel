<x-layout>
  <main class="py-10">
    <h1>Veja seus hábitos ganharam vida</h1>

    @auth
      Bem vindo(a), {{ auth()->user()->name }}!
    @endauth
  </main>
</x-layout>
