<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                List Carousel
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="
                        bg-white
                        overflow-hidden
                        shadow-xl
                        sm:rounded-lg
                        py-4
                    "
                >
                    <!-- <welcome /> -->
                    <div class="flex flex-col justify-center items-center">
                        <!-- <div class="p-4 border m-2 rounded">
                            <h1 class="text-4xl text-center">LIST CAROUSEL</h1>
                        </div> -->

                        <form @submit.prevent="store" class="p-4">
                            <label class="block mb-2">
                                <span class="block text-center">Title</span>
                                <input
                                    type="text"
                                    class="w-full"
                                    v-model="form.title"
                                    placeholder="Input title..."
                                />
                            </label>

                            <label class="block mb-2">
                                <span>Content</span>
                                <input
                                    type="text"
                                    class="w-full"
                                    v-model="form.content"
                                    placeholder="Input content..."
                                />
                            </label>

                            <label class="block mb-2">
                                <span>URL</span>
                                <input
                                    type="text"
                                    class="w-full"
                                    v-model="form.url"
                                    placeholder="Input url..."
                                />
                            </label>

                            <!-- TO DO INPUT TYPE FILE -->
                            <label class="block mb-2">
                                <span>Image</span>
                                <input
                                    type="text"
                                    class="w-full"
                                    v-model="form.image"
                                    placeholder="Input image path..."
                                />
                            </label>

                            <div class="flex justify-center items-center">
                                <button
                                    type="submit"
                                    class="
                                        bg-purple-400
                                        hover:bg-purple-500
                                        text-white
                                        py-4
                                        px-2
                                    "
                                >
                                    Create
                                </button>
                            </div>
                        </form>

                        <ul class="px-4">
                            <li
                                v-for="carousel in carousels"
                                :key="carousel.id"
                            >
                                <div class="mb-2">
                                    <p class="font-bold">
                                        - {{ carousel.title }}
                                    </p>
                                    <p>
                                        {{ carousel.content }}
                                    </p>
                                    <p>
                                        {{ carousel.url }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    components: {
        AppLayout,
    },

    data() {
        return {
            form: this.$inertia.form({
                title: null,
                content: null,
                url: null,
                image: null,
            }),
        };
    },

    props: {
        carousels: Array,
    },

    methods: {
        store() {
            this.form.post(this.route("webcarousels.store"), {
                onSuccess: () => {
                    alert("Carousel Added.");
                    this.form.reset();
                },
            });
        },
    },
};
</script>
