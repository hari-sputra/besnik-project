<x-app-layout>

    <x-navbar />

    {{-- background --}}
    <div class="w-full h-[480px]">
        <div class="-z-10 absolute top-0">
            <img src="{{ asset('src/images/bg-header.png') }}" alt="bg header" class="">
        </div>
    </div>

    {{-- hero section --}}
    <section id="hero">
        <div class="w-full">
            <div class="flex justify-between">
                <div class="w-[60%] pl-[160px] ">
                    <h1 class="text-black-color/ text-[80px] font-bold font-poppins leading-[105px]">Tell a better <br>
                        brand
                        story</h1>
                    <p class="text-dark-blue text-[24px] mt-5">Automate the way you search through hashtags and
                        suggested <br> profiles to find results 100x faster.
                    </p>
                    <div class="mt-[40px]">
                        <a href="#"
                            class="bg-dark-purple/90 px-[40px] py-[17px] rounded-[26px] transition duration-500 ease-in-out hover:bg-dark-purple hover:drop-shadow flex max-w-[230px] hover:shadow-lg">
                            <button class="text-white font-medium text-[18px] mr-2">Request Demo</button>
                            <img src="{{ asset('src/images/arrow-right.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
                <div class="-mt-[12%]">
                    <img src="{{ asset('src/images/chart.png') }}" alt="chart" class="justify-items-end">
                </div>
            </div>
    </section>

    {{-- client section --}}

    <section id="client">
        <div class="max-w-max mx-auto mt-[120px]">
            <h2 class="text-grey-color font-poppins text-base text-center">SOME OF OUR TRUSTED CLIENTS</h2>
            <ul class="flex flex-wrap mt-[60px]">
                <li>
                    <img src="{{ asset('src/images/chase-logo.png') }}" class="px-[35px]" alt="chase-logo">
                </li>
                <li>
                    <img src="{{ asset('src/images/asana-logo.png') }}" class="px-[35px]" alt="chase-logo">
                </li>
                <li>
                    <img src="{{ asset('src/images/google-logo.png') }}" class="px-[35px]" alt="chase-logo">
                </li>
                <li>
                    <img src="{{ asset('src/images/buzz-logo.png') }}" class="px-[35px]" alt="chase-logo">
                </li>
                <li>
                    <img src="{{ asset('src/images/toggl-logo.png') }}" class="px-[35px]" alt="chase-logo">
                </li>
                <li>
                    <img src="{{ asset('src/images/walmart-logo.png') }}" class="px-[35px]" alt="chase-logo">
                </li>
            </ul>
        </div>
    </section>

    {{-- main content section --}}
    <section id="content">
        <div class="mt-[80px]">
            <div class="text-center">
                <h2 class="text-black-color text-[40px] font-poppins font-bold">Solutions for every need</h2>
                <p class="text-cyan-color text-xl">Join thousands of marketers and entrepreneurs for a 2-day event at
                    <br>
                    the forefront of social commerce.
                </p>
            </div>

            <div class="container mx-auto mt-24 flex justify-center">
                <div class="self-center ml-20">
                    <h3 class="text-purple-color font-semibold text-lg uppercase">Influencer</h3>
                    <h4 class="text-black-color font-semibold text-[34px] font-poppins">Influencer marketing</h4>
                    <p class="text-cyan-color text-xl max-w-[340px] pt-1">Create infinite pieces of content with our
                        influencer product. Build,streamline,manage large-scale influencer programs</p>
                    <a href="#" class="flex items-center mt-7 text-xl">
                        Learn More
                        <img src="{{ asset('src/images/arrow-right-dark.png') }}" class="pl-3" alt="arrow">
                    </a>
                </div>
                <div class="">
                    <img src="{{ asset('src/images/influencer.png') }}" alt="influencer" class="w-[440px] h-[482px]">
                </div>
            </div>
        </div>

        <div class="mt-8">
            <div class="container mx-auto flex justify-center">
                <div class="self-center">
                    <img src="{{ asset('src/images/community.png') }}" alt="community" class="w-[493px] h-[484px]">
                </div>
                <div class="self-center">
                    <div class="self-center ml-20">
                        <h3 class="text-yellow-color font-semibold text-lg uppercase">Community</h3>
                        <h4 class="text-black-color font-semibold text-[34px] font-poppins">Community marketing</h4>
                        <p class="text-cyan-color text-xl pt-1">Bring your relationships to new heights
                            with <br> our community product. Discover your <br> biggest enthusiasts </p>
                        <a href="#" class="flex items-center mt-7 text-xl">
                            Learn More
                            <img src="{{ asset('src/images/arrow-right-dark.png') }}" class="pl-3" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-8 flex justify-center">
            <div class="self-center ml-20">
                <h3 class="text-pink-color font-semibold text-lg uppercase">services</h3>
                <h4 class="text-black-color font-semibold text-[34px] font-poppins">Managed services</h4>
                <p class="text-cyan-color text-xl pt-1">Our full-service solution lets our experts do <br> the
                    heavy lifting to optimize your community <br> for brand building and storytelling</p>
                <a href="#" class="flex items-center mt-7 text-xl">
                    Learn More
                    <img src="{{ asset('src/images/arrow-right-dark.png') }}" class="pl-3" alt="arrow">
                </a>
            </div>
            <div class="">
                <img src="{{ asset('src/images/services.png') }}" alt="influencer" class="w-[440px] h-[482px]">
            </div>
        </div>
    </section>

    {{-- statistics section --}}
    <section id="statistics">
        <div class="w-full mx-auto bg-dark-purple mt-10">
            <div class="text-center py-[120px]">
                <h2 class="text-white font-poppins font-semibold text-[44px]">Search through more than 11 million <br>
                    social
                    media profiles</h2>
                <p class="text-slate-400 text-xl pt-4">Heepsy's search filters help you find exactly what you're looking
                    for,
                    and <br>
                    our influencer reports provide you with the metrics</p>

                <div class="mt-[110px] flex justify-center">
                    <div class="px-[70px]">
                        <h5 class="text-white font-poppins font-semibold text-[44px]">2260</h5>
                        <span class="text-slate-400 text-lg">Satisfied Brands</span>
                    </div>
                    <div class="px-[70px]">
                        <h5 class="text-white font-poppins font-semibold text-[44px]">1324</h5>
                        <span class="text-slate-400 text-lg">Satisfied Clients</span>
                    </div>
                    <div class="px-[70px]">
                        <h5 class="text-white font-poppins font-semibold text-[44px]">3453</h5>
                        <span class="text-slate-400 text-lg">Sponsored</span>
                    </div>
                    <div class="px-[70px]">
                        <h5 class="text-white font-poppins font-semibold text-[44px]">9786</h5>
                        <span class="text-slate-400 text-lg">Completed</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- solution section --}}
    <section id="solution">
        <div class="container mx-auto mt-8">
            <div class="text-center">
                <h2 class="text-black-color text-[44px] font-poppins font-semibold">Solutions for every need</h2>
                <p class="text-cyan-color text-xl mt-1">Join thousands of marketers and entrepreneurs for a 2-day event
                    at
                    <br>
                    the forefront of social commerce.
                </p>
            </div>
            <div class="flex mt-[80px] justify-center">
                <div class="w-[460px] h-[400px] px-3">
                    <img src="{{ asset('src/images/person1.png') }}" alt="person1" class="bg-cover rounded-t-md">
                    <div class="px-[25px] py-[22px] bg-white inline-block shadow rounded-b-xl -mt-[20%]">
                        <h4 class="text-dark-blue text-xl font-semibold font-poppins">Rebel Clothing</h4>
                        <div class="flex mt-5">
                            <div class="mr-8">
                                <h5 class="text-black-color text-[28px] font-poppins font-semibold">6.7 M</h5>
                                <p class="text-grey-color text-sm font-medium">FOLLOWER REACH</p>
                            </div>
                            <div class="">
                                <h5 class="text-black-color text-[28px] font-poppins font-semibold">56.2 K</h5>
                                <p class="text-grey-color text-sm font-medium">ENGAGEMENT</p>
                            </div>

                        </div>
                        <div class="flex mt-6">
                            <a href="#" class="text-purple-color text-xl font-medium mr-2">Learn More</a>
                            <img src="{{ asset('src/images/arrow-purple.png') }}" alt="arrow"
                                class="w-6 h-6 self-center">
                        </div>
                    </div>
                </div>
                <div class="w-[460px] h-[400px] px-3">
                    <img src="{{ asset('src/images/person2.png') }}" alt="person1" class="bg-cover rounded-t-md">
                    <div class="px-[25px] py-[22px] bg-white inline-block shadow rounded-b-xl -mt-[20%]">
                        <h4 class="text-dark-blue text-xl font-semibold font-poppins">Rebel Clothing</h4>
                        <div class="flex mt-5">
                            <div class="mr-8">
                                <h5 class="text-black-color text-[28px] font-poppins font-semibold">6.7 M</h5>
                                <p class="text-grey-color text-sm font-medium">FOLLOWER REACH</p>
                            </div>
                            <div class="">
                                <h5 class="text-black-color text-[28px] font-poppins font-semibold">56.2 K</h5>
                                <p class="text-grey-color text-sm font-medium">ENGAGEMENT</p>
                            </div>

                        </div>
                        <div class="flex mt-6">
                            <a href="#" class="text-purple-color text-xl font-medium mr-2">Learn More</a>
                            <img src="{{ asset('src/images/arrow-purple.png') }}" alt="arrow"
                                class="w-6 h-6 self-center">
                        </div>
                    </div>
                </div>
                <div class="w-[460px] h-[400px] px-3">
                    <img src="{{ asset('src/images/person3.png') }}" alt="person1" class="bg-cover rounded-t-md">
                    <div class="px-[25px] py-[22px] bg-white inline-block shadow rounded-b-xl -mt-[20%]">
                        <h4 class="text-dark-blue text-xl font-semibold font-poppins">Rebel Clothing</h4>
                        <div class="flex mt-5">
                            <div class="mr-8">
                                <h5 class="text-black-color text-[28px] font-poppins font-semibold">6.7 M</h5>
                                <p class="text-grey-color text-sm font-medium">FOLLOWER REACH</p>
                            </div>
                            <div class="">
                                <h5 class="text-black-color text-[28px] font-poppins font-semibold">56.2 K</h5>
                                <p class="text-grey-color text-sm font-medium">ENGAGEMENT</p>
                            </div>

                        </div>
                        <div class="flex mt-6">
                            <a href="#" class="text-purple-color text-xl font-medium mr-2">Learn More</a>
                            <img src="{{ asset('src/images/arrow-purple.png') }}" alt="arrow"
                                class="w-6 h-6 self-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mb-52"></div>

</x-app-layout>
