<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="callback" aria-hidden="true">
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
            <input id="name" name="name" class="form-control" v-model="formInputs.name" type="text" required>
            <span v-if="formErrors['name']" class="error">@{{ formErrors['name'] }}</span>
          </div>

          <div class="form-group">
            <label class="control-label" for="phone">Номер телефона *</label>
            <input id="phone" name="tel" class="form-control" v-model="formInputs.tel"  required>
            <span v-if="formErrors['tel']" class="error">@{{ formErrors['name'] }}</span>
          </div>

          <div class="form-group">
            <label class="control-label" for="time">Желательное время звонка</label>
            <input id="time" name="time" class="form-control" v-model="formInputs.time" type="text">
          </div>

          <div class="form-group">
            <label class="control-label" for="email">Адрес e-mail</label>
            <input id="email" name="email" class="form-control" v-model="formInputs.email" type="email">
          </div>



          <div class="form-group">
            <label class="control-label" for="message">Сообщение</label>
            <textarea id="msg" name="msg" class="form-control" v-model="formInputs.msg"></textarea>
          </div>

      </div>

  	  <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary pull-right">Отправить</button>
      </div>

     </div>
    </form>


  </div>
</div>