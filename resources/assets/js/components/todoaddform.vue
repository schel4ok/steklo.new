<template>
    <form v-on:submit.prevent="addNewTodo(newTodo)">
        <input v-model="newTodo.title" type="text" class="form-control margin-right-10" placeholder="добавь новую задачу">
        <button class="btn btn-success">Добавить</button>
    </form>
</template>

<script>
    export default {
      props: ['todos'],

      data() {
        return {
          newTodo: {id: null, title: '', completed: false},     
        }
      },
      
      methods: {
        addNewTodo(newTodo) {
          this.todos.push(newTodo)
          this.newTodo = {id: null, title: '', completed: false}
        },
      }


    }
</script>
