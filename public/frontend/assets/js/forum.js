function validate_question(){var check=0;if($.trim($('#thread_title').val())==""){$("#thread_title").addClass('invalid');$("#error_quest_title").html('Please enter title');if(check==0){check=check+1;}}else{var title=$('#thread_title').val();var check_special=validate_name($('#thread_title').val());if(title.length>100){$("#thread_title").addClass('invalid');$("#error_quest_title").html('Title must be upto 100 characters');if(check==0){check=check+1;}}else if(check_special==false){$("#thread_title").addClass('invalid');$("#error_quest_title").html('Special characters are not allowed');if(check==0){check=check+1;}}else{$("#error_quest_title").html('');$("#thread_title").removeClass('invalid');}}
if($("#question_details").is(":visible")==true){if($.trim($('#question_details').val())==""){$("#question_details").addClass('invalid');$("#error_question_details").html('Please enter question details');if(check==0){check=check+1;}}else{var details=$('#question_details').val();var words=details.match(/\S+/g).length;if(words>200){$("#question_details").addClass('invalid');$("#error_question_details").html('Details must be upto 2000 characters');if(check==0){check=check+1;}}else{$("#question_details").removeClass('invalid');$("#error_question_details").html('');}}}
if(check==0){return true;}else{return false;}}
function validate_name(name){filter=/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;if(!(filter.test(name)))
{return false;}else
{return true;}}
function valid_a_email(email){filter=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;if(!(filter.test(email))){return false;}else{return true;}}
function phonenumber(phone)
{filter=/^[\d\s]+$/;if(!(filter.test(phone)))
{return false;}else
{return true;}}
function phonenumber_signup(phone){filter=/^[\d\s]+$/;if(!(filter.test(phone))){return false;}else
{return true;}}
function pmdc_validate(pmdc){pmd_filter=/^[a-zA-Z0-9\-]+$/;if(!(pmd_filter.test(pmdc))){return false;}else{return true;}}
function validate_education(education){filter=/^[a-zA-Z]+(([\'\,\.\-\][a-zA-Z ])?[a-zA-Z]*)*$/;if(!(filter.test(education))){return false;}else
{return true;}}
$(document).ready(function(){$("#question_details").on('keyup',function(){var words=this.value.match(/\S+/g).length;if(words>200){var trimmed=$(this).val().split(/\s+/,200).join(" ");$(this).val(trimmed+" ");}else{$('#word_left').text(200-words+' words left');}});});