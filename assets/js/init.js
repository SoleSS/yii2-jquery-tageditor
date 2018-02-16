$( ".tageditor-wrap .available-tags-wrap a.btn" ).click(function() {
  $(this).paren().parent().find('input.tag-editor-hidden-src').tagEditor('addTag', $(this).text());
});