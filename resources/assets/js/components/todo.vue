<template>

    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading" >Мои задачи {{todoCount}}</div>
            <div class="panel-body">
                <ul class="list-group" v-if="todos.length > 0">
                    <li class="list-group-item" v-for="todo in todos" v-bind:class="{ 'completed' : todo.completed }">
                        {{ todo.title }}
                        <button class="btn btn-warning btn-xs pull-right" v-on:click="deleteTodo(todo)">Удалить</button>
                        <button class="btn btn-xs pull-right margin-right-10" 
                            v-bind:class="{'btn-success' : todo.completed, 'btn-danger' : !todo.completed}"
                            v-on:click="todoCompleted(todo)">{{ todo.completed ? 'Завершено' : 'В работе' }}</button>
                    </li>
                </ul>
                <div v-else>Задач нету</div>

                <form v-on:submit.prevent="addNewTodo(newTodo)">
                    <input v-model="newTodo.title" type="text" class="form-control margin-right-10" placeholder="добавь новую задачу">
                    <button class="btn btn-success">Добавить</button>
                </form>

            </div>
        </div>
    </div>

</template>

<script>
    export default {

        data () {
            return {
                todos: [],
                newTodo: {id: null, title: '', completed: false},  
            }
        },

        computed: {
            todoCount() {
                return this.todos.length
            }
        },

        methods: {
            addNewTodo(newTodo) {
              this.todos.push(newTodo)
              this.newTodo = {id: null, title: '', completed: false}
            },

            todoCompleted(todo) {
                todo.completed = !todo.completed
            },

            deleteTodo(todo) {
                var index = this.todos.indexOf(todo);
                this.todos.splice(index, 1);
            },

        }

    }
</script>
