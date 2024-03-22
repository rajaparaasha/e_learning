$(document).ready(function() {
	// alert();

	//delete all data

	$(".delete").click(function(){
		var id = $(this).attr("main-id");
		var table = $(this).attr("table");
		var col_nm = $(this).attr("col_nm");
		var fileName = $(this).attr("fileName");
	
		// alert(id + table + col_nm + fileName);

		$.ajax({
				url:"process/delete.php",
				method : "post",
				data : {delete_data : 1, id : id , table : table , col_nm : col_nm},
				success:function(data)
				{
					// alert(data);
					if (data > 0) 
					{
						window.location.href = fileName;
					}
					else
					{
						window.location.href = fileName;
					}
				}
			});

	});
});