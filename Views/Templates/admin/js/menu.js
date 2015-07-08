/**
 * Created by homepc on 08.07.2015.
 */
$(document).on('mouseenter', '.show', function (e) {
  console.log($(this).text()); //только тект
  console.log($(this).html()); //только тект
  $('#searchid').val($(this).html()); //html-код содержания
});