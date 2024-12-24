<template>
  <div class="max-w-4xl mx-auto p-6 bg-gray-100">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-bold">Task List</h1>
      <button @click="openForm" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">+ Add Task</button>
    </div>

    <!-- Task Sections -->
    <div class="space-y-6">
      <div v-for="section in taskSections" :key="section.title">
        <h2 class="text-lg font-semibold mb-3">{{ section.title }} ({{ section.tasks.length }})</h2>
        <div class="space-y-4">
          <div v-for="task in section.tasks" :key="task.id" class="bg-white p-4 rounded shadow cursor-move"
            draggable="true" @dragstart="onDragStart(task, section)" @dragover.prevent @drop="onDrop(task, section)">
            <h3 class="font-medium">{{ task.title }}</h3>
            <div class="mt-2">
              <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox" v-model="task.completed">
                <span>{{ task.description }}</span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add Task Modal -->
    <div v-if="showForm" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
      <div class="bg-white p-6 rounded shadow-lg w-full max-w-md">
        <h2 class="text-lg font-semibold mb-4">Add New Task</h2>
        <form @submit.prevent="submitTask">
          <div class="mb-4">
            <label for="cardTitle" class="block text-sm font-medium mb-1">Task Title</label>
            <input type="text" id="cardTitle" v-model="newTask.title" class="w-full p-2 border rounded">
          </div>
          <div class="mb-4">
            <label for="taskDescription" class="block text-sm font-medium mb-1">Task Description</label>
            <textarea id="taskDescription" v-model="newTask.description" class="w-full p-2 border rounded"></textarea>
          </div>
          <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Task List</label>
            <div v-for="(listItem, index) in newTask.listItems" :key="index" class="flex items-center mb-2">
              <input type="text" v-model="newTask.listItems[index]" class="w-full p-2 border rounded mr-2">
              <button type="button" class="bg-red-500 text-white px-2 py-1 rounded"
                @click="removeListItem(index)">-</button>
              <button type="button" class="bg-green-500 text-white px-2 py-1 rounded ml-2"
                @click="addListItem">+</button>
            </div>
          </div>
          <div class="flex justify-end space-x-4">
            <button type="button" @click="closeForm" class="px-4 py-2 border rounded">Cancel</button>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add Task</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {


  data() {
    return {
      taskSections: [
        { title: "To Do's", tasks: [] },
        { title: "In Progress", tasks: [] },
        { title: "Completed", tasks: [] },
      ],
      showForm: false,
      newTask: {
        title: "",
        description: "",
        listItems: [""],
      },
      draggedTask: null,
      draggedFromSection: null,
    };
  },



  methods: {
    openForm() {
      this.showForm = true;
    },
    closeForm() {
      this.showForm = false;
      this.newTask = { title: "", description: "", listItems: [""] };
    },
    submitTask() {
      // Add the new task to the "To Do's" section
      const newTask = {
        ...this.newTask,
        id: Date.now(), // Generate a unique ID
        completed: false,
      };
      this.taskSections[0].tasks.push(newTask);
      this.closeForm();
    },
    addListItem() {
      this.newTask.listItems.push("");
    },
    removeListItem(index) {
      this.newTask.listItems.splice(index, 1);
    },
    onDragStart(task, section) {
      this.draggedTask = task;
      this.draggedFromSection = section;
    },
    onDrop(_, section) {
      if (this.draggedTask && this.draggedFromSection !== section) {
        // Remove the task from the original section
        this.draggedFromSection.tasks = this.draggedFromSection.tasks.filter(
          (t) => t.id !== this.draggedTask.id
        );
        // Add the task to the new section
        section.tasks.push(this.draggedTask);
        this.draggedTask = null;
        this.draggedFromSection = null;
      }
    },
  },
};
</script>
