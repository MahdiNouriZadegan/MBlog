function loginForm() {

    return {

        email: '',
        password: '',
        showPassword: false,
        rememberMe: false,
        submitted: false,

        get validLogin() {
            return this.email.trim().length > 0;
        },

        get canSubmit() {
            return (
                this.validLogin &&
                this.password.length >= 8 &&
                this.validEmail
            );
        },
        

        get validEmail() {

            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/
                .test(this.email);

        },


        submitForm() {

            this.submitted = true;

            if (!this.canSubmit) {
                return;
            }


        }

    }

}