@include('layouts.head')
<x-app>
    <x-banner class="bg-home-bg bg-no-repeat bg-center bg-cover">
        <div class="w-full h-banner opacity-70 bg-black z-0"></div>
        <x-banner-content>
            <h1 class="text-white font-bold text-4xl">
                Let's turn your ideas into a
                <span class="text-accent2 uppercase">website</span>
            </h1>
            <p class="text-white mt-4 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur vero
                sint neque iusto deserunt animi perspiciatis culpa repudiandae commodi magnam blanditiis cumque
                voluptate, corporis illo harum ratione! Minima, a blanditiis. </p>
        </x-banner-content>
    </x-banner>

    <section class="bg-gray-300">
        <div class="container-sm lg:container lg:mx-auto xl:px-10  py-20 flex items-center justify-center flex-wrap-reverse">
            <div class="md:w-3/5 w-full px-3">
                <h1 class="text-4xl font-bold text-secondary mt-10 ">About Me</h1>
                <p class="text-tertiary text-md mt-5  px-3 md:pe-10 sm:px-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt earum, doloremque molestiae consequuntur, beatae iure non ea dolorem voluptatem distinctio quis rem sint quisquam ipsam aliquid, natus ad ducimus fugiat?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt earum, doloremque molestiae consequuntur, beatae iure non ea dolorem voluptatem distinctio quis rem sint quisquam ipsam aliquid, natus ad ducimus fugiat?</p>
            </div>
            <div class="md:w-1/3 w-full">
                <figure>
                    <img src="{{asset('images/profile.jpg')}}" alt="jlad lanete" class="h-80 rounded-2xl md:ms-auto mx-auto">
                </figure>
            </div>
        </div>
    </section>

    <section class="bg-primary w-full">
        <div class="px-5 py-4">
            <h1 class="text-center text-4xl font-bold text-accent1 mb-10">Services</h1>
            <div class="flex flex-wrap justify-center items-center gap-10">
                <x-card class="hover:animate-pulse flex-initial">
                    <h1 class="text-2xl text-white mb-3">Web Development</h1>
                    <p class="text-white text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit reiciendis animi saepe culpa veniam perspiciatis omnis fugiat excepturi libero laboriosam ut esse, tenetur dolorem repellendus earum magni eos vitae quasi.</p>
                </x-card>
                <x-card class="hover:animate-pulse flex-initial">
                    <h1 class="text-2xl text-white mb-3">Wordpress Development</h1>
                    <p class="text-white text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit reiciendis animi saepe culpa veniam perspiciatis omnis fugiat excepturi libero laboriosam ut esse, tenetur dolorem repellendus earum magni eos vitae quasi.</p>
                </x-card>
                <x-card class="hover:animate-pulse flex-initial">
                    <h1 class="text-2xl text-white mb-3">Search Engine Optimization</h1>
                    <p class="text-white text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit reiciendis animi saepe culpa veniam perspiciatis omnis fugiat excepturi libero laboriosam ut esse, tenetur dolorem repellendus earum magni eos vitae quasi.</p>
                </x-card>
            </div>
        </div>
    </section>

    <section>
        
    </section>

</x-app>
