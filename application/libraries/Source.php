<?php 

class Source {
    
    // parameters should be path to file relative to application folder
    public function get($controller = NULL, $model = NULL, $view = NULL) { 
        $source_code = '';
        
        if ($controller !== NULL) {
            $source_code .= "/* This is the controller '$controller' */ \n\n";
            $source_code .= $this->clean_code($controller);
        }
        
        if ($model !== NULL) {
            $source_code .= "/* This is the model '$model' */ \n\n";
            $source_code .= $this->clean_code($model);
        }
        
        if ($view !== NULL) {
            $source_code .= "/* This is the content view '$view' */ \n\n";
            $source_code .= $this->clean_code($view);
        }
        
        return $source_code;
    }
    
    // $source should be path to file relative to application folder
    private function clean_code($code) {
        return htmlentities(file_get_contents(APPPATH . $code));
    }
    
    
}

?>
