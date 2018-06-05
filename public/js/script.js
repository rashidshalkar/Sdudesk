// Get the modal
var modal = document.getElementById('myModal');
var lost = document.getElementById('myModal_lost');


// Get the button that opens the modal
var btn = document.getElementById("foundBtn");
var btnlost =  document.getElementById("lostBtn");
		
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span_2 = document.getElementsByClassName("close")[1];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    myModal.style.display = "block";
}

btnlost.onclick = function(){
	myModal_lost.style.display = "block"
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

span_2.onclick = function() {
    lost.style.display = "none";
}

$(function(){
    $("#datepicker").datepicker({
        autoclose: true,
        todayHighlight: true
    }).datepicker();
});

$(function(){
    $("#datepicker_lost").datepicker({
        autoclose: true,
        todayHighlight: true
    }).datepicker();
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == lost) {
        lost.style.display = "none";
    }
}

$('#file-upload').change(function() {
    var fileSelect = $(this).val();
    if(fileSelect.length>20){
        fileSelect = fileSelect.slice(12,25)+"...";
    }
    $('#name_file').text(fileSelect);
});

$('#file-upload-lost').change(function() {
    var fileSelect = $(this).val();
    if(fileSelect.length>20){
        fileSelect = fileSelect.slice(12,25)+"...";
    }
    $('#name_file_lost').text(fileSelect);
});
    