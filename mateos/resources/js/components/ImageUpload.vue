<template>
  <div class="form-group">
    <label for="">Imagenes</label>
    <input v-for="image in images" type="file" name="image[]">
    <button type="button" class="btn btn-success" @click="add_image">+</button>
  </div>
</template>
<script>
  export default {
    methods: {
      add_image(){
        this.counter++;
        this.images = this.counter;
      }
    },
    data(){
      return {
        counter: 1,
        images: []
      };
    },
    mounted() {
      console.log('mounted');
    }
  }
</script>
