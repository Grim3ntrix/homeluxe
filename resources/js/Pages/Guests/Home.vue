<template>
    <GuestLayout>
        <div class="flex flex-col items-center p-2 min-h-screen bg-gray-100">
            <div class="bg-white border-b-4 border-blue-500 shadow-md mt-3 w-full text-center p-5">
                <p class="text-lg text-blue-500 font-spaceGrotesk">DAILY DISCOVER</p>
            </div>
            <div class="w-full h-full m-5 p-8">
                <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
                    <div v-for="product in products" :key="product.id">
                        <div class="bg-white border border-slate-300 shadow-sm flex flex-col items-center h-80">
                            <div class="w-full aspect-square overflow-hidden">
                                <img :src="product.image" alt="Product Image" class="w-full h-full object-cover">
                            </div>
                            <div class="w-full p-2 h-20">
                                <h3 class="text-sm mt-1 line-clamp-2">{{ product.name }}</h3>
                            </div>
                            <div class="flex justify-between w-full p-2">
                                <p class="text-rose-500 text-md font-bold">₱{{ product.price }}</p>
                                <p class="text-black text-xs">Sold: {{ product.sold }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from '@/Layouts/Guest/GuestLayout.vue';

const products = [
    { id: 1, name: "HOT 50 PRO smartphone 8+256gb dual sim card with excellent features", price: 100, image: "https://placehold.co/150", sold: "500" },
    { id: 2, name: "Product 2 with a longer name to test text wrapping", price: 200, image: "https://placehold.co/150", sold: "500" },
    { id: 3, name: "Another product with a name that might take up two lines", price: 300, image: "https://placehold.co/150", sold: "500" },
    { id: 4, name: "Product 4", price: 400, image: "https://placehold.co/150", sold: "500" },
    { id: 5, name: "Product 5", price: 500, image: "https://placehold.co/150", sold: "500" },
    { id: 6, name: "A phone with a super long name that needs truncation", price: 600, image: "https://placehold.co/150", sold: "500" },
];
</script>
