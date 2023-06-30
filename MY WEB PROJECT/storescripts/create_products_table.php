<?php

// Connect to the file connect-to-mysql.php

require "connect-to-mysql.php";

$sqlCommand = "CREATE TABLE products(
    sku varchar(255) NOT NULL,
    name varchar(255) NOT NULL,
    price int(11) unsigned NOT NULL,
    productType varchar(255) NOT NULL,
    size int(11) unsigned,
    height int(11) unsigned,
    width int(11) unsigned,
    length int(11) unsigned,
    weight int(11) unsigned
    )";

    /* 

        sku -> various character field

        name -> name of product, for example War and Peace for book, 
                or Harry Potter and the Order of the Phoenix DVD, 
                or SATSUMAS furniture

        price -> unsigned means this can only be a positive number

        productType -> various characters (numbers, letters symbols etc.), can be a max of 255 characters
                        Based on example - should have DVD, Furniture, or Book
        
        size -> unsigned means this can only be a positive number

        height -> unsigned means this can only be a positive number

        width -> unsigned means this can only be a positive number

        length -> unsigned means this can only be a positive number

        weight -> unsigned means this can only be a positive number 

    */

// Time to execute the command of creating the products table

if(mysqli_query($con, $sqlCommand)){
    echo "Your products table has been created successfully!";
} else {
    echo "CRITICAL ERROR: products table has not been created";
}

?>
