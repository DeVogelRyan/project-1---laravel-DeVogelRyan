@include('layouts.head')


<body>
    @include('layouts.nav')
    <h1 class="italic font-bold ml-4 text-2xl sm:text-3xl mb-5 mt-4 sm:mt-5 text-indigo-500">Tickets</h1>
    <div class=" flex justify-center w-full mt-2 ">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="px-5">
                    <table class="w-full">
                        <tbody class="bg-white">
                            @foreach ($contact as $contactItem)
                            <tr class="whitespace-nowrap border-b-2 border-gray-200">
                                <td class="sm:px-6 py-4 text-xs sm:text-sm text-gray-500">
                                    {{$contactItem->user->name}}
                                </td>
                                <td class="sm:px-6 py-4">
                                    <div class="text-xs sm:text-sm text-gray-900">
                                        {{$contactItem->title}}
                                    </div>
                                </td>
                                <td class="px-2 sm:px-6 py-4 text-xs sm:text-sm text-gray-500">
                                    {{$contactItem->updated_at->toDateString()}}
                                </td>
                                    <td class="w-2">
                                        <a href="{{ route('replyContactId', ["id" => $contactItem->id] ) }}"
                                            class="px-2 sm:px-4 py-1 text-xs sm:text-sm text-white bg-blue-400 rounded">Reply</a>
                                    </td>
                                <td class="w-2">
                                    <a href="{{ route('deleteContactId', ["id" => $contactItem->id] ) }}" onclick="return confirm('Are you sure?')"
                                        class="px-2 sm:px-4 py-1 text-xs sm:text-sm text-white bg-red-400 rounded">Delete</a>
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

    @include('layouts.footer')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
