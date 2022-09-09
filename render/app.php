<?php
$brand = "ebreyaue";

function render( $file , $type)
{
require_once("/components/".$file.".".$type);
}


function title_header($title)
{
echo'<title>'.$title.'</title>';
}

function render_js($js)
{
echo'<script language="javascript" src="'.$js.'"></script>';
}


function get_query($conn)
{
    
    $query ="SELECT name,email,content FROM visitorbox ORDER BY id DESC";
    $registers = mysqli_query($conn,$query) or die ("connection error");
    while($reg=mysqli_fetch_array($registers))
    {
    echo '<p><b>'.$reg['name'].'</b></p>';    
    echo '<p>'.$reg['content'].'</p>';    
    echo '<hr>';
    }
    //close connection
    mysqli_close($conn);
}

function render_css($href)
{
echo '<link href="'.$href.'" rel="stylesheet">';
}



?>