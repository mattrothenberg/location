<template>

    <div>
        <text-input :value="value" @input="update" />
    </div>

</template>

<script>
/**
 * Register this component with:
 * Vue.component('location-fieldtype', require('./path/to/Location.vue'))
 */
export default {

    mixins: [Fieldtype],

    data() {
        return {
            //
        };
    }

};
</script>
