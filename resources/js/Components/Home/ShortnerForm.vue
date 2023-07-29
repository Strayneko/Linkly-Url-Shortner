<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { onMounted, ref, Ref } from 'vue'

const urlInputRef: Ref = ref(null)
const isEnableAutoPaste: Ref = ref(false)

const pasteFromClipboard = () => {
    const clipboardApiIsNotSuppored = !isEnableAutoPaste.value || !window.isSecureContext
    if (clipboardApiIsNotSuppored) return

    window.navigator.clipboard.readText().then((text: string) => {
        urlInputRef.value.value = text
    })
}

const toggleAutoPaste = async () => {
    await window.navigator.clipboard.readText()
    isEnableAutoPaste.value = !isEnableAutoPaste.value
}
</script>

<template>
    <div class="container mt-1 w-full px-4 lg:mt-16 lg:px-14">
        <div
            class="mx-auto flex w-full flex-col items-center justify-center text-center"
        >
            <h1
                class="main-text inline-block w-full py-4 text-4xl font-extrabold lg:text-6xl"
            >
                Shorten Your Loooong Links :)
            </h1>
            <small class="text-base tracking-wide text-[#C9CED6]"
                >Ciliken is an efficient and easy-to-use URL shortening service
                that streamlines your <br />
                online experience.</small
            >
        </div>

        <form action="" class="mx-auto block w-full text-center">
            <div
                class="relative mx-auto mt-11 flex w-full items-center lg:w-[658px] lg:max-w-[658px]"
            >
                <svg
                    width="26"
                    height="19"
                    viewBox="0 0 26 19"
                    fill="none"
                    class="absolute ml-4"
                >
                    <path
                        d="M23.5859 9.5L18.7031 14.3828C16.75 16.3359 13.5859 16.3359 11.6719 14.3828C9.79688 12.5078 9.67969 9.53906 11.3984 7.58594L11.6328 7.35156C11.8281 7.07812 12.2578 7.03906 12.4922 7.27344C12.7656 7.50781 12.8047 7.89844 12.5703 8.17188L12.375 8.40625C11.0859 9.89062 11.1641 12.1172 12.5312 13.4844C14.0156 14.9688 16.3594 14.9688 17.8438 13.4844L22.6875 8.64062C24.1719 7.15625 24.1719 4.8125 22.6875 3.32812C21.2422 1.88281 18.8594 1.88281 17.4141 3.32812L16.5156 4.22656C16.2812 4.46094 15.8906 4.46094 15.6172 4.22656C15.3828 3.95312 15.3828 3.5625 15.6172 3.32812L16.5156 2.42969C18.4688 0.476562 21.6328 0.476562 23.5859 2.42969C25.5391 4.38281 25.5391 7.54688 23.5859 9.5ZM2.375 9.5L7.25781 4.65625C9.21094 2.70312 12.3359 2.70312 14.3281 4.65625C16.1641 6.49219 16.2812 9.46094 14.5625 11.4531L14.3281 11.6875C14.1328 11.9609 13.7422 12 13.4688 11.7656C13.1953 11.5312 13.1562 11.1406 13.3906 10.8672L13.625 10.6328C14.875 9.14844 14.7969 6.92188 13.4297 5.55469C11.9453 4.07031 9.60156 4.07031 8.11719 5.55469L3.27344 10.3984C1.78906 11.8828 1.78906 14.2266 3.27344 15.7109C4.71875 17.1562 7.10156 17.1562 8.54688 15.7109L9.44531 14.8125C9.67969 14.5781 10.0703 14.5781 10.3438 14.8125C10.5781 15.0469 10.5781 15.4766 10.3438 15.7109L9.44531 16.5703C7.49219 18.5234 4.32812 18.5234 2.375 16.5703C0.421875 14.6172 0.421875 11.4531 2.375 9.5Z"
                        fill="#C9CED6"
                    />
                </svg>
                <input
                    ref="urlInputRef"
                    type="text"
                    @focus="pasteFromClipboard"
                    placeholder="Enter the link here"
                    autofocus
                    class="input h-14 w-full rounded-[48px] border-2 border-[#353C4A] bg-[#181E29] pl-14 pr-40 text-gray-300 placeholder:font-light lg:h-[76px]"
                />
                <button
                    class="absolute right-0 mr-2 gap-2 rounded-[48px] border border-[#144EE3] bg-[#144EE3] p-3.5 font-semibold text-white shadow-[10px_9px_22px_0px_rgba(20,_78,_227,_0.38)] lg:mr-2 lg:px-5 lg:py-4"
                    href="#"
                >
                    <span class="hidden lg:inline">Shorten Now</span>

                    <span class="inline lg:hidden"
                        ><img
                            src="/icons/arrow-right.png"
                            loading="lazy"
                            alt=""
                    /></span>
                </button>
            </div>

            <div>
                <label
                    class="relative mt-9 inline-flex cursor-pointer items-center"
                >
                    <input
                        type="checkbox"
                        class="peer sr-only"
                        @change="toggleAutoPaste"
                    />
                    <div
                        class="peer h-6 w-11 rounded-full border border-[#353C4A] bg-[#181E29] after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-[#144EE3] peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-blue-800"
                    ></div>
                    <span
                        class="ml-3 select-none text-sm font-thin tracking-wide text-[#C9CED6]"
                        >Auto Paste from Clipboard</span
                    >
                </label>
            </div>

            <small
                class="mt-5 inline-block text-sm font-thin tracking-wide text-[#C9CED6]"
                >You can create
                <span class="font-semibold text-[#EB568E]"> 05 </span> more
                links.

                <Link
                    href=""
                    class="rounded p-1 underline hover:bg-gray-700/60"
                >
                    <span class="font-semibold text-white">Register Now</span>
                </Link>
                to enjoy Unlimited usage</small
            >
        </form>
    </div>
</template>
