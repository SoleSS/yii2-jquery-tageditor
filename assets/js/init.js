$(document).on('click', '.tageditor-wrap .available-tags-wrap a.btn', function (event) {
  event.preventDefault();
  $(this).parent().parent().find('input.tag-editor-hidden-src').tagEditor('addTag', $(this).text());
  return false;
});