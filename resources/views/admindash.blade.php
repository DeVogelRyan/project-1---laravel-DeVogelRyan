@include('layouts.head')

@include('layouts.nav')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


<h1 class="italic font-bold ml-4 text-2xl sm:text-xl sm:text-2xl mb-5 mt-4 sm:mt-5 text-indigo-500">Dashboard</h1>

<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <a href="{{route('editPosts')}}">
        <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-green-600"><i class="fa fa-pencil-alt fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">Edit Post</h5>
                        @if ($postcount > 1)
                        <h3 class="font-bold text-xl sm:text-2xl">{{$postcount}} Posts </h3>
                        @else
                        <h3 class="font-bold text-xl sm:text-2xl">{{$postcount}} Post </h3>
                        @endif
                    </div>
                </div>
            </div>
        </a>
        <!--/Metric Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Metric Card-->
        <a href='{{route('viewUsersAdmin')}}'>
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-pink-600"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">Total Users</h5>
                        <h3 class="font-bold text-xl sm:text-2xl">{{$usercount}} <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                    </div>
                </div>
            </div>
        </a>
        <!--/Metric Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Metric Card-->
        <a href="{{route('viewContact')}}">
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-yellow-600"><i class="fas fa-ticket-alt fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">View tickets</h5>
                        @if ($ticketcount > 1)
                        <h3 class="font-bold text-xl sm:text-2xl">{{$ticketcount}} Tickets </h3>
                        @else
                        <h3 class="font-bold text-xl sm:text-2xl">{{$ticketcount}} Ticket </h3>
                        @endif
                    </div>
                </div>
            </div>
        </a>
        <!--/Metric Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Metric Card-->
        <a href="{{ route('createViewFAQ') }}">
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-blue-600"><i class="fas fa-question fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">Create FAQ items</h5>
                        @if ($faqcount > 1)
                        <h3 class="font-bold text-xl sm:text-2xl">{{$faqcount}} Tickets </h3>
                        @else
                        <h3 class="font-bold text-xl sm:text-2xl">{{$faqcount}} Ticket </h3>
                        @endif
                    </div>
                </div>
            </div>
        </a>
        <!--/Metric Card-->
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Metric Card-->
        <a href="{{ route('latestNewsCreateView') }}">
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-indigo-600"><i class="fas fa-newspaper fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">Create Latest News</h5>
                        @if ($latestcount > 1)
                        <h3 class="font-bold text-xl sm:text-2xl">{{$latestcount}} Items </h3>
                        @else
                        <h3 class="font-bold text-xl sm:text-2xl">{{$latestcount}} Item </h3>
                        @endif
                    </div>
                </div>
            </div>
        </a>
        <!--/Metric Card-->
    </div>
</div>


@include('layouts.footer')
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ 'js/nav.js' }}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
