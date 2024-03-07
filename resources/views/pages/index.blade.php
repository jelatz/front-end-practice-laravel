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
        <div class="container mx-auto px-5 flex flex-col-reverse md:flex-row gap-y-10">
            <div>
                <h2 class="text-3xl font-bold text-accent1 text-center">Who We Are</h2>
                <p class="text-black text-md mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga
                    consectetur earum consequatur aliquam unde ratione, non nemo quas rerum numquam! Dolorum
                    voluptatibus commodi quo optio ipsum, totam omnis cum ea?</p>
                <x-primary-btn>Get to know more!</x-primary-btn>
            </div>
            <div>
                <figure class="w-96 mx-auto">
                    <img src="{{asset('images/profile.jpg')}}" alt="Team Picture" class="rounded-xl shadow-lg">
                </figure>
            </div>
        </div>

    </section>


</x-layout>
