function toggleDiv(divId) {
    $("#" + divId).show();
    $('.toggle').not($("#" + divId)).hide();
}

//dropdown level1
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

$("a").focusin(function() {
    $('a').css('background', '');
    $(this).css("background", "#f1f1f1");

});