<x-layout>
  <main class="flex flex-col items-center justify-center py-10">
    <h1>Faça Login</h1>
    <section class="mt-4 flex flex-col items-center">
      <form action="/login" method="POST" class="flex flex-col gap-1">
        @csrf

        <input
          type="email"
          name="email"
          placeholder="your@email.com"
          class="bg-white p-2 border-2">

        <input
          type="password"
          name="password"
          placeholder="********"
          class="bg-white p-2 border-2"
        >

        <button
          type="submit"
          class="bg-white p-2 border-2"
        >
          Entrar
        </button>
      </form>

      @error('email')
      <p class="text-red-400 text-xl mt-1">
        {{ $message }}
      </p>
      @enderror
    </section>
  </main>
</x-layout>
