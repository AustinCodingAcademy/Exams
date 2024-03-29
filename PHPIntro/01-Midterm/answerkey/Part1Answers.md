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

Answer: Hello World


b)

        <?php
        $which_world = "Earth";
        echo "Hello $which_world";
        ?>

Answer: Hello Earth

Objectives:

* strings


c)

        <?php
        $which_world = "Earth";
        echo 'Hello $which_world';
        ?>

Answer: Hello $which_world

Objectives:

* strings


d)

        <?php
        $name = "Ryan";
        $verb1 = "code";
        $verb2 = "teach";
        $verb3 = "play music";
        echo "My name is $name, and I love to $verb1, $verb2 and $verb3!";
        ?>

Answer: My name is Ryan, and I love to code, teach and play music!

Objectives:

* Variable substitution into double quoted strings

e)

        <?php
        $name = "James";
        echo "Hello! My name is" . $name;
        ?>

Answer: Hello! My name isJames

Objectives:

* String concatenation

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

Objectives:

* Conditional statements

   a) "Javascript"

   Answer: Javascript is a Client-side scripting language.


   b) "English"

   Answer: English is a  human language.


   c) "Piglatin"

   Answer: Piglatin is a unknown value.


### Problem 3

Write PHP code to assign a value to the following variables (just pick an appropriate value):

Objectives:

* Variable assignment

   a) $name

   Answer: $name = "Joe";


   b) $cityOfBirth

   Answer: $cityOfBirth = "Tyler";


   c) $hobbies

   Answer: $hobbies = array('Playing games', 'coding');


   d) $favoriteMusic

   Answer: $favoriteMusic = "Downtempo";


### Problem 4

Come up with an example variable name and value for the following applications.

Objectives:

* Variable assignment

a). Whether it is raining outside or not

Answer: $is_raining = true;


b) The user's average typing words per minute is 56

Answer: $user_wpm = 56;


c) It's 98.6 degrees outside

Answer: $temperature = 98.6;


d) The user's social security number is 555442232

Answer: $ssn = "555442232";


### Problem 5

For the following code excerpts, describe the error in each one.


   a)

        <?php
        echo hello world;
        ?>

   Answer: hello world needs to be surrounded in quotes

   Objectives:

     * strings

   b)

        <?php
        $colors = array('purple','brown','blue','orange');
        $favColor = $colors[4];
        echo "My favorite color is $favColor.";
        ?>

   Answer: The largest index of the $colors array is 3

   Objectives:

     * Sequential Arrays

   c)

        <?php
        $x = 3;
        if $x > 3 {
            echo 'the variable $x is greater than 3';
        }
        ?>

   Answer: $x > 3 needs to be wrapped in parenthesis

   Objectives:

     * Conditional statements


   d)

        <?php
        $carBrands = array('Honda','Toyota','Ford','VW')
        echo "I drive a $carBrands[0].";
        ?>

   Answer: There is no semicolon after the $carBrands array declaration
 
   e)

        <?php
        $birthYear = 1983;
        $age = 2015 - $birthYear;
        if ($age = 21) {
            echo "Yay, you can drink alcohol now!";
        }
        ?>

   Answer: $age = 21 should be $age == 21

   Objectives:

     * Conditional statements


   f)

        <?php
        $todo = array(
            "ASAP" => "pay taxes",
            "later" => "go surfing",
        );

        echo "I want to " . $todo[1] . " but I need to " . $todo[0] . " first!";
        ?>

   Answer: $todo is an associative array and does not contain 0 or 1 as keys

   Objectives:

     * Associative arrays




Section 1 - Data types
----------------------

### Problem 6

   Objectives:

     * Data types

For each of the following data types, provide 2 example values:

a) integer

Answer:

    1) 5
    2) 3

b) float (aka decimal numbers)

Answer:

    1) 2.2
    2) 8.8

c) boolean

Answer:

    1) true
    2) false

d) string

Answer:

    1) "hello"
    2) "goodbye"

e) array

Answer:

    1) array(5,2,3)
    2) array("name" => "joe", "age" => 24)


### Problem 7

For each of the following situations, select the data type that best represents
the situation:

   Objectives:

     * Data types

