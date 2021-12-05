@include('layouts.head')

<body>
    @include('layouts.nav')

    <?php
    //Define global var for numbers
    global $i;
    $i=1;
  ?>

    <div class="container mx-auto w-full h-full">
        <div class="relative wrap overflow-hidden p-10 h-full">
            <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%"></div>
            <!-- right timeline -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">
                <div class="order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                    <h1 class="mx-auto font-semibold text-lg text-white"><?php echo $i++?></h1>
                </div>
                <div class="order-1 border rounded-lg shadow-xl w-5/12 px-6 py-4">
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">Date of birth</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
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
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">Joined this website</h3>
                    <p class="text-sm font-medium leading-snug tracking-wide  text-gray-800 text-opacity-100">At
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
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">Created post</h3>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">{{$user->name}} created
                        a post with the title {{$post->title}}</p>
                        {{$count}}

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
                    <h3 class="mb-3 font-bold text-gray-800 text-xl">Created post</h3>
                    <p class="text-sm font-medium leading-snug tracking-wide text-gray-800 text-opacity-100">
                        {{$user->name}} created a post with the title {{$post->title}}</p>

                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
