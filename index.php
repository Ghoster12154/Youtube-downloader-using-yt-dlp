<?php include('../connection.php'); ?>
<br><br><br><div class="container"> Download videos from youtube, twitch, and other platforms<br>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<form method="post">
    <input type="text" name="URL" size="75">
    <select name="SelectType">
            <option value="audio"> Audio (.MP3 only audio, no video) </option>
            <option value="video"> Video (.MP4 with video and audio)</option>
        </select>
    <input type="submit" name="DL" id="DL" value="DownLoad" />
</form></div><br><br><br>

<?php if(array_key_exists('DL',$_POST)){
   $selected = $_POST['SelectType'];
    if ($selected == "audio")
    {
        DownLoadAudio();
    }
    else if ($selected == "video")
    {
        DownLoadVideo();
    }
}
function DownLoadAudio()
{
    $url = $_POST["URL"];
    exec("audio\yt-dlp.exe URL $url quit", $output, $retval);
}
function DownLoadVideo()
{
    $url = $_POST["URL"];
    exec("video\yt-dlp.exe URL $url quit", $output, $retval);
} ?>