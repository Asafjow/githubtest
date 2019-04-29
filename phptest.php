<html>
  <head>
  <head>
  
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
}
  </script>
  <svg width="500" height="500">
<path d="M 0 0 L200 200 L200 0 Z" style="stroke:#000;  fill:none;" />
</svg>
  <svg width="1000" height="250">
   <rect width="50" height="50" fill="blue">
       <animate attributeName="x" from="0" to="1000"
     dur="3s" fill="freeze" repeatCount="indefinite"/> 
   </rect>
</svg>
  </head>
  <body>
  <?php   
    echo "Hello World! ";
    echo "<br>";
	 $name = ("Asafjow1 \n master \n changes");
   $age = 25;
   echo $name;
  ?>
   <body ondragover="allowDrop(event)">
   <div id="box" ondrop="drop(event)"
   ondragover="allowDrop(event)"
   style="border:1px solid black; 
   width:200px; height:200px"></div>
   
   <div id="box2" ondrop="drop(event)"
   ondragover="allowDrop(event)"
   style="border:2px solid red; 
   width:200px; height:200px"></div>
   <img id="image" src="sample.jpg" draggable="true"
   ondragstart="drag(event)" width="150" height="50" alt="" />
	<script>
	//localStorage.setItem("key1", "Itay Google key is :SSregrew g !!");
	//alert(localStorage.getItem("key1")); 
	
	</script> 
	 <h1>car list select</h1>
   <input id="car" type="text" list="colors" />
<datalist id="colors">
   <option value="Red">
   <option value="Green">
   <option value="Yellow">
</datalist>
<br />
<br />
<input id="email" name="email" type="email" placeholder="example@example.com" />
<br />
<input id="url" name="url" type="url" placeholder="insert url" />
<br />
<input id="tel" name="tel" type="tel" placeholder="555.555.1211 insert phone " />
</body>
</html>
