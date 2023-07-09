<script setup lang="ts">
import Navbar from '@/Components/Shared/Navbar.vue'
import ShortnerForm from '@/Components/Home/ShortnerForm.vue'
import SwirlImage from '@/Components/Home/SwirlImage.vue'
</script>

<template>
    <div
        class="relative bg-center bg-cover bg-no-repeat h-screen overflow-x-hidden"
    >
        <SwirlImage />
        <div class="relative z-1">
            <Navbar />
            <ShortnerForm />
        </div>
    </div>
</template>
