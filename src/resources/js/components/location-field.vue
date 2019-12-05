<template>
  <div>
    <div
      class="bg-red-lighter p-3 text-sm text-red"
      v-if="error.key || error.id"
    >
      <strong>Yikes!</strong> Be sure to add the following environment variables
      to your .env.
      <ul class="mt-1 list">
        <li v-if="error.key">
          <code>PLACES_API_KEY</code>
        </li>
        <li v-if="error.id">
          <code>PLACES_API_ID</code>
        </li>
      </ul>
    </div>
    <input
      v-else
      placeholder="Start typing your address"
      class="input-text"
      ref="inputRef"
      :value="inputValue"
    />
  </div>
</template>

<script>
import places from "places.js";

export default {
  mixins: [Fieldtype],
  data() {
    return {
      error: {
        key: !this.meta.placesApiKey,
        id: !this.meta.placesAppId
      }
    };
  },
  computed: {
    inputValue() {
      return this.value && this.value.suggestion
        ? this.value.suggestion.value
        : "";
    }
  },
  methods: {
    handleAddressSelect(e) {
      this.update(e);
    }
  },
  mounted() {
    const { error } = this;
    const { placesApiKey, placesAppId } = this.meta;
    if (error.key || error.id) {
      return;
    } else {
      const placesInstance = places({
        appId: placesAppId,
        apiKey: placesApiKey,
        container: this.$refs.inputRef
      });
      placesInstance.on("change", this.handleAddressSelect);
    }
  }
};
</script>
