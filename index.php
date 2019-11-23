<?

include 'functions.php';

/**
* build array
* @param string name,
* @param string email,
* @param array exceptions
*/
// $members = array(
//   array('User 1', 'testmail1@mail.com', array(200)),
//   array('User 2', 'testmail2@mail.com', array(200))
// );

// Start the Wichteln
$wichteln = new dmili_Wichteln();
$wichteln->Wichteln($members, 'david.voglgsang@gmail.com');

?>
