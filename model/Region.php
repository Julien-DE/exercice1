<?php

class Region
{

    private int $idRegion;
    private string $nomRegion;
    private string $nouvRegion;

    function __construct($idRegion, $nomRegion, $nouvRegion)

    {

        $this->idRegion = $idRegion;

        $this->nomRegion = $nomRegion;

        $this->nouvRegion = $nouvRegion;
    }

    /**
     * Get the value of idRegion
     * 
     * @return string
     */
    public function getIdRegion(): string
    {
        return $this->idRegion;
    }
    /**
     * Set the value of idRegion
     *
     * @return self
     */
    public function setIdRegion($idRegion): self
    {
        $this->idRegion = $idRegion;
        return $this;
    }
    /**
     * Get the value of nomRegion
     *  
     * @return string
     */
    public function getNomRegion(): string
    {
        return $this->nomRegion;
    }
    /**

     * Set the value of nomRegion
     *
     * @return self
     */
    public function setNomRegion($nomRegion): self
    {
        $this->nomRegion = $nomRegion;
        return $this;
    }
    /**
     * Get the value of nouvRegion
     * 
     * @return string
     */
    public function getNouvRegion(): string
    {
        return $this->nouvRegion;
    }
    /**
     * Set the value of nouvRegion
     *
     * @return self
     */

    public function setNouvRegion($nouvRegion): self
    {
        $this->nouvRegion = $nouvRegion;
        return $this;
    }
}
