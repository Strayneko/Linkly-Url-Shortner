<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import Navbar from '@/Components/Shared/Navbar.vue'
import ShortnerForm from '@/Components/Home/ShortnerForm.vue'
import SwirlImage from '@/Components/Home/SwirlImage.vue'
import HistoryTable from '@/Components/Home/HistoryTable.vue'
import HistoryMobileTable from '@/Components/Home/HistoryMobileTable.vue'
import FooterRegisterLink from '@/Components/Home/FooterRegisterLink.vue'
import Box from '@/Components/Macro/Box.vue'
</script>

<template>
    <Head title="Free URL Shortener"></Head>
    <div
        class="relative min-h-screen bg-cover bg-center bg-no-repeat lg:h-screen lg:overflow-hidden"
    >
        <SwirlImage />

        <div class="z-1 relative min-h-screen lg:h-screen">
            <Box />
            <div class="z-10 relative">
                <Navbar />
                <ShortnerForm />
                <HistoryTable />
                <HistoryMobileTable />
                <FooterRegisterLink />
            </div>
        </div>
    </div>
</template>
