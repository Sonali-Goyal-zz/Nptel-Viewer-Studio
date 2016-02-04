<!DOCTYPE html>
<html>
<head>
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
var video = document.getElementById("h");
var jsonObject = {
        "annotate" : "",
        "time" : ""
    };

    // write cities to JSON Object
    jsonObject.annotate=String(input);
    // write routes to JSON Object
    jsonObject.time=video.currentTime;

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
  var items = [];
  $.each( data, function( key, val ) {
    items.push(val);
  });
alert(items);
});
document.getElementById("h").play();
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


<video id="h" width="640" height="480" class="video-js vjs-default-skin"  data-setup='{"controls":true}'>
  <source src="video.mp4" type="video/mp4"/>
 <track id="enTrack" src="subtitles.vtt" label="English" kind="captions" srclang="en" default/> 
      <track id="esTrack" src="hindi.vtt" label="Spanish" kind="captions" srclang="es"/>
      HTML5 video not supported
</video>
   
<br/>
        <button value="submit" onclick="hel()">SUBMIT</button>
<input id="anno" type="text" name="annotate" value="annotate" style="visibility:hidden"/>
<button value="submit" onclick="publish()">Publish</button>
       
        <div class="timeline">
        
    <div class="timeline-item active">
    
        <div class="year">10 secs <span class="marker"><span class="dot" onclick="hel()"></span></span>
        </div>
        <div class="info">VC Dimension theory</div>
    </div>
    <div class="timeline-item">
         <div class="year">10 secs <span class="marker"><span class="dot" onclick="hel()"></span></span>
        </div>
        <div class="info">VC Dimension theory</div>
    </div>
      <div class="timeline-item">
         <div class="year">10 secs <span class="marker"><span class="dot" onclick="hel()"></span></span>
        </div>
        <div class="info">VC Dimension theory</div>
    </div>
      <div class="timeline-item">
         <div class="year">10 secs <span class="marker"><span class="dot" onclick="hel()"></span></span>
        </div>
        <div class="info">VC Dimension theory</div>
    </div>
      <div class="timeline-item">
         <div class="year">10 secs <span class="marker"><span class="dot" onclick="hel()"></span></span>
        </div>
        <div class="info">VC Dimension theory</div>
    </div>
</div>
    </body>
</html>

