<script setup lang="ts">
import { Transition } from 'vue'
import 'animate.css'

const limitTexLength = (text: string, length: number = 25): string => {
    const textIsNotNullAndEmpty: boolean = text !== null && text.length > 1
    if (textIsNotNullAndEmpty) {
        return text.slice(0, length) + '...'
    }

    return ''
}

const expandTableRow = (elementId: string): void => {
    const rowElement: Element | null = document.querySelector('#row-1')

    rowElement?.classList?.toggle('hidden')
}
</script>

<template>
    <section class="my-10 px-4 lg:hidden">
        <div>
            <div class="overflow-x-auto rounded-t-[10px]">
                <!-- header -->
                <div
                    class="flex items-center justify-between gap-5 bg-[#181E29] p-6 text-base font-bold text-[#C9CED6] backdrop-blur-lg"
                >
                    <div>Short Link</div>
                </div>
            </div>

            <!-- body -->
            <div class="mt-2 space-y-2">
                <div>
                    <div
                        @click.prevent="expandTableRow('row-1')"
                        class="flex cursor-pointer items-center justify-between gap-5 bg-[rgba(24,_30,_41,_0.22)] p-4 text-sm font-thin text-[#C9CED6] backdrop-blur-xl"
                    >
                        <div class="flex w-1/4 items-center gap-2">
                            <span
                                v-text="
                                    limitTexLength(
                                        'https://linkly.com/Bn41aCOlnxj',
                                    )
                                "
                                title="https://linkly.com/Bn41aCOlnxj"
                            ></span>

                            <span>
                                <svg
                                    width="35"
                                    height="35"
                                    viewBox="0 0 35 35"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <rect
                                        width="35"
                                        height="35"
                                        rx="17.5"
                                        fill="#1C283F"
                                        fill-opacity="0.69"
                                    />
                                    <path
                                        d="M23.125 21.625H17.5C16.4453 21.625 15.625 20.8047 15.625 19.75V12.25C15.625 11.2246 16.4453 10.375 17.5 10.375H21.6016C21.9531 10.375 22.334 10.5508 22.5977 10.8145L24.5605 12.7773C24.8242 13.041 25 13.4219 25 13.7734V19.75C25 20.8047 24.1504 21.625 23.125 21.625ZM11.875 14.125H14.6875V15.5312H11.875C11.6113 15.5312 11.4062 15.7656 11.4062 16V23.5C11.4062 23.7637 11.6113 23.9688 11.875 23.9688H17.5C17.7344 23.9688 17.9688 23.7637 17.9688 23.5V22.5625H19.375V23.5C19.375 24.5547 18.5254 25.375 17.5 25.375H11.875C10.8203 25.375 10 24.5547 10 23.5V16C10 14.9746 10.8203 14.125 11.875 14.125Z"
                                        fill="#C9CED6"
                                    /></svg
                            ></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg
                                width="35"
                                height="35"
                                viewBox="0 0 35 35"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <rect
                                    width="35"
                                    height="35"
                                    rx="17.5"
                                    fill="#1C283F"
                                    fill-opacity="0.69"
                                />
                                <path
                                    d="M17.8223 21.9766C17.6465 22.1523 17.3242 22.1523 17.1484 21.9766L11.5234 16.3516C11.3477 16.1758 11.3477 15.8535 11.5234 15.6777C11.6992 15.502 12.0215 15.502 12.1973 15.6777L17.5 20.9805L22.7734 15.6777C22.9492 15.502 23.2715 15.502 23.4473 15.6777C23.623 15.8535 23.623 16.1758 23.4473 16.3516L17.8223 21.9766Z"
                                    fill="#C9CED6"
                                />
                            </svg>
                        </div>
                    </div>

                    <div
                        id="row-1"
                        class="animate__animated animate__fadeIn space-y-4 bg-[rgba(24,_30,_41,_0.22)] px-4 text-[#C9CED6] backdrop-blur-xl"
                    >
                        <div>
                            <div class="flex items-center gap-2">
                                <span>
                                    <img
                                        src="/icons/twitter.png"
                                        alt="Twiter"
                                    />
                                </span>
                                <span
                                    class="w-5/6 overflow-hidden"
                                    v-text="
                                        limitTexLength(
                                            'https://www.twitter.com/tweets/8erelCoihu/',
                                            32,
                                        )
                                    "
                                >
                                </span>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center gap-2">
                                <div>
                                    <img src="/icons/twitter_qr.png" alt="" />
                                </div>
                                <div>October - 10 - 2023</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
