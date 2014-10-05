<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
	<head>
	<title>Dynamic Table</title>
	<style>
		input[type="text"].task {
			border:none;
			background-color:transparent;
			color:green;
		}
		
		input[type="text"].task:hover {
			background-color:Wheat;
			cursor:default;
		}
		
		input[type="text"].task:focus {
			box-shadow: 0 0 5px rgba(81, 203, 238, 1);
			border: 1px solid rgba(0, 103, 238, 1);
			background-color:transparent;
			cursor:text;
		}
		
		tasks.td {
			padding:10px;
		}
	</style>
	<script>
		function addTask() {
			var taskNo = document.getElementById("tasks").rows.length;
      document.getElementById("tasks").insertRow(-1).innerHTML = '<td style="color:green">' + taskNo + '</td><td><input id="' + taskNo + '" class="task" type="text" placeholder="(Enter subject here)"></td><td><input type="text" class="task" size="50" placeholder="(Enter description here)"></td><td style="color:green">23 Dec 2013</td>';
			document.getElementById(taskNo).focus(); 
    }	
		
	</script>
	</head>
	<body>
		<table id='tasks' border='1' style='border-collapse:collapse;border:2px solid brown;text-align:center;font-family:Calibri;'>
			<tr style='color:green'>
				<th>Task no.</th>
				<th>Subject</th>
				<th>Description</th>
				<th>Date added</th>
			</tr>
			<tr>
				<td style='color:green'>1</td>
				<td><input id='1' class="task" type='text' placeholder='(Enter subject here)' value='Do Laundry' ></td>
				<td><input class="task" type='text' size='50' placeholder='(Enter description here)' value='Do before Dad comes home.' ></td>
				<td style='color:green'>23 Dec 2013</td>
			</tr>
		</table>
		<input id='add-task' type='button' value='Add a task' onclick="addTask()">
	</body>
</html>
