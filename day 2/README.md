 We are writing a PHP script using a switch statement to classify a given number into the categories 'small', 'medium', or 'large' based on the following criteria:
  1.  'small' for numbers 1-10,
 2.  'medium' for numbers 11-100,
 3.  'large' for numbers above 100



How switch statement works:
'switch' statement is an alternative for 'if....else' statements, in PHP is used to perform different actions based on different conditions.

Its basic syntax is as follows;


switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}


The 'expression' is evaluated once
The value of the expression is compared with the values of each 'case'
If there is a match, the associated block of code is executed
The 'break' keyword breaks out of the switch block
The 'default' code block is executed if there is no match





Here are best practicess of using 'switch' statements;


A switch can have many case statements in PHP, but it is good practice to keep them to a minimum as lots of case statements can make the code hard to read.

The break statements are optional, but without them, PHP will execute all the code after a match until it hits a break statement or the end of the switch block.


You can specify a default statement at the end of a switch that will only execute when the expression does not match any case statements. The default statement is optional and can be left out of the switch if you do not require it.

After each case statement, you can use a semicolon instead of a regular colon. However, we recommend using a colon as it helps make the code more readable.




