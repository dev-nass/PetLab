<x-layouts.app>
    <header class="max-w-[85rem] mx-auto mt-10 mb-7 px-4 sm:px-6 flex justify-end">
        <a href="#"
            class="text-neutral-800 border border-gray-200 py-2 px-3 rounded-lg text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 hover:fill-gray-200 dark:hover:bg-white/10 dark:text-white dark:hover:text-white dark:focus:text-white me-2">Add
            Pet</a>

        <a href="#"
            class="text-neutral-800 border border-gray-200 py-2 px-3 rounded-lg text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 hover:fill-gray-200 dark:hover:bg-white/10 dark:text-white dark:hover:text-white dark:focus:text-white">Edit
            Profile</a>
    </header>
    <main class="max-w-[85rem] mx-auto grid px-4 sm:px-6 lg:px-8 lg:grid-cols-3 lg:gap-x-8">
        <div class="col-span-2">
            <!-- Profile -->
            <div class="flex items-center gap-x-3">
                <div class="shrink-0">
                    <img class="shrink-0 size-30 md:size-35 rounded-full"
                        src="https://images.unsplash.com/photo-1676599991259-ee336e714e36?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Avatar">
                </div>

                <div class="grow">
                    <h1 class="text-lg md:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                        Eliana Garcia
                    </h1>
                    <p class="text-sm md:text-base text-gray-600 dark:text-neutral-400">
                        Graphic Designer, Web designer/developer
                    </p>
                </div>
            </div>
            <!-- End Profile -->

            <!-- Contact Information  -->
            <div class="mt-8">

                <h1 class="text-base md:text-xl font-medium text-gray-800 dark:text-neutral-200">
                    Contact Information:
                </h1>
                <ul class="mt-5 flex flex-col gap-y-3">
                    <li class="flex items-center gap-x-2.5">
                        <svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                        </svg>
                        <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-hidden focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="#">
                            elianagarcia997@about.me
                        </a>
                    </li>

                    <li class="flex items-center gap-x-2.5">
                        <svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.1881 10.1624L22.7504 0H20.7214L13.2868 8.82385L7.34878 0H0.5L9.47944 13.3432L0.5 24H2.5291L10.3802 14.6817L16.6512 24H23.5L14.1881 10.1624ZM11.409 13.4608L3.26021 1.55962H6.37679L20.7224 22.5113H17.6058L11.409 13.4613V13.4608Z"
                                fill="currentColor" />
                        </svg>
                        <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-hidden focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="#">
                            @elianagarcia997
                        </a>
                    </li>

                    <li class="flex items-center gap-x-2.5">
                        <svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M19.13 5.09C15.22 9.14 10 10.44 2.25 10.94" />
                            <path d="M21.75 12.84c-6.62-1.41-12.14 1-16.38 6.32" />
                            <path d="M8.56 2.75c4.37 6 6 9.42 8 17.72" />
                        </svg>
                        <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-hidden focus:decoration-2 dark:text-neutral-500 dark:hover:text-neutral-400"
                            href="#">
                            @elianagarcia997
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Contact Information -->

            <!-- About -->
            <div class="mt-8">

                <h1 class="text-base md:text-xl font-medium text-gray-800 dark:text-neutral-200">
                    Address:
                </h1>
                <p class="text-sm md:text-base text-gray-600 dark:text-neutral-400">
                    I am a seasoned graphic designer with over 14 years of experience in creating visually appealing and
                    user-centric designs. My expertise spans across UI design, design systems, and custom illustrations,
                    helping clients bring their digital visions to life.
                </p>
                <p class="mt-3 text-sm md:text-base text-gray-600 dark:text-neutral-400">
                    Currently, I work remotely for Notion, where I design template UIs, convert them into HTML and CSS,
                    and
                    provide comprehensive support to our users. I am passionate about crafting elegant and functional
                    designs that enhance user experiences.
                </p>
            </div>
            <!-- End About -->
        </div>

        <!-- Pets Col -->
        <div class="border border-gray-300 rounded-lg text-black  shadow-lg dark:border-neutral-700 dark:text-white">
        </div>
        <!-- End Pets Col -->
    </main>

</x-layouts.app>
