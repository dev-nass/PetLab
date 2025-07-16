<x-layouts.app>

    <section class="flex justify-center items-center">
        <div class="max-w-[33rem] w-full">
            <div
                class="mt-7 bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-900 dark:border-neutral-700">
                <div class="p-4 sm:p-7">
                    <div class="mt-5">
                        <h1 class="text-2xl text-center text-gray-800 font-bold dark:text-white">Vet Registration</h1>
                        <!-- form -->
                        <form class="grid gap-y-5">
                            <div>
                                <div
                                    data-hs-file-upload='{
                                         "url": "/upload",
                                        "acceptedFiles": "image/*",
                                         "maxFiles": 1,
                                        "singleton": true
                                }'>
                                    <template data-hs-file-upload-preview="">
                                        <div class="size-20">
                                            <img class="w-full object-contain rounded-full" data-dz-thumbnail="">
                                        </div>
                                    </template>

                                    <div class="flex flex-wrap items-center gap-3 sm:gap-5">
                                        <div class="group" data-hs-file-upload-previews=""
                                            data-hs-file-upload-pseudo-trigger="">
                                            <span
                                                class="group-has-[div]:hidden flex shrink-0 justify-center items-center size-20 border-2 border-dotted border-gray-300 text-gray-400 cursor-pointer rounded-full hover:bg-gray-50 dark:border-neutral-700 dark:text-neutral-600 dark:hover:bg-neutral-700/50">
                                                <svg class="shrink-0 size-7" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                    <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="grow">
                                            <div class="flex items-center gap-x-2">
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                    data-hs-file-upload-trigger="">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="17 8 12 3 7 8"></polyline>
                                                        <line x1="12" x2="12" y1="3"
                                                            y2="15"></line>
                                                    </svg>
                                                    Upload photo
                                                </button>
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-semibold rounded-lg border border-gray-200 bg-white text-gray-500 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                                    data-hs-file-upload-clear="">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-x-3">
                                <x-form.group for="first_name" label="First Name" id="first_name" name="first_name"
                                    type="text" />

                                <x-form.group for="last_name" label="Last Name" id="last_name" name="last_name"
                                    type="text" />
                            </div>
                            <!-- end form group -->

                            <!-- form group -->
                            <x-form.group for="username" label="Username" id="username" name="username"
                                type="text" />
                            <!-- end form group -->

                            <!-- form group -->
                            <x-form.group for="email" label="Email" id="email" name="email" type="email" />
                            <!-- end form group -->

                            <!-- form group -->
                            <x-form.group for="hs-toggle-password" label="Password" id="hs-toggle-password"
                                name="password" type="password" />
                            <!-- end form group -->

                            <!-- form group -->
                            <x-form.group for="password_confirmation" label="Confirm Password"
                                id="password_confirmation" name="password_confirmation" type="password" />
                            <!-- end form group -->

                            <button type="submit"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">sign
                                up</button>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
