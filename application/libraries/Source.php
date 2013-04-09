<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Source {
    
    // parameters should be path to file relative to application folder
    public function get() { 
        $source_code = '';
        
        foreach(func_get_args() as $arg) {
            $source_code .= "\n/********** '$arg' **********/ \n\n";
            $source_code .= $this->clean_code($arg);
        }
        
        return $source_code;
    }
    
    // $code should be path to file relative to application folder
    private function clean_code($code) {
        return htmlentities(file_get_contents(APPPATH . $code));
    }
    
    
}

?>
