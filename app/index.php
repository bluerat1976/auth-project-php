<?
    // Import the autentication library
    require_once 'auth.php';

    // Register another user
//register('testuser8', 'tu8@e.host', '876543');
   
   
   // Search the user
  var_dump(search('testuser9'));
  print('<hr>');
  var_dump(authenticate('testuser2', '234'));

 // STRUCTURE: associative array
// $user =[
//     'username' => 'tania76',
//     'email' => 'tania76@example.host',
//     'password' => '123456',
//     'active' => true,
//     'rating' => 4.5,
// ];

// Behavior: functions



// $html = render($user);

// print($html);


