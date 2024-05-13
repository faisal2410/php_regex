<?php
echo "<h1>Regular Expression</h1> <hr>";


// ✅Example 1

$str= "Bangladesh is a very nice country. I love Bangladesh very much.";
// $str= "I love Bangladesh very much.";

if(preg_match("/Bangladesh/",$str)){
    echo "Found";

}else{
    echo "Not Found";
}


//  ✅Example 2


// $pattern = '/\d+/';
// $message = 'PHP 8 was released on November 26, 2020';

// if (preg_match_all($pattern, $message, $matches)) {
//   print_r($matches);
// }

// echo "<hr>";


// ✅ Example 3

// $pattern = '/\d+/';
// $message = 'PHP 8 was released on 11/26/2020';

// $replaced_message= preg_replace($pattern, 'digit', $message);

// echo $replaced_message;

// echo "<hr>";



// ✅ Example 4

// Split a string

// $pattern = '/\s+/'; // Match one or more whitespace characters
// $string = 'This is a sentence';
// echo "<pre>";
// print_r(preg_split($pattern, $string));

// echo "</pre>";

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


// echo "<h1>Regular Expression</h1><hr>";

// $name="Faisal";

// if($name==="Faisal"){
//     $likes_chocolate=true;
//     echo $likes_chocolate;
// }


// $test=str_replace("blue","red","Roses and blue");
// echo $test;

// $new_test=str_contains("Faisal likes chocolate","choc");
// echo $new_test;

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









   


