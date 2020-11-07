

$(document).ready(function () {
	

	$('#btncassava').on('click', function(){
		
		$("#cassavatext").toggle(2000);
		$("#btncassavaless").toggle();
		$("#btncassavaless").css({"background-color": "lightgreen", "color":"red"});
		$("#btncassava").toggle();
	
	}); 
	//Code block for hidding the more text, button for less text and showing the one for more text
	$("#btncassavaless").click(function(){
		$("#cassavatext").toggle(2000);
		$("#btncassava").toggle(3000);
		$("#btncassavaless").toggle();
	});

	
	$('#btnmaize').on('click', function(){
		$('#maizetext').toggle(2000);
		$("#btnmaizeless").toggle();
		$("#btnmaizeless").css({"background-color": "lightgreen", "color":"red"});
		$("#btnmaize").toggle();
		
	});
	//Code block for hidding the more text, button for less text and showing the one for more text
	$("#btnmaizeless").click(function(){
		$("#maizetext").toggle(2000);
		$("#btnmaize").toggle(3000);
		$("#btnmaizeless").toggle();
	});


	
	$('#btnpotatoes').on('click', function(){
		$('#potatoestext').toggle(2000);
		$("#btnpotatoesless").toggle();
		$("#btnpotatoesless").css({"background-color": "lightgreen", "color":"red"});
		$("#btnpotatoes").toggle();
	});
	//Code block for hidding the more text, button for less text and showing the one for more text
	$("#btnpotatoesless").click(function(){
		$("#potatoestext").toggle(2000);
		$("#btnpotatoes").toggle(3000);
		$("#btnpotatoesless").toggle();
	});


	
	$('#btnbeans').on('click', function(){
		$('#beanstext').toggle(2000);
		$("#btnbeansless").toggle();
		$("#btnbeansless").css({"background-color": "lightgreen", "color":"red"});
		$("#btnbeans").toggle();
	});
	//Code block for hidding the more text, button for less text and showing the one for more text
	$("#btnbeansless").click(function(){
		$("#beanstext").toggle(2000);
		$("#btnbeans").toggle(3000);
		$("#btnbeansless").toggle();
	});

	$('#btnrice').on('click', function(){
		$('#ricetext').toggle(2000);
		$("#btnriceless").toggle();
		$("#btnriceless").css({"background-color": "lightgreen", "color":"red"});
		$("#btnrice").toggle();
	});
	//Code block for hidding the more text, button for less text and showing the one for more text
	$("#btnriceless").click(function(){
		$("#ricetext").toggle(2000);
		$("#btnrice").toggle(3000);
		$("#btnriceless").toggle();
	});



	$('#btnoilpalms').on('click', function(){
		$('#oilpalmstext').toggle(2000);
		$("#btnoilpalmless").toggle();
		$("#btnoilpalmless").css({"background-color": "lightgreen", "color":"red"});
		$("#btnoilpalms").toggle();
	});
	//Code block for hidding the more text, button for less text and showing the one for more text
	$("#btnoilpalmless").click(function(){
		$("#oilpalmstext").toggle(2000);
		$("#btnoilpalms").toggle(3000);
		$("#btnoilpalmless").toggle();
	});


	
		$("#sendFeedback").click(function(){
			var name=$("#name").val();
			var email=$("#email").val();
			var feedback=$("#feedback").val();
			$.ajax({
				url:'feedbackscriptr.php',
				method:'POST',
				data:{
					name:name,
					email:email,
					feedback:feedback
				},
			   success:function(data){
				   alert(data);
			   }
			});
		});
		
		
	$("#btncrops").click(function(){
		$("#cropresearches").toggle("slow", function(){
			if($("#cropresearches").is(":visible")){
				$("#btncrops").css({"background-color":"lightgreen"});
			}else{
				$("#btncrops").css({"background-color":"wheat"});

			}
		});
	});


});





function validateForm(){
	var adminform= document.forms["adminform"]["content"].value;
	if(adminform==""){
		
		$.alert({
			title:'NaCRRI Info system',
			content: 'You do not have any content to submit......!!!'
		});
		//alert("You do not have any content to submit......!!!");
		//return false;
		
	}else{
		alert("Your research content has been submitted succsessfully......!!!");
		//window.location.assign("adminpanel.php");
	}
	
	
}








