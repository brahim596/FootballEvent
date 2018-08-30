function validerInscription(id){

var mail=$("#"+id).find("#mail").html();
alert(mail);

  $.ajax({
       url : "../controller/controller.php?action=mail&mail="+mail,
       type : 'GET',
       dataType : "html"
    }).done(function(data){
      alert(data);

    });

}
