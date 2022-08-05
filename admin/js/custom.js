$(document).ready(function(){


  //password match register-student.php
  $('#password2').on('keyup', function () {
    if ($('#password1').val() == $('#password2').val() && $('#password1').val() !== "" && $('#password2').val() !=="") {
      $('#p-message').html('Matched').css('color', 'green');
    } else 
      $('#p-message').html('* Not Matching').css('color', 'red');
  });

  function checkpass(){
    if ($('#password1').val() == $('#password2').val() && $('#password1').val() !== "" && $('#password2').val() !=="") {
      return true;
    }
    else{
        return false;
    }
  }

    //password match settings.php
    $('#inputrpass').on('keyup', function () {
      if ($('#inputnpass').val() == $('#inputrpass').val() && $('#inputnpass').val() !== "" && $('#inputrpass').val() !=="") {
        $('#message').html('Matched').css('color', 'green');
      } else 
        $('#message').html('* Not Matching').css('color', 'red');
    });
  
    function check(){
      if ($('#inputnpass').val() == $('#inputrpass').val() && $('#inputnpass').val() !== "" && $('#inputrpass').val() !=="") {
        return true;
      }
      else{
          return false;
      }
    }

  });



