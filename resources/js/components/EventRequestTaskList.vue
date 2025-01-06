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
              <!-- Loop through the checkboxes for the task -->
              <div v-for="(checkbox, index) in task.checkboxes" :key="index" class="flex items-center space-x-2">
                <input type="checkbox" class="form-checkbox" v-model="task.checkboxes[index].checked"
                  @change="updateTask(task)">
                <span>{{ checkbox.label }}</span>
              </div>
            </div>
            <div class="mt-2">
              <span>{{ task.description }}</span>
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
            <input type="text" id="cardTitle" v-model="newTask.title" class="w-full p-2 border rounded" required>
          </div>
          <div class="mb-4">
            <label for="taskDescription" class="block text-sm font-medium mb-1">Task Description</label>
            <textarea id="taskDescription" v-model="newTask.description" class="w-full p-2 border rounded"
              required></textarea>
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
        listItems: [""],
        checkboxes: [{ label: "Option 1", checked: false }] // Default checkbox
      },
      draggedTask: null,
      draggedFromSection: null,
    };
  },

  mounted() {
    this.fetchTasks();
  },

  methods: {
    openForm() {
      this.showForm = true;
    },

    closeForm() {
      this.showForm = false;
      this.newTask = { title: "", description: "", listItems: [""], checkboxes: [{ label: "Option 1", checked: false }] };  // Reset the form
    },

    fetchTasks() {
      axios.get('/api/tasks')
        .then(response => {
          this.taskSections[0].tasks = response.data.filter(task => task.section === 'to_do' && !task.completed);
          this.taskSections[1].tasks = response.data.filter(task => task.section === 'in_progress');
          this.taskSections[2].tasks = response.data.filter(task => task.section === 'completed' && task.completed);
        })
        .catch(error => console.error('Error fetching tasks:', error));
    },

    submitTask() {
      // Prepare the new task object with checkboxes
      const newTask = {
        ...this.newTask,
        completed: false,
        section: 'to_do',
        checkboxes: this.newTask.checkboxes // Add checkboxes to the new task
      };
      axios.post('routes/api/tasks', newTask)
        .then(response => {
          this.taskSections[0].tasks.push(response.data);
          this.closeForm();
        })
        .catch(error => console.error('Error adding task:', error));
    },

    updateTask(task) {
      axios.put(`/api/tasks/${task.id}`, { ...task })
        .then(() => {
          console.log('Task updated successfully');
        })
        .catch(error => console.error('Error updating task:', error));
    },

    deleteTask(task, section) {
      axios.delete(`/api/tasks/${task.id}`)
        .then(() => {
          section.tasks = section.tasks.filter(t => t.id !== task.id);
        })
        .catch(error => console.error('Error deleting task:', error));
    },

    addListItem() {
      this.newTask.listItems.push("");
    },

    removeListItem(index) {
      if (this.newTask.listItems.length > 1) {
        this.newTask.listItems.splice(index, 1);
      }
    },

    onDragStart(task, section) {
      this.draggedTask = task;
      this.draggedFromSection = section;
    },

    onDrop(_, section) {
      if (this.draggedTask && this.draggedFromSection !== section) {
        this.draggedFromSection.tasks = this.draggedFromSection.tasks.filter(t => t.id !== this.draggedTask.id);
        section.tasks.push(this.draggedTask);

        this.draggedTask.completed = section.title === 'Completed';
        this.updateTask(this.draggedTask);

        this.draggedTask = null;
        this.draggedFromSection = null;
      }
    },
  },
};
</script>