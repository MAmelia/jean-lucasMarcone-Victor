<!Doctype HTML>
		
<html>
<head>
<title>DC COMICS </title>
    <meta charset="UTF-8">
    
    <link rel = "stylesheet" type = "text/css" href="csmarvel.css">

</head>
<body id="backgroundblue">
    <section id="corpo">
    <header>
        <img class="img1" src="dc_comics_logo_2.png" alt="Imagem">					
        <h1 class="titulo">CADASTRE-SE </h1>

    </header>
        
        <section id="whitebackground">
       <form class= "form" action="recebe.php" method="post">
          <p><label for="nome"> Nome: </label> 
              <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" size="30" required value="" />
              <label for="email"  id="Email"> Email: </label>
              <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required name=email size="30" /></p> 
          <p><label for="idade"> Idade: </label> 
              <input type="text" name="idade" id="idade" placeholder="Ex: 18" required name="" size="2" />
              <label for="sexo"  id="sexo">Sexo: </label>
              <input type="radio" name="sexo" id="masc" value="Masculino" checked> <label for="textomasc"  id="sexomasc">Masculino</label>
              <input type="radio" name="sexo" id="fem" value="Feminino"> <label for="textofem"  id="sexofem">Feminino</label></p> 
              <p><label for="usuario"> Usuário: </label> 
              <input type="text" name="usuario" id="usuario" placeholder="Usuário" required name="" size="10" />

              <label for="senha" id="Senha"> Senha: </label> 
                  <input type="password" name="senha" id="senha" placeholder="Senha" required value="" size="10" /></p>
           <br>
           <input type="checkbox" id="desejo" name="desejo">Desejo receber atualizações e novidades por e-mail.
          <p><input type="submit" value="Enviar" name="enviar" id="enviar">
              <input type="reset"  value="Limpar" name="limpar" id="limpar"></p>
       </form>    
    <p><a href="login.php">Retornar</a></p> <p><a href="index.php">Página Principal</a> </p>
        </section>
            <footer><center> Site academico.</br>
                </center>
                    </footer>
        </section>

</body>



</html> 
