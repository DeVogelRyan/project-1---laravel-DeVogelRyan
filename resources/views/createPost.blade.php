<x-guest-layout>
    <x-auth-card>

        <form method="POST" action="{{ route('post.create') }}">
            <textarea name="body" id="new-post" cols="30" rows="10"></textarea>
            <button type="submit">Create Post</button>
            <input type="hidden" value={{Session::token()}} name='_token'>
        </form>
    </x-auth-card>
</x-guest-layout>
