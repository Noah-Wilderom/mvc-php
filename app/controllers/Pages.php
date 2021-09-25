<?php
// Hier worden alle paginas ingeladen
Class Pages extends Controller{

    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {

        
        $this->view('pages/index');
    }

    
 
    /* Voorbeeld

     public function about() {
        $this->view('pages/about');
    }
    Url: MVCphp/shop/about 
    Als de url er zo uitziet dan word de functie about() ingeladen
    In de functie word de view functie aangeroepen die in de Controller 
    staat deze functie laad het bestand in genaamd about.php in de map pages
    */
    

    

}