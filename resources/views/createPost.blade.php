<x-guest-layout>
    <x-auth-card>

        <form method="POST" action="{{ route('post') }}">
            @csrf

            <!-- titel -->
            <div>
                <x-label for="titel" :value="__('titel')" />

                <x-input id="titel" class="block mt-1 w-full" type="text" name="titel" :value="old('titel')" required autofocus />
            </div>

            <!-- content -->
            <div class="mt-4">
                <x-label for="content" :value="__('content')" />

                <x-input id="content" class="block mt-1 w-full" type="text" name="content" :value="old('content')" required />
            </div>



            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('post') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
