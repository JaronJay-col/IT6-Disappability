<!DOCTYPE html>
<html>
<head>
	<title>Speech to text converter in js</title>
  <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<body>

   <div class="container">
   <h3>Text to Speech</h3>

   <textarea row="" class="form-control" id="text" cols=""></textarea>
   <br>

   <button type="button" class="btn btn-primary btn-lg" id="speak">Speak </button>
   </div>

     <script >
     	var text = document.querySelector('#text');
     	var speak = document.querySelector('#speak');

     	function speaknow () {
     		var speech = new SpeechSynthesisUtterance();
     		speech.rate =.7;
     		speech.pitch=1;
     		speech.volume=1;
     		speech.voice = speechSynthesis.getVoices()[0];
     		speech.text = text.value;
          
           speechSynthesis.speak(speech);
     	}
     	speak.onclick = function (e){
     		e.preventDefault();
     		speaknow();
     	};

     </script>
</body>
</html>