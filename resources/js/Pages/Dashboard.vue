<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Users, Star, Store, TrendingUp } from 'lucide-vue-next';
</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Dashboard</h2>
        </template>

        <div class="px-4">
            <!-- Social Metrics Section -->
            <div class="bg-white p-4 rounded-lg shadow-lg mt-4">
                <div class="flex space-x-3">
                    <TrendingUp class="w-7 h-7" />
                    <h3 class="text-lg font-semibold text-gray-700 pb-2">Social Metrics</h3>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-4">
                    <!-- Followers Card -->
                    <div class="border-l-4 border-t-4 border-violet-500 bg-white rounded-lg shadow-md overflow-hidden p-6 text-center h-36 flex flex-col justify-center transition-all hover:shadow-lg">
                        <div class="flex items-center justify-center space-x-3">
                            <Users class="w-8 h-8 text-violet-500" />
                            <h3 class="text-lg font-semibold text-gray-700">Followers</h3>
                        </div>
                        <p class="text-2xl font-bold text-gray-900 mt-2">12,345</p>
                        <p class="text-sm text-gray-500">Total followers</p>
                    </div>

                    <!-- Reputation Card -->
                    <div class="border-l-4 border-t-4 border-green-500 bg-white rounded-lg shadow-md overflow-hidden p-6 text-center h-36 flex flex-col justify-center transition-all hover:shadow-lg">
                        <div class="flex items-center justify-center space-x-3">
                            <Star class="w-8 h-8 text-green-500" />
                            <h3 class="text-lg font-semibold text-gray-700">Reputation</h3>
                        </div>
                        <p class="text-2xl font-bold text-gray-900 mt-2">4.9/5</p>
                        <p class="text-sm text-gray-500">Based on user ratings</p>
                    </div>

                    <!-- Shop Rank Card -->
                    <div class="border-l-4 border-t-4 border-orange-500 bg-white rounded-lg shadow-md overflow-hidden p-6 text-center h-36 flex flex-col justify-center transition-all hover:shadow-lg mb-4">
                        <div class="flex items-center justify-center space-x-3">
                            <Store class="w-8 h-8 text-orange-500" />
                            <h3 class="text-lg font-semibold text-gray-700">Shop Rank</h3>
                        </div>
                        <p class="text-2xl font-bold text-gray-900 mt-2">#1</p>
                        <p class="text-sm text-gray-500">Top seller this month</p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

