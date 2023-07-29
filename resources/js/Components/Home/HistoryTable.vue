<script setup lang="ts"></script>

<template>
    <section class="mt-10 hidden px-40 lg:block">
        <!-- table -->
        <div class="overflow-x-auto rounded-t-[10px]">
            <!-- header -->
            <div
                class="flex items-center justify-between gap-5 bg-[#181E29] p-6 text-base font-bold text-[#C9CED6] backdrop-blur-lg"
            >
                <div class="w-1/4">Short Link</div>
                <div class="w-1/3">Original Link</div>
                <div class="w-[10%]">QR Code</div>
                <div class="w-[10%]">Clicks</div>
                <div class="w-[14%]">Status</div>
                <div class="w-[14%]">Date</div>
            </div>
        </div>

        <!-- body -->
        <div class="mt-2 space-y-2">
            <div
                class="flex items-center justify-between gap-5 bg-[rgba(24,_30,_41,_0.22)] p-6 text-sm font-thin text-[#C9CED6] backdrop-blur-xl"
            >
                <div class="flex w-1/4 items-center gap-2">
                    <span>https://linkly.com/Bn41aCOlnxj</span>

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
                <div class="flex w-1/3 items-center gap-2">
                    <span>
                        <img src="/icons/twitter.png" alt="Twiter" />
                    </span>
                    <span> https://www.twitter.com/tweets/8erelCoihu/ </span>
                </div>
                <div class="w-[10%] pl-4">
                    <img src="/icons/twitter_qr.png" alt="Qr" />
                </div>
                <div class="w-[10%]">1313</div>
                <div class="flex w-[14%] items-center gap-3">
                    <span class="text-[#1EB036]"> Active</span>

                    <span>
                        <svg
                            width="36"
                            height="35"
                            viewBox="0 0 36 35"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect
                                x="0.25"
                                width="35"
                                height="35"
                                rx="17.5"
                                fill="#1EB036"
                                fill-opacity="0.14"
                            />
                            <path
                                d="M25.6895 17.875L22.0273 21.5371C20.5625 23.002 18.1895 23.002 16.7539 21.5371C15.3477 20.1309 15.2598 17.9043 16.5488 16.4395L16.7246 16.2637C16.8711 16.0586 17.1934 16.0293 17.3691 16.2051C17.5742 16.3809 17.6035 16.6738 17.4277 16.8789L17.2812 17.0547C16.3145 18.168 16.373 19.8379 17.3984 20.8633C18.5117 21.9766 20.2695 21.9766 21.3828 20.8633L25.0156 17.2305C26.1289 16.1172 26.1289 14.3594 25.0156 13.2461C23.9316 12.1621 22.1445 12.1621 21.0605 13.2461L20.3867 13.9199C20.2109 14.0957 19.918 14.0957 19.7129 13.9199C19.5371 13.7148 19.5371 13.4219 19.7129 13.2461L20.3867 12.5723C21.8516 11.1074 24.2246 11.1074 25.6895 12.5723C27.1543 14.0371 27.1543 16.4102 25.6895 17.875ZM9.78125 17.875L13.4434 14.2422C14.9082 12.7773 17.252 12.7773 18.7461 14.2422C20.123 15.6191 20.2109 17.8457 18.9219 19.3398L18.7461 19.5156C18.5996 19.7207 18.3066 19.75 18.1016 19.5742C17.8965 19.3984 17.8672 19.1055 18.043 18.9004L18.2188 18.7246C19.1562 17.6113 19.0977 15.9414 18.0723 14.916C16.959 13.8027 15.2012 13.8027 14.0879 14.916L10.4551 18.5488C9.3418 19.6621 9.3418 21.4199 10.4551 22.5332C11.5391 23.6172 13.3262 23.6172 14.4102 22.5332L15.084 21.8594C15.2598 21.6836 15.5527 21.6836 15.7578 21.8594C15.9336 22.0352 15.9336 22.3574 15.7578 22.5332L15.084 23.1777C13.6191 24.6426 11.2461 24.6426 9.78125 23.1777C8.31641 21.7129 8.31641 19.3398 9.78125 17.875Z"
                                fill="#C9CED6"
                            />
                        </svg>
                    </span>
                </div>
                <div class="w-[14%]">Oct - 10 -2023</div>
            </div>
        </div>
    </section>
</template>
