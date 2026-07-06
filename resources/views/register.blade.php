<x-layout>
  <main class="py-10">
    <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">
      <h1 class="text-bold text-3xl">Registre-se</h1>
      <p>Preencha as informações para se cadastrar</p>

      <form action="{{ route('auth.register') }}"
            method="POST"
            class="flex flex-col">
        @csrf

        <div class="flex flex-col gap-2 mb-4">
          <label for="name">Nome</label>
          <input
            type="text"
            name="name"
            placeholder="Nome"
            class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">

          @error('name')
          <p class="bg-red-400 p-2 text-sm text-white">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex flex-col gap-2 mb-4">
          <label for="email">Email</label>
          <input
            type="email"
            name="email"
            placeholder="your@email.com"
            class="bg-white p-2 border-2 @error('email') border-red-500 @enderror">

          @error('email')
          <p class="bg-red-400 p-2 text-sm text-white">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex flex-col gap-2 mb-4">
          <label for="password">Senha</label>
          <input
            type="password"
            name="password"
            placeholder="********"
            class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
          >

          @error('password')
          <p class="bg-red-400 p-2 text-sm text-white">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex flex-col gap-2 mb-4">
          <label for="password_confirmation">Confirmar Senha</label>
          <input
            type="password"
            name="password_confirmation"
            placeholder="********"
            class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
          >

          @error('password')
          <p class="bg-red-400 p-2 text-sm text-white">{{ $message }}</p>
          @enderror
        </div>

        <button
          type="submit"
          class="bg-white p-2 border-2 cursor-pointer"
        >
          Cadastrar
        </button>
      </form>

      <p class="mt-4">Já tem uma conta? 
        <a href="{{ route('site.login') }}" class="text-blue-500 underline hover:opacity-50 transition">Entrar</a>
      </p>
    </section>
  </main>
</x-layout>
