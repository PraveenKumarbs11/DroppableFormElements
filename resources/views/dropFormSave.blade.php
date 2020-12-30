<!DOCTYPE HTML>
<html>
	<head>
  		<title>DROPPABLE FORM ELEMENTS</title>
		<style>
			.droppableForm{
				border: 1px solid #000;
				padding: 20px;
				float: left;
				width: 40%;
				height: 740px;
			}
			.inputElements{
				margin: 7px;
			}
			.draggableElements{
				float: right;
				width: 50%;
				height: 740px;
			}
			#div1 {
			  	width: 550px;
			  	height: 550px;
			  	/*border: 1px solid #aaaaaa;*/
			}
			.phn, .pwd, .status, .agreement, .name, .email, .username, .address, .dob, .website, .position, .resume{
				border: 1px solid #000;
				padding: 5px;
				margin: 5px;
				cursor: all-scroll;
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
			  	else if(eleClass == "name"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<input type="text" name="name" placeholder="Name" /><br>`;
			  		document.getElementById('drag5').appendChild(div);
			  	}
			  	else if(eleClass == "email"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<input type="email" name="email" placeholder="Email"><br>`;
			  		document.getElementById('drag6').appendChild(div);
			  	}
			  	else if(eleClass == "username"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<input type="text" name="username" placeholder="UserName"><br>`;
				  document.getElementById('drag7').appendChild(div);
			  	}
			  	else if(eleClass == "address"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<textarea name="address" placeholder="Address" ></textarea><br>`;
			  		document.getElementById('drag8').appendChild(div);
			  	}
			  	else if(eleClass == "dob"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<input type="date" name="date"><br>`;
			  		document.getElementById('drag9').appendChild(div);
			  	}
			  	else if(eleClass == "website"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<input type="link" name="link"><br>`;
				  document.getElementById('drag10').appendChild(div);
			  	}
			  	else if(eleClass == "position"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<input type="text" name="position" placeholder="Position"><br>`;
			  		document.getElementById('drag11').appendChild(div);
			  	}
			  	else if(eleClass == "resume"){
				    const div = document.createElement('div');
				    div.className = 'row';
				    div.innerHTML = `<input type="file" name="resume"><br>`;
				  	document.getElementById('drag12').appendChild(div);
			  	}
			}
			function saveForm(){
			  	var finalForm = document.getElementById('savableForm');
			  	const div = document.createElement('div');
				div.className = 'row';
				div.innerHTML = `<input type="submit" value="Save"><input type="reset" value="Cancel"/>`;
				finalForm.appendChild(div);
				var container = document.getElementById('container');
				const saveFinalForm = document.createElement('div');
				saveFinalForm.setAttribute('id', 'finalForm');
				saveFinalForm.setAttribute('class', 'finalForm');
				saveFinalForm.appendChild(finalForm);
				container.appendChild(saveFinalForm);
			}
		</script>
	</head>
	<body>
		<div class="container" id="container">
			<div class="mainForm">
				<div class="droppableForm" id="test">
					<form action="finalForm" id="savableForm" method="post">
						@csrf
						<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">Droppable Area</div>
					</form><hr/>
					<div class="saveForm">
						<button onclick="saveForm()">SaveForm</button>
					</div>
				</div>
				<br>
				<div class="draggableElements">
					<div id="drag1" class="phn" draggable="true" ondragstart="drag(event)">Phone Number</div>
					<div id="drag2" class="pwd" draggable="true" ondragstart="drag(event)">Password</div>
					<div id="drag3" class="status" draggable="true" ondragstart="drag(event)">Marital Status</div>
					<div id="drag4" class="agreement" draggable="true" ondragstart="drag(event)">Agreement</div>
					<div id="drag5" class="name" draggable="true" ondragstart="drag(event)">Name</div>
					<div id="drag6" class="email" draggable="true" ondragstart="drag(event)">Email</div>
					<div id="drag7" class="username" draggable="true" ondragstart="drag(event)">UserName</div>
					<div id="drag8" class="address" draggable="true" ondragstart="drag(event)">Address</div>
					<div id="drag9" class="dob" draggable="true" ondragstart="drag(event)">Date of Birth</div>
					<div id="drag10" class="website" draggable="true" ondragstart="drag(event)">Portfolio</div>
					<div id="drag11" class="position" draggable="true" ondragstart="drag(event)">Position</div>
					<div id="drag12" class="resume" draggable="true" ondragstart="drag(event)">Resume</div>
				</div>
			</div>
		</div>
	</body>
</html>
