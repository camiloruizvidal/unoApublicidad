<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gallery Content Filter Example</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<style>
BODY {background:none transparent;}
.filter a {
	padding: 3px 9px;
	text-transform: uppercase;
	display: inline-block;
	color: #FFF;
	background: #E56B14;
	text-decoration: none;
	transition: all 0.2s;
	border-radius: 9px;
}

.filter a:hover { background: #8ad }

.filter {
  text-align: center
}

.gallery a img {
  width: 100%;
  height: auto;
  float: left;
}

.gallery a {
  width: 33.33%;
  transition: all 0.2s;
  display: block;
  float: left;
  opacity: 1;
  height: auto;
}

.gallery .hide, .gallery .pophide {
  width: 0%;
  opacity: 0;
  transition: all 0.1s;
}

.gallery .pop {
  width: 100%;
  position: relative;
  z-index: 2;
  box-shadow: 0 0 0px 1000px rgba(0,0,0,0.5);
}

.pop:after {
  content: "\00D7";
  position: absolute;
  top: 10px;
  right: 10px;
  color: #333;
  background: #fff;
  padding: 10px 15px;
  border-radius: 50%;
  opacity: 0.8;
}
.img_gallery
{
	width: 400px !important;
	height: 350px !important;
}
.pop:hover:after { opacity: 1 }
</style>
</head>

<body>
<?php
function esImagen($path)
    {
                $imageSizeArray = getimagesize($path);
                $imageTypeArray = $imageSizeArray[2];
                return (bool)(in_array($imageTypeArray , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)));
    }
function listar_archivos($carpeta,$class="")
{
    if(is_dir($carpeta))
	{
        if($dir = opendir($carpeta))
		{
            while(($archivo = readdir($dir)) !== false)
			{
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess')
				{
					if(esImagen($carpeta.'/'.$archivo))
					{
					echo '<a href="#" class="'.$class.'" >
							<img class="img_gallery" src="'.$carpeta.'/'.$archivo.'">
						</a>'; 
					}

                }
            }
            closedir($dir);
        }
    }
}
 
function listar_directorios_ruta($ruta)
{ 
	$data=array();
	if (is_dir($ruta)) 
	{ 
		if ($dh = opendir($ruta)) 
		{ 
			while (($file = readdir($dh)) !== false) 
			{
				if (is_dir($ruta . $file) && $file!="." && $file!="..")
				{
					$data[]=str_replace(array('./','../','/'),array('','',''),$file);
				} 
			} 
			closedir($dh); 
		} 
	}
	return $data;
}
$data = listar_directorios_ruta("./");
echo '	<div class="filter">'."\n";

foreach($data as $temp)
{
	echo '		<a href="#'.str_replace(' ','',strtoupper($temp)).'">'.$temp.'</a>'."\n";
}
echo '	</div>'."\n";
?>
	<div class="gallery"> 
<?php
foreach($data as $temp)
{
	echo  listar_archivos($temp,str_replace(' ','',strtoupper($temp)));
}
?>

	</div>
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script> 
<script>

$('.filter a').click(function(e) {
  e.preventDefault();
  var a = $(this).attr('href');
  a = a.substr(1);
  $('.gallery a').each(function() {
    if (!$(this).hasClass(a) && a != 'all')
      $(this).addClass('hide');
    else
      $(this).removeClass('hide');
  });

});

$('.gallery a').click(function(e) {
  e.preventDefault();
  var $i = $(this);
  $('.gallery a').not($i).toggleClass('pophide');
  $i.toggleClass('pop');
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>	
