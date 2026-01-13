
document.addEventListener("DOMContentLoaded", function () {
    var i = 0;
    var txt = "Find Your Perfect Employee Match";
    var txt = "Africa’s Brightest Talent.";
    var speed = 100;

    function typeWriter1() {
        if (i < txt.length) {
            document.getElementById("typingText").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter1, speed);
        } else {

            setTimeout(function () {
                i = 0;
                document.getElementById("typingText").innerHTML = '';
                typeWriter1();
            }, 2000);
        }

    }

    typeWriter1();

});
document.addEventListener("DOMContentLoaded", function () {
    var i = 0;
    var txt2 = "Africa’s Brightest Talent.";
    var speed = 100;

    function typeWriter2() {
        if (i < txt2.length) {
            document.getElementById("typingText2").innerHTML += txt2.charAt(i);
            i++;
            setTimeout(typeWriter2, speed);
        } else {

            setTimeout(function () {
                i = 0;
                document.getElementById("typingText2").innerHTML = '';
                typeWriter2();
            }, 2000);
        }

    }

    typeWriter2();

});
