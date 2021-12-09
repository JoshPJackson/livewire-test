<template>
    <div>
        <div>
            <slot></slot>
        </div>
        <div>
            <button>
                <i :class="['lni', open ? 'lni-chevron-down': 'lni-chevron-up']" @click="toggle"></i>
            </button>
        </div>
        <code v-show="open">
            <pre>

            </pre>
        </code>
    </div>
</template>

<script>
export default {
    name: "CodeBlock",

    data() {
        return {
            open: false
        }
    },

    methods: {
        toggle() {
            this.open = !this.open;
        }
    }
}
</script>

<style scoped>

</style>
