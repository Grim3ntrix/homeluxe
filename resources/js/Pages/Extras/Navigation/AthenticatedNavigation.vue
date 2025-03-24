<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { LogIn, UserPlus, LogOut, Menu, X, User, LayoutDashboard } from 'lucide-vue-next';
import { Link, usePage } from '@inertiajs/vue3';

const isOpen = ref(false);
const isProfileOpen = ref(false);
const profileDropdownRef = ref(null);
const { props } = usePage();
const isAuthenticated = props.auth?.user;

// Close profile dropdown when clicking outside
const handleClickOutside = (event) => {
    if (profileDropdownRef.value && !profileDropdownRef.value.contains(event.target)) {
        isProfileOpen.value = false;
    }
};

// Attach event listener when mounted
onMounted(() => {
    document.addEventListener("click", handleClickOutside);
});

// Cleanup event listener when unmounted
onUnmounted(() => {
    document.removeEventListener("click", handleClickOutside);
});
</script>

<template>
    <nav class="flex items-center justify-between p-3 sticky top-0 gap-4 bg-[radial-gradient(circle,_#1d4ed8_30%,_#3b82f6_70%)]">
        <!-- Left Side: Logo + Dashboard -->
        <div class="flex items-center space-x-6">
            <Link href="/" class="font-spaceGrotesk font-bold text-2xl text-white">HomeLuxe</Link>
            
            <Link 
                :href="route('dashboard')" 
                class="flex items-center gap-2 text-md font-semibold text-white hover:underline hidden md:flex"
                :class="{ 'underline': route().current('dashboard') }"
            >
                <LayoutDashboard class="w-5 h-5" />
                Dashboard
            </Link>
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

                <!-- Profile Dropdown for Authenticated Users -->
                <li v-if="isAuthenticated" class="relative" ref="profileDropdownRef">
                    <button @click.stop="isProfileOpen = !isProfileOpen" class="flex items-center gap-2 text-md font-semibold hover:underline">
                        <User class="w-5 h-5" />
                        {{ props.auth.user.name }}
                    </button>

                    <!-- Dropdown Menu -->
                    <div v-if="isProfileOpen" class="absolute right-0 mt-2 w-40 bg-white text-black rounded-md shadow-lg py-2">
                        <Link href="/profile" class="block px-4 py-2 text-md hover:bg-gray-200">Profile</Link>
                        <Link :href="route('logout')" method="post" as="button" class="block w-full text-left px-4 py-2 text-md hover:bg-gray-200">Logout</Link>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Mobile Navigation Menu -->
        <div v-if="isOpen" class="absolute top-14 left-0 w-full bg-blue-600 text-white py-4 flex flex-col items-center space-y-4 md:hidden transition-all">
            <Link 
                :href="route('dashboard')" 
                class="flex items-center gap-2 text-lg font-semibold hover:underline"
                :class="{ 'underline': route().current('dashboard') }"
            >
                <LayoutDashboard class="w-5 h-5" /> Dashboard
            </Link>

            <Link v-if="!isAuthenticated" href="/register" class="flex items-center gap-2 text-lg font-semibold hover:underline">
                <UserPlus class="w-5 h-5" /> Sign Up
            </Link>
            <Link v-if="!isAuthenticated" href="/login" class="flex items-center gap-2 text-lg font-semibold hover:underline">
                <LogIn class="w-5 h-5" /> Login
            </Link>

            <!-- Profile (Mobile) -->
            <template v-if="isAuthenticated">
                <button @click.stop="isProfileOpen = !isProfileOpen" class="flex items-center gap-2 text-lg font-semibold hover:underline">
                    <User class="w-5 h-5" />
                    {{ props.auth.user.name }}
                </button>

                <div v-if="isProfileOpen" class="flex flex-col items-center space-y-2 mt-2">
                    <Link href="/profile" class="block px-4 py-2 text-lg hover:underline">Profile</Link>
                    <Link method="post" href="/logout" as="button" class="block px-4 py-2 text-lg hover:underline">Logout</Link>
                </div>
            </template>
        </div>
    </nav>
</template>
