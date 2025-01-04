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
          <div v-for="task in section.tasks" :key="task.id" class="bg-white p-4 rounded shadow">
            <h3 class="font-medium">{{ task.title }}</h3>
            <div class="mt-2">
              <label class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox" v-model="task.completed" @change="updateTaskStatus(task)">
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
import axios from 'axios';

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
      },
    };
  },
  mounted() {
    this.fetchTasks();
  },
  methods: {
    fetchTasks() {
      axios.get('/api/tasks')
        .then(response => {
          const tasks = response.data;
          this.taskSections[0].tasks = tasks.filter(task => task.status === 'todo');
          this.taskSections[1].tasks = tasks.filter(task => task.status === 'in-progress');
          this.taskSections[2].tasks = tasks.filter(task => task.status === 'completed');
        })
        .catch(error => {
          console.error('Error fetching tasks:', error);
        });
    },
    openForm() {
      this.showForm = true;
    },
    closeForm() {
      this.showForm = false;
      this.newTask = { title: "", description: "" };
    },
    submitTask() {
      const newTask = {
        title: this.newTask.title,
        description: this.newTask.description,
        status: 'todo',
      };

      axios.post('/api/tasks', newTask)
        .then(response => {
          this.taskSections[0].tasks.push(response.data);
          this.closeForm();
        })
        .catch(error => {
          console.error('Error adding task:', error);
        });
    },
    updateTaskStatus(task) {
      axios.put(`/api/tasks/${task.id}`, { completed: task.completed })
        .then(() => {
          console.log('Task status updated');
        })
        .catch(error => {
          console.error('Error updating task status:', error);
        });
    },
  },
};
</script>
