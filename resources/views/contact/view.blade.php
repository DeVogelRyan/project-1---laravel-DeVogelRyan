@include('layouts.head')


<body x-data="{showDeleteModal:false}" x-bind:class="{ 'model-open': showDeleteModal }">
    @include('layouts.nav')
    <div class=" flex justify-center w-full mt-5 ">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="p-5">
                    <table class="w-full">
                        <tbody class="bg-white">
                            @foreach ($contact as $contactItem)
                            <tr class="whitespace-nowrap border-b-2 border-gray-200">
                                <td class="sm:px-6 py-4 text-sm text-gray-500">
                                    {{$contactItem->user->name}}
                                </td>
                                <td class="sm:px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$contactItem->title}}
                                    </div>
                                </td>
                                <td class="px-2 sm:px-6 py-4 text-sm text-gray-500">
                                    {{$contactItem->updated_at->toDateString()}}
                                </td>
                                    <td class="w-2">
                                        <a href="{{ route('replyContactId', ["id" => $contactItem->id] ) }}"
                                            class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Reply</a>
                                    </td>
                                <td class="w-2">
                                    <button @click.="showDeleteModal = true" type="button"
                                        class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</button>
                                    <div x-show="showDeleteModal" tabindex="0"
                                        class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                                        <div @click.away="showDeleteModal = false"
                                            class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 500px;">
                                            <div
                                                class="bg-white rounded shadow-lg border flex flex-col overflow-hidden px-10 py-10">
                                                <div class="text-center">
                                                    <span
                                                        class="material-icons border-4 rounded-full p-4 text-red-500 font-bold border-red-500 text-4xl">
                                                        close
                                                    </span>
                                                </div>
                                                <div class="text-center py-6 text-2xl text-gray-700">Are you sure ?
                                                </div>
                                                <div class="text-center font-light text-gray-700 mb-8">
                                                    Do you really want to delete this?<br>
                                                    This process cannot be undone.
                                                </div>
                                                <div class="flex justify-center">
                                                    <button @click.="showDeleteModal = false"
                                                        class="bg-gray-300 text-gray-900 rounded hover:bg-gray-200 px-6 py-2 focus:outline-none mx-1">Cancel</button>
                                                    <a href="{{ route('deleteContactId', ["id" => $contactItem->id] ) }}"
                                                        class="bg-red-500 text-gray-200 rounded hover:bg-red-400 px-6 py-2 focus:outline-none mx-1">Delete</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50">
                                        </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    @if(session('success'))
    @include('modules.succesPopup')
    @endif

    @error('error')
    @include('modules.errorPopup')
    @endif

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
