@include('layouts.head')


<body>
    @include('layouts.nav')

    <form action="{{ url('createFAQ') }}" method="POST">
        {{ csrf_field() }}
        <div class="mt-2 shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="company-website" class="text-gray-500 font-bold block text-xl">
                            Question
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="question" id="company-website"
                                class="focus:ring-indigo-700 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300"
                                placeholder="example question" required>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="about" class="text-gray-500 font-bold block text-xl">
                        Answer
                    </label>
                    <div class="mt-1">
                        <textarea id="about" name="answer" rows="3"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                            placeholder="example answer" required></textarea>
                    </div>
                </div>
                <div>
                    <label class="text-gray-500 font-bold block text-xl " for="category">Choose a category:</label>
                    <select class="mt-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block sm:text-sm border border-gray-300 rounded-md" name="category1" id="category">
                        <option hidden disabled selected value> -- select an option -- </option>
                        <option value="1">networking</option>
                        <option value="2">cybersecurity</option>
                        <option value="3">policies</option>
                    </select>
                    <select class="mt-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block sm:text-sm border border-gray-300 rounded-md" name="category2" id="category">
                        <option hidden disabled selected value> -- select an option -- </option>
                        <option value="1">networking</option>
                        <option value="2">cybersecurity</option>
                        <option value="3">policies</option>
                    </select>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit"
                    class="w-28 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
