<?php          
class setCookies{
        private $user;
        private $lever;
        function __construct($user,$lever)
        {
                $this->user = $user;
                $this->lever = $lever;
                
        }
        private function mkCookies(){
                $user = $this->user;
                $teste = array('expires'=>time() + 60*60*24*30,
                'path'=>'/',
                'domain'=>$_SERVER['HTTP_HOST'],
                'secure'=>true,
                'httponly'=>true,
                'samesite'=> 'Uniforca');
                setcookie('UniForca','adonias',$teste);
               
        }
        public function getCookies(){
                $this->mkCookies();
        }
}
?>