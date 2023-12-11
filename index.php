<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem UniForça</title>
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    
</head>

<body>
<div class="container">
    <div class="box-logo">
        <img src="imagem/patch_uniforca-removebg-preview.png" alt="">
    </div>
    <div class="box-form">
                 
            <form id="form" > 
                <div id="entrarlogin">
                    <img class="imagem-logar img1" src="/imagem/login.png" alt=""> 
                    <img class="imagem-logar img2" src="/imagem/patch_uniforca-removebg-preview.png" alt="">
                </div>
                     
                <div>
                    <input id="email" name="email" type="email" class="form-control input-item" id="email" placeholder="Seu email" >
                </div>
                <div>
                  <input id="senha" name="senha" type="password" class="form-control input-item" id="senha" placeholder="Sua senha">
                  
                </div>
                <div class="botao">
                    <button id="entrar" class="btn btn-warning" >Entrar</button>
                    <button type="reset" class="btn btn-warning">Cancelar</button>
                
                </div>
                <div class="esquecesenha">
                        <a class="text-monospace" href="esqueci.php">Esqueci a senha</a>
           
                </div>
                          
                
            </form> 
    
    </div>
    <script src="/js/verifcacao.js"></script>
</div>
</body>
</html>
