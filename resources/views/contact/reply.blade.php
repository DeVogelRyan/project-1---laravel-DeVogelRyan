@include('layouts.head')


<body>
    @include('layouts.nav')

    <div class="flex-col md:flex-row justify-center items-center px-10 pt-10">
        <div class="flex flex-col md:flex-row justify-center items-center w-full mb-5 ">
            <div class="w-full bg-white rounded-xl p-5 shadow-2xl">
                <h1 class="font-bold mb-2 text-xl break-words"> {{$contact->title}}
                </h1>
                <p class="break-words mb-4"> {{$contact->content}}
                </p>
                <div class='mt-5 flex items-center'>
                    <img src='{{$contact->user->profile_img}}' class='rounded-full h-10 w-10'>
                    <div class="ml-3">
                        <h3 class="font-semibold"> {{$contact->user->name}} </h2>
                            {{-- toDateString() removes the time--}}
                            <p class="text-gray-500"> updated at {{$contact->updated_at->toDateString()}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="ml-10 sm:ml-16 transform rotate-180 -rotate-180 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
      </svg>

    <form action="{{ url('contact/storeReply') }}" method="POST">
        {{ csrf_field() }}

        <div class="w-4/5 sm:w-3/5 ml-10 sm:ml-20 mt-2 shadow-2xl sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="w-full">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="company-website" class="text-gray-500 font-bold block text-xl">
                            Reply
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <textarea id="about" name="content" rows="3"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                            placeholder="example reply" required></textarea>
                        </div>
                        <input type="hidden" name="UserId" value="{{$contact->user->id}}">
                        <div class="py-3 bg-gray-50 text-right">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    @include('layouts.footer')
    @if(session('success'))
        @include('modules.succesPopup')
    @endif

    @error('error')
        @include('modules.errorPopup')
    @endif




    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ '../../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
