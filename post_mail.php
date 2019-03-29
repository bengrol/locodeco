<?php
    

    
    if( isset($_POST["action"]) &&  $_POST["action"] == "BasicForm"  ){
        $to_email = "groleau.b@gmail.com";
        // $from_email = $_POST["email"];
        $from_name = strip_tags($_POST["name"]);
        // $body = strip_tags($_POST["message"]);


        $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
        $message = '<html><body>';
        $message .= '<h1>Hello loco !</h1>';
        $message .= "<h3>voici une demande d\'information de la part de {$from_email}</h1>" ;
        $message .= "<span>Voici son message : </span><p>{$strip_tags($_POST["message"])}</p>" ;
        $message .= '</body></html>';

        
        if ( mail($to_email, 'demande d\'information' , $message, $headers)) {
            return ("Votre message a bien été envoyé");
          } else {
        

        $logging = <<<LOG
    		\n
    		<< Start of Message >>
        log message    		
        << End of Message >>
LOG;

    
            // open log file
    		if($handle = fopen('hacklog.log', 'a')) {
    		
    			fputs($handle, $logging);  // write the Data to file
    			fclose($handle);           // close the file
    			
    		} 

      }
    }
?>