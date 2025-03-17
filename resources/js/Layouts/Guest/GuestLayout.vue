<template>
     <GuestNavigation />
    <main class="">
        <slot />
    </main>
    <GuestFooter />
</template>

<script setup>
import GuestNavigation from '@/Pages/Extras/Navigation/GuestNavigation.vue';
import GuestFooter from '@/Pages/Extras/Footer/GuestFooter.vue'
</script>