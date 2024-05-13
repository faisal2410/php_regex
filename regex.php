<?php

// In this tutorial you are going to learn some regex syntax or pattern and it’s meaning to under regex in PHP. Regex is looking complex but it’s not that much if you can find out the syntax or pattern meaning first. Let’s start.

// Most common regex syntax or pattern and their meaning or description


// [abc]:A single character of: a, b or c

// [^abc]:Any single character except: a, b, or c

// [a-z]:Any single character in the range a-z

// [a-zA-Z0-9]:Any single character in the range a-z or A-Z or 0–9

// ^:Start of line

// $:End of line

// \A:Start of string

// \z:End of string

// .:Any single character

// \s:Any whitespace character

// \S:Any non-whitespace character

// \d:Any digit

// \D:Any non-digit

// \w:Any word character (letter, number, underscore)

// \W:Any non-word character

// \b:Any word boundary

// (...):Capture everything enclosed

// (a|b):a or b

// a?:Zero or one of a

// a*:Zero or more of a

// a+:One or more of a

// a{3}:Exactly 3 of a

// a{3,}:3 or more of a

// a{3,6}:Between 3 and 6 of a

// Some options or flag in regex and their meaning or description

// i: case insensitive

// m: treat as multi-line string

// s: dot matches newline

// x: ignore whitespace in regex

// A: matches only at the start of string

// D: matches only at the end of string

// U: non-greedy matching by default

// Uses of regex in PHP

// 🔥🔥PHP regular expressions are strings with pattern enclosing in delimiters for example "/pattern/".

// The preg_match() function searches for a match to a pattern in a string.

// The preg_match_all() function searches for all matches to a pattern in a string.

// The preg_replace() function searches a string for matches to a pattern and replaces them with a new string or pattern.
// Let’s look into some regex example in PHP

// To search based on a regular expression, you use the preg_match() function. For example:


// ✅Example 1

$pattern = '/\d+/';
$message = 'PHP 8 was released on November 26, 2020';

if (preg_match($pattern, $message)) {
    echo "match";
} else {
    echo "not match";
}

echo "<hr>";

/*

🔥🔥The preg_match() function returns 1 if there is a match in the $message, 0 if it doesn’t, or false on failure.

To get the text that matches the pattern, you add the third parameter to the preg_match() function like the following example: 

*/

// $pattern = '/\d+/';
// $message = 'PHP 8 was released on November 26, 2020';

// if (preg_match($pattern, $message, $matches)) {
//     echo "<pre>";
//     print_r($matches);
//     echo "</pre>";
// }

// echo "<hr>";

/*
🔥The preg_match_all() function searches for all matches to a regular expression. For example:

*/


// $pattern = '/\d+/';
// $message = 'PHP 8 was released on November 26, 2020';

// if (preg_match_all($pattern, $message, $matches)) {
//     print_r($matches);
// }

// echo "<hr>";

/*
🔥To replace strings that match a regular expression, you use the preg_replace() function. For example:
*/


// $pattern = '/\d+/';
// $message = 'PHP 8 was released on 11/26/2020';

// echo preg_replace($pattern, 'digit', $message);

// echo "<hr>";


/*
🔥In conclusion, regex is not hard as you see, just try to remember the meaning of syntax by practicing. Please feel free to leave a comment if you have any feedback, questions or want me to write about another PHP/Laravel related topic.
*/ 


// ***********************************************************************************************************



// ✅ Regular Expressions in PHP

// Introduction:
// Regular expressions are sequences of characters that define a search pattern. They are widely used in programming languages like PHP for pattern matching within strings. In PHP, regular expressions are implemented through the PCRE (Perl Compatible Regular Expressions) library.

// 1. Basic Syntax:

// In PHP, regular expressions are represented as strings.
// They often include special characters called metacharacters for defining patterns.
// 2. Creating Regex Patterns:

// Delimiters: Patterns in PHP are enclosed in delimiters, often slashes (/), but any non-alphanumeric, non-backslash, non-whitespace character can be used.
// Basic patterns: Characters in a regex match themselves. For example, /hello/ matches the string "hello".
// 3. Metacharacters:

// . (dot): Matches any single character except newline.
// ^: Matches the start of a string.
// $: Matches the end of a string.
// []: Matches any single character within brackets.
// |: Acts as an OR operator.
// *, +, ?: Quantifiers for matching zero or more, one or more, or zero or one occurrence of the preceding character or group.

// 4. Using Regex Functions in PHP:

// preg_match($pattern, $subject, $matches): Searches a string for a pattern.
// preg_match_all($pattern, $subject, $matches): Finds all matches of a pattern in a string.
// preg_replace($pattern, $replacement, $subject): Performs a search and replace on a string using a regular expression.
// preg_split($pattern, $subject): Splits a string by a regular expression.
// 5. Examples:
// Let's look at some code examples:


//✅ Match a simple pattern

// $pattern = '/hello/';
// $string = 'hello world';
// if (preg_match($pattern, $string)) {
//     echo "Match found!";
// } else {
//     echo "No match found.";
// }

//✅ Match multiple occurrences

// $pattern = '/\d+/'; // Match one or more digits
// $string = 'I have 3 apples and 5 oranges';
// preg_match_all($pattern, $string, $matches);
// print_r($matches);

// ✅Replace a pattern

// $pattern = '/apples/';
// $replacement = 'bananas';
// $string = 'I have apples';
// echo preg_replace($pattern, $replacement, $string);

// Split a string

// $pattern = '/\s+/'; // Match one or more whitespace characters
// $string = 'This is a sentence';
// print_r(preg_split($pattern, $string));

// 6. Conclusion:
// Regular expressions are powerful tools for string manipulation in PHP. They provide a flexible way to search, match, and replace patterns within strings. However, they can be complex and challenging to master, so it's essential to practice and experiment with them.

// 7. Exercise:
// Try creating your own regular expressions to solve common tasks like validating email addresses, extracting URLs from text, or formatting strings.

