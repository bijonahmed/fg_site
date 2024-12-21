// plugins/ckeditor.js
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default ({ app }, inject) => {
  // Inject ClassicEditor globally so it can be accessed via this.$ckeditor
  inject('ckeditor', ClassicEditor);
};
