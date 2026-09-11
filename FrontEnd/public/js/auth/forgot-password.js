function forgotPasswordForm() {

    return {

        email: '',
        submitted: false,
        loading: false,

        get validEmail() {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.email);
        },

        get canSubmit() {
            return this.validEmail && !this.loading;
        },


        submitForm() {

            this.submitted = true;

            if (!this.canSubmit) {
                return;
            }

        }

    }

}