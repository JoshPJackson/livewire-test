<template>
    <div>
        <div>
            <img src="" alt="" class=""/>
        </div>
        <header2>Sign in</header2>
        <basic-input label="email" type="text" v-model="email"/>
        <basic-input label="password" type="password" v-model="password"/>
        <div>
            <a href="">Create Account</a>
            <primary-button>Login</primary-button>
        </div>
    </div>
</template>

<script>
import Header2 from "../typography/headers/Header2";
import BasicInput from "../inputs/BasicInput";
import PrimaryButton from "../buttons/PrimaryButton";

export default {
    name: "LoginForm",
    components: {PrimaryButton, BasicInput, Header2},

    data() {
        return {
            email: '',
            password: ''
        }
    }
}
</script>

<style scoped>

</style>
