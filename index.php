<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>MusicPleer - Youtube to Mp3 Converter</title>
    <!-- <link rel="icon" href="#" type="image/x-icon"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script data-cfasync="false" async type="text/javascript" src="//assampant.club/1clkn/9557"></script>
  <script data-cfasync="false" type="text/javascript" src="//pndelfast.com/rCUdeTPLS47sV3N/9558"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116741562-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116741562-1');
</script>
  </head>
  <body>
    <center><h1>MusicPleer</h1>
<span>Fast Youtube to Mp3 Converter</span>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8001520065708566"
     data-ad-slot="3243141531"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      <form name="yt" action="" method="get">
          <div class="input-group col-lg-8">
        <input type="text" name="yturl" class="form-control input-lg ui-autocomplete-input" autocomplete="on" placeholder="https://www.youtube.com/watch?v=dA42vievwZk">
        <span class="input-group-btn"><button class="btn btn-info" style="height:46px;" type="submit">CONVERT</button></span>
        </div>
      </form>
    <div id="converter-wrapper" class="input-group col-lg-8" style="margin-top:20px;"></div>

    <div class="input-group col-lg-8" style="margin-top:20px;"><span><b>1. How Youtube To Mp3 Download?</b><br />
Just Copy and paste the youtube video link that you want to convert then Click <b>CONVERT</b> button to convert Youtube video to mp3 file at high 320kbps bitrate.<br />
Conversion would be very quick, click <b><i class="fa fa-download"></i> Download MP3</b> to download the converted mp3 file.<br /><br />
<b>2. Is there any file size or download limitations?</b><br />
There are no limits on filesize and downloads, so you can download unlimited files with no file size limits.<br /><br />
</span></div>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8001520065708566"
     data-ad-slot="3243141531"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<a href="https://www.musicpleer.club" title="Musicpleer MP3 Songs Download"><i class="fa fa-download"></i> MUSICPLEER</a> | <a href="https://github.com/chilledguru/yt-2-mp3-converter" title="Youtube to MP3 Converter Script"><i class="fa fa-download"></i> Download Youtube to MP3 Script</a>
    </center>
    <!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <script type="text/javascript">
    (function($) {
      $.fn.isYouTube = function() {
        var regExpr = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
        var curVal = $(this).val();
        return (curVal.match(regExpr))? RegExp.$1 : false;
      }
    })(jQuery);
    
    $(document).ready(function() {
      
      $('form[name=yt]').submit(function(){
        
        var ytId = $('input[name=yturl]').isYouTube();
        if(ytId !== false) {
          
          $iframe = $('<iframe>');
          $iframe.attr({src:'https://www.yt-download.org/@api/button/mp3/'+ytId, frameBorder: 0});
          $iframe.css({width:'100%', height:'100px'});
          
          //Remove iframe if one exists (on second url some will exists)
          $('#converter-wrapper').find('iframe').remove()      
          
          $('#converter-wrapper').append($iframe);
          
        } else {
          
          alert("Please enter a valid youtube url");
        }
        return false;
      });
    });  
    </script>
  </body>
</html>
