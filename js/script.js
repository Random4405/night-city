
jQuery( document ).ready(function( $ ) {
	$(".qlform_question input#jform_name").attr("placeholder", $(".qlform_question label#jform_name-lbl").text().replace(/(^\s+|\s+$)/g,''));
	$(".qlform_question input#jform_tel").attr("placeholder", $(".qlform_question label#jform_tel-lbl").text().replace(/(^\s+|\s+$)/g,''));
	$(".qlform_question input#jform_email").attr("placeholder", $(".qlform_question label#jform_email-lbl").text().replace(/(^\s+|\s+$)/g,''));

  $(".moduletable_question--catalog h3").text("Не нашли нужный продукт? Закажите звонок оператора!");
  $(".submit.control-group").prepend('<div class="custom_form_text">Поля отмеченные звёздочкой (*) обязательны для заполнения</div>')
});
