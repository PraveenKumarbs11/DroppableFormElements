<!DOCTYPE HTML>
<html>
	<head>
  		<title>DROPPABLE FORM ELEMENTS</title>
		<style>
			.droppableForm{
				border: 1px solid #000;
				padding: 20px;
			}
			.inputElements{
				margin:  15px;
			}
			#div1 {
			  	width: 350px;
			  	height: 150px;
			  	/*border: 1px solid #aaaaaa;*/
			}
			.phn, .pwd, .status, .agreement{
				border: 1px solid #000;
				padding: 5px;
				margin: 5px;
			}
		</style>
		<script>
			function allowDrop(ev) {
			  	ev.preventDefault();
			}
			function drag(ev) {
			  	ev.dataTransfer.setData("text", ev.target.id);
			}
			function drop(ev) {
			  	ev.preventDefault();
			  	var data = ev.dataTransfer.getData("text");
			  	ev.target.appendChild(document.getElementById(data));
			  	var eleClass = document.getElementById(data).className;
			  	createElem(eleClass);
			}
			function createElem(eleClass){
			  	if(eleClass == "phn"){
			    	const div = document.createElement('div');
			    	div.className = 'row';
			    	div.innerHTML = `<input type="text" name="phone" placeholder="Phone Number" /><br>`;
			  		document.getElementById('drag1').appendChild(div);
			  	}
			  	else if(eleClass == "pwd"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<input type="password" name="password" placeholder="Password" /><br>`;
			  		document.getElementById('drag2').appendChild(div);
			  	}
			  	else if(eleClass == "status"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<input type="radio" value="male" name="marital" class="inputElements"> Male <input type="radio" value="female" name="marital" class="inputElements"> Female<br>`;
			  		document.getElementById('drag3').appendChild(div);
			  	}
			  	else if(eleClass == "agreement"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<input type="checkbox" name="terms" class="inputElements"> Accept Terms and Conditions<br>`;
				  document.getElementById('drag4').appendChild(div);
			  	}
			}
		</script>
	</head>
	<body>
		<div class="container">
			<div class="mainForm">
				<div class="droppableForm">
					<form action="resultForm" method="post">
						@csrf
						<input type="text" name="name" class="inputElements" placeholder="Name"><br>
						<input type="email" name="email" class="inputElements" placeholder="Email"><br>
						<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
						<input type="submit" value="Save">
						<input type="reset" value="Cancel">
					</form>
				</div><br>
				<div class="draggableElements">
					<div id="drag1" class="phn" draggable="true" ondragstart="drag(event)">Phone Number</div>
					<div id="drag2" class="pwd" draggable="true" ondragstart="drag(event)">Password</div>
					<div id="drag3" class="status" draggable="true" ondragstart="drag(event)">Marital Status</div>
					<div id="drag4" class="agreement" draggable="true" ondragstart="drag(event)">Agreement</div>
				</div>
			</div>
		</div>
	</body>
</html>
