<template>
    <div class="bg-lighter py-5">
        <div class="container">
            <h3 class="mb-4 text-lg">
                Latest Testimonial
            </h3>

            <div class="row">
                <div
                    v-for="testimonial in testimonials"
                    class="col-4 mb-4"
                >
                    <testimonial-card :testimonial="testimonial" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import TestimonialCard from "./TestimonialCard";
export default {
    name: "LatestTestimonials",
    components: {TestimonialCard},
    data() {
        return {
            testimonials: null,
        }
    },
    mounted() {
        this.loadTestimonials();
    },
    methods: {
        loadTestimonials() {
            axios.get(
                '/api/testimonials/latest?limit=3',
            ).then(response => {
                this.testimonials = response.data;
            }).catch(e => {
                console.error('Failed to load testimonials');
            });
        }
    }
}
</script>
