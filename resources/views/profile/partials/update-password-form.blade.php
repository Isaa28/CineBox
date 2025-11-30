<section class="space-y-6">

    <form method="POST" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <div class="space-y-1">
            <x-input-label value="Senha Atual" />
            <x-text-input type="password" name="current_password" class="block w-full rounded-lg border-gray-300 focus:border-red-600 focus:ring-red-600"/>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" />
        </div>

        <div class="space-y-1">
            <x-input-label value="Nova Senha"/>
            <x-text-input type="password" name="password" class="block w-full rounded-lg border-gray-300 focus:border-red-600 focus:ring-red-600"/>
            <x-input-error :messages="$errors->updatePassword->get('password')" />
        </div>

        <div class="space-y-1">
            <x-input-label value="Confirmar Senha"/>
            <x-text-input type="password" name="password_confirmation" class="block w-full rounded-lg border-gray-300 focus:border-red-600 focus:ring-red-600"/>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>

        <div class="flex items-center gap-4">
            <button class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition shadow">Salvar</button>

            @if (session('status') === 'password-updated')
                <p class="text-sm text-green-600">Senha atualizada.</p>
            @endif
        </div>
    </form>
</section>
