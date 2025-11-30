<section>
    <x-danger-button x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" class="bg-red-700 hover:bg-red-800 px-4 py-2 rounded-lg shadow text-white">Excluir Conta</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="POST" action="{{ route('profile.destroy') }}" class="p-6 space-y-6">
            @csrf
            @method('delete')

            <h2 class="text-xl font-semibold text-gray-900">Tem certeza que deseja excluir sua conta?</h2>

            <p class="text-gray-700">Esta ação é irreversível.</p>

            <div class="space-y-1">
                <x-input-label value="Senha"/>
                <x-text-input type="password" name="password" class="block w-full border-gray-300 rounded-lg focus:border-red-600 focus:ring-red-600"/>
                <x-input-error :messages="$errors->userDeletion->get('password')" />
            </div>

            <div class="flex justify-end gap-3">
                <button x-on:click="$dispatch('close')" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg shadow hover:bg-gray-300">Cancelar</button>

                <button class="px-4 py-2 bg-red-700 text-white rounded-lg shadow hover:bg-red-800">Excluir</button>
            </div>
        </form>
    </x-modal>
</section>
