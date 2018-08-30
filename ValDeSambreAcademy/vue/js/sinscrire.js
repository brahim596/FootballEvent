
$( document ).ready(function() {
afficheAffiche();
$("#selecao").change(function (){
  afficheAffiche();
})

});


function afficheAffiche(){

  var id=$("select option:selected").attr("id");

  $.ajax({
       url : "../controller/controller.php?action=affiche&id="+id,
       type : 'GET',
       dataType : "html"
    }).done(function(data){

      $("#afficheImg").attr("src","img/event/"+data);

    });

}
