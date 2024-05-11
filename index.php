<?php
echo "<h1>Regular Expression</h1>";

// $str= "Bangladesh is a very nice country. I love Bangladesh very much.";
$str= "I love Bangladesh very much.";

// if(preg_match("/Bangladesh/",$str)){
//     echo "Found";

// }else{
//     echo "Not Found";
// }


// if(preg_match("/^Bangladesh/",$str)){
//     echo "Found";

// }else{
//     echo "Not Found";
// }

if(preg_match("/Bangladesh$/",$str)){
    echo "Found";

}else{
    echo "Not Found";
}