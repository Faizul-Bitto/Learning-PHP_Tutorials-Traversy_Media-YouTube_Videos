<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Since cookies are stored on the client, you shouldn't store sensitive data in them. Sessions are a better choice for storing sensitive data.

// Set a cookie
//setcookie(variable_name, value, time to keep) -> syntax
setcookie('name', 'Brad', time() + 86400);
// Now its stored in the application's cookie section.


// If we want to get the data and use that :
if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
};

//For deletion ->
setcookie('name', '', time() - 86400); 
//' ' -> for this the name will be unset now.