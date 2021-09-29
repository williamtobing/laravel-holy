<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- <welcome /> -->
                    <div class="flex flex-col justify-center items-center h-96">
                        <div
                            class="
                                p-4
                                border
                                w-56
                                m-2
                                rounded
                                hover:border-purple-400
                                cursor-pointer
                            "
                        >
                            <Link :href="route('toCarouselPage')">
                                <h1 class="text-4xl text-center">Carousel</h1>
                            </Link>
                        </div>

                        <div
                            class="
                                p-4
                                border
                                w-56
                                m-2
                                rounded
                                hover:border-purple-400
                                cursor-pointer
                            "
                        >
                            <h1 class="text-4xl text-center">Song Chart</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AppLayout,
        Welcome,
        Link,
    },
};
</script>
