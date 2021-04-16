let registration = new Vue({
    el: '#registration',
    data: {
        errors: [],
        username: '',
        password: '',
    },
    methods: {
        register: function () {
            this.errors = [];
            axios.post(route('Auth.Register'), {
                username: this.username,
                password: this.password,
            })
                .then(response => {
                    let response_data = response.data;
                    if (response_data.status) {
                        toastr.success('User Registered.');
                        registration.clearForm();
                    } else {
                        toastr.error(response_data.msg);
                    }
                })
                .catch(error => {
                    registration.errors.push(error.response.data.errors);
                });
        },
        clearForm: function () {
            this.username = '';
            this.password = '';
            this.errors = [];
        }
    },
    watch: {
        errors: function () {
            let er = this.errors[0];
            let element = this;
            let limit = 0;
            $.each(er, function (key, value) {
                if (limit === 0) {
                    toastr.error(value[0]);
                    element.$refs[key].focus();
                    limit++;
                } else {
                    return false;
                }
            });
        },
    }
});