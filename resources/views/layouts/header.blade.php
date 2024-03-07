<div class="container-md bg-primary mx-auto px-4 py-2 relative md:flex md:justify-between">
    <div class="flex justify-between items-center">
        <figure>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-44">
        </figure>
        <ion-icon name="menu" class="text-2xl text-white md:hidden" id="hamburger"></ion-icon>
    </div>
    <nav class="absolute bg-primary w-full left-0 pl-5 py-5 hidden md:flex md:static md:w-auto z-20">
        <ul class="flex flex-col gap-5 lg:gap-20 py-5 md:flex-row md:items-center">
            <li><a href="#" class="active:bg-accent2 hover:text-accent1 text-white">Home</a></li>
            <li><a href="#" class="active:bg-accent2 hover:text-accent1 text-white">About Us</a></li>
            <li><a href="#" class="active:bg-accent2 hover:text-accent1 text-white">Services</a></li>
            <li><a href="#" class="active:bg-accent2 hover:text-accent1 text-white">Contact Us</a></li>
        </ul>
        <div class="flex items-center" id='get-started'>
            <x-get-started>Get started</x-get-started>
        </div>
    </nav>
</div>