<footer class="mt-20 footer-1 bg-gray-100 py-8 px-10 sm:py-12">
  <div class="container mx-auto px-4">
    <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
      <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
        <h5 class="text-xl font-bold mb-6">About</h5>
        <ul class="list-none footer-links">
          <li class="mb-2">
            <a href="{{ route('sources') }}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Sources</a>
          </li>
          <li class="mb-2">
            <a href="{{ route('credits') }}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Credits</a>
          </li>
        </ul>
      </div>
      <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
        <h5 class="text-xl font-bold mb-6">Help</h5>
        <ul class="list-none footer-links">
          <li class="mb-2">
            <a href="{{route('contact')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Contact Us</a>
          </li>
          <li class="mb-2">
            <a href="{{route('viewFAQ')}}" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">FAQ</a>
          </li>
        </ul>
      </div>

</footer>
