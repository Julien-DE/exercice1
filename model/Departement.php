<?php
class Departement
{

    private int $idDepartement;
    private string $nomDepartement;
    private int $idRegion;

    public function __construct($idDepartement, $nomDepartement, $idRegion)
    {
        $this->idDepartement = $idDepartement;
        $this->nomDepartement = $nomDepartement;
        $this->idRegion = $idRegion;
    }

    /**
     * Get the value of idDepartement
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

    /**
     * Get the value of nomDepartement
     * 
     * @return string
     */
    public function getNomDepartement(): string
    {
        return $this->nomDepartement;
    }

    /**
     * Set the value of nomDepartement
     *
     * @return  self
     */
    public function setNomDepartement($nomDepartement)
    {
        $this->nomDepartement = $nomDepartement;

        return $this;
    }

    /**
     * Get the value of idRegion
     * @return int
     */
    public function getIdRegion(): int
    {
        return $this->idRegion;
    }

    /**
     * Set the value of idRegion
     *
     * @return  self
     */
    public function setIdRegion($idRegion): self
    {
        $this->idRegion = $idRegion;

        return $this;
    }
    public static function GetDepartementByIdRegion($valeur)

    {

        $connexion = new Database;

        $maBase = $connexion->connexion();

        $query = "SELECT * FROM departement WHERE id_region = '" . $valeur . "'";

        $results = $maBase->prepare($query);

        $results->execute();

?>

        <option value disabled selected>Séléctionnez un département</option>

        <?php

        foreach ($results as $departement) {

        ?>

            <option value="<?php echo $departement["id_departement"]; ?>"><?php echo $departement["nom_departement"]; ?></option>

<?php

        }
    }
}
