<?php
//Class Film

class Film
{
    private $_id;
    private $_titre;
    private $_image;

    public function __construct($id, $titre, $image)
    {
        $this->_id = $id;
        $this->_titre = $titre;
        $this->_image = $image;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function getImage()
    {
        return $this->_image;
    }


    public function AfficheFilm()
    {
        echo ' <img src=' .  $this->_image . ' alt="...">';
    }

    public function deleteFilm()
    {
        echo "" . $this->_id . "" . $this->_titre;
        global $db;
        $delet = $db->prepare("DELETE FROM `film` WHERE `id_film` = " . $this->_id);
        $delet->execute(array($this->_id));
    }
}
?>