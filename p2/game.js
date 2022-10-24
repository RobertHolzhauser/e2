"use strict";
let timeVisibleMS = 15000;   // 15 seconds

/***
 * On document load completion, allow 15 seconds and hide the Bingo Call element
 */

document.addEventListener('DOMContentLoaded', function () {
    var my_el = document.getElementById("bingo-call");
    setTimeout(hideElement(my_el), 15000);
}, false);

function hideElement(el) {
    el.classList.add("hidden");
    alert('time-out');
}
