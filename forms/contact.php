include_once ("./socketlabs-php/InjectionApi/src/includes.php");
//or if using composer: include_once ('./vendor/autoload.php'); 

use Socketlabs\SocketLabsClient;
use Socketlabs\Message\BasicMessage;
use Socketlabs\Message\EmailAddress;

$serverId = 42242;
$injectionApiKey = "Cf69AaTz87Mbc4WGo3g5";

$client = new SocketLabsClient($serverId, $injectionApiKey);
 
$message = new BasicMessage(); 

$message->subject = "Sending A Basic Message";
$message->htmlBody = "<html>This is the Html Body of my message.</html>";
$message->plainTextBody = "This is the Plain Text Body of my message.";

$message->from = new EmailAddress("rrk2ritesh@gmail.com");
$message->addToAddress("ritesshranjank2672@gmail.com");
 
$response = $client->send($message);