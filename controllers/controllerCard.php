<?php

require_once 'models/modelCard.php';
require_once 'views/view.php';
require_once 'controllers/controller.php';

class ControllerCard extends Controller
{

    private $modelCard;

    public function __construct()
    {
        $this->modelCard = new ModelCard();
    }

    public function listerEnvoyees(){
        $card = $this->modelCard->getCardEnvoyees();
        if ($card->rowCount() > 0) {
            $data = $card->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($data);
            //echo json_encode($data);
            return $data;
        }
        else {
            throw new Exception('Il n\'y a pas de carte à afficher. Rendez-vous dans votre espace admin pour enregistrer votre première carte.');
        }
    }
    public function listerRecues(){
        $card = $this->modelCard->getCardRecues();
        if ($card->rowCount() > 0) {
            $data = $card->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        else {
            throw new Exception('Il n\'y a pas de carte à afficher. Rendez-vous dans votre espace admin pour enregistrer votre première carte.');
        }
    }


    /*public function addMessage($dataPost) {
        $captcha;
        if(isset($dataPost['g-recaptcha-response'])){
            $captcha=$dataPost['g-recaptcha-response'];
        }

        if($this->checkCaptcha($captcha)) {
            $ip = $this->getIp();
            $date = $this->getDate();
            $hour = $this->getHour();

            // Protection contre les failles XSS
            $email =		htmlspecialchars($this->getParameter($dataPost, 'email'));
            $name =			htmlspecialchars($this->getParameter($dataPost, 'name'));
            $firstname =	htmlspecialchars($this->getParameter($dataPost, 'firstname'));
            $content =		htmlspecialchars($this->getParameter($dataPost, 'content'));
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo json_encode(array("success" => False,
                    "error" => "Votre e-mail est invalide."));
                return;
            }

            if(strlen($email) > 50) {
                echo json_encode(array("success" => False,
                    "error" => "Votre e-mail est trop long."));
                return;
            }
            if(strlen($name) > 50) {
                echo json_encode(array("success" => False,
                    "error" => "Votre nom est trop long."));
                return;
            }
            if(strlen($firstname) > 50) {
                echo json_encode(array("success" => False,
                    "error" => "Votre prenom est trop long."));
                return;
            }
            if(strlen($content) > 500) {
                echo json_encode(array("success" => False,
                    "error" => "Votre message est trop long."));
                return;
            }

            $this->modelMessage->addMessage($date, $hour, $email, $name, $firstname, $content, $ip);
            echo json_encode(array("success" => True));

        } else {
            echo json_encode(array("success" => False,
                "error" => "Le captcha ne correspond pas."));
        }
    }

    public function getDetailMessage($dataPost) {

        if (isset($_SESSION['token']) && isset($dataPost['token']) && !empty($_SESSION['token']) && !empty($dataPost['token'])) {
            // V�rification du token contre CSRF et si l'utilisateur est logg� en tant qu'admin
            if ($_SESSION['token'] == $_POST['token'] && isset($_SESSION['admin'])) {
                $message = $this->modelMessage->getDetailMessage($dataPost['id']);
                if ($message->rowCount() > 0) {
                    $data = $message->fetch(PDO::FETCH_ASSOC);
                    echo json_encode($data);
                }
                else {
                    throw new Exception('L\'identifiant de ce message est introuvable.');
                }
            }
        }
    }

    public function showFormContact() {
        $view = new Vue("Contact");
        $view->generer();
    }


    private function checkCaptcha($captcha){
        if(!isset($captcha)){
            return False;
        }
        $secretKey = "6LfiZMUUAAAAADvODfe8D7H1XiVydM2XSZ0hYdVa";
        $ip = $this->getIp();
        // v�rif aupr�s de l'API google
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);

        if($responseKeys["success"]) {
            return True;
        }
        else {
            return False;
        }
    }

    private function getDate(){
        date_default_timezone_set("Europe/Paris");
        $date = date("Y-m-d");
        return $date;
    }

    private function getHour(){
        date_default_timezone_set("Europe/Paris");
        $hour = date("h:i:s");
        return $hour;
    }

    private function getIp(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])){ //share internet
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //ip is pass from proxy
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else{
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }*/

}
