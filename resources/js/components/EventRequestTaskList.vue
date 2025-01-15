<template>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6 bg-gray-50">
    <!-- Containers for each section -->
    <div
      v-for="status in statuses"
      :key="status"
      class="flex-1 bg-white shadow-lg rounded-lg p-4"
      @dragover.prevent
      @drop="handleDrop(status)"
    >
      <h3 class="font-bold text-xl text-center mb-6 text-indigo-600">{{ status }}</h3>
      <div class="space-y-6">
        <div
          v-for="(element, index) in eventRequests[status]"
          :key="element.id"
          class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 ease-in-out transform hover:scale-105"
          draggable="true"
          @dragstart="handleDragStart(status, index)"
        >
          <h2 class="text-2xl font-semibold text-gray-800 mb-4 truncate">{{ element.name }}</h2>
          <div class="space-y-3 text-gray-600">
            <p><strong class="text-gray-900">Email:</strong> {{ element.email }}</p>
            <p><strong class="text-gray-900">Phone:</strong> {{ element.phone }}</p>
            <p><strong class="text-gray-900">Details:</strong> {{ element.details }}</p>
            <p><strong class="text-gray-900">Date:</strong> {{ element.date }}</p>
            <p><strong class="text-gray-900">Location:</strong> {{ element.location }}</p>
          </div>
          <div class="flex justify-end mt-6">
            <button
              @click="deleteEvent(element.id)"
              class="bg-red-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-600 transition duration-200 ease-in-out"
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
      statuses: ["To-Do", "In Progress", "Done"],
      eventRequests: {
        "To-Do": [],
        "In Progress": [],
        Done: [],
      },
      draggedItem: null,
      draggedStatus: null,
    };
  },
  methods: {
    async fetchEvents() {
      try {
        const response = await axios.post("http://localhost/Project-10/public/api/event-requests");
        // The fetched events are stored in the eventRequests object.
        const events = response.data;
        this.eventRequests = {
          "To-Do": events.filter((e) => e.status === "To-Do"),
          "In Progress": events.filter((e) => e.status === "In Progress"),
          Done: events.filter((e) => e.status === "Done"),
        };
      } catch (error) {
        console.error("Error fetching events:", error);
      }
    },
    async deleteEvent(id) {
      try {
        await axios.delete(`http://localhost/Project-10/public/api/event-requests/${id}`);
        for (let status in this.eventRequests) {
          this.eventRequests[status] = this.eventRequests[status].filter(
            (event) => event.id !== id
          );
        }
      } catch (error) {
        console.error("Error deleting event:", error);
      }
    },
    handleDragStart(status, index) {
      this.draggedItem = this.eventRequests[status][index];
      this.draggedStatus = status;
    },
    handleDrop(newStatus) {
      if (!this.draggedItem || this.draggedStatus === null) return;

      // Remove dragged item from the old status
      this.eventRequests[this.draggedStatus] = this.eventRequests[
        this.draggedStatus
      ].filter((item) => item !== this.draggedItem);

      // Add the dragged item to the new status
      this.eventRequests[newStatus].push(this.draggedItem);

      // Optionally, update the backend with the new status
      this.updateEventStatus(this.draggedItem.id, newStatus);

      // Reset dragged item
      this.draggedItem = null;
      this.draggedStatus = null;
    },

    async updateEventStatus(id, newStatus) {
      try {
        await axios.patch(`http://localhost/Project-10/public/api/event-requests/${id}`, { status: newStatus });
      } catch (error) {
        console.error("Error updating event status:", error);
      }
    },
  },
  created() {
    this.fetchEvents();
  },
};
</script>

<style scoped>
/* Add additional styles if needed */
</style>
