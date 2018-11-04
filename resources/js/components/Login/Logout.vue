<template>

</template>
<script>
export default {
    created(){
        EventBus.$emit('logout')
    },

  data(){
    return {

    }
  }
}
</script>
<style>

</style>
