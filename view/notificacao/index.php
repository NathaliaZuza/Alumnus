<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificações</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/notificacao.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>
<body>

    <?php 
        include('../header.php') ;
        $id = @$_REQUEST["id"] ;  
    ?>

    <main class="boxMain boxPainel">
        <div class="container boxNotificacao">
            <h1 class="mainTitle">Notificações  <img src="../img/lineBottom.svg"/> </h1>
            
            <?php  if(!$id) : ?>
                <p>Você tem 03 novas notificações.</p>

                <a href="./?id=diogo_id">
                    <div class="boxNotificacao__line">
                        <svg enable-background="new 0 0 91.8 92.6" id="Layer_1" version="1.0" viewBox="0 0 91.8 92.6" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M45.9,3.6c-23.5,0-42.5,19-42.5,42.5c0,23.5,19,42.5,42.5,42.5c23.5,0,42.5-19,42.5-42.5  C88.4,22.7,69.4,3.6,45.9,3.6z M43.7,21.1h4.3c0.5,0,0.9,0.4,0.9,0.9l-0.6,34.5c0,0.5-0.4,0.9-0.9,0.9h-3c-0.5,0-0.9-0.4-0.9-0.9  L42.8,22C42.8,21.5,43.2,21.1,43.7,21.1z M48.6,71.2c-0.8,0.8-1.7,1.1-2.7,1.1c-1,0-1.9-0.3-2.6-1c-0.8-0.7-1.3-1.8-1.3-2.9  c0-1,0.4-1.9,1.1-2.7c0.7-0.8,1.8-1.2,2.9-1.2c1.2,0,2.2,0.5,3,1.4c0.5,0.6,0.8,1.3,0.9,2.1C49.9,69.3,49.5,70.3,48.6,71.2z" /></svg>
                        <span>Diogo Oliveira, aluno graduação análise e desenvolvimento de sistemas.</span>
                    </div>
                </a>

                <a href="./?id=diogo_id">
                    <div class="boxNotificacao__line">
                        <svg enable-background="new 0 0 91.8 92.6" id="Layer_1" version="1.0" viewBox="0 0 91.8 92.6" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M45.9,3.6c-23.5,0-42.5,19-42.5,42.5c0,23.5,19,42.5,42.5,42.5c23.5,0,42.5-19,42.5-42.5  C88.4,22.7,69.4,3.6,45.9,3.6z M43.7,21.1h4.3c0.5,0,0.9,0.4,0.9,0.9l-0.6,34.5c0,0.5-0.4,0.9-0.9,0.9h-3c-0.5,0-0.9-0.4-0.9-0.9  L42.8,22C42.8,21.5,43.2,21.1,43.7,21.1z M48.6,71.2c-0.8,0.8-1.7,1.1-2.7,1.1c-1,0-1.9-0.3-2.6-1c-0.8-0.7-1.3-1.8-1.3-2.9  c0-1,0.4-1.9,1.1-2.7c0.7-0.8,1.8-1.2,2.9-1.2c1.2,0,2.2,0.5,3,1.4c0.5,0.6,0.8,1.3,0.9,2.1C49.9,69.3,49.5,70.3,48.6,71.2z" /></svg>
                        <span>Diogo Oliveira, aluno graduação análise e desenvolvimento de sistemas.</span>
                    </div>
                </a>

                <a href="./?id=diogo_id">
                    <div class="boxNotificacao__line">
                        <svg enable-background="new 0 0 91.8 92.6" id="Layer_1" version="1.0" viewBox="0 0 91.8 92.6" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M45.9,3.6c-23.5,0-42.5,19-42.5,42.5c0,23.5,19,42.5,42.5,42.5c23.5,0,42.5-19,42.5-42.5  C88.4,22.7,69.4,3.6,45.9,3.6z M43.7,21.1h4.3c0.5,0,0.9,0.4,0.9,0.9l-0.6,34.5c0,0.5-0.4,0.9-0.9,0.9h-3c-0.5,0-0.9-0.4-0.9-0.9  L42.8,22C42.8,21.5,43.2,21.1,43.7,21.1z M48.6,71.2c-0.8,0.8-1.7,1.1-2.7,1.1c-1,0-1.9-0.3-2.6-1c-0.8-0.7-1.3-1.8-1.3-2.9  c0-1,0.4-1.9,1.1-2.7c0.7-0.8,1.8-1.2,2.9-1.2c1.2,0,2.2,0.5,3,1.4c0.5,0.6,0.8,1.3,0.9,2.1C49.9,69.3,49.5,70.3,48.6,71.2z" /></svg>
                        <span>Diogo Oliveira, aluno graduação análise e desenvolvimento de sistemas.</span>
                    </div>
                </a>

                <div class="boxNotificacao__line checked">
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">    <path d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 21.627 8.373 27 15 27 C 21.627 27 27 21.627 27 15 C 27 12.820623 26.409997 10.783138 25.394531 9.0214844 L 14.146484 20.267578 C 13.959484 20.454578 13.705453 20.560547 13.439453 20.560547 C 13.174453 20.560547 12.919422 20.455578 12.732422 20.267578 L 8.2792969 15.814453 C 7.8882969 15.423453 7.8882969 14.791391 8.2792969 14.400391 C 8.6702969 14.009391 9.3023594 14.009391 9.6933594 14.400391 L 13.439453 18.146484 L 24.240234 7.3457031 C 22.039234 4.6907031 18.718 3 15 3 z M 24.240234 7.3457031 C 24.671884 7.8662808 25.053743 8.4300516 25.394531 9.0195312 L 27.707031 6.7070312 C 28.098031 6.3150312 28.098031 5.6839688 27.707031 5.2929688 C 27.316031 4.9019687 26.683969 4.9019688 26.292969 5.2929688 L 24.240234 7.3457031 z"/></svg>
                    <span>Diogo Oliveira, aluno graduação análise e desenvolvimento de sistemas foi aceito como usuário.</span>
                </div>

                <div class="boxNotificacao__line checked">
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">    <path d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 21.627 8.373 27 15 27 C 21.627 27 27 21.627 27 15 C 27 12.820623 26.409997 10.783138 25.394531 9.0214844 L 14.146484 20.267578 C 13.959484 20.454578 13.705453 20.560547 13.439453 20.560547 C 13.174453 20.560547 12.919422 20.455578 12.732422 20.267578 L 8.2792969 15.814453 C 7.8882969 15.423453 7.8882969 14.791391 8.2792969 14.400391 C 8.6702969 14.009391 9.3023594 14.009391 9.6933594 14.400391 L 13.439453 18.146484 L 24.240234 7.3457031 C 22.039234 4.6907031 18.718 3 15 3 z M 24.240234 7.3457031 C 24.671884 7.8662808 25.053743 8.4300516 25.394531 9.0195312 L 27.707031 6.7070312 C 28.098031 6.3150312 28.098031 5.6839688 27.707031 5.2929688 C 27.316031 4.9019687 26.683969 4.9019688 26.292969 5.2929688 L 24.240234 7.3457031 z"/></svg>
                    <span>Maria Pereira, professora de segurança da informação foi aceita como administradora.</span>
                </div>
                <?php endif;
            ?>
            

            <?php  if($id) : ?>
                <p>Verifique se os dados da solicitação estão corretos e clique em aceitar ou negar.</p>
                <div class="boxFormCadastro">
                    <form action="/" method="post">
                        <div>
                            <div class="boxForm__row">
                                <label for="nome">Nome</label>
                                <input value="Maria Silva" type="text" name="nome" id="nome">
                            </div>

                            <div class="boxForm__row">
                                <label for="email">E-mail</label>
                                <input value="maria.silva@example.com" type="text"  name="email" id="email">
                            </div>

                            <div class="boxForm__row">
                                <label for="endereco">Endereço</label>
                                <input value="Rua das Flores, 123, Apto 45, São Paulo, SP"  type="text" name="endereco" id="endereco">
                            </div>

                            <div class="boxForm__row">
                                <label for="telefone">Telefone</label>
                                <input value="(11) 91234-5678" type="text"  name="telefone" id="telefone">
                            </div>

                            <div class="boxForm__row">
                                <label for="curso">Curso</label>
                                <input value="Engenharia de Computação" type="text"  name="curso" id="curso">
                            </div>

                            <div class="boxForm__row">
                                <label for="situacao">Situação</label>
                                <input value="Estudante, Formado, Em busca de estágio"  type="text" name="situacao" id="situacao">
                            </div>

                            <div class="boxForm__row">
                                <label for="cpf">CPF</label>
                                <input value="123.456.789-00" type="text"  name="cpf" id="cpf">
                            </div>

                            <div class="boxForm__row">
                                <label for="redeSocial">Rede social</label>
                                <input value="@mariasilva" type="text"  name="redeSocial" id="redeSocial">
                            </div>

                            <div class="boxForm__row">
                                <label for="linkedin">Linkedin</label>
                                <input value="linkedin.com/in/mariasilva"  type="text" name="linkedin" id="linkedin">
                            </div>

                            <div class="boxForm__row">
                                <label for="github">Github</label>
                                <input value="github.com/mariasilva" type="text"  name="github" id="github">
                            </div>
                            
                            <div class="boxForm__row check">
                                <label for="user">Usuário</label>
                                <input type="radio" name="tipoUsuario" id="user" checked>
                            </div>

                            <div class="boxForm__row check">
                                <label for="adm">Administrador</label>
                                <input type="radio" name="tipoUsuario" id="adm">
                            </div>
                        </div>

                        <button type="submit" id="btnlogin">
                            Aceitar solicitação
                        </button>

                        <button type="submit" class="boxForm__btnNegar">
                            Negar solicitação
                        </button>
                    </form>
                </div>

                <?php endif;
            ?>

        </div>
    </main>

    <?php include('../footer.php')  ?>
</body>
</html>