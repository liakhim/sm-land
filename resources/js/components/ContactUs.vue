<template>
    <div id="contact-us" class="form-section">
        <div class="custom-container">
            <div class="form-overlay">
                <div class="form-overlay-block">
                    <div class="title">
                        <h3>Connect with us</h3>
                    </div>
                    <div class="text">
                        <p>Hungary, 1085 Budapest, József krt 69. fszt 1.</p>
                        <a href="mailto:support@smartdatatech.io" class="custom-link">support@smartdatatech.io</a>
                    </div>
                </div>
            </div>
            <form class="form">
                <div class="form-title">
                    <h4>Send us a message</h4>
                </div>
                <div class="form-row">
                    <label>
                        <input v-model="name"
                               class="custom-input"
                               :class="{'error': showErrors && getError('name')}"
                               placeholder="First name"
                               type="text">
                        <span v-if="showErrors" class="error-text">{{getError('name')}}</span>
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <input v-model="email"
                               class="custom-input"
                               :class="{'error': showErrors && getError('email')}"
                               placeholder="Email"
                               type="email">
                        <span v-if="showErrors" class="error-text">{{getError('email')}}</span>
                    </label>
                </div>
                <div class="form-row">
                    <label>
                                <textarea v-model="message"
                                          class="custom-input"
                                          :class="{'error': showErrors && getError('message')}"
                                          placeholder="Message"
                                          name="comment"
                                          id="comment"
                                          cols="30"
                                          rows="10"></textarea>
                        <span v-if="showErrors" class="error-text">{{getError('message')}}</span>
                    </label>
                </div>
                <div class="form-button">
                    <button @click="sendForm()" :disabled="showErrors && disableButton" class="custom-button yellow">
                        <span>Send message</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    name: 'ContactUs',
    data () {
        return {
            name: '',
            email: '',
            message: '',
            showErrors: false
        }
    },
    computed: {
        disableButton () {
            return (!!this.getError('name') || !!this.getError('email') || !!this.getError('message'))
        }
    },
    methods: {
        sendForm () {
            const data = {
                name: this.name,
                email: this.email,
                message: this.message
            }
            this.showErrors = true
            axios.post("", data)
                .then(function (response) {
                    console.log(response)
                })
                .catch((error) => {
                    console.log(error)
                })
        },
        getError (field) {
            if (this[field].length === 0) {
                return (field[0].toUpperCase() + field.slice(1, field.length)) + ' cannot be empty'
            } else {
                if (field === 'email' && !this.validEmail(this.email)) {
                    return 'Email must be valid'
                }
                return ''
            }
        },
        validEmail (val) {
            const regexQuery = '^\\w+([\\+.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+$'
            const email = new RegExp(regexQuery, 'i')
            return email.test(val)
        }
    }
}
</script>
