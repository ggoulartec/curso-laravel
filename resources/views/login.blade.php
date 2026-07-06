<x-layout>
  <main class="py-10">
    <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">
      <h1 class="text-bold text-3xl">Faça Login</h1>
      <p>Insira seus dados para acessar</p>

      <form action="{{ route('auth.login') }}"
            method="POST"
            class="flex flex-col">
        @csrf

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

        <button
          type="submit"
          class="bg-white p-2 border-2 cursor-pointer"
        >
          Entrar
        </button>
      </form>
    </section>
  </main>
</x-layout>
