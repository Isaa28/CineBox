<section class="space-y-6">
    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <div class="space-y-1">
            <x-input-label for="name" value="Nome" class="font-semibold text-gray-800" />
            <x-text-input id="name" name="name" type="text" class="block w-full rounded-lg border-gray-300 focus:border-red-600 focus:ring-red-600" :value="old('name', $user->name)" required/>
            <x-input-error :messages="$errors->get('name')" class="text-red-600" />
        </div>

        <div class="space-y-1">
            <x-input-label for="email" value="Email" class="font-semibold text-gray-800" />
            <x-text-input id="email" name="email" type="email" class="block w-full rounded-lg border-gray-300 focus:border-red-600 focus:ring-red-600" :value="old('email', $user->email)" required/>
            <x-input-error :messages="$errors->get('email')" class="text-red-600" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <p class="text-sm text-gray-700 mt-2">Seu e-mail ainda não foi verificado.<button form="send-verification" class="underline text-red-700 hover:text-red-900">Reenviar verificação</button></p>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button class="px-5 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition shadow">Salvar</button>

            @if (session('status') === 'profile-updated')
                <p class="text-sm text-green-600">Salvo.</p>
            @endif
        </div>
    </form>
</section>
