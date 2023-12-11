<?php
      //  header("Acess-Control-Allow-Headers: Content-Type");
      //  header("Acess-Control-Allow-methods: GET, POST");
       // header("Acess-Control-Allow-Origin: *");
require_once('getConexao.php');
//include_once('getConexao.php');
include_once('setCookies.php');

class getLogin extends getConexao{
    private $infConteudo="";
    private $senha;
    function __construct($infConteudo,$senha)
    {
        $this->senha = $senha;
        $this->infConteudo = $infConteudo;
    }
    public function getPesquisa(){
        
        $sql = "SELECT * FROM login where email = '".$this->infConteudo."'";
        $resultado = $this->conectar($sql);
        if($rows = mysqli_fetch_array($resultado)){
            if($this->infConteudo == $rows['email'] && $this->senha == $rows['senha']){
                $usuario = $rows['email'];
                $leve = $rows['nivel'];
             //   $cookies = new setCookies($usuario,$leve);
            //  $cookies->getCookies();
            }else{
                echo 'usuário ou senha não confere!';
            }
                
        }else{
            return "usuário não localizado";
        }
        
    }
    public function inicio(){
        $x = $this->getPesquisa();
        return($x);
    }
}
function statrtLogin(){
   
    $inf = $_POST;
    $x = new getLogin($inf['email'],$inf['senha']);
    echo $x->inicio();


}
statrtLogin();

?>