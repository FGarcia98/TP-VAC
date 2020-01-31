<?php
class Film
{
        private $_id;
        private $_titre;
        private $_image;

        public function __construct($id,$titre,$image){
        $this->_id = $id;
        $this->_titre = $titre;
        $this->_image = $image;
        }

        public function getId(){
        return $this->_id;
        }

        public function getTitre(){
        return $this->_titre;
        }

        public function getImage(){
            return $this->_image;
            }

        public function AfficheFilm(){
            echo 'Titre ='.$this->_titre.' id ='.$this->_id.$this->_image;
        }
 }
?>