<x-app-layout>
    @section('title', 'Profile Edit')

    <x-slot name="header">
        <h2 class="font-semibold text-xl tracking-wide">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 min-h-screen bg-transparent">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Update Profile Info -->
            <div
                class="p-4 sm:p-8
                       glassy-bg
                       shadow-lg hover:shadow-xl
                       transition-all duration-300
                       rounded-2xl"
            >
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div
                class="p-4 sm:p-8
                       glassy-bg
                       shadow-lg hover:shadow-xl
                       transition-all duration-300
                       rounded-2xl"
            >
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account (Danger Card) -->
            <div
                class="p-4 sm:p-8
                       glassy-bg
                       shadow-lg hover:shadow-xl
                       transition-all duration-300
                       rounded-2xl"
            >
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