Examples:

    Question: The number of kids a person has
    Answer: integer


a) The text of a tweet or status update

   Answer: string

b) The number of pizzas to order for the office

   Answer: integer

C) A list of song genres to choose from for a service like Pandora or Spotify

   Answer: array

d) The price of a product after tax

   Answer: float



Section 2 - Variables
---------------------

### Problem 8

   Objectives:

     * Variable assignment

What will the following program print?

    <?php

        $x = 8;
        $y = 3;
        $x = $y;

        echo "x is $x<br>";
        echo "y is $y<br>";

    ?>

Answer:

x is 3
y is 3


### Problem 9

For each statement, create a variable assignment that clearly represents the
situation. Fill in the blanks provided.

   Objectives:

     * Variable assignment

a) Joe's favorite hobby is going to the arcade

    <?php

        $joesFavHobby = "Going to the arcade";

    ?>

b) The capital of Texas is Austin

    <?php

        $capitals['Massachusetts'] = "Boston";
        $capitals['Texas'] = "Austin";

    ?>

c) The post got 10 likes

    <?php

        $numLikes = 10;

    ?>

d) The user has 5 unread messages

    <?php

        $numUnreadMessages = 5;

    ?>

e) The class's topics include PHP, MySQL and HTML

    <?php

        $topics = array('PHP', 'MySQL', 'HTML');

    ?>


Section 3 - Operators
---------------------

### Problem 10

What is the output of the following program?

    <?php

        echo "PHP is a" . "great language for " . "processing text<br>";
        echo "But you need to" . "be careful about" . " whitespace";

    ?>
    
   Objectives:

     * Concatenation

Answer:

PHP is agreat language for processing text
But you need tobe careful about whitespace



### Problem 11

Create two string variables `$s1` and `$s2`. Assign the concatenation of the two
strings to a variable `$s3`

   Objectives:

     * Concatenation

Answer:

$s1 = "Joe ";
$s2 = "McCullough";
$s3 = $s1 . $s2;


### Extra Credit Problem

Observe the following code:

    <?php
        $x = 3.4;
        $y = 3 . 4;
    ?>
    
   Objectives:

     * Data types
     * Concatenation

a) What is the value of $x? What is its data type?

Answer: 3.4, float



b) What is the value of $y? What is its data type?

Answer: "34", string



c) If $x and $y are the same, explain why they are the same. If $y and $y are
different, explain why they are different.

Answer: Due to the space between 3 and 4, the `.` becomes concatenation
instead of a decimal point.


Section 4 - Getting in and out of PHP
-------------------------------------

### Problem 12

a) What do you have to type to get into PHP mode so you can type PHP code?

   Objectives:

     * PHP Environment

Answer:

<?php

?>

b) What happens if you just type stuff directly into a .php file
without typing that?

   Objectives:

     * PHP Environment

Answer:

The browser will display anything outside of the <?php ?> blocks as-is.
Any php code not inside a <?php ?> block will not be executed.

### Problem 13

Is the following legal PHP code? Why or why not?

   Objectives:

     * PHP Environment

    <?php

    $headline = "New iPhone is really boring";
    <h1>echo $headline</h1>

    ?>

Answer:

No. The markup should be outside of the php blocks, or the markup should be
echod as a string.






Section 5 - Arrays
------------------

### Problem 14

Explain the difference between a sequential array and an associative array

   Objectives:

     * Associative arrays
     * Sequential arrays

Answer:

Sequential arrays are ordered arrays with elements, where each element has an
index. An associative array is an array containing key value pairs. Order is
generally not important in an associative array.


### Problem 15

Define the following terms:

a) array element

Definition: A specific value inside of a sequential array

   Objectives:

     * Sequential arrays



b) array key

Definition: The identifier for a value in an associative array

   Objectives:

     * Associative arrays

c) key-value pair

Definition: An individual pairing of a key and its value in an associative
array

   Objectives:

     * Associative arrays

d) foreach loop

Definition: A loop that performs a series of actions for each element in an
array.

Objectives:

 * foreach loops

### Problem 16

a) What function can you use to see how many elements are in an array?

   Objectives:

     * Sequential arrays

