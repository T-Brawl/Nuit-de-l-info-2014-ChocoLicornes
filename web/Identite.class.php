<?php
class Identite {

	private $login;
	private $nom;

	function __construct($log,$nom) {
		$this->login=$log;
		$this->nom=$nom;
		}
		
	public function getIdent(){
		return $this->login;
		}
		
		
	public function getNom(){
		return $this->nom;
		}

	// Modifie le login de l'utilisateur
	public function setLogin($log) {
		$this->login = $log;
	}

	// Modifie le nom de l'utilisateur
	public function setNom($name) {
		$this->nom = $name;
	}
		
}
?>
