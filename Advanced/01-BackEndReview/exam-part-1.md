Back End Review Exam - Part 1
=============================

* Student name:
* Test date:

Section 0 - Basic vocabulary
----------------------------

Define the following terms

### variable

### constant

### operator

### operand

### statement

### expression

### syntax error

### logical error

### relative path

### absolute path





Section 1 - Data types
----------------------

### Problem 1

List the basic (scalar) data types in PHP

### Problem 2

When casting from a float to an int, what is the expected behavior?

### Problem 3

List the data type that best represents each object/scenario:

* contents of an email - 
* boxes of pizza - 
* number of donations a non-profit has received - 
* miles driven -
* is the account balance larger than the charge requested? - 
* number of students in a class - 
* Star rating on a review website -
* is it raining outside? - 
* percent increase in stock value - 
* gallons of gas purchased at a gas pump - 
* an account user name - 
* a phone number - 
* is the user name / password combination correct?

### Problem 4

What is the expected data type resulting from evaluating each expression?

* `5 + 10` - 
* `(int) $x == $x` - 
* `5.0 + 10` - 
* `"Number of siblings: " . $num_siblings` - 
* `5 >= 2` - 
* `(int) 5.0 + 3` - 
* `"joe" == "JOE"` - 
* `0.0 + 2` - 

### Problem 5

What is the difference between a static typing and dynamic typing?

### Problem 6

What is the difference between strong typing and weak typing?





Section 2 - If statements
-------------------------

### Problem 1

Describe the general form of an `if`/`else if`/`else` statement

### Problem 2

What will the following code print to the screen?

    <?php

    $x = 10;
    $y = true;

    if($x > 10){
        if($x == 10 && $x % 2 == 0){
            echo "$x is even and equal to 10";
        }
    }
    else if($y){
        echo '$y was true';
    }
    else if($x == 10){
        echo '$x was 10';
    }
    else{
        echo "Nothing happened";
    }

    ?>

Output:

### Problem 3

How are the following if statements different? What are the implications of this
difference?

    if($cond1){
        // Do stuff if $cond1 is true
    }
    else if($cond2){
        // Do stuff if $cond2 is true
    }

vs


    if($cond1){
        // Do stuff if $cond1 is true
    }
    if($cond2){
        // Do stuff if $cond2 is true
    }

Answer:

### Problem 4
