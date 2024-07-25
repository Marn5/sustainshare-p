<?php

// create a function that does the login simulation
function login($email, $password){
    // check if the email and password are correct using an if statement
    if ($email === "email@email.com" && $password === "password123") {
        // if the email and password are correct, return "Logged in"
        return "Logged in";
    }
     else {
        // if the email and password are incorrect, return "Invalid credentials"
        return "Invalid credentials";
    }
}

// call the function and pass the email and password
echo "First test:=> ".login("XXXXXXXXXXXXXXXXXXXXXXXXXXX", "password123");
// call the function and pass the email and password
echo "Second test:=> ".login("elishahezekiah903@gmail.com", "password123");
?>