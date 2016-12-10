<template>

<div class="modal fade" id="callback" tabindex="-1" role="dialog" v-show="show" transition="modal" >
  <div class="modal-dialog">

    <form @submit.prevent="submitForm" name="callback" method="POST" action="/" role="form" class="form-horizontal" enctype="multipart/form-data">
    {!! csrf_field() !!}

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="CallbackModalLabel"><i class="fa fa-envelope-o text-primary"></i>  Отправить письмо / Попросить перезвонить</h4>
      </div>
      <div class="modal-body">

         <div class="text-primary">* обязательное поле</div>

          <div class="form-group">
            <label class="control-label" for="name">Ваше имя *</label>
            <input id="name" name="name" class="form-control"  type="text" required>
            <span  class="error"></span>
          </div>

          <div class="form-group">
            <label class="control-label" for="phone">Номер телефона *</label>
            <input id="phone" name="tel" class="form-control"   required>
            <span  class="error"></span>
          </div>

          <div class="form-group">
            <label class="control-label" for="time">Желательное время звонка</label>
            <input id="time" name="time" class="form-control"  type="text">
          </div>

          <div class="form-group">
            <label class="control-label" for="email">Адрес e-mail</label>
            <input id="email" name="email" class="form-control"  type="email">
          </div>



          <div class="form-group">
            <label class="control-label" for="message">Сообщение</label>
            <textarea id="msg" name="msg" class="form-control" ></textarea>
          </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary pull-right" @click="sendMessage()">Отправить</button>
      </div>

     </div>
    </form>


  </div>
</div>

</template>


<script>
    export default {
        props: ['show'],

        methods: {
            sendMessage: function () {
            // Insert AJAX call here...
            this.show = false;
            }
        },

        mounted() {
            console.log('Callback window ready.')
        }
    }
</script>
