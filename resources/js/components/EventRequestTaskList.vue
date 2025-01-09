<template>
  <div class="max-w-4xl mx-auto p-6 bg-gray-100">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-bold">Event Requests</h1>
    </div>

    <!-- Event Request List -->
    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
      <div
        v-for="event in eventRequests"
        :key="event.id"
        class="bg-white p-4 rounded shadow"
      >
        <h2 class="text-lg font-semibold mb-3">{{ event.name }}</h2>
        <div class="space-y-4">
          <p><strong>Email:</strong> {{ event.email }}</p>
          <p><strong>Phone:</strong> {{ event.phone }}</p>
          <p><strong>Details:</strong> {{ event.details }}</p>
          <p><strong>Date:</strong> {{ event.date }}</p>
          <p><strong>Location:</strong> {{ event.location }}</p>
          <div class="flex justify-end mt-4">
            <button
              @click="deleteEvent(event.id)"
              class="text-red-500 hover:text-red-700"
            >
              Delete Event
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      eventRequests: [], // To hold the fetched event requests
    };
  },

  mounted() {
    this.fetchEvents();
  },

  methods: {
    // Fetch event requests from the API
    fetchEvents() {
      axios
        .get("/api/event-requests")
        .then((response) => {
          console.log(response.data); // Log the fetched data to check
          if (Array.isArray(response.data)) {
            this.eventRequests = response.data;
          } else {
            console.error("Invalid data format:", response.data);
            this.eventRequests = [];
          }
        })
        .catch((error) => {
          console.error("Error fetching events:", error);
          this.eventRequests = [];
        });
    },

    // Delete an event request
    deleteEvent(eventId) {
      if (confirm("Are you sure you want to delete this event request?")) {
        axios
          .delete(`/api/event-requests/${eventId}`)
          .then(() => {
            this.eventRequests = this.eventRequests.filter(
              (event) => event.id !== eventId
            );
          })
          .catch((error) => console.error("Error deleting event:", error));
      }
    },
  },
};
</script>
