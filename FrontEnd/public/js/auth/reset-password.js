function resetPasswordForm() {

    return {

        password: '',

        passwordConfirmation: '',

        showPassword: false,

        showConfirmPassword: false,

        passwordStrength: 0,

        strengthText: 'Weak password',

        submitted: false,


        checkPasswordStrength() {

            let score = 0;


            if (this.password.length >= 8)
                score++;


            if (/[A-Z]/.test(this.password))
                score++;


            if (/[0-9]/.test(this.password))
                score++;


            if (/[^A-Za-z0-9]/.test(this.password))
                score++;


            this.passwordStrength = score;


            if (score <= 1) {

                this.strengthText =
                    'Weak password';

            }

            else if (score === 2) {

                this.strengthText =
                    'Fair password';

            }

            else if (score === 3) {

                this.strengthText =
                    'Good password';

            }

            else {

                this.strengthText =
                    'Strong password';

            }

        },


        get canSubmit() {

            return (

                this.password.length >= 8 &&

                this.password ===
                this.passwordConfirmation

            );

        },


        submitForm() {

            this.submitted = true;


            if (!this.canSubmit) {

                return;

            }
            alert('done');

        }

    }

}
