<template>
    <div class="p-4 bg-gray-100 min-h-screen">
      <!-- Draggable Task List Container -->
      <div
        class="space-y-4"
        @dragover.prevent
        @drop="handleDrop"
      >
        <div
          v-for="(task, index) in tasks"
          :key="task.id"
          class="flex flex-col bg-white shadow-md p-4 rounded-md"
          draggable="true"
          @dragstart="handleDragStart(index)"
          @dragend="handleDragEnd"
        >
          <!-- Task Header -->
          <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">{{ task.title }}</h3>
            <!-- Options Menu -->
            <div class="relative">
              <button
                @click="toggleMenu(index)"
                class="text-gray-600 hover:text-gray-800 focus:outline-none"
              >
                &#x2026;
              </button>
              <div
                v-if="menuVisible === index"
                class="absolute right-0 mt-2 w-32 bg-white shadow-lg rounded-md"
              >
                <button
                  @click="editTask(task)"
                  class="w-full px-4 py-2 text-left text-sm hover:bg-gray-100"
                >
                  Edit
                </button>
                <button
                  @click="deleteTask(task.id)"
                  class="w-full px-4 py-2 text-left text-sm text-red-500 hover:bg-red-100"
                >
                  Delete
                </button>
              </div>
            </div>
          </div>
  
          <!-- Checkboxes -->
          <div class="mt-2 space-y-2">
            <div
              v-for="(checkbox, cIndex) in task.checkboxes"
              :key="cIndex"
              class="flex items-center"
            >
              <input
                type="checkbox"
                v-model="checkbox.checked"
                class="mr-2"
              />
              <span>{{ checkbox.text }}</span>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Add New Task Button -->
      <button
        @click="showAddTaskModal"
        class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600"
      >
        Add Task
      </button>
  
      <!-- Modal for Adding/Editing Task -->
      <div v-if="editingTask" class="fixed inset-0 bg-gray-700 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-md shadow-md">
          <h2 class="text-lg font-bold mb-4">{{ editingTask.id ? "Edit Task" : "Add Task" }}</h2>
          <input
            v-model="editingTask.title"
            type="text"
            placeholder="Task Title"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"
          />
          <h3 class="font-semibold mb-2">Task Checkboxes</h3>
          <div class="space-y-2">
            <div
              v-for="(checkbox, index) in editingTask.checkboxes"
              :key="index"
              class="flex items-center"
            >
              <input
                v-model="checkbox.text"
                type="text"
                placeholder="Checkbox text"
                class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              />
              <button
                @click="removeCheckbox(index)"
                class="ml-2 px-2 py-1 bg-red-500 text-white rounded-md hover:bg-red-600"
              >
                Remove
              </button>
            </div>
          </div>
          <button
            @click="addCheckbox"
            class="mt-4 px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600"
          >
            Add Checkbox
          </button>
          <div class="mt-4 flex justify-end space-x-2">
            <button
              @click="saveTask"
              class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600"
            >
              Save
            </button>
            <button
              @click="cancelEdit"
              class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600"
            >
              Cancel
            </button>
          </div>
        </div>
      </div>
    </div>
  </template>
  