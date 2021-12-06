@include('layouts.head')

<body>
    @include('layouts.nav')

    <?php //Define global var for numbers
    global $i;
    $i=1; ?>

    <div class="container mx-auto w-full h-full mt-5">
        <img class="object-cover mx-auto object-center w-28 h-28 sm:w-24 sm:h-24 bg-white" src='{{$user->profile_img}}' alt='Profile'>
        <div class="relative wrap overflow-hidden sm:px-10 h-full">
            <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%"></div>
            <!-- right timeline -->
            <div class="mt-2 sm:mt-0 mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto font-semibold text-lg text-white"><?php echo $i++?></h1>
                </div>
                <div class="order-1 border rounded-lg shadow-xl w-5/12 px-6 py-4">
                    <h3 class="break-words mb-3 font-bold text-gray-800 text-sm sm:text-xl">Date of birth</h3>
                    <p class="break-words text-xs sm:text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        {{date('d-m-Y', strtotime($user->date_of_birth))}} is the day {{$user->name}} was born.</p>
                </div>
            </div>

            <!-- left timeline -->
            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto font-semibold text-lg text-white"><?php echo $i++?></h1>
                </div>
                <div class="order-1 border rounded-lg shadow-xl w-5/12 px-6 py-4">
                    <h3 class="break-words mb-3 font-bold text-gray-800 text-sm sm:text-xl">Joined this website</h3>
                    <p class="break-words text-xs sm:text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">At
                        {{date('d-m-Y', strtotime($user->created_at))}} {{$user->name}} joined our beautifull platform.
                    </p>
                </div>
            </div>
            @foreach ($user->posts as $count => $post)

            @if($count % 2 == 0)<!-- This is to divide the left and right one -->
            <!-- right timeline -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto font-semibold text-lg text-white"><?php echo $i++?></h1>
                </div>
                <div class="order-1 border rounded-lg shadow-xl w-5/12 px-6 py-4">
                    <h3 class="break-words mb-3 font-bold text-gray-800 text-sm sm:text-xl">Created post</h3>
                    <p class="break-words text-xs sm:text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">{{$user->name}} created
                        a post with the title: <strong>{{$post->title}}</strong></p>
                </div>
            </div>
            @else
            <!-- left timeline -->
            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto text-white font-semibold text-lg"><?php echo $i++?></h1>
                </div>
                <div class="order-1 border rounded-lg shadow-xl w-5/12 px-6 py-4">
                    <h3 class="break-words mb-3 font-bold text-gray-800 text-sm sm:text-xl">Created post</h3>
                    <p class="break-words text-xs sm:text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        {{$user->name}} created a post with the title: <strong>{{$post->title}}</strong></p>

                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <script src="{{ '../js/nav.js' }}"></script>
