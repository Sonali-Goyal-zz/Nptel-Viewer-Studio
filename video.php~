<!DOCTYPE html>
<html>
<head>
	<br>
	<h1>NPTEL Studio Viewer</h1>
	<br>

 <link href="//vjs.zencdn.net/4.1/video-js.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/4.1/video.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript">
       function hel()
        {
var myPlayer = videojs('h');
myPlayer.pause();
document.getElementById("anno").style.visibility = 'visible';
}
 function publish()
        {
var input = document.getElementById("anno").value;
var video = videojs('h');
var jsonObject =[{ 
        "annotate" : "",
        "time" : ""
    }];

    // write cities to JSON Object
    jsonObject[0].annotate=String(input);
    // write routes to JSON Object
    jsonObject[0].time=video.currentTime();

    // some jQuery to write to file
    $.ajax({
        type : "POST",
        url : "json.php",
        dataType : 'json',
        data : {
            json : JSON.stringify(jsonObject)
        }
    });
$.getJSON("new_map_data.json", function( data ) {
    // Set the variables from the results array
    var address = data[0].annotate;
document.getElementById("info1").innerHTML=address;
document.getElementById("year1").innerHTML=data[0].time;
});
var myPlayer = videojs('h');
myPlayer.play();
}


$(".timeline-item").hover(function () {
    $(".timeline-item").removeClass("active");
    $(this).toggleClass("active");
    $(this).prev(".timeline-item").toggleClass("close");
    $(this).next(".timeline-item").toggleClass("close");
});
</script>
<link href="timeline.css" rel="stylesheet">
    </head>
    <body>


<video id="h" width="640" height="480" class="video-js vjs-default-skin" align="middle" data-setup='{"controls":true}'>
      <source src="video.mp4" type="video/mp4"/>
      <track id="enTrack" src="subtitles/Eng.srt" label="English" kind="captions" srclang="en" default/> 
      <track id="etTrack" src="subtitles/Hindi.srt" label="Hindi" kind="captions" srclang="hi" /> 
      <track id="euTrack" src="subtitles/Telugu.srt" label="Telugu" kind="captions" srclang="te" /> 
      <track id="ejTrack" src="subtitles/Tamil.srt" label="Tamil" kind="captions" srclang="ta" /> 
      <track id="esTrack" src="hindi.vtt" label="Spanish" kind="captions" srclang="es"/>
      HTML5 video not supported
</video>
   
<br/>
        <button value="submit" onclick="hel()">SUBMIT</button>
<input id="anno" type="text" name="annotate" value="add text here" style="visibility:hidden"/>
<button value="submit" onclick="publish()">Publish</button>
       
        <div class="timeline">
        
   <div class="timeline-item active">
    
        <div class="year" id="year1">10 secs <span class="marker"><span class="dot" onclick="hel()"></span></span>
        </div>
        <div class="info" id="info1">VC Dimension theory</div>
    </div>
    <div class="timeline-item">
         <div class="year" id="year2">10 secs <span class="marker"><span class="dot" onclick="hel()"></span></span>
        </div>
        <div class="info" id="info1">VC Dimension theory</div>
    </div>
      <div class="timeline-item">
         <div class="year" id="year3">10 secs <span class="marker"><span class="dot" onclick="hel()"></span></span>
        </div>
        <div class="info" id="info1">VC Dimension theory</div>
    </div>
      <div class="timeline-item">
         <div class="year" id="year4">10 secs <span class="marker"><span class="dot" onclick="hel()"></span></span>
        </div>
        <div class="info" id="info1">VC Dimension theory</div>
    </div>
      <div class="timeline-item">
         <div class="year" id="year5">10 secs <span class="marker"><span class="dot" onclick="hel()"></span></span>
        </div>
        <div class="info" id="info1">VC Dimension theory</div>
    </div>
</div>
    </body>
</html>

