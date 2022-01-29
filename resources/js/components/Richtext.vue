<template>
  <div id="richtext">
    <editor
      api-key="oekee2muok3qdhrmkdk79jzcktnrnidyh2xj650xo7slpm57"
      :init="{
        height: 150,
        menubar: false,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table paste code help wordcount',
        ],
        toolbar:
          'undo redo | formatselect | bold italic backcolor | \
           alignleft aligncenter alignright alignjustify | \
           bullist numlist outdent indent | removeformat | help',
      }"
      
    />
  </div>
</template>

 <script>
  import Editor from "@tinymce/tinymce-vue";
  export default {
    name: "richtext",
    components: {
      editor: Editor,
    },
  };
// tinymce.activeEditor.getContent();
</script>
