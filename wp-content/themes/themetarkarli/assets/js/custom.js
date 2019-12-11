$(document).ready(function(){


});

function hotel_enquiry(){
  var name = $('#hotel_name');
  var email = $('#hotel_email');
  var contact = $('#hotel_contact');
  var from_date = $('#hotel_from_date');
  var to_date = $('#hotel_to_date');

  if (name.hasClass("error") || email.hasClass("error") || contact.hasClass("error") || from_date.hasClass("error") || to_date.hasClass("error")) {
    alert('Please Check the Validations')
  }
  else {
    var base_url = $('#base_url').val();
    $.ajax({
      method:'POST',
      async:false,
      url:base_url+'index.php/Home/hotel_booking',
      data:$('#hotel_form').serialize(),
      dataType:'JSON',
      context:this,
      success:function(res){
        alert(res);
        //alert(res.first_mail.successmsg);
        //alert(res.second_mail.successmsg2);
        $('#myModalsuccess').modal('show');
      },
      error:function(res){
        $('#myModalfailure').modal('show');
        //alert("Failed");
      },
      beforeSend:function(){
        $('.msg-animation').css('display','block');
      },
      complete:function(){
        $('.msg-animation').css('display','none');
      }
    });
  }


}


function car_enquiry(){
  var name = $('#car_name');
  var email = $('#car_email');
  var contact = $('#car_contact');
  var where = $('#car_where');
  var from_date = $('#car_from_date');
  var to_date = $('#car_to_date');

  if (name.hasClass("error") || email.hasClass("error") || contact.hasClass("error") || email.hasClass("error") || from_date.hasClass("error") || to_date.hasClass("error")) {
    alert('Please Check the Validations');
  }
  else {
    var base_url = $('#base_url').val();
    $.ajax({
      method:'POST',
      async:false,
      url:base_url+'index.php/Home/car_booking',
      data:$('#hotel_form').serialize(),
      dataType:'JSON',
      context:this,
      success:function(res){
        alert(res);
        //alert(res.first_mail.successmsg);
        //alert(res.second_mail.successmsg2);
        $('#myModalsuccess').modal('show');
      },
      error:function(res){
        $('#myModalfailure').modal('show');
        //alert("Failed");
      },
      beforeSend:function(){
        $('.msg-animation').css('display','block');
      },
      complete:function(){
        $('.msg-animation').css('display','none');
      }
    });
  }


}


function water_enquiry(){
  var name = $('#water_name');
  var email = $('#water_email');
  var contact = $('#water_contact');

  if (name.hasClass("error") || email.hasClass("error") || contact.hasClass("error")) {
    alert('Please Check the Validations');
  }
  else {
    var base_url = $('#base_url').val();
    $.ajax({
      method:'POST',
      async:false,
      url:base_url+'index.php/Home/water_booking',
      data:$('#hotel_form').serialize(),
      dataType:'JSON',
      context:this,
      success:function(res){
        alert(res);
        //alert(res.first_mail.successmsg);
        //alert(res.second_mail.successmsg2);
        $('#myModalsuccess').modal('show');
      },
      error:function(res){
        $('#myModalfailure').modal('show');
        //alert("Failed");
      },
      beforeSend:function(){
        $('.msg-animation').css('display','block');
      },
      complete:function(){
        $('.msg-animation').css('display','none');
      }
    });
  }
}

function contact_us(){
  var name = $('#contactus_name');
  var lname = $('#contactus_lname_name');
  var email = $('#contactus_email');
  var subject = $('#contactus_subject');
  var message = $('#contactus_message');

  if (name.hasClass("error") || email.hasClass("error") || email.hasClass("error") || subject.hasClass("error") || message.hasClass("error")) {
    alert('Please Check the Validations');
  }
  else {
    var base_url = $('#base_url').val();
    $.ajax({
      method:'POST',
      async:false,
      url:base_url+'index.php/Contact/contact_mail',
      data:$('#contact_form').serialize(),
      dataType:'JSON',
      context:this,
      success:function(res){
        alert(res);
        //alert(res.first_mail.successmsg);
        //alert(res.second_mail.successmsg2);
        $('#myModalsuccess').modal('show');
      },
      error:function(res){
        $('#myModalfailure').modal('show');
        //alert("Failed");
      },
      beforeSend:function(){
        $('.msg-animation').css('display','block');
      },
      complete:function(){
        $('.msg-animation').css('display','none');
      }
    });
  }
}



function validate_form(input_id,input_type,is_required,e){
  /*
    input type:
      1-Text,
      2-Number,
      3-Email,
      4-Date
  */
  var validator = true;
  var input_value = $('#'+input_id).val();
  var input_html = $('#'+input_id);
  if(input_type == 1){
    //input type text
    var regex = /^[a-zA-Z\s]+$/;
  }
  else if (input_type == 2) {
    //input type number
    var regex = /[1-9]{1}[0-9]{9}/;
  }
  else if (input_type == 3) {
    //input type email
    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  }
  else if (input_type == 4) {
    //.val doesnt works for input type date so using event.target.value
    var input_value = e.target.value;
    var regex = "";
  }
  else {
    //email or date or select
    var regex = "";
  }

  //If is required
  if (is_required == true) {
    if(input_value == 0 || !input_value.match(regex)){
      validator = false;
      //add red border to element
      input_html.addClass('validation-border');
      //show validation msg
      var error_msg_id = input_html.next('span').attr('id');
      $('#'+error_msg_id).text("Enter Correct Input");
    }
    else {
      validator = true;
      //remove red border to element
      input_html.removeClass('validation-border');
      input_html.removeClass('error');
      //remove validation msg
      var error_msg_id = input_html.next('span').attr('id');
      $('#'+error_msg_id).text("");
    }
  }
  //not required and validate with regex
  else{
    if(!input_value.match(regex)){

      validator = false;
      //add red border to element
      input_html.addClass('validation-border');
      //show validation msg
      var error_msg_id = input_html.next('span').attr('id');
      $('#'+error_msg_id).text("Enter Correct Input");
    }
    else {
      validator = true;
      //remove red border to element
      input_html.removeClass('validation-border');
      input_html.removeClass('error');
      //remove validation msg
      var error_msg_id = input_html.next('span').attr('id');
      $('#'+error_msg_id).text("");
    }
  }

}
