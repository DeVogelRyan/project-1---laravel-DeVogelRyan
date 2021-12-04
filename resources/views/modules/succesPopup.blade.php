<div x-data="{show: true}" x-init="setTimeout(()=>show = false, 4500)" x-show="show">
    <div class="w-72 fixed bottom-5 right-5 px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
        <h5 class="font-bold">Succes!</h5>
        <p>{{session('success')}}</p>
    </div>
</div>
