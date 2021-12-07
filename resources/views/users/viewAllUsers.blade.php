@include('layouts.head')

<body>
    @include('layouts.nav')

    <div class="flex flex-col mt-5 w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg shadow p-2">
        <ul class="flex flex-col divide-y w-full">
            @foreach($users as $user)
          <li class="flex flex-row">
            <div class="select-none cursor-pointer hover:bg-gray-50 flex flex-1 items-center p-4">
              <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
                  <img alt="profil" src="{{$user->profile_img}}" />
              </div>
              <div class="flex-1 pl-1">
                <div class="font-medium dark:text-white">{{$user->name}}</div>
                <div class="text-gray-600 dark:text-gray-200 text-sm">Developer</div>
              </div>
              <div class="flex flex-row justify-center">
                <div class="hidden sm:inline text-gray-600 dark:text-gray-200 text-xs">View profile</div>
                <a href="{{ route('viewSingleUser', ["id" => $user->id] ) }}" class="w-10 text-right flex justify-end">
                  <svg width="20" fill="currentColor" height="20" class="hover:text-gray-800 dark:hover:text-white dark:text-gray-200 text-gray-500" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>


    @include('layouts.footer')
    <script src="{{ '../js/nav.js' }}"></script>
