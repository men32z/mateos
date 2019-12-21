<template>
  <div class="form-group">
    <label for="">Imagenes</label>
    <input id="fileupload" type="file" multiple @change="handleFiles($event)" name="images[]" ref="fileInput" />
  </div>
</template>
<script>
  export default {
    methods: {
      handleFiles(evt){
        //this.images = evt.target.files;
        //console.log( evt.target.files);
      }
    },
    data(){
      return {
        images: '',
        counter: 1
      };
    },
    mounted() {
      //console.log('mounted');
    }
  }
</script>
