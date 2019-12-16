$(document).ready(function(){
  $('#popup-close').click(function () {
    $('#error-message-popup').hide();// hides alert with Bootstrap CSS3 implem
  });

});



//Function to convert formdata to JS Object
$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};



function hotel_enquiry(){
  var name = $('#hotel_name');
  var email = $('#hotel_email');
  var contact = $('#hotel_contact');
  var from_date = $('#hotel_from_date');
  var to_date = $('#hotel_to_date');

  if (name.hasClass("error") || email.hasClass("error") || contact.hasClass("error") || from_date.hasClass("error") || to_date.hasClass("error")) {
    $('#error-message-popup').show();
  }
  else {
    jQuery.ajax({
      type: "POST",
      url: ajax_obj.ajaxurl,
      data: {
        action : 'insert_hotel',
        form_data : $('#hotel_form').serializeObject()
      },
      dataType:'JSON',
      success:function(res){
        alert(res['response_result']);
        document.getElementById("hotel_form").reset(); 
        $('#myModalsuccess').modal('show');
      },
      error:function(res){
        document.getElementById("hotel_form").reset();
        $('#myModalfailure').modal('show'); 
      },
      beforeSend:function(){
        $('.msg-animation').css('display','block');
      },
      complete:function(){
        document.getElementById("hotel_form").reset(); 
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
    $('#error-message-popup').show();
  }
  else {
    jQuery.ajax({
      type: "POST",
      url: ajax_obj.ajaxurl,
      data: {
        action : 'insert_car',
        form_data : $('#car_form').serializeObject()
      },
      dataType:'JSON',
      success:function(res){
        alert(res['response_result']);
        document.getElementById("car_form").reset(); 
        $('#myModalsuccess').modal('show');
      },
      error:function(res){
        document.getElementById("car_form").reset();
        $('#myModalfailure').modal('show'); 
      },
      beforeSend:function(){
        $('.msg-animation').css('display','block');
      },
      complete:function(){
        document.getElementById("car_form").reset(); 
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
    $('#error-message-popup').show();
  }
  else {
    jQuery.ajax({
      type: "POST",
      url: ajax_obj.ajaxurl,
      data: {
        action : 'insert_watersports',
        form_data : $('#water_sports_form').serializeObject()
      },
      dataType:'JSON',
      success:function(res){
        alert(res['response_result']);
        document.getElementById("water_sports_form").reset(); 
        $('#myModalsuccess').modal('show');
      },
      error:function(res){
        document.getElementById("water_sports_form").reset();
        $('#myModalfailure').modal('show'); 
      },
      beforeSend:function(){
        $('.msg-animation').css('display','block');
      },
      complete:function(){
        document.getElementById("water_sports_form").reset(); 
        $('.msg-animation').css('display','none');
      }
    });
  }
}

function contact_us(){
  var name = $('#contactus_name');
  var lname = $('#contactus_lname_name');
  var email = $('#contactus_email');
  var message = $('#contactus_message');

  if (name.hasClass("error") || lname.hasClass("error") || email.hasClass("error") || message.hasClass("error")) {
    $('#error-message-popup').show();
  }
  else {
    jQuery.ajax({
      type: "POST",
      url: ajax_obj.ajaxurl,
      data: {
        action : 'contact_mail',
        form_data : $('#contact_form').serializeObject()
      },
      dataType:'JSON',
      success:function(res){
        alert(res['response_result']);
        document.getElementById("contact_form").reset(); 
        $('#myModalsuccess').modal('show');
      },
      error:function(res){
        document.getElementById("contact_form").reset();
        $('#myModalfailure').modal('show'); 
      },
      beforeSend:function(){
        $('.msg-animation').css('display','block');
      },
      complete:function(){
        document.getElementById("contact_form").reset(); 
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
