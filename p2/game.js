"use strict";
let timeVisibleMS = 15000;   // 15 seconds

/***
 * On document load completion, allow 15 seconds and hide the Bingo Call element
 */
let el;
document.addEventListener('DOMContentLoaded', function () {
    el = document.getElementById("bingo-call");
    setTimeout(hideElement(el), 15000);
}, false);

function hideElement(el) {
    el.classList.add("hidden");
    alert('time-out');
}
