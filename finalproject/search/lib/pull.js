var dataselection = $("select")

//$('#my_div').myfunction();

/*if(jQuery){
	alert("Finish");
} else {
	alert("Not Load");
}
*/
$("#event").on("click",function(){
	function show_selection(){
		var sentdata =$(dataselection).find(':selected').attr("data-id").toLowerCase();
		$.ajax({
			type: "POST",
			url:"pdo_connect.php",
			data : {sent : sentdata },
			success: function (data) {
				$("#content").css("margin-top","50px");
				$("#content").html(data);
				$(".table").css("max-width","900px");
				$(".table").css("margin","0 auto");
				$(".bgthead").css("background-color", "#8F3D82");
				$(".textTable").css("color","white");
				$(".textTable").css("text-align","center");
				$(".bg").css("background-color", "#F7EBF5")
				$(".main").hide();
				$(".form-control").css("margin-top","30px");
				
			}
		});
	}

	show_selection();
});

/*	request.done(function(data) {
        // update the user
        $('#response').html(data);
    })
    request.fail(function(jqXHR, textStatus) {
        console.log(textStatus);
    })
    request.always(function(data) {
        // clear the form
        $('form[name="' + formName + '"]').trigger('reset');
    });
	//alert(sentdata);
});*/

