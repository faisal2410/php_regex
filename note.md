# Regular Expression

## Patterns

### . = matches anything that has a single character
#### Ex: /./ matches anything that has a single character

### ^ = matches the beginning of string/excludes characters.

#### Ex. /^PH/ matches any string that starts with PH

### $= matches pattern at the end of the string

#### /com$/ matches google.com facebook.com etc

### *= matches any zero(0) or more characters

#### /com*/ matches computer, communication etc.

### + = requires preceding character(s) appear at least one.

#### /yah+oo/ matches yahoo

### \ = used to escape meta characters

#### Ex: /yahoo\.com/ treats the dot as a literal value.

### [...] = character class

#### Ex: /[abc]/ matches abc

### | = alternate word search

### a-z = means lowercase letters

#### Ex: /a-z/ matches cool, happy etc

### A-Z = matches uppercase letters

#### /A-Z/ matches WHAT, WHY etc.

### 0-9 = matches number between 0 and 9

#### Ex: /0-4/ matches 0,1,2,3,4 


###   Character classes

#### .	any character except newline

#### \w\d\s	word, digit, whitespace

#### \W\D\S	not word, digit, whitespace

#### [abc]	any of a, b, or c

#### [^abc]	not a, b, or c

#### [a-g]	character between a & g


### Anchors

#### ^abc$	start / end of the string

#### \b\B	word, not-word boundary


#### Escaped characters

#### \.\*\\	escaped special characters

#### \t\n\r	tab, linefeed, carriage return

### Groups & Lookaround


#### (abc)	capture group


#### \1	backreference to group #1

#### (?:abc)	non-capturing group

#### (?=abc)	positive lookahead

#### (?!abc)	negative lookahead

### Quantifiers & Alternation

#### a*a+a?	0 or more, 1 or more, 0 or 1

#### a{5}a{2,}	exactly five, two or more

#### a{1,3}	between one & three

#### a+?a{2,}?	match as few as possible

#### ab|cd	match ab or cd



## Functions

### preg_match = Returns 1 if the pattern was found in the string 0 if not.

### preg_replace = Returns a new string where matched pattern have been replaced with another string

## https://regex101.com

## https://regexr.com/









