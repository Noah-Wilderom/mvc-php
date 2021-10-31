<?php

/**
 * Helpers class om verschillende kleine taken ui te voeren
 * 
 * @method Array getURL()
 * @method String getURI(String $param)
 * 
 * @author Noah Wilderom
 */
class Helpers {


    /**
         * Krijg de volledige URL
         * 
         * @return Array
         */
    public function getURL() {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            // Filter de url van alles wat niet in een url thuishoort 
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // URL -> Array
            $url = explode('/', $url);
            return $url;
        }
    }


    /**
     * Krijg de $_GET info die je nodig hebt. Op de mvc manier
     * 
     * Voorbeeld(mvcphp/pages/index/product/12) 
     *                   
     * mvcphp = Websitedomein
     * 
     * pages = Controller 
     * 
     * index = View
     * 
     * product = URI key [@param String $param]  
     *        
     * 12 = value van de URI key
     *
     * Voorbeeld voor meer URI info
     * 
     * (mvcphp/pages/index/product/12/review/25)
     * 
     * @param String $param Geef de URI key op om de value eruit te halen
     * 
     * @return String De value van de URI info
     */
    public function getURI(String $param) {
        // 
        $urlArray = $this->getUrl();
        if(array_search($param, $urlArray)) {
            $uri = array_search($param, $urlArray);              
            $valueIndex = $uri + 1;
            return $urlArray[$valueIndex];
        } else {
            return $urlArray;
        }
        
    }
}
