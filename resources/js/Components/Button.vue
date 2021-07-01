<template>
  <button :type="type" :class="classCss">
    <slot />
  </button>
</template>

<script>
export default {
  props: {
    type: {
      type: String,
      default: "submit",
    },
    classCss: {
      type: String,
      default: "btn-primary"
    }
  },
};
</script>
