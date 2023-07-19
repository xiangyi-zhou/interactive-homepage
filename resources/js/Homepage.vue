<template>
    <div>
        <h1>Welcome to Interactive Homepage!</h1>
        <p>Click the button to see an interactive message:</p>
        <button @click="showMessage">Click Me</button>
        <p v-if="message">{{ message }}</p>

        <hr />

        <h2>
            Apply for the Trainee Analyst Programmer/Junior Developer Position:
        </h2>
        <form @submit.prevent="submitForm">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" v-model="form.name" required />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" v-model="form.email" required />
            </div>
            <button type="submit">Submit Application</button>
        </form>
        <p v-if="successMessage" class="success-message">
            {{ successMessage }}
        </p>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            message: "",
            form: {
                name: "",
                email: "",
            },
            successMessage: "",
        };
    },
    methods: {
        showMessage() {
            this.message = "Hello, World!";
        },
        submitForm() {
            // Send the form data to the server using an AJAX request
            axios
                .post("/submit", this.form)
                .then((response) => {
                    // Clear the form and display success message
                    this.form.name = "";
                    this.form.email = "";
                    this.successMessage = response.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
};
</script>
