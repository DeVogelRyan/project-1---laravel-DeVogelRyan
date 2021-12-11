@include('layouts.head')
@include('layouts.nav')

<h1 class="italic font-bold ml-4 text-2xl sm:text-3xl mb-5 mt-4 sm:mt-5 text-indigo-500"> User Rights</h1>

<div>
@foreach ($users as $user)
<div class="flex flex-col container w-4/5 mt-10 mx-auto w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg shadow">
    <ul class="flex flex-col divide-y w-full">
      <li class="flex flex-row">
        <div class="select-none cursor-pointer hover:bg-gray-50 flex flex-1 items-center p-4">
          <div class="flex flex-col w-10 h-10 justify-center items-center mr-4">
              <img alt="profil" src="{{$user->profile_img}}" class="mx-auto object-cover rounded-full h-10 w-10" />
          </div>
          <div class="flex-1 pl-1">
            <div class="font-medium dark:text-white">{{$user->name}}</div>
            @if ($user->hasrole('admin'))
            <div class="text-gray-600 dark:text-gray-200 text-sm">Admin</div>
            @else
            <div class="text-gray-600 dark:text-gray-200 text-sm">User</div>
            @endif
          </div>
          <div class="flex flex-row justify-center">
              @if ($user->hasrole('admin'))
                <a href='{{ route('demote', ["id" => $user->id] ) }}' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 text-sm px-4 rounded">
                    Demote
                </a>

              @else
                <a href='{{ route('promote', ["id" => $user->id] ) }}' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 text-sm px-4 rounded">
                    Promote
                </a>
              @endif

          </div>
        </div>
      </li>
    </ul>
  </div>

@endforeach
</div>


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
