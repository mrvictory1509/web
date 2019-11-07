<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script
  		src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
  	
 	 </script>
  		 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous">
	</script>
	<title>Testing JQuery</title>
</head>
<body>
	<h2>Your todo list</h2>
	ToDo <input type="text" name="" id="task">
	<input type="button" value="Add task" id="btnAdd">
	<br/>
	<ol id="todoList">
		
	</ol>
	<script type="text/javascript">
		$(document).ready(function() {
		//register the click event of the btnButton
		$("#btnAdd").click(function(event) {
			var task=$("#task").val();
			
			if(validate()){
				var remove() ='<a href="#" onclock= "removeTask(this)">Remove</a>';
				$("#todoList").append('<li>' + task+ "--" + remove + "</li>");
				//go back to normal border
				$("#task").css('border', '');
			}
			});
		});
		function removeTask(e){
			$(e).closest('li')..remove();
		}
		function validate(){
			var isValid = true;
			var task=$("#task").val();
			if(task.length==0){
				//apply stylesheet to the textbox
				$("#task").css('border', 'solid 1px red');	
				isValid = false;		
			}
			return isValid;
		}
	</script>
</body>
</html>