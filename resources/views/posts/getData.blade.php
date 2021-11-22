

@foreach($posts as $post)

<div> {{$post->user->name}} </div>
<p>{{$post->content}}</p>

@endforeach

