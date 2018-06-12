

$(document).ready(function(){

	$("#sidebar-menu").on('click',function(){
		//alert("test");
		
		if($(".sidebar1").hasClass("sidebar1-open")) {
			$(".sidebar1").hide();
			$(".sidebar1").addClass("sidebar1-close");
			$(".sidebar1").removeClass("sidebar1-open");
			$(".main-content").removeClass("col-md-10");
			$(".main-content").removeClass("col-sm-8");
			$(".main-content").addClass("col-md-12");
			$(".main-content").addClass("col-sm-12");
			$(".main-content").css("margin-left","0%");
			$(".navbar-fixed-top").css("margin-left","0%");

		} else if ($(".sidebar1").hasClass("sidebar1-close")) {
			$(".sidebar1").show();
			$(".sidebar1").addClass("sidebar1-open");
			$(".sidebar1").removeClass("sidebar1-close");
			$(".main-content").removeClass("col-md-12");
			$(".main-content").removeClass("col-sm-12");
			$(".main-content").addClass("col-md-10");
			$(".main-content").addClass("col-sm-8");
			$(".main-content").css("margin-left","17%");
			$(".navbar-fixed-top").css("margin-left","17.3%");
		}
		
	});

});

	$(document).on('click',"#btn_MD_JOIN_MEETING",function(e){
		var row = $(this).closest('tr');
		var meeting_id = row.find("#meeting_id").text();
		var doctor_id = row.find("#doctor_id").text();
		var data = {
			meeting_id:meeting_id,
			doctor_id:doctor_id
		}

		$.ajax({
			type:'POST',
			timeout:3000,
			url:'update/update_invite.php',
			data:data,
			success:function(response){
				console.log(response);
				if(response.trim() === "|SUCCESS|"){
					$("#tbl_MD_INVITE_MEETING").load("index.php #tbl_MD_INVITE_MEETING");
					$("#schedule_table").load("index.php #schedule_table");
				}
			}
		})
	})


