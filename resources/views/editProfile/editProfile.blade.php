@include('layouts.head')


<body>
    @include('layouts.nav')

    <form action="{{ url('contact/create') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mt-2 shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label class="text-gray-500 font-bold block text-xl">
                            Name
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="name"
                                class="focus:ring-indigo-700 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                                value="{{$user->name}}" required>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 font-bold block text-xl">
                        Email
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="email"
                            class="focus:ring-indigo-700 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                            value="{{$user->email}}" required>
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 font-bold block text-xl">
                        About me
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <textarea id="about" name="bio" rows="3"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                            required>{{$user->bio}}</textarea>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Photo
                    </label>
                    <div class="mt-1 flex items-center">
                        <img class="h-12 w-12 rounded-full overflow-hidden" src="{{$user->profile_img}}"
                            alt="ProfileImg">
                        <button type="button"
                            class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Change
                        </button>
                    </div>
                </div>

            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
    </form>

    @if(session('success'))
    @include('modules.succesPopup')
    @endif

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ '../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
