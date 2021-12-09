<template>
    <div class="flex items-center bg-gray-200 rounded-full border-transparent border-2 hover:border-purple w-100"
         ref="container">
        <input class="flex-grow h-10 rounded-full focus:outline-none px-4" :type="type" v-model="coreValue"
               @focus="toggleFocus" @blur="toggleFocus" ref="input" v-bind="$attrs"/>
    </div>
</template>

<script>
export default {
    name: "BasicInput",

    inheritAttrs: false,

    props: {
        type: {
            required: false,
            default: 'text'
        },
        value: {
            required: false
        },
    },

    data() {
        return {
            focussed: false,
            coreValue: null,
        }
    },

    watch: {
        coreValue: {
            immediate: true,
            deep: true,
            handler: function(newValue, oldValue) {
                this.$emit('input', newValue)
            }
        },
        value: {
            immediate: true,
            deep: true,
            handler: function(newValue, oldValue) {
                this.coreValue = newValue
            }
        }
    },

    methods: {
        toggleFocus() {
            if (this.focussed) {
                this.blur()
            } else {
                this.focus()
            }
        },

        focus() {
            this.focussed = true
            this.$refs.container.classList.add('border-purple')
        },

        blur() {
            this.focussed = false
            this.$refs.container.classList.remove('border-purple')
        }
    }
}
</script>
