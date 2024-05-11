<?php

// please teach me regular expresssions following topic ``` Character classes, Anchors, Escaped characters, Groups & references, lookaround, Quantifiers & Alternation, Substitution, Flags ``` It is to be noted that I am using the programming language PHP. Please explain all the examples with code code examples.
// ChatGPT
// Sure, let's break down each of the topics you mentioned with examples in PHP.

// ✅ Character classes: Character classes allow you to match any one of a set of characters.

// $string = "The cat sat on the mat.";

// // Match any vowel

// preg_match_all('/[aeiou]/i', $string, $matches);
// echo "<pre>";
// print_r($matches[0]); // Output: Array ( [0] => e [1] => a [2] => a [3] => o [4] => e [5] => o [6] => a )
// echo "</pre>";

// echo "<pre>";
// print_r($matches); // Output: Array ( [0] => e [1] => a [2] => a [3] => o [4] => e [5] => o [6] => a )
// echo "</pre>";



// ✅Anchors: Anchors are used to specify the position in the string where the match should occur.

// $string = "start middle end";

// // Match "start" only if it's at the beginning of the string
// preg_match('/^start/', $string, $matches);
// echo $matches[0]; // Output: start


// ✅Escaped characters: Escaping characters allow you to match special characters literally.

// $string = "1 + 2 = 3";

// // Match the '+' character
// preg_match('/\+/', $string, $matches);
// echo $matches[0]; // Output: +

// ✅Groups & references: Groups allow you to capture parts of the match for later reference.


// $string = "John Doe, Jane Smith";

// // Match and capture names in the format "First Last"
// preg_match_all('/(\w+) (\w+)/', $string, $matches);
// echo "<pre>";
// print_r($matches); // Output: John Doe
// echo "</pre>";
// echo $matches[0]; // Output: John Doe
// echo $matches[1]; // Output: John
// echo $matches[2]; // Output: Doe


// ✅Lookaround: Lookarounds are used to assert that a pattern is or is not followed/preceded by another pattern.

// $string = "apple banana orange";

// // Match "banana" only if it's preceded by "apple"
// preg_match('/(?<=apple )banana/', $string, $matches);
// echo $matches[0]; // Output: banana


// 👉(abc) capture group:

// $string = "abc123";

// // Capture the "abc" part
// preg_match('/(abc)\d+/', $string, $matches);
// echo $matches[1]; // Output: abc
// print_r($matches);



// ✅👉\1 backreference to group #1:

// $string = "abcabc";

// // Match a repeated word using backreference
// preg_match('/(\w+)\1/', $string, $matches);
// echo $matches[0]; // Output: abcabc

// ✅👉(?:abc) non-capturing group:


// $string = "abc123";

// // Match "abc" without capturing it
// preg_match('/(?:abc)\d+/', $string, $matches);
// echo $matches[0]; // Output: abc123


// ✅👉(?=abc) positive lookahead:


// $string = "abcdef";

// // Match "def" only if it's followed by "abc"
// preg_match('/def(?=abc)/', $string, $matches);
// echo $matches[0]; // Output: def

// ✅👉(?!abc) negative lookahead:

// $string = "xyz";

// // Match "xyz" only if it's not followed by "abc"
// preg_match('/xyz(?!abc)/', $string, $matches);
// echo $matches[0]; // Output: xyz

// These examples should clarify how to use groups and lookarounds in regular expressions in PHP.



// ✅Quantifiers & Alternation: Quantifiers allow you to specify the number of occurrences, and alternation allows you to match one of several patterns.


// $string = "aaaabbbbcccc";

// // Match 2 to 4 consecutive 'a' characters
// preg_match('/a{2,4}/', $string, $matches);
// echo $matches[0]; // Output: aaaa


// // Match "apple" or "banana"
// preg_match('/apple|banana/', $string, $matches);
// echo $matches[0]; // Output: banana


// ✅Substitution: Substitution allows you to replace matched patterns with other strings.


// $string = "My email is user@example.com";

// // Replace email addresses with "REDACTED"
// $newString = preg_replace('/\b[\w\.-]+@[\w\.-]+\b/', 'REDACTED', $string);
// echo $newString; // Output: My email is REDACTED


// ✅Flags: Flags modify the behavior of the regular expression.

// $string = "HELLO";

// // Case-insensitive match
// preg_match('/hello/i', $string, $matches);
// echo $matches[0]; // Output: HELLO







