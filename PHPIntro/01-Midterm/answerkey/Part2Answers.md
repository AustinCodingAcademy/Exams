PHPIntro Back End MidTerm - Part 2
==================================

Instructions
------------

This portion of the test is to be completed with full access to your notes and the internet. Use all of your resources to complete these problems.

Create a new php file for each problem. Name your files with the following format: Last Name + Problem Number.

For example MurphyProblem1.php, MurphyProblem2.php etc.

After you have completed this portion of the midterm, attach all of the files to an email and send it to:

* ryan@austincodingacademy.com
* joe@austincodingacademy.com

Set the email subject as `PHP Intro Midterm - Part 2`

Problems
--------

### Coding Problem 1

Write PHP Code that takes an array `$greetings = array("hello", "howdy", "yo!", "what up!")`
and prints out each greeting on its own line.

#### Source code

```php
<?php

$greetings = array("hello", "howdy", "yo!", "what up!");
foreach($greetings as $greeting){
    echo "$greeting<br>";
}

?>
```

#### Output

[Problem 1 Output](https://raw.githack.com/AustinCodingAcademy/Exams/master/PHPIntro/01-Midterm/answerkey/output/prob1.html?token=AAevILcSMa65tYmMoirfwIhnzfvIKqRuks5WKqdUwA%3D%3D)


### Coding Problem 2

Write PHP Code that takes an array `$nums = array(5,3,1,2,5,8);` calculates the sum,
(without using the builtin `array_sum` function), and prints out the result.

#### Source code

```php
<?php

$nums = array(5,3,1,2,5,8);
$sum = 0;
foreach($nums as $n){
    $sum += $n;
}

echo "The sum is $sum";
?>
```

#### Output
[Problem 2
Output](https://raw.githack.com/AustinCodingAcademy/Exams/master/PHPIntro/01-Midterm/answerkey/output/prob2.html?token=AAevIGhtUTBzzg4sOS-KXsXJXGyEHveCks5WKqo_wA%3D%3D)

### Coding Problem 3

#### Preface

PHP has a built in function named `strrev` which takes a string as an argument and
returns the string provided in reverse. It does not alter the string variable passed
in as the argument, but instead returns a new string.

Observe the following program demonstrating use of `strrev`:

```php
<?php
    $s = "hello";
    echo "$s<br>";

    strrev($s);
    echo "$s<br>"; // $s will be unchanged at this point

    $backwards = strrev($s);
    echo "$backwards<br>";
?>
```

The output would be

```
hello
hello
olleh
```

#### Problem

A palindrome is a string that is the same forwards and backwards.

Examples of strings that are palindromes include:

* mom
* racecar
* pop

Examples of strings that are **not** palindromes include:

* joe
* computer
* person

#### Step 1

Create a function called `is_palindrome` which takes a string in as an argument. The function should
return `true` if the string provided is a palindrome, `false` otherwise.

#### Step 2

For each of the following strings, print out the string and whether it is a palindrome or not

* joe
* anna
* computer
* racecar
* civic
* stirs
* hannah

#### Source code

```php
<?php

function is_palindrome($str){
    if($str == strrev($str)){
        return true;
    }
    else{
        return false;
    }
}

$strings = array(
    'joe',
    'anna',
    'computer',
    'racecar',
    'civic',
    'stirs',
    'hannah',
);

foreach($strings as $str){
    if(is_palindrome($str)){
        echo "$str is a palindrome<br>";
    }
    else{
        echo "$str is NOT a palindrome<br>";
    }
}

?>
```

#### Output

[Problem 3
Output](https://raw.githack.com/AustinCodingAcademy/Exams/master/PHPIntro/01-Midterm/answerkey/output/prob3.html?token=AAevIEw0dPgbnnlWXWtFTfboq5jFBtJvks5WKqpAwA%3D%3D)





Extra Credit
============

### Extra Credit Problem 1

Suppose we are given the following user information from querying a social
network database:

Query results:

    USER table
    +----+------------+------------------+--------------+
    | id | profile_id | email            | join_date    |
    +----+------------+------------------+--------------+
    |  1 |          5 | john@example.com | Feb 13, 2012 |
    |  4 |         15 | jack12@yahoo.com | Mar 01, 2013 |
    | 10 |         97 | meghan@yahoo.com | Sep 22, 2015 |
    +----+------------+------------------+--------------+

We can read the first row as "The user with id 1 has a profile_id of 5, an
email of john@example.com, and a join_date of Feb 13, 2012"


a) Create an array $users representing the information contained in the query
results. If your array is structured correctly, the following expressions
will be true:

* $users[4]['email'] == 'jack12@yahoo.com'
* $users[10]['profile_id'] == 97

Answer:



b) Suppose we are making a more complex query to the same social network
database. In addition to results from the USER table, we have also been
provided with data from a related PROFILE table.

Query results:

    USER table
    +----+------------+------------------+--------------+
    | id | profile_id | email            | join_date    |
    +----+------------+------------------+--------------+
    |  1 |          5 | john@example.com | Feb 13, 2012 |
    |  4 |         15 | jack12@yahoo.com | Mar 01, 2013 |
    | 10 |         97 | meghan@yahoo.com | Sep 22, 2015 |
    +----+------------+------------------+--------------+

    PROFILE table
    +----+------------+-----------+--------------+
    | id | first_name | last_name | phone_number |
    +----+------------+-----------+--------------+
    |  5 |       John |       Doe | 512-111-2211 |
    | 15 |       Jack |   Daniels | 512-555-2323 |
    | 97 |     Meghan | McDaniels | 512-987-5434 |
    +----+------------+------------------+-------+

The two tables are structured such that the profile_id in the USER table is
associated with the id in the PROFILE table. According to this structure, the
last name of the user with id 10 is "McDaniels".

Create an array $users representing the information contained in the query
results. Each individual user in the $users array should have a 'profile' key
containing their information from the PROFILE table.

Answer:



c) Write a SQL query that gets just the first and last name out of the profile table.

Answer:


d) Write a SQL query that gets the user John Doe's profile joined with his user record.

Answer:



### Extra Credit Problem 2

Given an `$nums = array(10,7,8,3,2,7,7,4,3,7)`, write PHP code that calculates the
*mode* of the array - that is, the number most commonly occurring in the array.

*Extra extra* credit if you don't use the builtin functions `array_count_values()`
or `array_search()`!

(You can do this one on the computer and submit it via email)

