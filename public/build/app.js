(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/css/app.css":
/*!****************************!*\
  !*** ./assets/css/app.css ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you require will output into a single css file (app.css in this case)
__webpack_require__(/*! ../css/app.css */ "./assets/css/app.css"); // Need jQuery? Install it with "yarn add jquery", then uncomment to require it.


document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems);
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems);
  var elems = document.querySelectorAll('.tabs');
  var instance = M.Tabs.init(elems);
  var elems = document.querySelectorAll('.datepicker');
  var instances = M.Datepicker.init(elems);
});
console.log('javascript app');

/***/ })

},[["./assets/js/app.js","runtime"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY3NzL2FwcC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyJdLCJuYW1lcyI6WyJyZXF1aXJlIiwiZG9jdW1lbnQiLCJhZGRFdmVudExpc3RlbmVyIiwiZWxlbXMiLCJxdWVyeVNlbGVjdG9yQWxsIiwiaW5zdGFuY2VzIiwiTSIsIk1vZGFsIiwiaW5pdCIsIkRyb3Bkb3duIiwiU2lkZW5hdiIsImluc3RhbmNlIiwiVGFicyIsIkRhdGVwaWNrZXIiLCJjb25zb2xlIiwibG9nIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7QUFBQSx1Qzs7Ozs7Ozs7Ozs7QUNBQTs7Ozs7O0FBT0E7QUFDQUEsbUJBQU8sQ0FBQyw0Q0FBRCxDQUFQLEMsQ0FFQTs7O0FBQ0FDLFFBQVEsQ0FBQ0MsZ0JBQVQsQ0FBMEIsa0JBQTFCLEVBQThDLFlBQVc7QUFDckQsTUFBSUMsS0FBSyxHQUFHRixRQUFRLENBQUNHLGdCQUFULENBQTBCLFFBQTFCLENBQVo7QUFDQSxNQUFJQyxTQUFTLEdBQUdDLENBQUMsQ0FBQ0MsS0FBRixDQUFRQyxJQUFSLENBQWFMLEtBQWIsQ0FBaEI7QUFDQSxNQUFJQSxLQUFLLEdBQUdGLFFBQVEsQ0FBQ0csZ0JBQVQsQ0FBMEIsbUJBQTFCLENBQVo7QUFDQSxNQUFJQyxTQUFTLEdBQUdDLENBQUMsQ0FBQ0csUUFBRixDQUFXRCxJQUFYLENBQWdCTCxLQUFoQixDQUFoQjtBQUNBLE1BQUlBLEtBQUssR0FBR0YsUUFBUSxDQUFDRyxnQkFBVCxDQUEwQixVQUExQixDQUFaO0FBQ0EsTUFBSUMsU0FBUyxHQUFHQyxDQUFDLENBQUNJLE9BQUYsQ0FBVUYsSUFBVixDQUFlTCxLQUFmLENBQWhCO0FBQ0EsTUFBSUEsS0FBSyxHQUFHRixRQUFRLENBQUNHLGdCQUFULENBQTBCLE9BQTFCLENBQVo7QUFDQSxNQUFJTyxRQUFRLEdBQUdMLENBQUMsQ0FBQ00sSUFBRixDQUFPSixJQUFQLENBQVlMLEtBQVosQ0FBZjtBQUNBLE1BQUlBLEtBQUssR0FBR0YsUUFBUSxDQUFDRyxnQkFBVCxDQUEwQixhQUExQixDQUFaO0FBQ0EsTUFBSUMsU0FBUyxHQUFHQyxDQUFDLENBQUNPLFVBQUYsQ0FBYUwsSUFBYixDQUFrQkwsS0FBbEIsQ0FBaEI7QUFDRCxDQVhIO0FBYUFXLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLGdCQUFaLEUiLCJmaWxlIjoiYXBwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luIiwiLypcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcbiAqXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxuICovXG5cbi8vIGFueSBDU1MgeW91IHJlcXVpcmUgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXG5yZXF1aXJlKCcuLi9jc3MvYXBwLmNzcycpO1xuXG4vLyBOZWVkIGpRdWVyeT8gSW5zdGFsbCBpdCB3aXRoIFwieWFybiBhZGQganF1ZXJ5XCIsIHRoZW4gdW5jb21tZW50IHRvIHJlcXVpcmUgaXQuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24oKSB7XG4gICAgdmFyIGVsZW1zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLm1vZGFsJyk7XG4gICAgdmFyIGluc3RhbmNlcyA9IE0uTW9kYWwuaW5pdChlbGVtcyk7XG4gICAgdmFyIGVsZW1zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmRyb3Bkb3duLXRyaWdnZXInKTtcbiAgICB2YXIgaW5zdGFuY2VzID0gTS5Ecm9wZG93bi5pbml0KGVsZW1zKTtcbiAgICB2YXIgZWxlbXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuc2lkZW5hdicpO1xuICAgIHZhciBpbnN0YW5jZXMgPSBNLlNpZGVuYXYuaW5pdChlbGVtcyk7XG4gICAgdmFyIGVsZW1zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLnRhYnMnKTtcbiAgICB2YXIgaW5zdGFuY2UgPSBNLlRhYnMuaW5pdChlbGVtcyk7XG4gICAgdmFyIGVsZW1zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmRhdGVwaWNrZXInKTtcbiAgICB2YXIgaW5zdGFuY2VzID0gTS5EYXRlcGlja2VyLmluaXQoZWxlbXMpO1xuICB9KTtcblxuY29uc29sZS5sb2coJ2phdmFzY3JpcHQgYXBwJylcblxuIl0sInNvdXJjZVJvb3QiOiIifQ==