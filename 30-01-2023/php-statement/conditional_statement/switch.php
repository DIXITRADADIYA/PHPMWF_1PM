<?php
$grade="C";
switch($grade)
{
    case 'A':
        echo "You are topper students &#9786";
        break;
        
    case 'B':
        echo "You are average students &#9786";
        break;

        
    case 'C':
        echo "You are failed students &#9785";
        break;
        
    default:
        echo "Your grade is not found anywhere try to contact with admin";
        break;

}

?>