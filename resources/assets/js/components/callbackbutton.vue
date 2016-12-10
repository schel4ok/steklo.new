<template>

    <div class="callback">
        <a href="/" class="root"> </a>
        <p>8 (495) 790 84 15<br>
        <a href="mailto:sales@steklo-group.ru">sales@steklo-group.ru</a><br>
        <a class="btn btn-primary btn-large" title="Обратный звонок" @click="showCallback = true" >
        <i class="fa fa-phone"> </i> {{ name }}</a></p>
    </div>

</template>


<script>

// https://adamwathan.me/2016/01/04/composing-reusable-modal-dialogs-with-vuejs/
    export default {

        data () {
            return {
                 name: 'Обратный звонок',
                 showCallback: false,
                 
            }
        },

        methods: {
            

        },


        mounted() {
            console.log('Callback button ready.')
        }
    }
</script>