Answer: count



b) Write PHP code that uses this function to echo how many elements are in
an array called $grades.

   Objectives:

     * Sequential arrays

Answer: echo count($grades);



### Problem 17

a) How do you access the element of an array named $nums located at index $n?

   Objectives:

     * Sequential arrays

Answer: $nums[$n];



b) How do you access the last element of a (non-empty) array named $nums?

   Objectives:

     * Sequential arrays

Answer:

$nums[count($nums)-1]




### Problem 18

Consider the following array

    $arr = [5,3,1,2,4,6];

What are the values of the following expressions?


a) `$arr[2]`

   Objectives:

     * Sequential arrays

Answer: 1


b) `$arr[1] + $arr[3]`

   Objectives:

     * Sequential arrays

Answer: 5


c) `$arr[0]`

   Objectives:

     * Sequential arrays

Answer: 5


d) `count($arr)`

   Objectives:

     * Sequential arrays

Answer: 6


e) `$arr[ count($arr)-1 ]`

   Objectives:

     * Sequential arrays

Answer: 6


### Problem 19

For each of the pieces of data, create an array that best represents the data.
Assign the array to an appropriately named variable.

1) The students in the class are Bob, Jill, Jack, and Jaime.

   Objectives:

     * Sequential arrays

Answer:

$students = array("Bob", "Jill", "Jack", "Jaime");



2) In the class, Bob got a 90, Jill got a 92, Jack got an 87 and Jaime got a 95.

   Objectives:

     * Associative arrays

Answer:

$class = array(
    array(
        "student_name" => "Bob",
        "grade" => 90
    ),
    array(
        "student_name" => "Jill",
        "grade" => 92
    ),
    array(
        "student_name" => "Jack",
        "grade" => 87
    ),
    array(
        "student_name" => "Jaime",
        "grade" => 95
    ),
)



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

   Objectives:

     * Associative arrays

Answer: $patients[0]['illness']


b) '01:30 AM':

   Objectives:

     * Associative arrays

Answer: $patients[1]['admittance_time']


c) 'Hacker McHackerson':

   Objectives:

     * Associative arrays

Answer: $patients[2]['name']


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

   Objectives:

     * Conditional statements

Answer: I am an animal and I have a spout!


b) "elephant" ?

   Objectives:

     * Conditional statements

Answer: I am an animal and I have a trunk!


c) "dolphin" ?

   Objectives:

     * Conditional statements

Answer: I am an animal


### Problem 22

What will the following code output?

    <?php
    $x = 5
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
    
   Objectives:

     * Conditional statements

Answer:

Some say the world will end in fire
Some say in ice
(Either would suffice)



Section 7 - CSVs
----------------

### Problem 23

What are CSV files?  What are they used for?

Answer: Comma Separated Value files. They store tabular data in a format that
can be easily exchanged between spreadsheet programs and programming
languages.


### Problem 24

In class, we used 2 different methods to import a CSV file into our PHP code as an array.
The 1st method we used produced a sequential array of sequential arrays.
The 2nd method was a bit more complicated but it produced a sequential array of associative arrays.

Why would we want to use the 2nd method?  Why might the associative arrays be a more useful result?

   Objectives:

     * Associative arrays

Answer: Using associative arrays with CSVs produce more readable code. This is
because using keys to access values within the array is more explicit than
using a seemingly arbitrary index number.




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

   Objectives:

     * Functions

Answer: $x, $y


c) What does this function do?

   Objectives:

     * Functions
     * Conditionals

Answer: Returns the larger value provided


d) (Extra Credit) What is the return value of `greaterOfTwo(5,5)`?

   Objectives:

     * Functions

Answer: Nothing


### Problem 26

What will the following program print?


    <?php

        function overwrite($x, $y){
            $x = 10;
            return $x + $y;
        }

        $x = 5;
        $y = 10;

        echo overwrite($x, $y);
        echo "x: $x<br>";
        echo "y: $y<br>";

    ?>

   Objectives:

     * functions
     * variable assignment
     

Answer:

20
x: 5
y: 10



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

   Objectives:

     * Functions

Answer:


AABCAABC

