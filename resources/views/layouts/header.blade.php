<nav class="p-5 shadow bg-transparent md:flex md:items-center md:justify-between absolute z-10 w-full">
    <div class="flex justify-between items-center">
        <img src="{{asset('images/logo.png')}}" alt="logo" class="h-16 cursor-pointer">
        <ion-icon name="menu" class="text-3xl text-white me-2 block md:hidden" onclick="Menu(this)"></ion-icon>
    </div>
    <ul id="main-menu" class="md:flex md:items-center md:justify-between md:static absolute w-full left-0 md:w-auto hidden transition-all ease-in-out duration-500">
        <li class="mx-4 my-6 md:my-0">
            <a href="{{route('home')}}" class="text-md text-white hover:text-accent1 duration-500">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0"><a href="#" class="text-md text-white hover:text-accent1 duration-500">
            About Us</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="" class="text-md text-white hover:text-accent1 duration-500">Services</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="" class="text-md text-white hover:text-accent1 duration-500">Contact Us</a>
        </li>
        <li class="my-10 md:my-0">
            <a href="" class="text-white px-3 py-2 rounded-2xl mx-4 border hover:bg-accent1">Get started</a>
        </li>
    </ul>
</nav>