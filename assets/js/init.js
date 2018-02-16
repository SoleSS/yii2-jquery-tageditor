$(document).on('click', '.tageditor-wrap .available-tags-wrap a.btn', function () {
  $(this).parent().parent().find('input.tag-editor-hidden-src').tagEditor('addTag', $(this).text());
  return false;
});