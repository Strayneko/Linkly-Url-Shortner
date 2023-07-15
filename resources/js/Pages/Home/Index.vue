<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import Navbar from '@/Components/Shared/Navbar.vue'
import ShortnerForm from '@/Components/Home/ShortnerForm.vue'
import SwirlImage from '@/Components/Home/SwirlImage.vue'
import HistoryTable from '@/Components/Home/HistoryTable.vue'
import FooterRegisterLink from '@/Components/Home/FooterRegisterLink.vue'
</script>

<template>
    <Head title="Free URL Shortener"></Head>
    <div
        class="relative bg-center bg-cover bg-no-repeat h-screen overflow-x-hidden"
    >
        <SwirlImage />
        <div class="relative z-1 h-[calc(100vh_-_16px)]">
            <Navbar />
            <ShortnerForm />
            <HistoryTable />
            <FooterRegisterLink />
        </div>
    </div>
</template>
