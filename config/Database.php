<?php

class Database

{

    private $connexion = "";

    private string $serveur = 'localhost';

    private string $nomBase = 'france';

    private string $utilisateurBase = 'root';

    private string $utilisateurMdp = '';

    private string $messageBase;

    public function __construct()
    {
    }

    public function connexion()
    {

        try {

            $connexion = new PDO('mysql:host=' . $this->serveur . ';dbname=' . $this->nomBase, $this->utilisateurBase, $this->utilisateurMdp);

            $connexion->exec("SET CHARACTER SET utf8");

            $connexion->exec("SET NAMES utf8");

            $messageBase = $this->setMessageBase('<div class="alert alert-success" role="alert">Connexion bdd ok !</div>');
        } catch (PDOException $e) {

            $messageBase = $this->setMessageBase('<div class="alert alert-danger" role="alert">Connexion bdd nok !</div>');
        }

        if (isset($connexion)) {
            return $connexion;
        };
    }

    /**

     * Get the value of messageBase
     * 
     * @return string

     */

    public function getMessageBase(): string

    {

        return $this->messageBase;
    }

    /**

     * Set the value of messageBase

     *

     * @return self

     */

    public function setMessageBase($messageBase): self

    {

        $this->messageBase = $messageBase;

        return $this;
    }
}
