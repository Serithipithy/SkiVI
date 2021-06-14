function drop1() {
    document.getElementById("course--dropdown").classList.toggle("show");
}

function drop2() {
    document.getElementById("course--dropdown2").classList.toggle("show");
}

function drop3() {
    document.getElementById("course--dropdown3").classList.toggle("show");
}

function drop4() {
    document.getElementById("course--dropdown4").classList.toggle("show");
}

function drop5() {
    document.getElementById("course--dropdown5").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn--course')) {
        var dropdowns = document.getElementsByClassName("dropdown--course");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}