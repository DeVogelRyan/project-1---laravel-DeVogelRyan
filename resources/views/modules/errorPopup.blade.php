<div x-data="{show: true}" x-init="setTimeout(()=>show = false, 4500)" x-show="show">
    <div class="w-72 fixed bottom-5 right-5 px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
        <h5 class="font-bold">Error!</h5>
        <p>{{$message}}</p>
    </div>
</div>
