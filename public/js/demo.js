/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/demo.js ***!
  \******************************/
$('#form').on('submit', function (e) {
  e.preventDefault();
  var name = document.getElementById('name').value;
  var response_id = document.getElementById('response');
  response_id.innerHTML = '';
  axios.post(route('demo.post'), {
    'name': name
  }).then(function (response) {
    response_id.innerText = response.data.name;
  })["catch"](function (error) {
    console.log(error.response.data);
  });
});
/******/ })()
;