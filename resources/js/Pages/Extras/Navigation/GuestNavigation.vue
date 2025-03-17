<script setup>
import { ref } from 'vue';
import { Search, Menu, ShoppingCart, UserPlus, LogIn } from 'lucide-vue-next'; // Import icons

const isOpen = ref(false);
</script>

<template>
    <div class="flex items-center justify-between p-3 sticky top-0 gap-4 bg-[radial-gradient(circle,_#1d4ed8_30%,_#3b82f6_70%)]">
        <!-- Logo -->
        <div class="w-40 text-center">
            <a href="" class="font-spaceGrotesk font-bold text-2xl text-white">HomeLuxe</a>
        </div>

        <!-- Search Bar (Always Visible) -->
        <div class="hidden md:flex items-center w-full max-w-md border-2 border-gray-400 rounded-lg bg-white px-3 py-2">
            <input 
                type="text" 
                placeholder="Find the furniture you love..." 
                class="w-full outline-none text-gray-700 placeholder-gray-400 bg-transparent"
            />
            <button class="ml-2 px-4 py-1 bg-black text-white rounded-md hover:bg-gray-800 flex items-center">
                <Search class="w-5 h-5" />
            </button>
        </div>

        <!-- Hamburger Button (Mobile) -->
        <button @click="isOpen = !isOpen" class="md:hidden text-white text-2xl">
            <Menu class="w-7 h-7" />
        </button>

        <!-- Navigation Menu (Desktop) -->
        <div class="hidden md:flex space-x-5 px-4 py-2 text-white">
            <ul class="flex flex-row gap-5">
                <li>
                    <a href="#" class="flex items-center gap-2 text-md font-semibold hover:underline">
                        <ShoppingCart class="w-5 h-5" /> My Cart
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-2 text-md font-semibold hover:underline">
                        <UserPlus class="w-5 h-5" /> Sign Up
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-2 text-md font-semibold hover:underline">
                        <LogIn class="w-5 h-5" /> Login
                    </a>
                </li>
            </ul>
        </div>

        <!-- Mobile Navigation Menu (Hidden by Default) -->
        <div 
            v-if="isOpen" 
            class="absolute top-14 left-0 w-full bg-blue-600 text-white py-4 flex flex-col items-center space-y-4 md:hidden transition-all"
        >
            <!-- Search Bar (Mobile) -->
            <div class="w-[90%] flex items-center border-2 border-gray-400 rounded-lg bg-white px-3 py-2">
                <input 
                    type="text" 
                    placeholder="Find furniture..." 
                    class="w-full outline-none text-gray-700 placeholder-gray-400 bg-transparent"
                />
                <button class="ml-2 px-4 py-1 bg-black text-white rounded-md hover:bg-gray-800 flex items-center">
                    <Search class="w-5 h-5 mr-2" /> Search
                </button>
            </div>

            <a href="#" class="flex items-center gap-2 text-lg font-semibold hover:underline">
                <ShoppingCart class="w-5 h-5" /> My Cart
            </a>
            <a href="#" class="flex items-center gap-2 text-lg font-semibold hover:underline">
                <UserPlus class="w-5 h-5" /> Sign Up
            </a>
            <a href="#" class="flex items-center gap-2 text-lg font-semibold hover:underline">
                <LogIn class="w-5 h-5" /> Login
            </a>
        </div>
    </div>
</template>
