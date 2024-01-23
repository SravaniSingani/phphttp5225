<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkCTA = 'Codeacademy';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkCTA = 'W3scools';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkCTA = 'Mozilla';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        echo '<h2>'.$linkName.'</h2>';



        if($linkURL === ''){
            echo '<p>'. $linkCTA. '</p>';
        }
        else{
            echo '<a href= "'.$linkURL.'"></a>';
        }


        echo '<p>' .$linkURL. '</p>';
        echo '<a href = "'. $linkURL.'">'.$linkCTA.'</a>';
        echo '<img src = "'.$linkImage.'"width = "200" />';
        echo '<p>'. $linkDescription.'</p>';

        //grading system for a course

        echo '<h2>Final Grade</h2>';

        $gradeNumber = ceil(rand(1,100));
        echo '<p>The grade percentage is '.$gradeNumber.'%.</p>';

        if($gradeNumber <= 60){
            echo '<h3> Your Grade: F </h3>';
        }

        else if($gradeNumber >= 61 && $gradeNumber <= 70){
            echo '<h3> Your Grade: E </h3>';
        }

        else if($gradeNumber >= 71 && $gradeNumber <= 75){
            echo '<h3> Your Grade: D </h3>';
        }

        else if($gradeNumber >= 76 && $gradeNumber <= 80){
            echo '<h3> Your Grade: C </h3>';
        }

        else if($gradeNumber >= 81 && $gradeNumber <= 85){
            echo '<h3> Your Grade: B </h3>';
        }

        else if($gradeNumber >= 86 && $gradeNumber <= 90){
            echo '<h3> Your Grade: A </h3>';
        }

        else if($gradeNumber >= 91 && $gradeNumber <= 100){
            echo '<h3> Your Grade: A+ </h3>';
        }

        echo '<h2>Day of the Week</h2>';

        $dayNumber = ceil(rand(1,7));
        echo '<p>The day number:'.$dayNumber.'.</p>';

        switch($dayNumber){
            case 1: echo '<h3> It is Sunday! </h3>';
                    break;
            case 2: echo '<h3> It is Monday! </h3>';
                    break;
            case 3: echo '<h3> It is Tuesday! </h3>';
                    break;    
            case 4: echo '<h3> It is Wednesday! </h3>';
                    break;
            case 5: echo '<h3> It is Thursday! </h3>';
                    break;
            case 6: echo '<h3> It is Friday! </h3>';
                    break;
            case 7: echo '<h3> It is Saturday! </h3>';
                    break;  
            default: echo '<h3> Its not a day! </h3>';
                    break;  
 
        }


        ?>

    </body>
</html>
