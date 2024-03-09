<x-layout>
    <x-hero class="bg-home-hero bg-no-repeat bg-center bg-cover">
        <x-hero-content class="lg:top-52 lg:left-52 ">
            <h1 class="text-4xl font-bold text-white">Let's make your ideas Into a <span
                    class="text-accent1">Website</span></h1>
            <p class="text-white text-md mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis blanditiis
                dignissimos animi ipsam! Consequatur incidunt, quidem est repellendus odit eos molestias eveniet laborum
                nobis rerum. Officia tempora illo voluptatum optio.</p>
        </x-hero-content>
    </x-hero>

    <section class="py-10">
        <div class="container-md px-8 lg:px-24">
            <div class="flex justify-center flex-col-reverse items-center md:flex-row gap-y-6 md:gap-x-10">
                <div class="flex-auto md:w-2/3">
                    <h1 class="text-4xl font-bold text-accent1 my-5 md:text-center text-start">About Us</h1>
                    <p class="text-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab consectetur hic et ratione eum rem iure itaque nulla maxime. Dolorem voluptatum adipisci in quod eligendi, odit cumque accusamus quam aliquam?Unde aspernatur eius nihil fuga recusandae commodi minima. Inventore hic enim esse tempore fuga ullam, officia ex eius consequatur similique magnam fugiat dolor sed alias at aperiam provident, optio maxime.</p>
                </div>
                <div class="flex-auto md:w-1/3">
                    <figure>
                        <img src="{{asset('images/profile.jpg')}}" alt="Profile" class="rounded-xl w-96 md:w-full">
                    </figure>
                </div>
            </div>
            <x-primary-btn class="hover:bg-secondary">
                <h2 class="text-white">More About Us</h2>
            </x-primary-btn>
        </div>
    </section>

    <section class="py-10  bg-secondary">
        <div class="container px-8 lg:px-24 mx-auto">
            <h1 class="text-accent1 text-4xl font-bold md:text-center text-start">Services</h1>
            <div class="flex flex-wrap justify-center items-center my-20 gap-x-20 gap-y-14 lg:justify-between">
                <div class="">
                    <x-card>
                        <figure>
                            <img src="{{asset('images/services/html.png')}}" alt="html" class="w-20 mx-auto object-contain">
                        </figure>
                    </x-card>
                </div>
                <div class="">
                    <x-card>
                        <figure>
                            <img src="{{asset('images/services/css.png')}}" alt="css" class="w-20 mx-auto object-contain">
                        </figure>
                    </x-card>
                </div>
                <div class="">
                    <x-card>
                        <figure>
                            <img src="{{asset('images/services/js.png')}}" alt="js" class="w-20 mx-auto object-contain">
                        </figure>
                    </x-card>
                </div>
                <div class="">
                    <x-card>
                        <figure>
                            <img src="{{asset('images/services/mysql.png')}}" alt="mysql" class="w-20 mx-auto object-contain">
                        </figure>
                    </x-card>
                </div>
                <div class="">
                    <x-card>
                        <figure class="text-center">
                            <img src="{{asset('images/services/php.png')}}" alt="php" class="w-20 mx-auto object-contain">
                        </figure>
                    </x-card>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 bg-primary">
        <div class="container-md px-5">
            <h1 class="text-4xl text-accent1 font-bold md:text-center">
                Contact Us
            </h1>
        </div>
    </section>


</x-layout>
