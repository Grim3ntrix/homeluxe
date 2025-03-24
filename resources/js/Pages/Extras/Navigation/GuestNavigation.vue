<script setup>
import { ref } from 'vue';
import { LogIn, UserPlus, LogOut, Menu, X } from 'lucide-vue-next'; // Import logout icon
import { Link, usePage } from '@inertiajs/vue3';

const isOpen = ref(false);
const { props } = usePage();
const isAuthenticated = props.auth?.user;
</script>

<template>
    <div class="flex items-center justify-between p-3 sticky top-0 gap-4 bg-[radial-gradient(circle,_#1d4ed8_30%,_#3b82f6_70%)]">
        <!-- Logo -->
        <div class="w-40 text-center">
            <Link href="/" class="font-spaceGrotesk font-bold text-2xl text-white">HomeLuxe</Link>
        </div>

        <!-- Hamburger Button (Mobile) -->
        <button @click="isOpen = !isOpen" class="md:hidden text-white text-2xl">
            <Menu v-if="!isOpen" class="w-6 h-6" />
            <X v-if="isOpen" class="w-6 h-6" />
        </button>

        <!-- Navigation Menu (Desktop) -->
        <div class="hidden md:flex space-x-5 px-4 py-2 text-white">
            <ul class="flex flex-row gap-5">
                <li v-if="!isAuthenticated">
                    <Link href="/register" class="flex items-center gap-2 text-md font-semibold hover:underline">
                        <UserPlus class="w-5 h-5" /> Sign Up
                    </Link>
                </li>
                <li v-if="!isAuthenticated">
                    <Link href="/login" class="flex items-center gap-2 text-md font-semibold hover:underline">
                        <LogIn class="w-5 h-5" /> Login
                    </Link>
                </li>
                <li v-if="isAuthenticated">
                    <Link method="post" href="/logout" as="button" class="flex items-center gap-2 text-md font-semibold hover:underline">
                        <LogOut class="w-5 h-5" /> Logout
                    </Link>
                </li>
            </ul>
        </div>

        <!-- Mobile Navigation Menu (Hidden by Default) -->
        <div v-if="isOpen" class="absolute top-14 left-0 w-full bg-blue-600 text-white py-4 flex flex-col items-center space-y-4 md:hidden transition-all">
            <Link v-if="!isAuthenticated" href="/register" class="flex items-center gap-2 text-lg font-semibold hover:underline">
                <UserPlus class="w-5 h-5" /> Sign Up
            </Link>
            <Link v-if="!isAuthenticated" href="/login" class="flex items-center gap-2 text-lg font-semibold hover:underline">
                <LogIn class="w-5 h-5" /> Login
            </Link>
            <Link v-if="isAuthenticated" method="post" href="/logout" as="button" class="flex items-center gap-2 text-lg font-semibold hover:underline">
                <LogOut class="w-5 h-5" /> Logout
            </Link>
        </div>
    </div>
</template>
