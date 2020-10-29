require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',

    data() {
        return {
            testData: true
        }
    }
});

window.onscroll = function() {
    changeHeaderBgColor();
    scrollFunction();
};

// ====== Sticky To Top Button ====== //
var topBtn = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        topBtn.style.display = "block";
    } else {
        topBtn.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
document.getElementById('topBtn').addEventListener('click', topFunction);

// ===== Change Colour Of Menu Bar Upon Scroll ==== //
function changeHeaderBgColor() {
    var header = document.getElementById('navbar-header');
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {

        header.classList.add('changeHeaderColor');
    } else {
        header.classList.remove('changeHeaderColor');
    }
}
