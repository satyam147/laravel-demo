/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/Auth/register.js ***!
  \***************************************/
var registration = new Vue({
  el: '#registration',
  data: {
    errors: [],
    username: '',
    password: ''
  },
  methods: {
    register: function register() {
      this.errors = [];
      axios.post(route('Auth.Register'), {
        username: this.username,
        password: this.password
      }).then(function (response) {
        var response_data = response.data;

        if (response_data.status) {
          toastr.success('User Registered.');
          registration.clearForm();
        } else {
          toastr.error(response_data.msg);
        }
      })["catch"](function (error) {
        registration.errors.push(error.response.data.errors);
      });
    },
    clearForm: function clearForm() {
      this.username = '';
      this.password = '';
      this.errors = [];
    }
  },
  watch: {
    errors: function errors() {
      var er = this.errors[0];
      var element = this;
      var limit = 0;
      $.each(er, function (key, value) {
        if (limit === 0) {
          toastr.error(value[0]);
          element.$refs[key].focus();
          limit++;
        } else {
          return false;
        }
      });
    }
  }
});
/******/ })()
;