<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Configurações do Perfil') }}</h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto px-4 space-y-10">

            <div class="bg-white p-6 shadow-md rounded-lg border border-gray-200 hover:shadow-lg transition">
                <div class="max-w-2xl mx-auto space-y-4">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="bg-white p-6 shadow-md rounded-lg border border-gray-200 hover:shadow-lg transition">
                <div class="max-w-2xl mx-auto space-y-4">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="bg-white p-6 shadow-md rounded-lg border border-gray-200 hover:shadow-lg transition">
                <div class="max-w-2xl mx-auto space-y-4">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
