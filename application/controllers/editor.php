<?php
/**
 * Codeigniter Bootstrap	
 * -------------------------------------------------------------------
 * Developed and maintained by satheesh
 * -------------------------------------------------------------------
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Editor extends MY_Controller {

    public function index() {

    	$data['tamil']="";
        if($this->input->post('tamil'))
        {
        	$data['tamil']=$this->input->post('tamil');
        	$data['txtbyline']=$this->splitbyline($data['tamil']);
        	foreach ($data['txtbyline'] as  $string) {
        		$varspw=$this->splitbywords($string);
        		$this->insertwords($varspw);
        		$data['txtbyword'][]=$varspw;
        	}
        }

    $this->template->set('title', 'My website');
    $this->template->load('layouts/main', 'edtior',$data);
    }
    public function test()
    {
    		$i=1;

    		for ($i=1; $i < 13 ; $i++) { 
    			$a=file_get_contents("audio/a.mp3");
    			$b=file_get_contents("audio/$i.mp3");
    			$c=$a.$b;
    			file_put_contents('audio/a.mp3', $c);
 
    		}
    	//echo file_get_contents('audio/1.mp3');
    }
	
	    public function test2()
    {
    		$j = array(8,2,1,4,5,9);

    		for ($i=0; $i < 6 ; $i++) { 
    			$a=file_get_contents("audio/b.mp3");
    			$b=file_get_contents("audio/$j[$i].mp3");
    			$c=$a.$b;
    			file_put_contents('audio/b.mp3', $c);
    		}
    	//echo file_get_contents('audio/1.mp3');
    }
	
    function insertwords ($string=array())
   {
   	foreach ($string as $value) {
   	$this->db->query("INSERT IGNORE INTO `words` (`name`) VALUES ('$value');");
  
   	}
   
   }

   function splitbywords ($string='')
   {
   	$dString=explode(" ", $string);
    $twords=array_values(array_filter($dString));
            $newwords = array();
            $skipind = 'N';
            foreach ($twords as $key => $word)             {                            
                if($skipind == 'Y')
                {
                    $skipind = 'N';
                }
                else
                {                   
                   if (isset($twords[ $key + 1 ])) {
                       $nextword=$twords[ $key + 1 ];
                   }
                   else
                   {
                    $nextword=$twords[ $key];
                   }
                    //$word=="தேதி"
                   if($word=="வர"|$word=="பல"|$word=="நான்"|$word=="ஒரு"|$word=="சில"|$word=="நட"|$word=="தன்"|$word=="நம்"|$word=="உன்"|$word=="நாள்")
                    {
						$lastword=mb_substr($nextword,-2);
						if($lastword== "க்"|$lastword== "ச்"|$lastword== "ப்"|$lastword== "த்") 
						{            
							array_push($newwords,$word);
						}
						else						
						{
							$built = $word." ".$twords[ $key + 1 ];
							array_push($newwords,$built);
							$skipind = 'Y'; 
						}
                    }					                
					elseif($nextword=="நிலை"|$nextword=="போது"|$nextword=="தான்"|$nextword=="போல"|$nextword=="கீழ்"|$nextword=="யதுமே")
                    {
                    $built = $word." ".$nextword;
                    array_push($newwords,$built);
                    $skipind = 'Y';
                    }
                    else
                    {
						$lastword=mb_substr($word,-2);
						if($lastword== "க்"|$lastword== "ச்"|$lastword== "ப்"|$lastword== "த்" )
						{            
						$built = $word." ".$twords[ $key + 1 ];
						array_push($newwords,$built);
						$skipind = 'Y';
						}
						else
						{
						array_push($newwords,$word);
						}

                    }


				                     
                }                 
            }

        return $newwords;
   }

    function splitbyline ($string='')
   {
   	 
       $stopWords = array( 
        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
        'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',          
        );
        $destString = str_replace($stopWords, '', $string);// replace words

        $destString = str_replace(array("\r", "\n"), " ", $destString);

        $stopSymbols= array( 
        '0','1','2','3','4','5','6','7','8','9',
        ';',':', '<', '>','–','-','_' ,'(',')','{','}','[',']','?','!','=','\'', '"', ',' ,'/','+','»','#','$','&','*','@','^' ,'|','’','…','“','©',"'"  );
         $dString = str_replace($stopSymbols, '', $destString); // replace symbols
        
        return $dString=explode(".", $dString);
       // $twords=array_values(array_filter(array_unique($dString)));

    }









}