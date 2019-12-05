<template>
  <div>
    <div class="flex items-center" v-if="value">
      {{ value.suggestion.name }}
      <a class="ml-1" :href="mapLink">→</a>
    </div>
    <span class="text-red" v-else>Yikes, no location yet!</span>
  </div>
</template>

<script>
export default {
  mixins: [IndexFieldtype],
  computed: {
    mapLink() {
      return `https://www.openstreetmap.org/search?query=${this.value.suggestion.value}`;
    }
  }
};
</script>
