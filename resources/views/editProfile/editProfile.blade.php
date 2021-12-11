@include('layouts.head')


<body>
    @include('layouts.nav')

    <h1 class="italic font-bold ml-4 text-2xl sm:text-3xl mb-5 mt-4 sm:mt-5 text-indigo-500"> Edit Profile</h1>
    <form action="{{ url('updateProfile') }}" method="POST">
        {{ csrf_field() }}
        <div class="mt-2 shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label class="text-gray-500 font-bold block text-md sm:text-xl ">
                            Name
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="name" id="name"
                                class="focus:ring-indigo-700 focus:border-indigo-500 flex-1 block w-full rounded-md text-sm sm:text-md border-gray-300"
                                value="{{$user->name}}" required>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 font-bold block text-md sm:text-xl">
                        Email
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="email"
                            class="focus:ring-indigo-700 focus:border-indigo-500 flex-1 block w-full rounded-md text-sm sm:text-md border-gray-300"
                            value="{{$user->email}}" required>
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 font-bold block text-md sm:text-xl">
                        About me
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <textarea id="about" name="bio" rows="3"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full text-sm sm:text-md border border-gray-300 rounded-md"
                            required>{{$user->bio}}</textarea>
                    </div>
                </div>

                <div>
                    <label class="text-gray-500 font-bold block text-md sm:text-xl">
                        Profile picture
                    </label>
                    <div class="flex flex-col md:flex-row justify-start items-center mt-10">

                        <div class="text-center w-4/6 md:w-1/5 p-2">
                            <input class="mb-2" type="radio" id="input1"
                                value="https://avatars.dicebear.com/api/miniavs/{{$user->name}}.svg" name="profile_img"
                                required>
                            <label for="pic1"><img id="pic1"
                                    src="https://avatars.dicebear.com/api/miniavs/{{$user->name}}.svg"></label>
                        </div>
                        <div class="text-center w-4/6 md:w-1/5 p-2">
                            <input class="mb-2" type="radio" id="input2"
                                value="https://avatars.dicebear.com/api/bottts/{{$user->name}}.svg" name="profile_img"
                                required>
                            <label for="pic2"><img id="pic2"
                                    src="https://avatars.dicebear.com/api/bottts/{{$user->name}}.svg"></label>
                        </div>
                        <div class="text-center w-4/6 md:w-1/5 p-2">
                            <input class="mb-2" type="radio" id="input3"
                                value="https://avatars.dicebear.com/api/initials/{{$user->name}}.svg" name="profile_img"
                                required>
                            <label for="pic3"><img id="pic3"
                                    src="https://avatars.dicebear.com/api/initials/{{$user->name}}.svg"></label>
                        </div>
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

    @error('error')
    @include('modules.errorPopup')
    @endif

    @include('layouts.footer')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ '../js/nav.js' }}"></script>
    <script src="{{ '../js/ChangeAvatar.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
