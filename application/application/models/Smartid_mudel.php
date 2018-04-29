<?php
class Smartid_mudel extends CI_Model {

    private $clientId = 'Ic7WWarIJ4yrg4IjOklPqMLDiNPBH3rC';
    private $clientSecret = 'UzSgjOrV4SFKFa0VFFFygrXZL6WY5TDY';
    private $redirectUrl = "http://rendilehtveeb.tk/kasutajad/smartIDvastus";

    private $authorizeUrl = 'https://id.smartid.ee/oauth/authorize';
    private $accessTokenUrl = 'https://id.smartid.ee/oauth/access_token';

    private $client;

    public function __construct(){
        parent::__construct();
        require_once(APPPATH . '/third_party/smartid/Client.php');
        require_once(APPPATH . "/third_party/smartid/GrantType/IGrantType.php");
        require_once(APPPATH . "/third_party/smartid/GrantType/AuthorizationCode.php");

        $this->client = new OAuth2\Client($this->clientId, $this->clientSecret, OAuth2\Client::AUTH_TYPE_AUTHORIZATION_BASIC);
        $this->client->setCurlOption(CURLOPT_USERAGENT, "UserAgent");
    }

    public function sisselogimine(){

        if (!isset($_GET["code"])) {

            $authUrl = $this->client->getAuthenticationUrl($this->authorizeUrl, $this->redirectUrl, array());
            header("Location: " . $authUrl);
            die("Redirect");
        }
    }   

    public function getEmail(){

        if (isset($_GET["code"])) {
            $parameetrid = array("code" => $_GET["code"], "redirect_uri" => $this->redirectUrl);
            $vastus = $this->client->getAccessToken($this->accessTokenUrl, "authorization_code", $parameetrid);

            $accessTokenResult = $vastus["result"];

            $this->client->setAccessToken($accessTokenResult["access_token"]);
            $this->client->setAccessTokenType(OAuth2\Client::ACCESS_TOKEN_BEARER);

            $vastus = $this->client->fetch("https://id.smartid.ee/api/v2/user_data");

            return $vastus["result"]["email"];
        }
    }  
}
?>