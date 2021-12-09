<template>
  <div class="bg-white rounded-xl shadow border p-4">
      <slot name="header">

      </slot>
      <slot></slot>
      <slot name="footer"></slot>
  </div>
</template>

<script>
export default {
    name: "Card"
}
</script>

<style scoped>

</style>
