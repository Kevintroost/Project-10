<template>
  <div>
    <!-- Button to open modal -->
    <button
      @click="openModal"
      class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600"
    >
      Write a Review
    </button>

    <!-- Modal -->
    <div
      v-if="isModalOpen"
      class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50"
    >
      <div class="bg-white p-6 rounded-lg w-96 shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">
          Submit Your Review
        </h2>

        <form @submit.prevent="submitReview">
          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700"
              >Name</label
            >
            <input
              type="text"
              id="name"
              v-model="review.name"
              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
              required
            />
          </div>

          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700"
              >Email</label
            >
            <input
              type="email"
              id="email"
              v-model="review.email"
              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
              required
            />
          </div>

          <div class="mb-4">
            <label for="rating" class="block text-sm font-medium text-gray-700"
              >Rating</label
            >
            <div class="flex items-center space-x-1">
              <template v-for="star in 5" :key="star">
                <!-- Filled Star (Yellow) when the rating is greater than or equal to the current star -->
                <svg
                  :class="{
                    'text-yellow-500': review.rating >= star,
                    'text-gray-300': review.rating < star,
                  }"
                  @click="review.rating = star"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="cursor-pointer"
                >
                  <path
                    v-if="review.rating >= star"
                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"
                  ></path>
                  <path
                    v-else
                    d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </template>
            </div>
          </div>

          <div class="mb-4">
            <label for="review" class="block text-sm font-medium text-gray-700"
              >Review</label
            >
            <textarea
              id="review"
              v-model="review.review"
              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
              rows="4"
              required
            ></textarea>
          </div>

          <div class="flex justify-between mt-6">
            <button
              type="button"
              @click="closeModal"
              class="px-4 py-2 bg-gray-300 text-black rounded-md shadow-sm hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              Cancel
            </button>
            <button
              type="submit"
              class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
              Submit
            </button>
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
    };
  },

  methods: {
    openModal() {
      this.isModalOpen = true;
    },

    closeModal() {
      this.isModalOpen = false;
    },

    async submitReview() {
      // Form data
      const reviewData = {
        name: this.review.name,
        email: this.review.email,
        rating: this.review.rating,
        review: this.review.review,
      };

      console.log("Data being sent to the backend:", reviewData);

      try {
        // Send POST request to the backend API
        const response = await axios.post(
          "http://localhost/Project-10/public/about-us/store",
          reviewData
        );

        // Simulate successful review submission (handle response)
        console.log("Review submitted:", response.data);

        // Reset the form
        this.review.name = "";
        this.review.email = "";
        this.review.rating = 5;
        this.review.review = "";

        // Close the modal after submission
        this.closeModal();
      } catch (error) {
        console.error("Error submitting review:", error);
        // Handle error (optional)
      }
    },
  },
};
</script>

  
  <style scoped>
/* Add any necessary styles here */
</style>
  