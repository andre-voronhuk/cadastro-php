
<html>
    <head>
        <title>Sistema de Gerenciamento de Propostas</title>
        <link rel="shortcut icon" type="image/icon" href="img/favicon.png">
        <meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css-puro/style.css">
        <script src="script/script.js"></script>
    </head>
    
    <body class="accordion-body align">
        <div class="flex-container">
        

           
       <div class="flex-card">
       <fieldset class="field-title">
                <legend class="text-primary ">Cadastro</legend>
                <form class="form-horizontal" id="form"   onsubmit="return false" method="POST">
                    
                   
          

            <div class="container-fluid">
        
                 <div class="modal-body">
                    <div class="control-group">
                    
                        <div class="form-floating">
                            <input type="text" class="input-medium" placeholder="Nome" name="name" id="user_id" required value=""><br>
                            <input type="text" class="input-medium" placeholder="Sobrenome" name="lastname" required id="lastname_id"><br>
                            <select id = "sex" name="sexo">
                                    <option value="0" selected >Masculino</option>
                                    <option value="1" >Feminino</option>
                                    <option value="2" >Outro</option>
                            </select>
                        </div>
                        
                 
                        <div class="controls">
                            <br>
                            <button id="btn-enviar" class="btn flex-btn  btn-outline-primary btn btn" onclick="validar()" value="Enviar" >Enviar</button>
                        </div>
                       
                    </div>
                    </fieldset>
                </div>        
            </div>
        </form>
        </div>
        </div>
    </div>
</body>
