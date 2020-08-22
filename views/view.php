<?php

class Vue {

    // Nom du fichier associ� � la vue
    private $fichier;
    
    public function __construct($type) {
        $this->fichier = "views/view" . $type . ".php";
    }

    // G�n�re et affiche la vue
    public function generer($donnees=null) {
        // G�n�ration de la partie sp�cifique de la vue
        $contenu = $this->genererFichier($this->fichier, $donnees);
		
        // On injecte dans le gabarit le contenu g�n�r� pr�c�demment
        $vue = $this->genererFichier('views/template.php',
                array('contenu' => $contenu));
        echo $vue;
    }

    private function genererFichier($fichier, $donnees) {
        if (file_exists($fichier)) {
			//On rend accessible les tableaux envoy�s par les controleurs dans les vues
			if($donnees != null) {
	            extract($donnees);
			}
            ob_start();
            require $fichier;
            return ob_get_clean();
        }
        else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
    }

}