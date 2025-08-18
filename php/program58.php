<?php
// Sample string with emails
$text = "Contact us at support@example.com or sales@company.org. 
         You can also reach admin@my-site.net for more info.";

// Regular expression for email
$pattern = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/i";

// Extract emails
if (preg_match_all($pattern, $text, $matches)) {
    echo "Email addresses found:<br>";
    foreach ($matches[0] as $email) {
        echo $email . "<br>";
    }
} else {
    echo "No email addresses found.";
}
?>



Output:

Email addresses found:
support@example.com
sales@company.org
admin@my-site.net
