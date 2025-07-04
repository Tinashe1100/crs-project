<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('create-user') }}">
                            @csrf
                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="tw-block mt-1 tw-w-full tw-rounded-md" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="tw-mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="tw-mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="tw-block tw-mt-1 tw-w-full tw-rounded-md"
                                    type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="tw-mt-4">
                                <x-input-label for="password" :value="__('User type')" />

                                <select name="role" class="tw-block tw-rounded-md tw-mt-1 tw-w-full" id="">
                                    <option value="admin">Admin</option>
                                    <option value="investigator">Investigator</option>
                                    <option value="user">User</option>
                                </select>

                                <x-input-error :messages="$errors->get('password')" class="tw-mt-2" />
                            </div>


                            <!-- Password -->
                            <div class="tw-mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="tw-block tw-rounded-md tw-mt-1 tw-w-full"
                                    type="password" name="password" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="tw-mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="tw-mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation"
                                    class="tw-block tw-rounded-md tw-mt-1 tw-w-full" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="tw-mt-2" />
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Create User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
