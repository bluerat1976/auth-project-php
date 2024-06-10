<?

function register($username, $email, $password) {
    
// HW2: Try to use if/else in other maner
// hint: invercion, return

    // Check if username is available
    
    if(search($username)) {
        print('ERROR: Such username is already exists. Enter another name.');
    } else {
        $user = [
        $username,
        $email,
        $password,
        true,
        0.0
    ]; 
    $fp = fopen('./data/users.csv', 'a');
    fputcsv($fp, $user);
    fclose($fp);

    }
   
};



function unregister($username) {

};

function authenticate($username, $password) {
    $fp = fopen('./data/users.csv', 'r');

    
    while (true) {
        $user = fgetcsv($fp);
        if ($user === false) {
            break;
        }
        
        if ($user[0] === $username && $user[2] === $password) {
            // If user existes return user array
            fclose($fp);
            return $user;
        }
    }
    fclose($fp);
    return false;
 
    // HW: Make the autentification
    // hint: search user by username + password
    // return either user array, lr false
};

function login($username) {

};

function logout($username) {

};

//HELPERS

function search($username) {
    $fp = fopen('./data/users.csv', 'r');

       while(true) {
            $user = fgetcsv($fp);
            if($user === false || $user[0] === $username)
                break; 
       }

    fclose($fp);
    return $user;
}
