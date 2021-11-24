

@include('layouts.head')

<body>
@include('layouts.nav')


<div class="flex-col md:flex-row justify-center items-center p-10">
@foreach($posts as $post)

{{-- <div class="card m-4" style="width: 18rem;">
  <div class="card-header">
    {{$post->title}}
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$post->content}}</li>
    <li class="list-group-item">made by {{$post->user->name}} </li>
  </ul>
</div> --}}

<div class="flex flex-col md:flex-row justify-center items-center w-full mb-5">
    <div class="w-full bg-white rounded-xl p-5 shadow-2xl">
    <h1 class="font-bold mb-2 text-xl break-words">    {{$post->title}}
    </h1>
    <p class="break-words"> {{$post->content}}
    </p>
    <img class="max-w-md" src="{{ asset('storage/uploads/'.$post->file) }}" alt="storyImg">
    <div class='mt-5 flex items-center'>
        <img src='https://picsum.photos/60/60' class='rounded-full'>
        <div class="ml-3">

            <h3 class="font-semibold"> {{$post->user->name}} </h2>
            <p class="text-gray-500"> created at {{$post->updated_at}} </p>
            <a href="{{ route('editPostId', ["id" => $post->id] ) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                Button
            </a>
        </div>
        </div>
    </div>
</div>

@endforeach
</div>
<script src="{{ '../js/nav.js' }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


