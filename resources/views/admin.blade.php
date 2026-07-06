<x-layout>
  <main class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    
    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between border-b border-orange-200 pb-6 mb-8">
      <div>
        <h1 class="text-3xl font-extrabold text-stone-800 tracking-tight">Painel Administrativo</h1>
        <p class="mt-1 text-sm text-stone-600">Gerencie usuários, visualize métricas e controle as configurações do sistema.</p>
      </div>
      <div class="mt-4 md:mt-0 flex gap-3">
        <a href="{{ route('site.dashboard') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-stone-700 bg-white hover:bg-stone-50 focus:outline-none transition-all duration-200">
          Visualizar Site
        </a>
      </div>
    </div>

    {{-- Cards Grid --}}
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 mb-10">
      
      {{-- Card 1: Users Count --}}
      <div class="bg-white overflow-hidden shadow rounded-xl border border-stone-200/80 transition-all duration-300 hover:shadow-md hover:-translate-y-0.5">
        <div class="p-6">
          <div class="flex items-center">
            <div class="flex-shrink-0 bg-orange-100 rounded-lg p-3 text-orange-600">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </div>
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-xs font-semibold text-stone-400 uppercase tracking-wider">Usuários Cadastrados</dt>
                <dd class="flex items-baseline">
                  <div class="text-2xl font-bold text-stone-800">{{ $users->count() }}</div>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>

      {{-- Card 2: Active Sessions --}}
      <div class="bg-white overflow-hidden shadow rounded-xl border border-stone-200/80 transition-all duration-300 hover:shadow-md hover:-translate-y-0.5">
        <div class="p-6">
          <div class="flex items-center">
            <div class="flex-shrink-0 bg-amber-100 rounded-lg p-3 text-amber-600">
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
              </svg>
            </div>
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-xs font-semibold text-stone-400 uppercase tracking-wider">Sessões Ativas</dt>
                <dd class="flex items-baseline">
                  <div class="text-2xl font-bold text-stone-800">
                    {{ \Illuminate\Support\Facades\DB::table('sessions')->count() }}
                  </div>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>

      {{-- Card 3: System Status --}}
      <div class="bg-white overflow-hidden shadow rounded-xl border border-stone-200/80 transition-all duration-300 hover:shadow-md hover:-translate-y-0.5">
        <div class="p-6">
          <div class="flex items-center">
            <div class="flex-shrink-0 bg-emerald-100 rounded-lg p-3 text-emerald-600">
              <div class="relative flex h-6 w-6 justify-center items-center">
                <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
              </div>
            </div>
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-xs font-semibold text-stone-400 uppercase tracking-wider">Status do Sistema</dt>
                <dd class="flex items-baseline">
                  <div class="text-2xl font-bold text-emerald-700">Online</div>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>

    </div>

    {{-- Content Layout --}}
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      
      {{-- Users Table (Takes 2 cols) --}}
      <div class="bg-white shadow rounded-xl border border-stone-200/80 lg:col-span-2 overflow-hidden">
        <div class="p-6 border-b border-stone-200">
          <h2 class="text-lg font-bold text-stone-800">Gerenciamento de Usuários</h2>
          <p class="text-xs text-stone-500">Lista de todas as contas registradas na base de dados.</p>
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-stone-200">
            <thead class="bg-stone-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-stone-500 uppercase tracking-wider">Nome</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-stone-500 uppercase tracking-wider">E-mail</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-stone-500 uppercase tracking-wider">Perfil</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-stone-500 uppercase tracking-wider">Data de Criação</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-stone-200">
              @foreach($users as $user)
                <tr class="hover:bg-orange-50/20 transition-all">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="h-8 w-8 rounded-full bg-orange-100 flex items-center justify-center text-sm font-bold text-orange-700">
                        {{ strtoupper(substr($user->name, 0, 2)) }}
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-stone-900">{{ $user->name }}</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-stone-600">{{ $user->email }}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    @if($user->name === 'admin')
                      <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 border border-red-200">
                        Administrador
                      </span>
                    @else
                      <span class="px-2.5 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-stone-100 text-stone-800 border border-stone-200">
                        Usuário
                      </span>
                    @endif
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-stone-500">
                    {{ $user->created_at ? $user->created_at->format('d/m/Y H:i') : 'N/A' }}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      {{-- Activity Feed / Sidebar --}}
      <div class="bg-white shadow rounded-xl border border-stone-200/80 p-6">
        <h3 class="text-lg font-bold text-stone-800 mb-4 border-b border-stone-200 pb-2">Atividades Recentes</h3>
        <div class="flow-root">
          <ul>
            <li class="relative pb-8">
              <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-stone-200" aria-hidden="true"></span>
              <div class="relative flex space-x-3">
                <div>
                  <span class="h-8 w-8 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </span>
                </div>
                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                  <div>
                    <p class="text-xs text-stone-600">Sistema carregado com sucesso</p>
                  </div>
                  <div class="text-right text-xs whitespace-nowrap text-stone-400">
                    <span>Agora</span>
                  </div>
                </div>
              </div>
            </li>

            <li class="relative pb-8">
              <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-stone-200" aria-hidden="true"></span>
              <div class="relative flex space-x-3">
                <div>
                  <span class="h-8 w-8 rounded-full bg-orange-100 flex items-center justify-center text-orange-700">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                  </span>
                </div>
                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                  <div>
                    <p class="text-xs text-stone-600">Usuário <span class="font-medium text-stone-800">admin</span> autenticado</p>
                  </div>
                  <div class="text-right text-xs whitespace-nowrap text-stone-400">
                    <span>Recente</span>
                  </div>
                </div>
              </div>
            </li>

            <li class="relative">
              <div class="relative flex space-x-3">
                <div>
                  <span class="h-8 w-8 rounded-full bg-amber-100 flex items-center justify-center text-amber-700">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.21 15H19" />
                    </svg>
                  </span>
                </div>
                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                  <div>
                    <p class="text-xs text-stone-600">Sementes de banco de dados aplicadas</p>
                  </div>
                  <div class="text-right text-xs whitespace-nowrap text-stone-400">
                    <span>Hoje</span>
                  </div>
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>

    </div>

  </main>
</x-layout>
