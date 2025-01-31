<template>
  <div>
    <!-- Button to open modal -->
    <button @click="openModal" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">
      Write a review
    </button>

    <!-- Modal -->
    <div v-if="isModalOpen" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
      <div class="bg-white p-6 rounded-lg w-96 shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Submit Your Review</h2>

        <form @submit.prevent="submitReview">
          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" v-model="review.name"
              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
            <p v-if="errors.name" class="text-red-500 text-sm">{{ errors.name }}</p>
          </div>

          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" v-model="review.email"
              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" />
            <p v-if="errors.email" class="text-red-500 text-sm">{{ errors.email }}</p>
          </div>

          <div class="mb-4">
            <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
            <div class="flex items-center space-x-1">
              <template v-for="star in 5" :key="star">
                <svg :class="{ 'text-yellow-500': review.rating >= star, 'text-gray-300': review.rating < star }"
                  @click="review.rating = star" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="currentColor" class="cursor-pointer">
                  <path d="M12 17.27L18.18 21 16.54 13.97 22 9.24 14.81 8.63 12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21z">
                  </path>
                </svg>
              </template>
            </div>
            <p v-if="errors.rating" class="text-red-500 text-sm">{{ errors.rating }}</p>
          </div>

          <div class="mb-4">
            <label for="review" class="block text-sm font-medium text-gray-700">Review</label>
            <textarea id="review" v-model="review.review"
              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" rows="4"></textarea>
            <p v-if="errors.review" class="text-red-500 text-sm">{{ errors.review }}</p>
          </div>

          <div class="flex justify-between mt-6">
            <button type="button" @click="closeModal" class="px-4 py-2 bg-gray-300 rounded-md">Cancel</button>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      isModalOpen: false,
      review: {
        name: "",
        email: "",
        rating: 5,
        review: "",
      },
      errors: {},
    };
  },

  methods: {
    openModal() {
      this.isModalOpen = true;
      this.$nextTick(() => {
        const modal = document.querySelector('.fixed.inset-0');
        if (!modal) {
          console.warn("Modal element not found!");
        }
      });
    },

    closeModal() {
      this.isModalOpen = false;
    },

    async submitReview() {
      this.errors = {}; // Reset errors

      // Frontend validation
      if (!this.review.name || this.review.name.length < 3) {
        this.errors.name = "Name must be at least 3 characters.";
      }
      if (!this.review.email || !this.review.email.includes("@")) {
        this.errors.email = "Please enter a valid email address.";
      }
      if (!this.review.rating || this.review.rating < 1 || this.review.rating > 5) {
        this.errors.rating = "Rating must be between 1 and 5.";
      }
      if (!this.review.review || this.review.review.length < 10) {
        this.errors.review = "Review must be at least 10 characters.";
      }

      // Stop submission if there are errors
      if (Object.keys(this.errors).length > 0) {
        return;
      }

      try {
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute("content");

        const response = await axios.post("http://localhost/Project-10/public/about-us/store", this.review, {
          headers: { "X-CSRF-TOKEN": csrfToken },
        });

        console.log("Review submitted:", response.data);

        this.review = { name: "", email: "", rating: 5, review: "" };
        this.closeModal();

        setTimeout(() => window.location.reload(), 500);
      } catch (error) {
        if (error.response && error.response.data.errors) {
          this.errors = error.response.data.errors;
        } else {
          console.error("Error submitting review:", error);
        }
      }
    },
  },
};
</script>
