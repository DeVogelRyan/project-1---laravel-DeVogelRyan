{{-- {{$postss}} --}}

@foreach ($posts as $post)
{{-- @if ($users->id == $post->user_id)
<div><p>{{$post->user_id}}</p><p>{{$users->name}}</div>
@endif --}}

<div> {{$post->title}} </div>

@endforeach

