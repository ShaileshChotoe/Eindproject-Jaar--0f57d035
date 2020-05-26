<?php
include '../server/DB.class.php';

$level = $_POST['level'];
$user_input = $_POST['html'];

$db = new DB('localhost', 'bitgame', 'root', '');

$levelData = $db->connect()->getLevelData($level);

$template = $levelData[0]->template;

// //check styff
$html = $user_input;
$dom = new DOMDocument;
$dom->loadHTML($html);

$functionName = "level" . $level;

$myfile = fopen("../demo/demo1.html", "w") or die("Unable to open file!");
$template = str_replace("</body>", $user_input . "</body>", $template);
fwrite($myfile, $template);
fclose($myfile);

if ($functionName())
{
    //insert
    // $db->connect()->insertGoodLevelData($level);
    $db->connect()->insertNewLevelData($template, $level+1);
header("Location: ../levels/level.php?level=$level&unlocked=true");
}
else{
header("Location: ../levels/level.php?level=$level&unlocked=false");
}

//header("Location: ../levels/level.php?level=$level");


// function get_inner_html( $node ) {
//     $innerHTML= '';
//     $children = $node->childNodes;
//     foreach ($children as $child) {
//         $innerHTML .= $child->ownerDocument->saveXML( $child );
//     }

//     return $innerHTML;
// }

function getAttributes($element)
{
    $attributes_list = array();
    foreach($element->attributes as $attribute){
        array_push($attributes_list, $attribute);
    }
    return $attributes_list;
}

function level1() {
    global $dom;
    $element = $dom->getElementsByTagName('h1')->item(0);
    if($element->nodeValue == 'Flex Academy Course')
    {
        return true;
    }
    return false;
}

function level2() {
    global $dom;
    $element = $dom->getElementsByTagName('p')->item(0);
    if($element->nodeValue == 'Ik leer HTML')
    {
        return true;
    }
    return false;
}

function is_image($path)
{
	$a = getimagesize($path);
	$image_type = $a[2];
	
	if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
	{
		return true;
	}
	return false;
}

function level3()
{
    global $dom;
    $element = $dom->getElementsByTagName('img')->item(0);
    $attr = getAttributes($element);
    foreach($attr as $atr)
    {
        if($atr->name == 'src')
        {
            if(is_image($atr->value)){
                return true;
            }
        }
    }
    return false;
}
?>