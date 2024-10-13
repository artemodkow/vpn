<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/dist/output.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
            integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="/dist/img/Logo.svg" type="image/x-icon">
        <title>Lasles VPN</title>
        <style>
            /* npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch */
            @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
        </style>
        @vite(['resources/css/app.css'])
    </head>
    <div id="scrollToTop"><span><button onclick="topFunction()" id="myBtn" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
            class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z" />
        </svg>
    </button></span></div>
    <section>
    <nav class="fixed w-full z-10 bg-[white] p-2 py-[40px]">
        <div class="max-w-[1320px] px-3 mx-auto">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div>
                        <svg width="35" height="37" viewBox="0 0 35 37" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M31.1473 13.6477L31.1255 13.626C31.1238 13.6247 31.1224 13.6231 31.1215 13.6212L17.5006 0L3.87983 13.6209C3.87826 13.6225 3.8758 13.6256 3.8758 13.6256L3.85333 13.6474C1.77053 15.7419 0.447586 18.4725 0.0948177 21.4052C-0.25795 24.3379 0.379698 27.3044 1.90639 29.8331C3.43309 32.3619 5.76122 34.3077 8.52069 35.3612C11.2802 36.4147 14.3126 36.5157 17.136 35.6477C17.3735 35.5751 17.6275 35.5751 17.8651 35.6477C20.6882 36.5153 23.7205 36.4144 26.4798 35.3607C29.2391 34.307 31.567 32.3613 33.0936 29.8328C34.6202 27.3042 35.2579 24.3379 34.9053 21.4054C34.5526 18.4728 33.2299 15.7422 31.1473 13.6477ZM8.7232 22.6298C8.65689 22.6961 8.6043 22.7749 8.56844 22.8615C8.53257 22.948 8.5141 23.0408 8.51412 23.1346C8.53835 25.5386 9.21776 27.8904 10.4792 29.9371C10.5079 29.9835 10.5211 30.0379 10.517 30.0922C10.513 30.1465 10.4918 30.1982 10.4566 30.2399C10.4213 30.2816 10.3738 30.311 10.3209 30.324C10.2679 30.337 10.2122 30.333 10.1616 30.3124C9.21332 29.9135 8.35182 29.3336 7.62531 28.6053C6.13646 27.1162 5.29946 25.097 5.2981 22.9912C5.29675 20.8855 6.13117 18.8652 7.61812 17.3743L17.5006 7.49273L27.3826 17.3743C28.8698 18.865 29.7045 20.8853 29.703 22.9912C29.7018 25.097 28.8647 27.1162 27.3757 28.6053C26.6492 29.3336 25.7877 29.9135 24.8396 30.3124C24.7889 30.333 24.7332 30.337 24.6802 30.324C24.6273 30.311 24.5798 30.2814 24.5445 30.2399C24.5093 30.1982 24.488 30.1465 24.484 30.092C24.4799 30.0377 24.4931 29.9833 24.5218 29.9369C25.7835 27.8904 26.4633 25.5386 26.4879 23.1346C26.4879 23.0408 26.4692 22.948 26.4332 22.8613C26.3971 22.7746 26.3444 22.696 26.2779 22.6296L21.6037 17.6717C21.5571 17.6329 21.4985 17.6116 21.4378 17.6116C21.3773 17.6116 21.3186 17.6329 21.2721 17.6717C21.2255 17.7104 21.1942 17.7644 21.1833 17.824C21.1724 17.8837 21.1828 17.945 21.2127 17.9978C23.0281 21.283 21.467 26.0017 18.8637 28.6053L18.85 28.6191C18.4907 28.9745 18.0056 29.1738 17.5002 29.1736C16.9948 29.1734 16.5098 28.9738 16.1508 28.6182L16.1382 28.6053C13.5339 26.0017 11.9736 21.2835 13.7893 17.9985C13.8192 17.9457 13.8296 17.8844 13.8187 17.8247C13.8079 17.7651 13.7764 17.7111 13.7299 17.6724C13.6834 17.6336 13.6247 17.6123 13.5642 17.6123C13.5036 17.6123 13.4449 17.6336 13.3984 17.6724L8.7232 22.6298Z"
                                fill="#F53838" />
                        </svg>
                    </div>
                    <div class="font-custom font-medium text-[20px] leading-[23px]">Lasles<span
                            class="font-custom font-extrabold text-[20px] leading-[23px]">VPN</span>
                    </div>
                </div>
                <!-- <input type="checkbox" id="menuicon"> -->

                <div
                    class="flex gap-[40px] max-md:absolute max-md:top-0 max-md:left-[-100%] max-md:bg-[white] max-md:flex max-md:items-center max-md:flex-col max-md:justify-center max-md:w-[100%] max-md:h-[100vh]">
                    <a href=" /"
                        class="font-custom font-normal text-[16px] leading-[18px] text-[#4F5665] hover:text-[#FF3500]">
                        About</a>
                    <a href="/"
                        class="font-custom font-normal text-[16px] leading-[18px] text-[#4F5665] hover:text-[#FF3500]">Features</a>
                    <a href="/"
                        class="font-custom font-normal text-[16px] leading-[18px] text-[#4F5665] hover:text-[#FF3500]">Pricing</a>
                    <a href="/"
                        class="font-custom font-normal text-[16px] leading-[18px] text-[#4F5665] hover:text-[#FF3500]">Testinomial</a>
                    <a href="/"
                        class="font-custom font-normal text-[16px] leading-[18px] text-[#4F5665] hover:text-[#FF3500]">Help</a>
                </div>
                @auth
                   <form action="{{ route('logout') }}" method="post">
                        @csrf 
                        <button
                            type="submit"
                            href="{{ route('register') }}"
                            class="font-custom text-center p-2 shadow rounded-[50px] text-[16px] text-[#F53855] font-medium w-[100px] hover:shadow-[5px_5px_10px_0px_#F53838] hover:bg-[#F53838] hover:text-[white] hover:transition-all">
                        Logout</button>
                   </form>
                @endauth
                @guest
                    <div class=" flex gap-4 items-center max-sm:hidden">
                        <a href="{{ route('login') }}" class="font-custom font-normal text-[16px] leading-[18px]">Sign In</a>
                        <a
                            href="{{ route('register') }}"
                            class="font-custom text-center p-2 shadow rounded-[50px] text-[16px] text-[#F53855] font-medium w-[100px] hover:shadow-[5px_5px_10px_0px_#F53838] hover:bg-[#F53838] hover:text-[white] hover:transition-all">Sign
                            Up</a>
                    </div>                    
                @endguest

                <button id="toggleButton" class="font-custom z-10 md:hidden">
                    <label for="menuicon"
                        class="max-md:w-[40px] max-md:h-[30px] max-md:flex max-md:flex-col max-md:justify-between md:hidden">
                        <span class="w-full h-[3px] bg-black"></span>
                        <span class="w-full h-[3px] bg-black"></span>
                        <span class="w-full h-[3px] bg-black"></span>
                    </label>
                </button>
            </div>
        </div>
    </nav>
    </section>

    <section class="pt-[200px]">
    <div class="max-w-[1320px] px-3 mx-auto">
        <div class="flex flex-wrap -mx-3 flex-row">
            <div class="w-1/2 px-3 max-lg:w-full max-md:pb-[30px]">
                <div class="flex flex-col items-start">
                    <p class="font-custom font-medium text-[50px] leading-[70px] mb-[20px]">Want anything to be easy
                        with
                        <span class="font-custom font-bold text-[50px] leading-[70px]">LaslesVPN.</span>
                    </p>
                    <p class="font-custom font-normal text-[16px] leading-[30px] text-[#4F5665]">Provide a network
                        for all your
                        needs with ease and fun using <span
                            class="font-custom font-medium text-[16px] leading-[30px] text-[#4F5665]">LaslesVPN</span>
                        discover
                        interesting
                        features from us.</p>
                    <button
                        class="font-custom font-bold text-[16px] leading-[25px] shadow bg-[#F53838] rounded-lg py-5 px-[70px] text-[white] mt-[50px] hover:bg-[white] hover:text-[#F53838]  hover:shadow-[0px_5px_18px_10px_#F5383859] hover:transition-all">Get
                        Started</button>
                </div>
            </div>
            <div class="w-1/2 px-3 max-lg:w-full">
                <img src="./dist/img/first_cont_img.png" alt="a person" class="w-full h-full">
            </div>
        </div>

    </div>
    </section>

    <section class="py-[100px]">
    <div class="max-w-[1320px] mx-auto px-[90px] py-[50px] shadow-[0px_0px_18px_1px_#0D1025] rounded-[25px]">
        <div class="flex flex-wrap flex-row -mx-3">
            <div
                class="w-1/3 px-3 flex gap-2 items-center justify-center border-r-4 border-r-[#EEEFF2] max-md:w-1/2 max-sm:w-full max-sm:border-none max-sm:mt-4">
                <div class="p-3 rounded-2xl bg-[#FFECEC] flex items-center">
                    <img src="./dist/img/Third_cont_svg_1.svg" alt="people">
                </div>
                <div class="flex flex-col">
                    <p class="font-custom font-bold text-[25px] leading-[30px]">90+</p>
                    <p class="font-custom font-normal text-[20px] leading-[30px] text-[#4F5665]">Users</p>
                </div>
            </div>
            <div
                class="w-1/3 px-3 flex gap-2 items-center justify-center border-r-4 border-r-[#EEEFF2] max-md:w-1/2 max-md:border-none max-sm:w-full max-sm:mt-4">
                <div class="p-3 rounded-2xl bg-[#FFECEC] flex items-center">
                    <img src="./dist/img/Third_cont_svg_2.svg" alt="location">
                </div>
                <div class="flex flex-col">
                    <p class="font-custom font-bold text-[25px] leading-[30px]">30+</p>
                    <p class="font-custom font-normal text-[20px] leading-[30px] text-[#4F5665]">Location</p>
                </div>
            </div>
            <div
                class="w-1/3 px-3 flex gap-2 items-center justify-center max-md:w-full max-md:mt-2 max-sm:w-full max-sm:border-b-slate-700 max-sm:mt-4">
                <div class="p-3 rounded-2xl bg-[#FFECEC] flex items-center">
                    <img src="./dist/img/Third_cont_svg_3.svg" alt="server">
                </div>
                <div class="flex flex-col">
                    <p class="font-custom font-bold text-[25px] leading-[30px]">50+</p>
                    <p class="font-custom font-normal text-[20px] leading-[30px] text-[#4F5665]">Servers</p>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="py-[100px] bg-[#FBFBFB]">
    <div class="max-w-[1320px] px-3 mx-auto">
        <div class="flex flex-wrap flex-row -mx-3">
            <div class="w-1/2 px-3 max-md:w-full max-md:flex max-md:justify-center">
                <img src="./dist/img/forth_cont.png" alt="a boy">
            </div>
            <div class="w-1/2 px-3 max-md:w-full pt-[35px]">
                <p class="font-custom text-[35px] leading-[50px] font-medium mb-[30px] max-w-[400px]">We Provide
                    Many Features You
                    Can Use
                </p>
                <p
                    class="font-custom font-normal text-[16px] leading-[30px] text-[#4F5665] mb-[20px] max-w-[400px]">
                    You can
                    explore the
                    features that we
                    provide with fun and have their own functions each feature.</p>
                <div class="flex flex-col gap-4">
                    <div class="flex gap-2">
                        <img src="./dist/img/tick_sgm.svg" alt="...">
                        <p class="font-custom font-normal text-[14px] leading-[30px] text-[#4F5665]">
                            Powerfull
                            online protection.
                        </p>
                    </div>
                    <div class="flex gap-2">
                        <img src="./dist/img/tick_sgm.svg" alt="...">
                        <p class="font-custom font-normal text-[14px] leading-[30px] text-[#4F5665]">
                            Internet
                            without borders.</p>
                    </div>
                    <div class="flex gap-2">
                        <img src="./dist/img/tick_sgm.svg" alt="...">
                        <p class="font-custom font-normal text-[14px] leading-[30px] text-[#4F5665]">Supercharged
                            VPN</p>
                    </div>
                    <div class="flex gap-2">
                        <img src="./dist/img/tick_sgm.svg" alt="...">
                        <p class="font-custom font-normal text-[14px] leading-[30px] text-[#4F5665]">No specific
                            time limits.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="pt-[100px] bg-[#FAFAFA]">
    <div class="max-w-[1320px] px-3 mx-auto">
        <div class="flex flex-col items-center justify-center">
            <p class="font-custom font-medium text-[35px] leading-[50px]">Choose Your Plan</p>
            <p class="font-custom font-normal text-[16px] leading-[30px] mt-[20px] max-w-[500px] text-center">Let's
                choose the package that is
                best for
                you and explore it happily and cheerfully.</p>
        </div>
        <div class="flex flex-row flex-wrap -mx-3 mt-[60px]">
            <div
                class="w-1/3 px-3 max-lg:w-1/2 max-md:w-full max-md:flex max-md:items-center max-md:justify-center">
                <div
                    class="flex flex-col items-center border-[2px] rounded-[10px] hover:border-[#F53838] max-md:w-[470px] max-sm:w-full">
                    <img src="./dist/img/fifth_cont_img.png" alt="..." class="mb-[30px] mt-[50px]">
                    <p class="font-custom font-medium text-[18px] leading-[30px] mb-[30px]">Free Plan</p>
                    <div class="flex flex-col items-start gap-3 mb-[56px]">
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Unlimited Bandwitch</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Encrypted Connection</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">No Traffic Logs</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Works on All Devices</p>
                        </div>
                    </div>
                    <p class="font-custom font-medium text-[25px] leading-[50px] mt-[70px]">Free</p>
                    <button
                        class="mt-[20px] mb-[30px] px-[50px] rounded-3xl border border-[#F53838] py-[10px] font-custom font-bold text-[16px] leading-[19px] text-[#F53838] hover:text-[white] hover:bg-[#F53838] hover:shadow-[0px_5px_18px_10px_#F5383859] hover:transition-all">Select</button>
                </div>
            </div>
            <div
                class="w-1/3 px-3 max-lg:w-1/2 max-md:w-full max-md:mt-[20px] max-md:flex max-md:items-center max-md:justify-center">
                <div
                    class="flex flex-col items-center border-[2px] rounded-[10px] hover:border-[#F53838] max-md:w-[470px] max-sm:w-full">
                    <img src="./dist/img/fifth_cont_img.png" alt="..." class="mb-[30px] mt-[50px]">
                    <p class="font-custom font-medium text-[18px] leading-[30px] mb-[30px]">Free Plan</p>
                    <div class="flex flex-col items-start gap-3 mb-[42px]">
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Unlimited Bandwitch</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Encrypted Connection</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">No Traffic Logs</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Works on All Devices</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Yes Traffic Logs</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Connect Anywhere</p>
                        </div>
                    </div>
                    <p class="font-custom font-medium text-[25px] leading-[50px] text-[#0B132A]">$9<span
                            class="font-custom font-normal text-[25px] leading-[30px] text-[#4F5665]">/mon</span>
                    </p>
                    <button
                        class="mt-[20px] mb-[30px] px-[50px] rounded-3xl border border-[#F53838] py-[10px] font-custom font-bold text-[16px] leading-[19px] text-[#F53838] hover:text-[white] hover:bg-[#F53838]  hover:shadow-[0px_5px_18px_10px_#F5383859] hover:transition-all">Select</button>
                </div>
            </div>
            <div
                class="w-1/3 px-3 max-lg:flex max-lg:items-center max-lg:justify-center max-lg:flex-col max-lg:mt-[40px] max-lg:w-full max-md:w-full max-md:mt-[20px]">
                <div
                    class="flex flex-col items-center border-[2px] rounded-[10px] hover:border-[#F53838] max-lg:w-[470px] max-md:w-[470px] max-sm:w-full">
                    <img src="./dist/img/fifth_cont_img.png" alt="..." class="mb-[30px] mt-[50px]">
                    <p class="font-custom font-medium text-[18px] leading-[30px] mb-[30px]">Free Plan</p>
                    <div class="flex flex-col items-start gap-3">
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Unlimited Bandwitch</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Encrypted Connection</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">No Traffic Logs</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Works on All Devices</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Yes Traffic Logs</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Connect Anywhere</p>
                        </div>
                        <div class="flex gap-2">
                            <img src="./dist/img/col_tick.svg" alt="...">
                            <p class="font-custom font-normal text-[14px] leading-[30px]">Get New Features</p>
                        </div>
                    </div>
                    <p class="font-custom font-medium text-[25px] leading-[50px] text-[#0B132A]">$12<span
                            class="font-custom font-normal text-[25px] leading-[30px] text-[#4F5665]">/mon</span>
                    </p>
                    <button
                        class="mt-[20px] mb-[30px] px-[50px] rounded-3xl border border-[#F53838] py-[10px] font-custom font-bold text-[16px] bg-[#F53838] leading-[19px] text-[white] hover:text-[#F53838] hover:bg-[white] hover:shadow-[0px_5px_18px_10px_#F5383859] hover:transition-all">Select</button>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="pt-[150px] bg-[#FAFAFA]">
    <div class="max-w-[1320px] px-3 mx-auto flex items-center flex-col">
        <div class="flex items-center justify-center flex-col max-w-[400px] text-center">
            <p class="font-custom font-medium text-[35px] leading-[50px]">Huge Global Network of Fast VPN</p>
            <p class="font-custom font-normal text-[16px] leading-[30px] text-[#4F5665]">See <span
                    class="font-custom font-medium text-[16px] leading-[30px]">LaslesVPN</span> everywhere to make
                it easier for you when you move locations.</p>
        </div>
        <div class="flex items-center justify-center pt-[150px]">
            <img src="./dist/img/globe_img.png" alt="world">
        </div>
        <div class="flex flex-row -mx-3 flex-wrap w-full max-sm:gap-5 mt-[50px]">
            <div class="w-1/5 flex justify-center items-center max-lg:w-1/4 max-md:w-1/3 max-sm:w-full">
                <a href="/">
                    <img src="./dist/img/Company_img_1.png" alt="....">
                </a>
            </div>
            <div class="w-1/5 flex justify-center items-center max-lg:w-1/4 max-md:w-1/3 max-sm:w-full">
                <a href="/">
                    <img src="./dist/img/Company_img_2.png" alt="...">
                </a>
            </div>
            <div class="w-1/5 flex justify-center items-center max-lg:w-1/4 max-md:w-1/3 max-sm:w-full">
                <a href="/">
                    <img src="./dist/img/Company_img_3.png" alt="...">
                </a>
            </div>
            <div class="w-1/5 flex justify-center items-center max-lg:w-1/4 max-md:w-1/3 max-sm:w-full">
                <a href="/">
                    <img src="./dist/img/Company_img_4.png" alt="...">
                </a>
            </div>
            <div class="w-1/5 flex justify-center items-center max-lg:w-1/4 max-md:w-1/3 max-sm:w-full">
                <a href="/">
                    <img src="./dist/img/Company_img_5.png" alt="...">
                </a>
            </div>
        </div>
        <div class="flex items-center justify-center flex-col max-w-[450px] text-center mt-[70px]">
            <p class="font-custom font-medium text-[35px] leading-[50px]">Trusted by Thousands of Happy Customer</p>
            <p class="font-custom font-normal text-[16px] leading-[30px] text-[#4F5665] my-[30px]">These are the
                stories of
                our customers who have joined us with great pleasure when using this crazy feature.</p>
        </div>
    </div>
    </section>

    <section class="pt-[30px]">
    <div class="content max-w-[2560px] ml-auto px-3">
        <div class="carousel">
            <div
                class="box_1 border-[2px] border-[#DDDDDD] max-w-[400px] hover:border-[#F53838] rounded-[25px] p-2 min-h-[250px]">
                <div class="flex gap-2">
                    <div>
                        <img src="./dist/img/card_svg_1.svg" alt="a boy">
                    </div>
                    <div>
                        <p class="font-custom font-medium text-[18px] leading-[30px]">Viezh Robert</p>
                        <p class="font-custom font-normal text-[14px] leading-[30px]">Warsaw, Poland</p>
                    </div>
                    <div class="flex items-center">
                        <p class="font-custom font-normal text-[16px] leading-[30px]">4.5</p>
                        <img src="./dist/img/star.svg" alt="star" class="h-[19px]">
                    </div>
                </div>
                <p class="font-custom font-normal text-[16px] leading-[30px]">“Wow... I am very happy to use
                    this
                    VPN, it turned out to be more than my expectations and so far
                    there have been no
                    problems. LaslesVPN always the best”.</p>
            </div>
            <div
                class="box_2 border-[2px] border-[#DDDDDD] max-w-[400px] hover:border-[#F53838] rounded-[25px] p-2 min-h-[250px]">
                <div class="flex gap-2">
                    <div>
                        <img src="./dist/img/card_svg_2.svg" alt="a girl">
                    </div>
                    <div>
                        <p class="font-custom font-medium text-[18px] leading-[30px]">Yessica Christy</p>
                        <p class="font-custom font-normal text-[14px] leading-[30px]">Shanxi, China</p>
                    </div>
                    <div class="flex items-center">
                        <p class="font-custom font-normal text-[16px] leading-[30px]">4.5</p>
                        <img src="./dist/img/star.svg" alt="star" class="h-[19px]">
                    </div>
                </div>
                <p class="font-custom font-normal text-[16px] leading-[30px]">“I like it because I like to
                    travel
                    far and still can connect with high speed.”.</p>
            </div>
            <div
                class="box_3 border-[2px] border-[#DDDDDD] max-w-[400px] hover:border-[#F53838] rounded-[25px] p-2 min-h-[250px]">
                <div class="flex gap-2">
                    <div>
                        <img src="./dist/img/card_svg_3.svg" alt="a boy">
                    </div>
                    <div>
                        <p class="font-custom font-medium text-[18px] leading-[30px]">Kim Young Jou</p>
                        <p class="font-custom font-normal text-[14px] leading-[30px]">Seoul, South Korea</p>
                    </div>
                    <div class="flex items-center">
                        <p class="font-custom font-normal text-[16px] leading-[30px]">4.5</p>
                        <img src="./dist/img/star.svg" alt="star" class="h-[19px]">
                    </div>
                </div>
                <p class="font-custom font-normal text-[16px] leading-[30px]">“This is very unusual for my
                    business
                    that currently requires a virtual private network that has high security.”.</p>
            </div>
            <div
                class="box_3 border-[2px] border-[#DDDDDD] max-w-[400px] hover:border-[#F53838] rounded-[25px] p-2 min-h-[250px]">
                <div class="flex gap-2">
                    <div>
                        <img src="./dist/img/card_svg_3.svg" alt="a boy">
                    </div>
                    <div>
                        <p class="font-custom font-medium text-[18px] leading-[30px]">Kim Young Jou</p>
                        <p class="font-custom font-normal text-[14px] leading-[30px]">Seoul, South Korea</p>
                    </div>
                    <div class="flex items-center">
                        <p class="font-custom font-normal text-[16px] leading-[30px]">4.5</p>
                        <img src="./dist/img/star.svg" alt="star" class="h-[19px]">
                    </div>
                </div>
                <p class="font-custom font-normal text-[16px] leading-[30px]">“This is very unusual for my
                    business
                    that currently requires a virtual private network that has high security.”.</p>
            </div>
        </div>
    </div>
    <div
        class="max-w-[1320px] px-3 mx-auto max-md:flex max-md:items-center max-md:justify-center md:flex md:justify-end md:gap-3">
        <button class="prev p-4 border-[2px] rounded-[50%] hover:bg-[#F53838] group/btn hover:transition-all">
            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M18.75 7.74961H3.925L8.4625 2.29961C8.67467 2.04434 8.77675 1.71524 8.74628 1.38471C8.7158 1.05417 8.55527 0.749285 8.3 0.537112C8.04473 0.324939 7.71563 0.222862 7.3851 0.253336C7.05456 0.283811 6.74967 0.444341 6.5375 0.699612L0.2875 8.19961C0.245451 8.25927 0.207849 8.32194 0.175 8.38711C0.175 8.44961 0.175 8.48711 0.0875002 8.54961C0.0308421 8.69294 0.0011764 8.8455 0 8.99961C0.0011764 9.15372 0.0308421 9.30629 0.0875002 9.44961C0.0875002 9.51211 0.0874998 9.54961 0.175 9.61211C0.207849 9.67729 0.245451 9.73996 0.2875 9.79961L6.5375 17.2996C6.65503 17.4407 6.8022 17.5542 6.96856 17.632C7.13491 17.7097 7.31636 17.7499 7.5 17.7496C7.79207 17.7502 8.07511 17.6485 8.3 17.4621C8.42657 17.3572 8.5312 17.2283 8.60789 17.0829C8.68458 16.9374 8.73183 16.7783 8.74692 16.6146C8.76202 16.4509 8.74466 16.2858 8.69586 16.1288C8.64705 15.9718 8.56775 15.8259 8.4625 15.6996L3.925 10.2496H18.75C19.0815 10.2496 19.3995 10.1179 19.6339 9.8835C19.8683 9.64907 20 9.33113 20 8.99961C20 8.66809 19.8683 8.35015 19.6339 8.11573C19.3995 7.88131 19.0815 7.74961 18.75 7.74961Z"
                    fill="#F53838" class="group-hover/btn:fill-white" />
            </svg>
        </button>
        <button class="next p-4 rounded-[50%] border-[2px] hover:bg-[#F53838] group/btn hover:transition-all">
            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1.25 7.74961H16.075L11.5375 2.29961C11.3253 2.04434 11.2232 1.71524 11.2537 1.38471C11.2842 1.05417 11.4447 0.749285 11.7 0.537112C11.9553 0.324939 12.2844 0.222862 12.6149 0.253336C12.9454 0.283811 13.2503 0.444341 13.4625 0.699612L19.7125 8.19961C19.7545 8.25927 19.7922 8.32194 19.825 8.38711C19.825 8.44961 19.825 8.48711 19.9125 8.54961C19.9692 8.69294 19.9988 8.8455 20 8.99961C19.9988 9.15372 19.9692 9.30629 19.9125 9.44961C19.9125 9.51211 19.9125 9.54961 19.825 9.61211C19.7922 9.67729 19.7545 9.73996 19.7125 9.79961L13.4625 17.2996C13.345 17.4407 13.1978 17.5542 13.0314 17.632C12.8651 17.7097 12.6836 17.7499 12.5 17.7496C12.2079 17.7502 11.9249 17.6485 11.7 17.4621C11.5734 17.3572 11.4688 17.2283 11.3921 17.0829C11.3154 16.9374 11.2682 16.7783 11.2531 16.6146C11.238 16.4509 11.2553 16.2858 11.3041 16.1288C11.3529 15.9718 11.4322 15.8259 11.5375 15.6996L16.075 10.2496H1.25C0.91848 10.2496 0.600536 10.1179 0.366116 9.8835C0.131695 9.64907 0 9.33113 0 8.99961C0 8.66809 0.131695 8.35015 0.366116 8.11573C0.600536 7.88131 0.91848 7.74961 1.25 7.74961Z"
                    fill="#F53838" class="group-hover/btn:fill-white" />
            </svg>
        </button>
    </div>
    </section>

    <section class="pt-[130px] bg-gradient-to-b from-[#FFFFFF] to-[#F8F8F8]">
    <div
        class="max-w-[1320px] mx-auto px-5 shadow-[#FFFFFF] flex justify-between items-center bg-white p-10 flex-wrap rounded-[25px]">
        <div class="flex flex-col max-w-[400px]">
            <p class="font-custom font-medium text-[35px] leading-[45px] max-w-[400px]">Subscribe Now for Get
                Special Features!
            </p>
            <p class="font-custom font-normal text-[16px] leading-[30px]">Let's subscribe with us and find the fun.
            </p>
        </div>
        <div>
            <button
                class="px-20 py-5 font-bold text-[16px] shadow text-[white] bg-[#F53838] leading-[25px] hover:bg-[white] hover:text-[#F53838] font-custom rounded-xl hover:shadow-[0px_5px_18px_10px_#F5383859] hover:transition-all">Subscribe
                Now</button>
        </div>
    </div>
    </section>

    <section class="bg-[#F8F8F8] py-[50px]">
    <div class="max-w-[1320px] mx-auto px-3">
        <div class="flex flex-row flex-wrap -mx-3">
            <div class="md:w-1/3 px-3 max-md:pb-[30px]">
                <div class="flex items-center">
                    <div>
                        <img src="./dist/img/vector_logo.svg" alt="...">
                    </div>
                    <p class="font-custom font-medium text-[20px] leading-[23px]">Lasles<span
                            class="font-custom font-bold text-[20px] leading-[23px]">VPN</span></p>
                </div>
                <p class="font-custom font-normal text-[16px] leading-[30px] max-w-[340px] mb-[20px] mt-[20px]">
                    <span class="font-custom font-medium text-[16px] leading-[30px]">LaslesVPN</span> is a private
                    virtual network that has unique features and has high security.
                </p>
                <div class="flex gap-4">
                    <img src="./dist/img/facebook.svg" alt="..." class="cursor-pointer hover:translate-y-1">
                    <img src="./dist/img/twitter.svg" alt="..." class="cursor-pointer hover:translate-y-1">
                    <img src="./dist/img/instagram.svg" alt="..." class="cursor-pointer hover:translate-y-1">
                </div>
                <p
                    class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer mt-[20px]">
                    ©2020Lasles<span
                        class="font-custom font-medium text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer">VPN</span>
                </p>
            </div>
            <div class="md:w-8/12 px-3 flex max-md:w-full md:justify-end">
                <div class="flex flex-col w-1/3 gap-2">
                    <p class="font-custom font-medium text-[18px] leading-[30px] pb-[10px]">Products</p>
                    <ul class="flex flex-col gap-2">
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Downlaod</li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Pricing</li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Locations</li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Servers</li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Countries</li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Blog</li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2 w-1/3">
                    <p class="font-custom font-medium text-[18px] leading-[30px] pb-[10px]">Engage</p>
                    <ul class="flex flex-col gap-2">
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            LaslesVPN?
                        </li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            FAQ</li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Tutorials</li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Privacy</li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Privacy Policy
                        </li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Terms of
                            Services</li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="font-custom font-medium text-[18px] leading-[30px] pb-[10px]">Earn Money</p>
                    <ul class="flex flex-col gap-2">
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Affiliate</li>
                        <li
                            class="font-custom font-normal text-[16px] leading-[30px] text-[#AFB5C0] cursor-pointer hover:text-[#F53838]">
                            Become Partner
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </section>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src=" ./dist/app.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.getElementById('toggleButton');
        const mobileMenu = document.querySelector('.' + CSS.escape('max-md:left-[-100%]'));

        menuButton.addEventListener('click', () => {
            // Toggle the menu by setting left to either -100% or 0
            const newLeft = mobileMenu.style.left === '-100%' ? '0' : '-100%';
            mobileMenu.style.left = newLeft;
        });
    });
    </script>
    <!-- <script>
    let mybutton = document.getElementById("myBtn");
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script> -->
    <script>
    $(window).on("scroll", function () {
        if (window.scrollY > window.outerHeight) {
            $("#scrollToTop").addClass("active");
            setTimeout(function () {
                var theta = ($(window).scrollTop() - (window.outerHeight + (window.outerHeight / 2))) / 500;
                $('#scrollToTop').css({ transform: 'rotate(' + theta + 'rad)' });
            })
        } else {
            $("#scrollToTop").removeClass("active");
        }
    });

    $('#scrollToTop').on('click', function () {
        $("html, body").animate({ scrollTop: 0 }, 500);
})</script>
</body>
</html>
