<!DOCTYPE HTML>
<html>
<head>
  <title>DRAG DROP | FORMS</title>
<style>
#div1 {
  width: 350px;
  height: 150px;
  padding: 10px;
  border: 1px solid #aaaaaa;
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
  if(eleClass == "leaveForm"){
    const div = document.createElement('div');
    div.className = 'row';
    div.innerHTML = `
    <form action="leaveForm" method="post">
    @csrf
    <input type="text" name="name" value="" />
    <input type="text" name="value" value="" />
    <label> 
      <input type="checkbox" name="check" value="1" /> Checked? 
    </label>
    <input type="button" value="-" onclick="removeRow(this)" />
    <input type="submit" value="save"/>
    </form>
  `;
  document.getElementById('drag1').appendChild(div);
  }
  else if(eleClass == "appraisalForm"){
    const div = document.createElement('div');
    div.className = 'row';
    div.innerHTML = `
    <form action="appForm" method="post">
    @csrf
    <input type="text" name="name" value="" />
    <input type="email" placeholder="email" name="value" value="" />
    <label> 
    <input type="text" placeholder="phonenumber" />
      <input type="checkbox" name="check" value="1" /> Checked? 
    </label>
    <input type="button" value="-" onclick="removeRow(this)" />
    <input type="submit" value="save"/>
    </form>
  `;
  document.getElementById('drag2').appendChild(div);
  }
  else if(eleClass == "empForm"){
    const div = document.createElement('div');
    div.className = 'row';
    div.innerHTML = `
    <form action="empForm" method="post">
    @csrf
    <input type="text" name="name" value="" />
      <input type="checkbox" name="check" value="1" /> Checked? 
    </label>
    <input type="button" value="-" onclick="removeRow(this)" />
    <input type="submit" value="save"/>
    </form>
  `;
  document.getElementById('drag3').appendChild(div);
  }
  else if(eleClass == "permissionForm"){
    const div = document.createElement('div');
    div.className = 'row';
    div.innerHTML = `
    <form action="perForm" method="post">
    @csrf
    <input type="text" name="name" value="" />
    <input type="email" placeholder="email" name="value" value="" />
    <label> 
    <input type="text" placeholder="phonenumber" />
    <input type="text" name="name" value="" />
    <input type="email" placeholder="email" name="value" value="" />
    <label> 
    <input type="text" placeholder="phonenumber" />
    <input type="text" name="name" value="" />
    <input type="email" placeholder="email" name="value" value="" />
    <label> 
    <input type="text" placeholder="phonenumber" />
      <input type="checkbox" name="check" value="1" /> Checked? 
    </label>
    <input type="button" value="-" onclick="removeRow(this)" />
    <input type="submit" value="save"/>
    </form>
  `;
  document.getElementById('drag4').appendChild(div);
  }
}
function removeRow(input) {
  document.getElementById('drag1').removeChild(input.parentNode);
}
</script>
</head>
<body>
<p>Drag the elements into the rectangle:</p>
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<div id="drag1" class="leaveForm" draggable="true" ondragstart="drag(event)">Leave Form</div>
<div id="drag2" class="appraisalForm" draggable="true" ondragstart="drag(event)">Appraisal Form</div>
<div id="drag3" class="empForm" draggable="true" ondragstart="drag(event)">Emp Form</div>
<div id="drag4" class="permissionForm" draggable="true" ondragstart="drag(event)">Permission Form</div>
</body>
</html>
