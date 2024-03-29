<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>
            <!-- Birth Day -->
            <x-label class="mt-5" :value="__('Select date of birth')" />
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="date" id="datePicker"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                    name="date_of_birth" min="1900-10-01" max="<?php echo date('Y-m-d', strtotime("-13 year")) ?>" required value="Select date of birth">
            </div>

            <x-label class="mt-8" :value="__('Profile picture')" />
            <div class="flex flex-col md:flex-row justify-center items-center mt-10">

                <div class="text-center w-4/6 md:w-2/6 p-2">
                    <input class="mb-2" type="radio" class="self-auto" id="pic1" name="profile_img" required>
                    <label for="pic1"><img src="https://avatars.dicebear.com/api/miniavs/ryan.svg"></label>
                </div>
                <div class="text-center w-4/6 md:w-2/6 p-2">
                    <input class="mb-2" type="radio" id="pic2" name="profile_img" required>
                    <label for="pic2"><img src="https://avatars.dicebear.com/api/bottts/ryan.svg"></label>
                </div>
                <div class="text-center w-4/6 md:w-2/6 p-2">
                    <input class="mb-2" type="radio" id="pic3" name="profile_img" required>
                    <label for="pic3"><img class="p-2" src="https://avatars.dicebear.com/api/initials/ryan.svg"></label>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>


<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/datepicker.bundle.js"></script>
<script src="{{ '../js/checkBoxes.js' }}"></script>
<script src="{{ '../js/placeAvatar.js' }}"></script>
