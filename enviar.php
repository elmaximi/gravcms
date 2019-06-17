<?php
function send_email($from, $to, $subject, $message_html, $message_txt = '') {
        
    $email = $to;
    				
    //create a boundary for the email. This 
    $boundary = uniqid('np');
    				
    //headers - specify your from email address and name here
    //and specify the boundary for the email
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: $from \r\n";
    $headers .= "To: $email\r\n";
    //'Reply-To: ' . $from,
    //'Return-Path: ' . $from,
    $headers .= 'Date: ' . date('r', $_SERVER['REQUEST_TIME'])."\r\n";
    $headers .= 'Message-ID: <' . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME'].$subject) . '@' . $_SERVER['SERVER_NAME'] . '>'."\r\n";
    $headers .= 'X-Mailer: PHP v' . phpversion()."\r\n";
    $headers .= 'X-Originating-IP: ' . $_SERVER['SERVER_ADDR']."\r\n";
    
    $headers .= "Content-Type: multipart/alternative;boundary=" . $boundary . "\r\n";
    
    //here is the content body
    $message = "This is a MIME encoded message.";
    
    //Plain text body
    $message .= "\r\n\r\n--" . $boundary . "\r\n";
    $message .= "Content-type: text/plain;charset=iso-8859-1\r\n\r\n";
    
    if ( $message_txt == '' ) {
    	$message_txt = nl2br( $message_html );
    	$message_txt = strip_tags( $message_txt );
    }
    $message .= $message_txt;
    //Html body
    $message .= "\r\n\r\n--" . $boundary . "\r\n";
    $message .= "Content-type: text/html;charset=uiso-8859-1\r\n\r\n";
    $message .= $message_html;
    
    $message .= "\r\n\r\n--" . $boundary . "--";
    
    //invoke the PHP mail function
    mail('', $subject, $message, $headers);

    
}
$to= 'pruebaelmaximi@gmail.com';
    $reply = 'elmaximi26@gmail.com';
    $user_email = $_POST['email'];
    $subject = 'Mensaje automático: '.$_POST['subject'];

    $message = '<table>';
    $message .= '<tr><td>Nombre</td><td>'.$_POST['name']."</td></tr>\n";
    $message .= '<tr><td>Apellidos</td><td>'.$_POST['surname']."</td></tr>\n";
    $message .= '<tr><td>Email</td><td>'.$_POST['email']."</td></tr>\n";
    $message .= '<tr><td>Asunto</td><td>'.$_POST['subject']."</td></tr>\n";
    $message .= '<tr><td>Mensaje</td><td>'.$_POST['message']."</td></tr>\n";
    $message .= '</table>';

    echo $message;

    send_email($user_email, $to, $subject, $message);
    send_email($reply, $user_email, $subject, $message);
?>
