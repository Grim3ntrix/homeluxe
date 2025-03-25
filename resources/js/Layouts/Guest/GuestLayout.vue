<template>
     <GuestNavigation />
    <main class="">
        <slot />
    </main>
    <GuestFooter />
</template>

<script setup>
import GuestNavigation from '@/Components/Navigation/GuestNavigation.vue';
import GuestFooter from '@/Components/Footer/GuestFooter.vue'
</script>