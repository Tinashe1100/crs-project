<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="tw-text-white" />
            <x-text-input id="name" class="tw-block mt-1 tw-w-full tw-rounded-md" type="text" name="name"
                :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="tw-mt-2" />
        </div>

        <!-- Email Address -->
        <div class="tw-mt-4">
            <x-input-label for="email" :value="__('Email')" class="tw-text-white" />
            <x-text-input id="email" class="tw-block tw-mt-1 tw-w-full tw-rounded-md" type="email" name="email"
                :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="tw-mt-4">
            <x-input-label for="password" :value="__('User type')" class="tw-text-white" />

            <select name="role" class="tw-block tw-rounded-md tw-mt-1 tw-w-full" id="">
                <option value="admin">Admin</option>
                <option value="investigator">Investigator</option>
            </select>

            <x-input-error :messages="$errors->get('password')" class="tw-mt-2" />
        </div>


        <!-- Password -->
        <div class="tw-mt-4">
            <x-input-label for="password" :value="__('Password')" class="tw-text-white" />

            <x-text-input id="password" class="tw-block tw-rounded-md tw-mt-1 tw-w-full" type="password"
                name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="tw-mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="tw-mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="tw-text-white" />

            <x-text-input id="password_confirmation" class="tw-block tw-rounded-md tw-mt-1 tw-w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="tw-mt-2" />
        </div>

        <div class="tw-flex tw-items-center tw-justify-end tw-mt-4">
            <a class="tw-underline tw-text-sm tw-text-gray-400 tw-dark:text-gray-400 hover:tw-text-gray-900 dark:hover:tw-text-gray-100 tw-rounded-md focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-2 focus:tw-ring-indigo-500 dark:tw-focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="tw-ms-3 tw-bg-gray-400 tw-rounded-md tw-px-4 tw-py-2 tw-font-medium">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
