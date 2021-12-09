<template>
    <div :style="headerStyle">
        <header3>
            {{ header }}
        </header3>
    </div>
</template>

<script>
import Header3 from "../typography/headers/Header3";
export default {
    name: "CardHeader",
    components: {Header3},

    props: {
        header: {},
        subheader: {},
        imgSrc: {}
    },

    data() {
        return {
            headerStyle: {

            }
        }
    },

    mounted() {
        if (this.imgSrc) {
            this.headerStyle.backgroundImage = this.imgSrc;
        }
    }
}
</script>

<style scoped>

</style>
