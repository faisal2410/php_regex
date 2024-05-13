<?php
// echo "<h1>Regular Expression</h1>";

// $str= "Bangladesh is a very nice country. I love Bangladesh very much.";
// $str= "I love Bangladesh very much.";

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

// if(preg_match("/Bangladesh$/",$str)){
//     echo "Found";

// }else{
//     echo "Not Found";
// }


echo "<h1>Regular Expression</h1><hr>";

// $name="Faisal";

// if($name==="Faisal"){
//     $likes_chocolate=true;
//     echo $likes_chocolate;
// }


// $test=str_replace("blue","red","Roses and blue");
// echo $test;

$new_test=str_contains("Faisal likes chocolate","choc");
echo $new_test;

// Fixed string comparison

// [0-7]
// [d-z]
//[a-z0-9]
// /abc[def]/
// /(abc)[def]/    Capture groups and subpattern   // The parts of the pattern inside the brackets is captured in the matches array

//  .     // Wildcards  // It's 3 o'clock  

// [^123]       //Negated Character sets

// Regular expression          String               Match ?

    // /abc/                   abc                  yes.
   //  /abc/                   abcdef               yes
   //  /abc/                   bcdea                No
   //  /a[123]b/               a2b                  Yes        //Character sets
   //  a[123]b/                a3b                  Yes
   //  a[123]b/                a4b                  No
  //   /a[1-5]b/              a2b                   Yes        // Charcter ranges
  //   /a[1-5]b/              a3b                   Yes
  //   /a[1-5]b/              a6b                   No
  //   /abc[def]/            abcd                  Yes
  //   /abc[def]/            abcf                  Yes
  //   /abc[def]/           abcg                   No
  //   /(abc)[def]/         abcd                   Yes         // Capture groups and subpatterns
//    /ab.de/              abcde                   Yes       // Wildcards
//    /ab.de/              abccde                  No
//   /a[^123]b/            a4b                    Yes      // ^ Negated Character sets
//   /a[^123]b/            a3b                    No









   


