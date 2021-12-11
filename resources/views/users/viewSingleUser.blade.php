@include('layouts.head')

<body>
    @include('layouts.nav')

    <h1 class="italic font-bold ml-4 text-2xl sm:text-3xl mb-5 mt-4 sm:mt-5 text-indigo-500">{{$user->name}}'s Profile</h1>

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
            <a href="{{ route('viewSingleUserHistory', ["id" => $user->id] ) }}"
                class="w-full text-center block mx-auto rounded-full bg-gray-900 hover:shadow-lg font-semibold text-white px-6 py-2">History</a>
        </div>
    </div>



    @include('layouts.footer')
    <script src="{{ '../js/nav.js' }}"></script>
