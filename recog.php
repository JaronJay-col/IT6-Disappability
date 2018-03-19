
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTD-8">
    <meta name"viewport" content="">
    <meta name"auhor" content="pogi">
    
   
</head> <title>OMG</title>
   <script src="artyom.js"></script>
<body>
  <div>
  <input type="button" oneclick="startArtyom()" value=start voice commands"/>
  <input type="button" oneclick="startArtyom()" value=stop listening"/>
  <span id="output"></span>
</div>
   <script>

  artyom.addCommands([
 {
description:"Artyom can talk too, lets say something if we say hello",
indexes:["hello","hey"],
action:function(i){

	if(i == 0){
	 artyom.say("hello ! How are you?")

}
}
},
  {
	indexes:["goodbye"],
	action:function(){
	 alert("Now all is over");
}
}
]);





 artyom.redirectRecognizedTextOutput(function(text,isFinal){
    var span = document.getElementById('output');

  if(isFinal){
	span.innerHTML = '';
}else {
span.innerHTML = text;
}

});





      function startArtyom(){
	artyom.initialize({
	 lang:"en-GB",
         continuous:false,
	 debug:true;
	 listen:true
});
}

function stopArtyom(){
  artyom.fatality();
}
</script>

</body>