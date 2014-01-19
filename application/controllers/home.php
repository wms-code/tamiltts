<?php
/**
 * Codeigniter Bootstrap
 * -------------------------------------------------------------------
 * Developed and maintained by Stijn Geselle <stijn.geselle@gmail.com>
 * -------------------------------------------------------------------
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index() {
        $data['tamil']="";
        if($this->input->post('tamil'))
        {
           $string=$this->input->post('tamil');
           $stopWords = array( 
            'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
            'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',          
            );
            $destString = str_replace($stopWords, '', $string);// replace words

            $destString = str_replace(array("\r", "\n"), " ", $destString);

            $stopSymbols= array( 
            '0','1','2','3','4','5','6','7','8','9',
            ';',':', '<', '>','–','-','_' ,'(',')','{','}','[',']','?','!','=','\'', '"','.', ',' ,'/','+','»','#','$','&','*','@','^' ,'|','’','…','“','©',"'"  );
             $dString = str_replace($stopSymbols, '', $destString); // replace symbols
             
            $data['tamil']= trim($dString); // trim the string
            
            $dString=explode(" ", $dString);
            $data['words']=array_values(array_filter(array_unique($dString)));
        }

        //function needs to be fixed
        //$this->tamwrdconjuction($data['tamil']);

        $this->template->set('title', 'My website');
        $this->template->load('layouts/main', 'home',$data);
    }

/*

this function not displaying same is currently done in view. need to fix.
public function tamwrdconjuction($words)
{
    
    //mb_convert_encoding($words, 'UTF-8');
    //mb_check_encoding ( $words,  'UTF-8' );
    //print_r($words);
    //exit(0);

    $data['newwords'] = array();
        $skipind = 'N';
     foreach ($words as $key =>  $tam) 
     {
        $totlen = mb_strlen($tam);
        $extra = array('்', 'ா', 'ி','ீ', 'ு' ,'ூ', 'ெ','ே','ை','ொ','ோ','ௌ');
        $sublen=0;
        foreach ($extra as $value)
         {
            $sublen = $sublen + substr_count($tam, $value);
         }
                $wrdlen = $totlen - $sublen;
        $lst = mb_substr($tam,-2) ;
            
        if($skipind == 'Y')
        {
            $skipind = 'N';
        }
        else
        {
            if($lst == "க்" ||  $lst == "ச்")
            {
                    $built = $tam . " " . $words[ $key + 1 ];
                    array_push($data['newwords'],$built);
                    $skipind = 'Y';
            }
            else
            {
                    array_push($data['newwords'],$tam);
            }
        }       
       $this->db->query("INSERT IGNORE INTO `tb_words` (`word`,`length`) VALUES ('$tam','$wrdlen');");
    }   

}
    /*
    //Concatenate the words based letter length
    
    public function tamwrdlength()
    {
        
    foreach ($words as $key =>  $tam) 
     {
        $totlen = mb_strlen($tam);
        $array = array('்', 'ா', 'ி','ீ', 'ு' ,'ூ', 'ெ','ே','ை','ொ','ோ','ௌ');
        $sublen=0;
        foreach ($array as $value)
         {
           $sublen = $sublen + substr_count($tam, $value);
        }
            
        if($skipind == 'Y')
        {
            $skipind = 'N';
        }
        else
        {
            if(($totlen - $sublen) == 2)
            {
                    $built = $tam . " " . $words[ $key + 1 ];
                    array_push($newwords,$built);
                    $skipind = 'Y';
            }
            else
            {
                    array_push($newwords,$tam);
            }
        }       
       //$this->db->query("INSERT IGNORE INTO `words` (`name`) VALUES ('$value');");
    }   

    }
    */
	
	public function mycount() {
        $tam = 'எல்லைகள்';

       echo $tam;
        $totlen = mb_strlen($tam);
        $array = array('்', 'ா', 'ி','ீ', 'ு' ,'ூ', 'ெ','ே','ை','ொ','ோ','ௌ');
       
        $sublen=0;
        foreach ($array as  $value) {
           $sublen = $sublen + substr_count($tam, $value);
        }
        echo $totlen - $sublen ;

    }
}

/* End of file home.php */
/* Location: ./application/controllers/admin/home.php */
