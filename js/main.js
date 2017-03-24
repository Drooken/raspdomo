  $('.tuile').hide();
  $('.tuile').fadeIn(1000);
  
function changerEtat(gpio,tuile){
	
	var etat = ($(tuile).hasClass('on')?0:1);

 	$.ajax({
			type: "POST",
			url: "action.php",
			data:{gpio:gpio,etat:etat},
			success : function(){
			console.log("Ouuuuuiiiiiiii!!!!!!");
			$(tuile).removeClass('on');
			$(tuile).removeClass('off');
			$(tuile).addClass((etat==1?'on':'off'));
			// $(tuile).text("test");
			},
			error : function(){
			console.log("Une erreur s'est produite!");
			}
	});
   }




