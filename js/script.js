
jQuery( document ).ready(function( $ ) {
	$(".qlform_question input#jform_name").attr("placeholder", $(".qlform_question label#jform_name-lbl").text().replace(/(^\s+|\s+$)/g,''));
	$(".qlform_question input#jform_tel").attr("placeholder", $(".qlform_question label#jform_tel-lbl").text().replace(/(^\s+|\s+$)/g,''));
	$(".qlform_question input#jform_email").attr("placeholder", $(".qlform_question label#jform_email-lbl").text().replace(/(^\s+|\s+$)/g,''));

  $(".qlform_popup-form input#jform_name").attr("placeholder", $(".qlform_popup-form label#jform_name-lbl").text().replace(/(^\s+|\s+$)/g,''));
  $(".qlform_popup-form input#jform_tel").attr("placeholder", $(".qlform_popup-form label#jform_tel-lbl").text().replace(/(^\s+|\s+$)/g,''));
  $(".qlform_popup-form input#jform_email").attr("placeholder", $(".qlform_popup-form label#jform_email-lbl").text().replace(/(^\s+|\s+$)/g,''));
  $(".qlform_popup-form input#jform_company").attr("placeholder", $(".qlform_popup-form label#jform_company-lbl").text().replace(/(^\s+|\s+$)/g,''));
  $(".qlform_popup-form textarea#jform_question").attr("placeholder", $(".qlform_popup-form label#jform_question-lbl").text().replace(/(^\s+|\s+$)/g,''));

  $(".moduletable_question--catalog h3").text("Не нашли нужный продукт? Закажите звонок оператора!");
  $("#fieldset3").after('<div class="custom_form_text">Поля отмеченные звёздочкой (*) обязательны для заполнения</div>')

  $(".search_button").click(function (){
    $(".moduletable_main_search").toggleClass("visible");
  });

  $(".header-contacts__button, .popup-form-bg, .custom_product_popup_button_wrapper, .popup-form:before").click(function (){
    $(".popup-form").toggleClass("visible_flex");
  });

  $('.popup-form h3').prepend("<span class='popup_close_button'></span>")


});
