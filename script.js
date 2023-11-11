$(function(){
  $('button').on('click', function(){
  let name = $('[name="name"]').val();
  let phone = $('[name="phone"]').val();
  let email = $('[name="email"]').val();
  let data = {
    'name': name,
    'phone': phone,
    'email': email,
  };

  $.post('api.php', data, function(response){
    alert(response);
  });

  return false;
  });
});