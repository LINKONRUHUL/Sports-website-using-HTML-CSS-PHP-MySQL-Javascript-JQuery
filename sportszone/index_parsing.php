<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("index_data.xml");
$x=$xmlDoc->getElementsByTagName('name');

for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$cd=($y->childNodes);

for ($i=0;$i<$cd->length;$i++) {
  //Process only element nodes
   if ($cd->item($i)->nodeType==1) {
    //echo("<h3>" . $cd->item($i)->nodeName . ":</h3> ");
	?>
    <p class="node"><a href="http://www.icc-cricket.com/cricket-world-cup/fixtures" style="text-decoration:none; color:darkorange;">
    <?php
	
	if($cd->item($i)->childNodes->item(0)->nodeValue=='WORLD CRICKET'||$cd->item($i)->childNodes->item(0)->nodeValue=='WORLD FOOTBALL'||
	$cd->item($i)->childNodes->item(0)->nodeValue=='EPL'){
		continue;
	}else{
    echo($cd->item($i)->childNodes->item(0)->nodeValue);
	//break;
	}
    
  }
  
  ?>
  </a></p>
  
  
  <?php
}
?> 