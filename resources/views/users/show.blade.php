<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-medium">Informações do Usuário</h3>
                        <a href="{{ route('users.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Voltar
                        </a>
                    </div>

                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <p class="text-sm font-medium text-gray-500">Nome</p>
                            <p class="mt-1">{{ $user->name }}</p>
                        </div>

                        <div class="border-b pb-4">
                            <p class="text-sm font-medium text-gray-500">Email</p>
                            <p class="mt-1">{{ $user->email }}</p>
                        </div>

                        <div class="border-b pb-4">
                            <p class="text-sm font-medium text-gray-500">Criado em</p>
                            <p class="mt-1">{{ $user->created_at->format('d/m/Y H:i') }}</p>
                        </div>

                        <div class="border-b pb-4">
                            <p class="text-sm font-medium text-gray-500">Atualizado em</p>
                            <p class="mt-1">{{ $user->updated_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="{{ route('users.edit', $user) }}" 
                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Editar
                        </a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                    onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                                Deletar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>