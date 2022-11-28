<?php

class Ville
{
    private int $idVille;
    private string $nomVille;
    private int $codeVile;
    private int $CodeInsee;
    private int $idDepartement;



    public function __construct($idVille, $nomVille, $CodeInsee, $CodeVille, $idDepartement)
    {
        $this->idVille = $idVille;
        $this->CodeVille = $CodeVille;
        $this->nomVille = $nomVille;
        $this->idVille = $CodeInsee;
        $this->nomVille = $idDepartement;
    }

    /**
     * Get the value of idVille
     * 
     * @return int
     */
    public function getIdVille(): int
    {
        return $this->idVille;
    }

    /**
     * Set the value of idVille
     *
     * @return  self
     */
    public function setIdVille($idVille): self
    {
        $this->idVille = $idVille;

        return $this;
    }

    /**
     * Get the value of nomVille
     * 
     * @return string
     */
    public function getNomVille(): string
    {
        return $this->nomVille;
    }

    /**
     * Set the value of nomVille
     *
     * @return  self
     */
    public function setNomVille($nomVille): self
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    /**
     * Get the value of codeVile
     * 
     * @return int
     */
    public function getCodeVile(): int
    {
        return $this->codeVile;
    }

    /**
     * Set the value of codeVile
     *
     * @return  self
     */
    public function setCodeVile($codeVile): self
    {
        $this->codeVile = $codeVile;

        return $this;
    }

    /**
     * Get the value of CodeInsee
     * 
     * @return int
     */
    public function getCodeInsee(): int
    {
        return $this->CodeInsee;
    }

    /**
     * Set the value of CodeInsee
     *
     * @return  self
     */
    public function setCodeInsee($CodeInsee): self
    {
        $this->CodeInsee = $CodeInsee;

        return $this;
    }

    /**
     * Get the value of idDepartement
     * 
     * @return int
     */
    public function getIdDepartement(): int
    {
        return $this->idDepartement;
    }

    /**
     * Set the value of idDepartement
     *
     * @return  self
     */
    public function setIdDepartement($idDepartement): self
    {
        $this->idDepartement = $idDepartement;

        return $this;
    }
    public static function GetVilleByIdDepartement($valeur)

    {

        $connexion = new Database;

        $maBase = $connexion->connexion();

        $query = "SELECT * FROM ville WHERE id_departement = '" . $valeur . "'";

        $results = $maBase->prepare($query);

        $results->execute();

?>

        <option value disabled selected>Séléctionnez une ville</option>

        <?php

        foreach ($results as $ville) {

        ?>

            <option value="<?php echo $ville["id_ville"]; ?>"><?php echo $ville["nom_ville"]; ?></option>

<?php

        }
    }
}
