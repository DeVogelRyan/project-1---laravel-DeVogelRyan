@include('layouts.head')

<body>
    @include('layouts.nav')



    <div
        class="max-w-2xl mx-4 sm:max-w-sm md:max-w-sm lg:max-w-sm xl:max-w-sm sm:mx-auto md:mx-auto lg:mx-auto xl:mx-auto mt-16 bg-white shadow-xl rounded-lg text-gray-900">
        <div class="rounded-t-lg h-32 overflow-hidden">
            <img class="object-cover object-top w-full"
                src='https://images.unsplash.com/photo-1549880338-65ddcdfd017b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
                alt='Mountain'>
        </div>
        <div class="mx-auto w-32 h-32 relative -mt-16 border-4 border-white rounded-full overflow-hidden">
            <img class="object-cover object-center h-32 bg-white" src='{{$user->profile_img}}' alt='Profile'>
        </div>
        <div class="text-center mt-2">
            <h2 class="font-semibold">{{$user->name}}</h2>
            <p class="p-2 text-gray-500">{{$user->bio}}</p>
        </div>
        <ul class="py-2 text-gray-700 flex items-center justify-around">
            <li class="flex flex-col items-center justify-around">
                <div class="flex justify-between items-center p-3 rounded-lg">
                    <div class="mr-20 flex justify-between items-center flex-col"> <span
                            class="text-gray-600 block">Posts</span> <span
                            class="font-bold text-black text-xl">{{$user->posts->count()}}</span> </div>
                    <div class="flex justify-between items-center flex-col"> <span
                            class="text-gray-600 block">Age</span> <span
                            class="font-bold text-black text-xl">{{$age}}</span> </div>
                </div>
            </li>
        </ul>
        <div class="flex p-4 border-t mx-8 mt-2">
            <button
                class="w-1/2 mr-2 block mx-auto rounded-full bg-gray-900 hover:shadow-lg font-semibold text-white px-6 py-2">Chat</button>
            <a href="{{ route('viewSingleUserHistory', ["id" => $user->id] ) }}"
                class="w-1/2 text-center block mx-auto rounded-full bg-gray-900 hover:shadow-lg font-semibold text-white px-6 py-2">History</a>
        </div>
    </div>


    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
