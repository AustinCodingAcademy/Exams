PHPIntro Back End MidTerm - Part 1
==================================

Instructions
------------

Copy this text file to a file named YourName_Midterm_Part1.txt.
For example, JoeMcCullough_Midterm_Part1.txt. You will provide your answers to
the problems in the "Answer:" sections indicated.

This portion of the test is to be completed **without notes**. Notes include

* previous assignments
* examples from in class
* anything from the internet
* etc

You are not allowed to execute php code in any form while taking this portion of
the test. This includes

* from the browser
* from the command line
* from PHPStorm

After you have completed this portion of the midterm, attach the .txt file
in an email to the following addresses:

* ryan@austincodingacademy.com
* joe@austincodingacademy.com

Set the email subject as `PHP Intro Midterm - Part 1`

!!!! WARNING !!!! - You will not be able to make revisions to your answers on
Part 1 after you have started Part 2.

Section 0 - Miscellaneous
-------------------------

### Problem 1

For each code example, what will the code output when run?

a)

        <?php
        echo "Hello World";
        ?>

Answer:


b)

        <?php
        $which_world = "Earth";
        echo "Hello $which_world";
        ?>

Answer:


c)

        <?php
        $which_world = "Earth";
        echo 'Hello $which_world';
        ?>

Answer:


d)

        <?php
        $name = "Ryan";
        $verb1 = "code";
        $verb2 = "teach";
        $verb3 = "play music";
        echo "My name is $name, and I love to $verb1, $verb2 and $verb3!";
        ?>

Answer:


e)

        <?php
        $name = "James";
        echo "Hello! My name is" . $name;
        ?>

Answer:



### Problem 2

Look at the below code sample.

        <?php
        if ($language == "PHP") {
            $what = "server-side scripting language";
        }
        else if ($language == "Javascript") {
            $what = "client-side scripting language";
        }
        else if ($language == "English") {
            $what = "human language";
        }
        else {
            $what = "unknown value";
        }

        echo "$language is a $what.";
        ?>

   ...Given that code sample, what will be the output if the variable `$language` has the value:

   a) "Javascript"

   Answer:


   b) "English"

   Answer:


   c) "Piglatin"

   Answer:


### Problem 3

Write PHP code to assign a value to the following variables (just pick an appropriate value):

   a) $name

   Answer:


   b) $cityOfBirth

   Answer:


   c) $hobbies

   Answer:


   d) $favoriteMusic

   Answer:


### Problem 4

Come up with an example variable name and value for the following applications.

a). Whether it is raining outside or not

Answer:


b) The user's average typing words per minute is 56

Answer:


c) It's 98.6 degrees outside

Answer:


d) The user's social security number is 555442232

Answer:



### Problem 5

For the following code excerpts, describe the error in each one.

   a)

        <?php
        echo hello world;
        ?>

   Answer:



   b)

        <?php
        $colors = array('purple','brown','blue','orange');
        $favColor = $colors[4];
        echo "My favorite color is $favColor.";
        ?>

   Answer:




   c)

        <?php
        $x = 3;
        if $x > 3 {
            echo 'the variable $x is greater than 3';
        }
        ?>

   Answer:




   d)

        <?php
        $carBrands = array('Honda','Toyota','Ford','VW')
        echo "I drive a $carBrands[0].";
        ?>

   Answer:




   e)

        <?php
        $birthYear = 1983;
        $age = 2015 - $birthYear;
        if ($age = 21) {
            echo "Yay, you can drink alcohol now!";
        }
        ?>

   Answer:




   f)

        <?php
        $todo = array(
            "ASAP" => "pay taxes",
            "later" => "go surfing",
        );

        echo "I want to " . $todo[1] . " but I need to " . $todo[0] . " first!";
        ?>

   Answer:





Section 1 - Data types
----------------------

### Problem 6

For each of the following data types, provide 2 example values:

a) integer

Answer:

    1)
    2)

b) float (aka decimal numbers)

Answer:

    1)
    2)

c) boolean

Answer:

    1)
    2)

d) string

Answer:

    1)
    2)

e) array

Answer:

    1)
    2)


### Problem 7

For each of the following situations, select the data type that best represents
the situation:

Examples:

    Question: The number of kids a person has
    Answer: integer


a) The text of a tweet or status update

   Answer:

b) The number of pizzas to order for the office

   Answer:

C) A list of song genres to choose from for a service like Pandora or Spotify

   Answer:

d) The price of a product after tax

   Answer:



Section 2 - Variables
---------------------

### Problem 8

What will the following program print?

    <?php

        $x = 8;
        $y = 3;
        $x = $y;

        echo "x is $x<br>";
        echo "y is $y<br>";

    ?>

Answer:



### Problem 9

For each statement, create a variable assignment that clearly represents the
situation. Fill in the blanks provided.

a) Joe's favorite hobby is going to the arcade

    <?php

        $joesFavHobby = __________________________;

    ?>

b) The capital of Texas is Austin

    <?php

        $capitals['Massachusetts'] = "Boston";
        __________________________ = "Austin";

    ?>

c) The post got 10 likes

    <?php

        _____________ = ________________;

    ?>

d) The user has 5 unread messages

    <?php

        _____________ = ________________;

    ?>

e) The class's topics include PHP, MySQL and HTML

    <?php

        _____________ = __________________________________________;

    ?>


Section 3 - Operators
---------------------

