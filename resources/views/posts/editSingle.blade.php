@include('layouts.head')

<body>
    @include('layouts.nav')

    <form action="{{ url('post/update') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="company-website" class="text-gray-500 font-bold block text-xl">
                            Titel
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="title" id="company-website" value="{{$singlePost->title}}"
                                class="focus:ring-indigo-700 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                                placeholder="example title" required>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="about" class="text-gray-500 font-bold block text-xl">
                        Content
                    </label>
                    <div class="mt-1">
                        <textarea id="about" name="content" rows="3"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                            placeholder="example content" required>{{$singlePost->content}}</textarea>
                    </div>
                </div>
        <div class="flex items-center">
            <img class="max-w-md" src="{{ asset('storage/uploads/'.$singlePost->file) }}" alt="storyImg">
              <div class="flex justify-center text-sm text-gray-600">
                <label for="file-upload" class="ml-10 relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span>Change</span>
                  <input id="file-upload" name="file" type="file" class="sr-only form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" accept="image/*">
                </label>
              </div>

        </div>
        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit"
                class="w-28 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
            </button>
        </div>
        </div>
        <input name="currentId" value="{{$singlePost->id}}" hidden>
    </form>


    @if(session('success'))
    @include('modules.succesPopup')
    @endif

    @error('error')
    @include('modules.errorPopup')
    @endif



    <script src="{{'../../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
</body>
