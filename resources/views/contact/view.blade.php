@include('layouts.head')


<body>
    @include('layouts.nav')

    {{-- @foreach ($contact as $contactItem)
        <div>{{$contactItem->title}}</div>
        <div>{{$contactItem->content}}</div>
    @endforeach --}}

    <div class=" flex justify-center w-full mt-5 ">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="p-5">
                    <table class="w-full">
                        <tbody class="bg-white">
                            @foreach ($contact as $contactItem)
                            <tr class="whitespace-nowrap border-b-2 border-gray-200">
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{$contactItem->user->name}}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                            {{$contactItem->title}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{$contactItem->updated_at->toDateString()}}
                                </td>
                                <td class="w-2">
                                    <a href="{{ route('replyContactId', ["id" => $contactItem->id] ) }}" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Reply</a>
                                </td>
                                <td class="w-2">
                                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