### Problem 10

What is the output of the following program?

    <?php

        echo "PHP is a" . "great language for " . "processing text<br>";
        echo "But you need to" . "be careful about" . " whitespace";

    ?>

Answer:





### Problem 11

Create two string variables `$s1` and `$s2`. Assign the concatenation of the two
strings to a variable `$s3`

Answer:





### Extra Credit Problem

Observe the following code:

    <?php
        $x = 3.4;
        $y = 3 . 4;
    ?>

a) What is the value of $x? What is its data type?

Answer:



b) What is the value of $y? What is its data type?

Answer:



c) If $x and $y are the same, explain why they are the same. If $x and $y are
different, explain why they are different.

Answer:



Section 4 - Getting in and out of PHP
-------------------------------------

### Problem 12

a) What do you have to type to get into PHP mode so you can type PHP code?

Answer:




b) What happens if you just type stuff directly into a .php file
without typing that?

Answer:




### Problem 13

Is the following legal PHP code? Why or why not?

    <?php

    $headline = "New iPhone is really boring";
    <h1>echo $headline</h1>

    ?>

Answer:






Section 5 - Arrays
------------------

### Problem 14

Explain the difference between a sequential array and an associative array

Answer:






### Problem 15

Define the following terms:

a) array element

Definition:



b) array key

Definition:



c) key-value pair

Definition:



d) foreach loop

Definition:



### Problem 16

a) What function can you use to see how many elements are in an array?

Answer:



b) Write PHP code that uses this function to echo how many elements are in
an array called $grades.

Answer:



### Problem 17

a) How do you access the element of an array named $nums located at index $n?

Answer:



b) How do you access the last element of a (non-empty) array named $nums?

Answer:




### Problem 18

Consider the following array

    $arr = [5,3,1,2,4,6];

What are the values of the following expressions?


a) `$arr[2]`

Answer:


b) `$arr[1] + $arr[3]`

Answer:


c) `$arr[0]`

Answer:


d) `count($arr)`

Answer:


e) `$arr[ count($arr)-1 ]`

Answer:


### Problem 19

For each of the pieces of data, create an array that best represents the data.
Assign the array to an appropriately named variable.

1) The students in the class are Bob, Jill, Jack, and Jaime.

Answer:



2) In the class, Bob got a 90, Jill got a 92, Jack got an 87 and Jaime got a 95.

Answer:



### Problem 20

For the following array, write code that could be used to
retrieve the requested values within the array:

    $patients = array(
        array(
            'name' => 'Kurt Vonnegut',
            'illness' => 'Sore Throat',
            'admittance_time' => '04:30 PM'
        ),
        array(
            'name' => 'Noam Chomsky',
            'illness' => 'Twisted Ankle',
            'admittance_time' => '01:30 AM'
        ),
        array(
            'name' => 'Hacker McHackerson',
            'illness' => 'Carpel Tunnel',
            'admittance_time' => '10:30 PM'
        )
    )

a) 'Sore Throat'

Answer:


b) '01:30 AM':

Answer:


c) 'Hacker McHackerson':

Answer:


Section 6 - Conditionals
------------------------


### Problem 21

Given the following code snippet...

    <?php
    echo "I am an animal";
    if ($animal == "whale") {
        echo " and I have a spout!";
    }
    else if ($animal == "elephant") {
        echo " and I have a trunk!";
    }
    ?>

...what will it output if the value of $animal is...

a) "whale" ?

Answer:


b) "elephant" ?

Answer:


c) "dolphin" ?

Answer:


### Problem 22

What will the following code output?

    <?php
    $x = 5;
    if ($x > 3) {
        echo "Some say the world will end in fire<br>";
    }
    if ($x < 8) {
        echo "Some say in ice<br>";
    }
    $x += 5;
    if ($x > 8) {
        echo "(Either would suffice)<br>";
    }
    ?>

Answer:



Section 7 - CSVs
----------------

### Problem 23

What are CSV files?  What are they used for?

Answer:


### Problem 24

In class, we used 2 different methods to import a CSV file into our PHP code as an array.
The 1st method we used produced a sequential array of sequential arrays.
The 2nd method was a bit more complicated but it produced a sequential array of associative arrays.

Why would we want to use the 2nd method?  Why might the associative arrays be a more useful result?

Answer:




Section 8 - Functions
---------------------

### Problem 25

Observe the following function:

    <?php

    function greaterOfTwo($x, $y) {
        if ($x > $y) {
            return $x;
        }
        elseif ($y > $x) {
            return $y;
        }
    }

    ?>

a) What are the inputs (a.k.a. the arguments or parameters)?

Answer:


b) What does this function do?

Answer:


c) (Extra Credit) What is the return value of `greaterOfTwo(5,5)`?

Answer:


### Problem 26

What will the following program print?


    <?php

        function overwrite($x, $y){
            $x = 10;
            return $x + $y;
        }

        $x = 5;
        $y = 10;

        echo overwrite($x, $y) . "<br>";
        echo "x: $x<br>";
        echo "y: $y<br>";

    ?>

Answer:



### Problem 27

What will the following program print?

    <?php

        function say_a(){
            echo "A";
        }
        function say_b(){
            say_a();
            echo "B";
        }
        function say_c(){
            say_a();
            say_b();
            echo "C";
        }

        say_c();
        say_c();

    ?>


Answer:




