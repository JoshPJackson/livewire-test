<template>
    <div>
        <header1 class="text-center">Components</header1>
        <div class="p-5">
            <section class="my-4">
                <header2>Colours</header2>
                <div class="flex justify-content-between text-center gap-2">
                    <div class="flex-grow">
                        <div>Primary - purple</div>
                        <div class="bg-purple h-20 rounded-xl"></div>
                    </div>
                    <div class="flex-grow">
                        <div>Secondary - gray-400</div>
                        <div class="bg-gray-400 h-20 rounded-xl"></div>
                    </div>
                    <div class="flex-grow">
                        <div>Background - gray-300</div>
                        <div class="bg-gray-300 h-20 rounded-xl"></div>
                    </div>
                    <div class="flex-grow">
                        <div>Text - gray-500</div>
                        <div class="bg-gray-500 h-20 rounded-xl"></div>
                    </div>
                    <div class="flex-grow">
                        <div>Light Text - gray-400</div>
                        <div class="bg-gray-400 h-20 rounded-xl"></div>
                    </div>
                    <div class="flex-grow">
                        <div>Success - green</div>
                        <div class="bg-success h-20 rounded-xl"></div>
                    </div>
                    <div class="flex-grow">
                        <div>Info - blue</div>
                        <div class="bg-info h-20 rounded-xl"></div>
                    </div>
                    <div class="flex-grow">
                        <div>Warning - orange</div>
                        <div class="bg-warning h-20 rounded-xl"></div>
                    </div>
                    <div class="flex-grow">
                        <div>Error - red</div>
                        <div class="bg-danger h-20 rounded-xl"></div>
                    </div>
                </div>
            </section>
            <section class="my-4">
                <header2>Typography</header2>
                <header1>Header 1</header1>
                <header2>Header 2</header2>
                <header3>Header 3</header3>
                <header4>Header 4</header4>
                <header5>Header 5</header5>
                <header6>Header 6</header6>
                <paragraph>This is some normal text</paragraph>
                <light-text>This is some lighter text</light-text>
            </section>
            <section class="my-4">
                <header2>Buttons</header2>
                <div class="flex">
                    <primary-button class="mr-2">Primary</primary-button>
                    <secondary-button>Secondary</secondary-button>
                </div>
            </section>
            <section class="my-4">
                <header2>Cards</header2>
                <div class="grid grid-cols-3 gap-6">
                    <card>This is a basic card</card>
                    <card>
                        <template slot="header">
                            <header2>Card Header</header2>
                        </template>
                        This is a card with a header
                    </card>
                    <card>
                        <template slot="header">
                            <header2>Card</header2>
                        </template>
                    </card>
                </div>
            </section>
            <section class="my-4">
                <header2>Inputs</header2>
                <div>
                    <basic-input placeholder="text input" v-model="textInput" class="mb-2"/>
                    <basic-input placeholder="email@email.com" v-model="emailInput" class="mb-2"/>
                    <basic-input v-model="placeholder"/>
                </div>
            </section>
            <section class="my-4">
                <header2>Alerts</header2>
            </section>
        </div>
    </div>
</template>

<script>
import Header1 from "../components/typography/headers/Header1";
import Header2 from "../components/typography/headers/Header2";
import Header3 from "../components/typography/headers/Header3";
import Header4 from "../components/typography/headers/Header4";
import Header5 from "../components/typography/headers/Header5";
import Header6 from "../components/typography/headers/Header6";
import Paragraph from "../components/typography/Paragraph";
import LightText from "../components/typography/LightText";
import PrimaryButton from "../components/buttons/PrimaryButton";
import SecondaryButton from "../components/buttons/SecondaryButton";
import BasicInput from "../components/inputs/BasicInput";
import CodeBlock from "../components/misc/CodeBlock";
import Card from "../components/card/Card";
import CardHeader from "../components/card/CardHeader";

export default {
    name: "Components",
    components: {
        CardHeader,
        Card,
        CodeBlock,
        BasicInput,
        SecondaryButton,
        PrimaryButton, LightText, Paragraph, Header1, Header2, Header3, Header4, Header5, Header6
    },

    data() {
        return {
            textInput: '',
            emailInput: '',
            passwordInput: ''
        }
    }
}
</script>

<style scoped>

</style>
