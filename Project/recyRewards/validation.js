/*
$(document).ready(function(){
    $('#type').change(function(){
        if($(this).val()==='School')
        {
            $(".hidden-input").show()
        }
        else{
            $(".hidden-input").hide()
        }
});
});*/
function showSchool(){
    if(document.getElementById('type').value == 'School'){
        document.getElementById('individual').style.display ='none';
        document.getElementById('School_Input').style.display= 'block';
    }
    else{
        document.getElementById('individual').style.display ='block';
        document.getElementById('School_Input').style.display= 'none';
    }
}
$(document).ready(function(){ //newly added
    $('#Submit').click(function() {alert('in');
        var emailVal = $('#email').val(); // assuming this is a input text field
        $.post('checkemail.php', {'email' : emailVal}, function(data) {
            if(data=='exist') return false;
            else $('#form1').submit();
        });
    });});