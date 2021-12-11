@include('layouts.head')

<body>
    @include('layouts.nav')

    <div>
        <h1 class="italic font-bold ml-4 text-2xl sm:text-3xl mb-5 mt-4 sm:mt-5 text-indigo-500">Frequently Asked Questions</h1>
        <section class="text-gray-700">
            <div class="container py-5 mx-auto">
                <div class="w-full px-4 py-2">
                    @foreach ($faqs as $faq)
                    <details class="mb-4">
                        <summary class="font-semibold bg-gray-200 text-md sm:text-base rounded-md py-2 px-4">
                            {{$faq->question}}
                            <div>
                                @foreach ($faq->categories as $categorie)
                                <p
                                    class="text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-blue-200 text-blue-700 rounded-full">
                                    {{$categorie->title}}
                                    {{$categorie->id}}
                                </p>
                                @endforeach
                            </div>
                        </summary>

                        <span>
                            <p class="mt-1 text-sm sm:text-md ml-2 break-words">{{$faq->answer}}</p>
                        </span>
                    </details>
                    @endforeach
                </div>
            </div>
    </div>
    </section>
    </div>


    @if(session('success'))
    @include('modules.succesPopup')
    @endif

    @error('error')
    @include('modules.errorPopup')
    @endif




    @include('layouts.footer')
    <script src="{{'../../js/nav.js' }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
