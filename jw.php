<?php 
error_reporting(E_ERROR | E_PARSE);
$sub = $_GET ['sub'];
if($_GET['img']){
    $imagen = $_GET['img'];
}else{
    $imagen = '';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8"/>
<title>Nonton Gratis</title>
<link rel="shortcut icon" href="" type="image/x-icon" />
<meta name="robots" content="noindex" />
<META NAME="GOOGLEBOT" CONTENT="NOINDEX" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="https://cdn.rawgit.com/ufilestorage/a/master/skins/jw-logo-bar.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.rawgit.com/ufilestorage/a/master/jquery-2.2.3.min.js"></script>
<script src="https://cdn.jwplayer.com/libraries/2MBKdrwC.js"></script>
<script>jwplayer.key="9z2Evk8O8cArgaVf0D9qKR89rOPx5R2jOZiLgAdXYaMttd87Z4rpNYAYcZB8fdkg";</script>
<style type="text/css">body,html{margin:0;padding:0}#uplay{position:absolute;width:100%important!;height:100%important!;border:none;overflow:hidden;}</style>
</head>
<body>
<div id="bioskopovo"></div>
<script type="text/javascript">
var videoPlayer = jwplayer("compuphd");
videoPlayer.setup({
image: "https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg",
sources: [
	{
          file:
            "https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4",
          label: "1080p FHD",
          default: true
    },
    
width: "100%",
height: "100%",
controls: true,
displaytitle: false,
flashplayer: "https://ssl.p.jwpcdn.com/player/v/8.8.1/jwplayer.flash.swf",
fullscreen: "true",
primary: "html5",
autostart: false,
image:'<?=$imagen;?>',
tracks: [{
			file: "<?php echo $sub;?>",
			label: "Indo",
			aspectratio: "16:9",
						startparam: "start",
						primary: "html5",
						preload: "auto",
						autostart: false,
			kind:  "captions",
			default: "true",
			}],
			captions: {
			color: "#FFFF00",
			fontSize: 14,
			edgeStyle: "uniform",
			backgroundOpacity: 0,
			},
 logo: {
			file: "https://assets-jpcust.jwpsrv.com/watermarks/dTwarztN.png",
			logoBar: "",
			position: "top-left",
			link: "https://bioskopovo.com"
		},
			aboutlink:"https://bioskopovo.com",
            abouttext:"Watch Movie Online",
});
videoPlayer.on("ready",function() {
		jwLogoBar.addLogo(videoPlayer);
	});
videoPlayer.addButton(
"https://icons.jwplayer.com/icons/white/download.svg",
"Download Video",
function() {
window.open(
"https://digipep.s3.ap-southeast-1.amazonaws.com/vid/<?=$_GET['v']?>?dl=1",
"_blank"
);
},
"download"
);
    
</script>
</body>
</html>
