
function registerForm() {

    return {

        username: '',

        email: '',

        password: '',

        passwordConfirmation: '',

        showPassword: false,

        showConfirmPassword: false,

        passwordStrength: 0,

        strengthText: 'Weak password',

        captchaA: 0,

        captchaB: 0,

        captchaAnswer: '',

        termsAccepted: false,

        submitted: false,


        init() {

            this.generateCaptcha();

        },


        generateCaptcha() {

            this.captchaA =
                Math.floor(Math.random() * 9) + 1;

            this.captchaB =
                Math.floor(Math.random() * 9) + 1;

            this.captchaAnswer = '';

        },


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


        get validEmail() {

            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/
                .test(this.email);

        },


        get captchaCorrect() {

            return Number(this.captchaAnswer)
                === this.captchaA + this.captchaB;

        },


        get canSubmit() {

            return (

                this.username.length >= 3 &&

                this.validEmail &&

                this.password.length >= 8 &&

                this.password ===
                this.passwordConfirmation &&

                this.captchaCorrect &&

                this.termsAccepted

            );

        },


        submitForm() {

            this.submitted = true;


            if (!this.canSubmit) {

                return;

            }


            alert('Registration form is valid!');

        }

    }

}