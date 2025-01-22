<template>
  <div class="grid grid-cols-1 gap-6 bg-gray-50">
    <!-- Success Message (Appears on top of the page) -->


    <div v-if="successMessage"
      class="flex items-center p-4 mx-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="currentColor" viewBox="0 0 20 20">
        <path
          d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">Success alert!</span>
        <div class="alert alert-success">{{ successMessage }}</div>
      </div>
    </div>
  </div>


  <!-- Containers for each section -->
  <div v-for="status in statuses" :key="status" class="flex-1 p-4 bg-gray-50" @dragover.prevent="handleDragOver"
    @drop="handleDrop(status)">
    <h1 @click="toggleFold(status)"
      class="text-2xl font-semibold border-b border-gray-300 pb-2 mb-6 cursor-pointer flex items-center">
      <span class="mr-2">
        <!-- Conditional icon rendering -->
        <svg v-if="!foldedStatuses[status]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke-width="2" stroke="currentColor" class="w-6 h-6 inline">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
        <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
          stroke="currentColor" class="w-6 h-6 inline">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </span>
      {{ status }}
    </h1>

    <div v-if="!foldedStatuses[status]" class="space-y-6">
      <div v-for="(element, index) in eventRequests[status]" :key="element.id"
        class="bg-gray-200 p-6 shadow-md hover:shadow-xl transition-all duration-300 ease-in-out transform"
        draggable="true" @dragstart="handleDragStart(status, index)">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 truncate">{{ element.name }}</h2>
        <div class="text-gray-900">
          <p><strong class="text-gray-900">Email:</strong> {{ element.email }}</p>
          <p><strong class="text-gray-900">Phone:</strong> {{ element.phone }}</p>
          <p style="word-wrap: break-word; white-space: pre-wrap;" class="text-gray-900">
            <strong>Details:</strong> {{ element.details }}
          </p>
          <p><strong class="text-gray-900">Date:</strong> {{ element.date }}</p>
          <p><strong class="text-gray-900">Location:</strong> {{ element.location }}</p>
        </div>
        <div class="flex justify-end">
          <button @click="deleteEvent(element.id)"
            class="bg-red-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-600 transition duration-200 ease-in-out">
            Delete Event
          </button>
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
      foldedStatuses: {
        "To-Do": false,
        "In Progress": false,
        Done: false,
      },
      successMessage: "", // This will store the success message
    };
  },
  methods: {
    async fetchEvents() {
      try {
        const response = await axios.post("http://localhost/Project-10/public/api/event-requests");
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
        // Delete the event from the backend
        await axios.delete(`http://localhost/Project-10/public/api/event-requests/${id}`);

        // Remove the event from the local state
        for (let status in this.eventRequests) {
          this.eventRequests[status] = this.eventRequests[status].filter(
            (event) => event.id !== id
          );
        }

        // Set the success message
        this.successMessage = "Event deleted successfully!";

        // Clear the success message after 3 seconds
        

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

      this.eventRequests[this.draggedStatus] = this.eventRequests[this.draggedStatus].filter((item) => item !== this.draggedItem);
      this.eventRequests[newStatus].push(this.draggedItem);

      this.updateEventStatus(this.draggedItem.id, newStatus);

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

    toggleFold(status) {
      this.foldedStatuses[status] = !this.foldedStatuses[status];
    },

    handleDragOver(event) {
      const scrollMargin = 10;
      const scrollSpeed = 200;

      if (event.clientY < scrollMargin) {
        window.scrollBy(0, -scrollSpeed);
      } else if (window.innerHeight - event.clientY < scrollMargin) {
        window.scrollBy(0, scrollSpeed);
      }
    },
  },

  created() {
    this.fetchEvents();
  },
};
</script>
