@section('modal-feedback')
<section class="modal-feedback">
  <form class="modal-feedback__form" action="">
    <h2 class="modal-feedback__header">Обратный звонок</h2>
    <p class="modal-feedback__intro-text">Отправьте свое имя и телефон и наш сотрудник перезвонит вам в течении рабочего дня</p>
    <input type="text" placeholder="Ваше имя" name="name">
    <input type="text" placeholder="Ваш телефон" name="phone-number">
    <div class="modal-feedback__user-agreement-wrap">
      <div class="modal-feedback__checkbox-wrap">
        <input type="checkbox" id="personal-data-check">
        <input type="checkbox" id="site-politics-agree">
      </div>
      <p class="modal-feedback__user-info-text">
        <label for="personal-data-check">Нажимая эту кнопку я даю согласие на обработку персональных данных</label>
        и
        <label for="site-politics-agree">соглашаюсь с условиями и политикой обработки персональных данных</label>
      </p>
    </div>
    <butn class="modal-feedback__btn"></butn>
  </form>
</section>
@show