<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel administrativo</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/painelAdm.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>
<body>

    <?php include('../header.php');
        $disciplina = 'ads';
    ?>

    <main class="boxMain boxPainel">
        <div class="container">
            <!-- ABAS DE CURSOS DISCIPLINAS E USUÁRIOS -->
            <div class="boxAbas">
                <a href="./?page=usuarios" class="boxAbas__btn" id="usuarios" onclick="handleAba('usuarios')">Usuários</a>
                <a href="./?page=cursos" class="boxAbas__btn" id="cursos" onclick="handleAba('cursos')">Cursos</a>
                <a href="./?page=disciplinas" class="boxAbas__btn" id="disciplinas" onclick="handleAba('materias')">Disciplinas</a>
            </div>

            <!-- >>ÍNICIO DA ABA DO PAINEL DO USUÁRIO -->
            <?php  if(@$_REQUEST["page"] == "usuarios") : ?>
                <div id="usuarios" class="boxContent">
                    <div class="boxTable">
                        <div class="boxInput">
                            <!-- INPUT DE BUSCA DO USUÁRIO -->
                            <div>
                                <input type="text" name="busca" placeholder="Pesquisar cadastro"/>
                                <button class="boxInput__btn">
                                    <img src="../img/searchIcon.svg"/>
                                </button>
                            </div>
                            <a class="boxInput__btnAdd" href='../cadastro?page=cadastrar'>
                                Adicionar cadastro
                            </a>
                        </div>

                        <!-- LISTAGEM DOS CADASTROS -->
                        <div class="boxTable__content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Perfil</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>CPF</th>
                                        <th>Data nasc.</th>
                                        <th></th>
                                    <tr>
                                </thead>
        
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>
                                            <span class='boxTable__papel'>Administrador</span>
                                        </td>
                                        <td>José da Silva Santos</td>
                                        <td>jose.santos@example.com</td>
                                        <td>123.456.789-00</td>
                                        <td>01/01/1980</td>
                                        <td>
                                            <a href="../Cadastro?page=excluir"><img src="../img/trash.svg" alt="icon deletar"/></a>
                                            <a href="../Cadastro?page=editar"><img src="../img/pen.svg" alt="icon editar"/></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2.</td>
                                        <td>
                                            <span class='boxTable__papel'>Usuário</span>
                                        </td>
                                        <td>Camila Rodrigues Lima</td>
                                        <td>camila.lima@example.com</td>
                                        <td>987.654.321-00</td>
                                        <td>15/03/1985</td>
                                        <td>
                                            <a href="../Cadastro?page=excluir"><img src="../img/trash.svg" alt="icon deletar"/></a>
                                            <a href="../Cadastro?page=editar"><img src="../img/pen.svg" alt="icon editar"/></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3.</td>
                                        <td>
                                            <span class='boxTable__papel'>Usuário</span>
                                        </td>
                                        <td>Ana Clara Oliveira</td>
                                        <td>ana.oliveira@example.com</td>
                                        <td>123.987.654-32</td>
                                        <td>10/07/1992</td>
                                        <td>
                                            <a href="../Cadastro?page=excluir"><img src="../img/trash.svg" alt="icon deletar"/></a>
                                            <a href="../Cadastro?page=editar"><img src="../img/pen.svg" alt="icon editar"/></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4.</td>
                                        <td>
                                            <span class='boxTable__papel'>Usuário</span>
                                        </td>
                                        <td>Bruno Henrique Almeida</td>
                                        <td>bruno.almeida@example.com</td>
                                        <td>234.567.890-12</td>
                                        <td>25/12/1985</td>
                                        <td>
                                            <a href="../Cadastro?page=excluir"><img src="../img/trash.svg" alt="icon deletar"/></a>
                                            <a href="../Cadastro?page=editar"><img src="../img/pen.svg" alt="icon editar"/></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5.</td>
                                        <td>
                                            <span class='boxTable__papel'>Administrador</span>
                                        </td>
                                        <td>Mariana Souza Ferreira</td>
                                        <td>mariana.ferreira@example.com</td>
                                        <td>345.678.901-23</td>
                                        <td>30/11/1990</td>
                                        <td>
                                            <a href="../Cadastro?page=excluir"><img src="../img/trash.svg" alt="icon deletar"/></a>
                                            <a href="../Cadastro?page=editar"><img src="../img/pen.svg" alt="icon editar"/></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6.</td>
                                        <td>
                                            <span class='boxTable__papel'>Administrador</span>
                                        </td>
                                        <td>Pedro Augusto Martins</td>
                                        <td>pedro.martins@example.com</td>
                                        <td>456.789.012-34</td>
                                        <td>22/04/1983</td>
                                        <td>
                                            <a href="../Cadastro?page=excluir"><img src="../img/trash.svg" alt="icon deletar"/></a>
                                            <a href="../Cadastro?page=editar"><img src="../img/pen.svg" alt="icon editar"/></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7.</td>
                                        <td>
                                            <span class='boxTable__papel'>Administrador</span>
                                        </td>
                                        <td>Sofia Lima Santos</td>
                                        <td>sofia.santos@example.com</td>
                                        <td>567.890.123-45</td>
                                        <td>18/06/1988</td>
                                        <td>
                                            <a href="../Cadastro?page=excluir"><img src="../img/trash.svg" alt="icon deletar"/></a>
                                            <a href="../Cadastro?page=editar"><img src="../img/pen.svg" alt="icon editar"/></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php endif;
            ?>
            <!-- >>FINAL DO PAINEL DO USUÁRIO -->
           
            <!-- >>ÍNICIO DA ABA DOS CURSOS -->
            <?php  if(@$_REQUEST["page"] == "cursos") : ?>
                <div id="cursos" class="boxContent">
                    <!-- >>>>SE A PÁGINA FOR DE LISTAGEM DE CURSOS -->
                    <div class="boxCardsMaterias boxCardsAdm"> 
                        <div class="boxCard">
                            <button class="delete-btn" data-discipline="Graduação em Análise e Desenvolvimento de Sistemas">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="13" cy="13" r="12" stroke="#AAAAAA" stroke-width="2"/>
                                    <path d="M17.5 9L9 17.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M9 9L17.5 17.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </button>
    
                            <div>
                                <h3>Graduação em Análise e Desenvolvimento de Sistemas</h3>
                                <span class='boxCard__time'>Curso presencial</span>
                            </div>
    
                            <div class="boxLink">
                                <a href='./?page=editar/?aba=editar' onclick="handleAba('cursos')">EDITAR CURSO</a>
                            </div>
                        </div>
    
                        <div class="boxCard">
                            <button class="delete-btn" data-discipline="Graduação Ciência de Dados">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="13" cy="13" r="12" stroke="#AAAAAA" stroke-width="2"/>
                                    <path d="M17.5 9L9 17.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M9 9L17.5 17.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </button>
    
                            <div>
                                <h3>Graduação Ciência de Dados</h3>
                                <span class='boxCard__time'>Curso presencial</span>
                            </div>
    
                            <div class="boxLink">
                                <a href='./?page=editar'>EDITAR CURSO</a>
                            </div>
                        </div>
    
                        <div class="boxCard">
                            <button class="delete-btn" data-discipline="Graduação em Gestão da Tecnologia da Informação">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="13" cy="13" r="12" stroke="#AAAAAA" stroke-width="2"/>
                                    <path d="M17.5 9L9 17.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M9 9L17.5 17.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </button>
    
                            <div>
                                <h3>Graduação em Gestão da Tecnologia da Informação</h3>
                                <span class='boxCard__time'>Curso presencial</span>
                            </div>
    
                            <div class="boxLink">
                                <a href='./?page=editar'>EDITAR CURSO</a>
                            </div>
                        </div>
    
                        <div class="boxCard">
                            <button class="delete-btn" data-discipline="Graduação Ciência de Dados">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="13" cy="13" r="12" stroke="#AAAAAA" stroke-width="2"/>
                                    <path d="M17.5 9L9 17.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M9 9L17.5 17.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </button>
    
                            <div>
                                <h3>Graduação Ciência de Dados</h3>
                                <span class='boxCard__time'>Curso presencial</span>
                            </div>
    
                            <div class="boxLink">
                                <a href='./?page=editar'>EDITAR CURSO</a>
                            </div>
                        </div>
    
                        <div class="boxCard">
                            <button class="delete-btn" data-discipline="Graduação em Gestão da Tecnologia da Informação">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="13" cy="13" r="12" stroke="#AAAAAA" stroke-width="2"/>
                                    <path d="M17.5 9L9 17.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M9 9L17.5 17.5" stroke="#AAAAAA" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </button>
    
                            <div>
                                <h3>Graduação em Gestão da Tecnologia da Informação</h3>
                                <span class='boxCard__time'>Curso presencial</span>
                            </div>
    
                            <div class="boxLink">
                                <a href='./?page=editar'>EDITAR CURSO</a>
                            </div>
                        </div>
                    </div>

                    <!-- >>>>SE A PÁGINA FOR DE EDIÇÃO DE CURSO -->
                    <div class="boxVoltar">  
                        <a href='./' onclick="handleAba('cursos')"> 
                            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 9L1 5L5 1" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            voltar
                        </a>
                    </div>

                    <span class='boxCTA boxCTA__edit'>
                        <div>
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.58 14.004C4.172 13.812 3.884 13.5 3.716 13.068C3.548 12.636 3.62 12.18 3.932 11.7C4.124 11.34 4.412 11.028 4.796 10.764C5.204 10.476 5.672 10.128 6.2 9.72C6.728 9.312 7.256 8.748 7.784 8.028C7.76 7.98 7.736 7.932 7.712 7.884C7.712 7.812 7.7 7.764 7.676 7.74C6.74 7.836 5.96 8.004 5.336 8.244C4.712 8.484 4.172 8.7 3.716 8.892C3.26 9.084 2.816 9.18 2.384 9.18C1.808 9.204 1.352 9.048 1.016 8.712C0.68 8.352 0.524 7.956 0.548 7.524C0.524 7.092 0.68 6.708 1.016 6.372C1.352 6.036 1.808 5.868 2.384 5.868C2.816 5.868 3.26 5.964 3.716 6.156C4.172 6.348 4.712 6.552 5.336 6.768C5.96 6.984 6.728 7.152 7.64 7.272L7.892 7.056C7.292 6.336 6.716 5.784 6.164 5.4C5.636 4.992 5.168 4.644 4.76 4.356C4.376 4.068 4.076 3.756 3.86 3.42C3.62 2.892 3.548 2.424 3.644 2.016C3.764 1.584 4.016 1.248 4.4 1.008C4.808 0.767998 5.24 0.707998 5.696 0.827998C6.176 0.947998 6.572 1.236 6.884 1.692C7.1 2.028 7.232 2.436 7.28 2.916C7.352 3.396 7.448 3.96 7.568 4.608C7.688 5.232 7.916 5.964 8.252 6.804C8.3 6.78 8.408 6.768 8.576 6.768C8.96 5.952 9.2 5.232 9.296 4.608C9.392 3.984 9.464 3.432 9.512 2.952C9.56 2.472 9.68 2.052 9.872 1.692C10.184 1.212 10.568 0.923998 11.024 0.827998C11.48 0.731999 11.9 0.791999 12.284 1.008C12.692 1.176 12.968 1.488 13.112 1.944C13.28 2.376 13.208 2.832 12.896 3.312C12.704 3.672 12.404 3.996 11.996 4.284C11.588 4.572 11.12 4.92 10.592 5.328C10.088 5.712 9.56 6.276 9.008 7.02C9.056 7.044 9.08 7.092 9.08 7.164C9.08 7.212 9.092 7.26 9.116 7.308C10.076 7.188 10.868 7.008 11.492 6.768C12.116 6.528 12.656 6.312 13.112 6.12C13.568 5.928 14 5.832 14.408 5.832C15.032 5.832 15.512 6 15.848 6.336C16.184 6.672 16.34 7.056 16.316 7.488C16.316 7.92 16.148 8.304 15.812 8.64C15.476 8.976 15.008 9.144 14.408 9.144C14 9.144 13.568 9.06 13.112 8.892C12.656 8.7 12.116 8.496 11.492 8.28C10.868 8.04 10.088 7.872 9.152 7.776L8.936 7.992C9.536 8.688 10.1 9.24 10.628 9.648C11.156 10.056 11.624 10.404 12.032 10.692C12.44 10.956 12.74 11.256 12.932 11.592C13.22 12.12 13.304 12.6 13.184 13.032C13.088 13.44 12.848 13.764 12.464 14.004C12.032 14.244 11.576 14.304 11.096 14.184C10.616 14.064 10.232 13.776 9.944 13.32C9.728 12.96 9.584 12.552 9.512 12.096C9.464 11.616 9.38 11.064 9.26 10.44C9.14 9.792 8.9 9.06 8.54 8.244C8.492 8.268 8.384 8.28 8.216 8.28C7.832 9.096 7.592 9.816 7.496 10.44C7.4 11.064 7.328 11.616 7.28 12.096C7.256 12.552 7.136 12.96 6.92 13.32C6.656 13.824 6.284 14.124 5.804 14.22C5.348 14.292 4.94 14.22 4.58 14.004Z"/>
                            </svg>
                            <input type="text" value='Graduação em Análise e Desenvolvimento de Sistemas' />
                        </div>  

                        <svg class='fillTransparent' width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.0206 5.82837L15.849 2.99994L20.7987 7.94969L17.9703 10.7781M13.0206 5.82837L3.41398 15.435C3.22645 15.6225 3.12109 15.8769 3.12109 16.1421V20.6776H7.65662C7.92184 20.6776 8.17619 20.5723 8.36373 20.3847L17.9703 10.7781M13.0206 5.82837L17.9703 10.7781" stroke="#F78B1F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    
                    <div class="boxDisciplinaEdit boxDisciplina__accordionContent">
                        <form>
                            <em>1º semestre</em>
                            <ol>
                                <li><input type="text" value='Introdução a Computação' /></li>
                                <li><input type="text" value='Lógica de Programação' /></li>
                                <li><input type="text" value='Matemática Computacional' /></li>
                                <li><input type="text" value='Padrões Web' /></li>
                                <li><input type="text" value='Laboratório de Inovação I' /></li>
                                <li><input type="text" value='Comunicação Empresarial' /></li>
                                <li><input type="text" value='Extensão' /></li>
                            </ol>
                            <em>2º semestre</em>
                            <ol>
                                <li><input type="text" value='Fundamentos de Banco de Dados' /></li>
                                <li><input type="text" value='Engenharia de Software' /></li>
                                <li><input type="text" value='Linguagem Técnica de Programação' /></li>
                                <li><input type="text" value='Laboratório de Inovação II' /></li>
                                <li><input type="text" value='Linguagem de Programação para Web I' /></li>
                                <li><input type="text" value='Ética Profissional, Desenvolvimento Sustentável e Empreendedorismo' /></li>
                                <li><input type="text" value='Extensão' /></li>
                            </ol>
                            <em>3º semestre</em>
                            <ol>
                                <li><input type="text" value='Linguagem de Banco de Dados' /></li>
                                <li><input type="text" value='Linguagem de Programação para Web II' /></li>
                                <li><input type="text" value='Linguagem de Programação Orientada à Objetos I' /></li>
                                <li><input type="text" value='Gestão de Projetos' /></li>
                                <li><input type="text" value='Laboratório de Inovação III' /></li>
                                <li><input type="text" value='Infraestrutura de Redes' /></li>
                                <li><input type="text" value='Sistemas Operacionais' /></li>
                                <li><input type="text" value='Extensão' /></li>
                            </ol>
                            <em>4º semestre</em>
                            <ol>
                                <li><input type="text" value='Linguagem de Programação Orientada à Objetos II' /></li>
                                <li><input type="text" value='Linguagem de Programação para Mobile' /></li>
                                <li><input type="text" value='Segurança da Informação' /></li>
                                <li><input type="text" value='Laboratório de Inovação IV' /></li>
                                <li><input type="text" value='Governança de TI' /></li>
                                <li><input type="text" value='Infraestrutura de Redes' /></li>
                                <li><input type="text" value='Eletiva' /></li>
                                <li><input type="text" value='Extensão' /></li>
                            </ol>
                            <button type='submit'>Salvar</button>
                        </form>
                    </div>
                </div>
           
                <div id="deleteModal" class="modal">
                    <div class="modalContent">
                        <button class="closeBtn">x</button>
                        <h3>Excluir disciplina</h3>
                        <form class='boxFormExcluir'>
                            <p id="modal-text">Tem certeza que deseja excluir esta disciplina?</p>
                            <div class='boxFormExcluir__btn'>
                                <button class="btnContinuar btnCancelar" id="cancel-delete">Cancelar</button>
                                <button class="btnContinuar" id="confirm-delete">Confirmar</button>
                            </div>
                        </form>
                        <!-- <form class='boxFormExcluir'>
                            <p>Ao confirmar a exclusão da conta você perderá o acesso ao seu portfólio e as pessoas não serão mais capazes de visualizar seus projetos.</p>
                            <div class='boxFormExcluir__btn'>
                                <button type='submit' class='btnContinuar btnCancelar'>Confirmar</button>
                                <button type='submit' class='btnContinuar'>Cancelar</button>
                            </div>
                        </form> -->
                    </div>
                </div>
                <?php endif;
            ?>
            <!-- >>FINAL DOS CURSOS -->

            <!-- >>ÍNICIO DA ABA DAS DISCIPLINAS -->
            <?php  if(@$_REQUEST["page"] == "disciplinas") : ?>
                <div id="materias" class="boxContent">
                    <div class="boxDisciplina">
                        <span class='boxCTA boxDisciplina__accordionHeader'>
                            <div>
                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.58 14.004C4.172 13.812 3.884 13.5 3.716 13.068C3.548 12.636 3.62 12.18 3.932 11.7C4.124 11.34 4.412 11.028 4.796 10.764C5.204 10.476 5.672 10.128 6.2 9.72C6.728 9.312 7.256 8.748 7.784 8.028C7.76 7.98 7.736 7.932 7.712 7.884C7.712 7.812 7.7 7.764 7.676 7.74C6.74 7.836 5.96 8.004 5.336 8.244C4.712 8.484 4.172 8.7 3.716 8.892C3.26 9.084 2.816 9.18 2.384 9.18C1.808 9.204 1.352 9.048 1.016 8.712C0.68 8.352 0.524 7.956 0.548 7.524C0.524 7.092 0.68 6.708 1.016 6.372C1.352 6.036 1.808 5.868 2.384 5.868C2.816 5.868 3.26 5.964 3.716 6.156C4.172 6.348 4.712 6.552 5.336 6.768C5.96 6.984 6.728 7.152 7.64 7.272L7.892 7.056C7.292 6.336 6.716 5.784 6.164 5.4C5.636 4.992 5.168 4.644 4.76 4.356C4.376 4.068 4.076 3.756 3.86 3.42C3.62 2.892 3.548 2.424 3.644 2.016C3.764 1.584 4.016 1.248 4.4 1.008C4.808 0.767998 5.24 0.707998 5.696 0.827998C6.176 0.947998 6.572 1.236 6.884 1.692C7.1 2.028 7.232 2.436 7.28 2.916C7.352 3.396 7.448 3.96 7.568 4.608C7.688 5.232 7.916 5.964 8.252 6.804C8.3 6.78 8.408 6.768 8.576 6.768C8.96 5.952 9.2 5.232 9.296 4.608C9.392 3.984 9.464 3.432 9.512 2.952C9.56 2.472 9.68 2.052 9.872 1.692C10.184 1.212 10.568 0.923998 11.024 0.827998C11.48 0.731999 11.9 0.791999 12.284 1.008C12.692 1.176 12.968 1.488 13.112 1.944C13.28 2.376 13.208 2.832 12.896 3.312C12.704 3.672 12.404 3.996 11.996 4.284C11.588 4.572 11.12 4.92 10.592 5.328C10.088 5.712 9.56 6.276 9.008 7.02C9.056 7.044 9.08 7.092 9.08 7.164C9.08 7.212 9.092 7.26 9.116 7.308C10.076 7.188 10.868 7.008 11.492 6.768C12.116 6.528 12.656 6.312 13.112 6.12C13.568 5.928 14 5.832 14.408 5.832C15.032 5.832 15.512 6 15.848 6.336C16.184 6.672 16.34 7.056 16.316 7.488C16.316 7.92 16.148 8.304 15.812 8.64C15.476 8.976 15.008 9.144 14.408 9.144C14 9.144 13.568 9.06 13.112 8.892C12.656 8.7 12.116 8.496 11.492 8.28C10.868 8.04 10.088 7.872 9.152 7.776L8.936 7.992C9.536 8.688 10.1 9.24 10.628 9.648C11.156 10.056 11.624 10.404 12.032 10.692C12.44 10.956 12.74 11.256 12.932 11.592C13.22 12.12 13.304 12.6 13.184 13.032C13.088 13.44 12.848 13.764 12.464 14.004C12.032 14.244 11.576 14.304 11.096 14.184C10.616 14.064 10.232 13.776 9.944 13.32C9.728 12.96 9.584 12.552 9.512 12.096C9.464 11.616 9.38 11.064 9.26 10.44C9.14 9.792 8.9 9.06 8.54 8.244C8.492 8.268 8.384 8.28 8.216 8.28C7.832 9.096 7.592 9.816 7.496 10.44C7.4 11.064 7.328 11.616 7.28 12.096C7.256 12.552 7.136 12.96 6.92 13.32C6.656 13.824 6.284 14.124 5.804 14.22C5.348 14.292 4.94 14.22 4.58 14.004Z"/>
                                </svg>
                                Graduação em Análise e Desenvolvimento de Sistemas
                            </div>  

                            <svg class='boxDisciplina__seta' width="13" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.46155L5.92607 6.00869C6.2502 6.30789 6.7498 6.30789 7.07393 6.00869L12 1.46155" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <div class="boxDisciplina__accordionContent">
                            <em>1º semestre</em>
                            <ol>
                                <li>Introdução a Computação</li>
                                <li>Lógica de Programação</li>
                                <li>Matemática Computacional</li>
                                <li>Padrões Web</li>
                                <li>Laboratório de Inovação I</li>
                                <li>Comunicação Empresarial</li>
                                <li>Extensão</li>
                            </ol>
                            <em>2º semestre</em>
                            <ol>
                                <li>Fundamentos de Banco de Dados</li>
                                <li>Engenharia de Software</li>
                                <li>Linguagem Técnica de Programação</li>
                                <li>Laboratório de Inovação II</li>
                                <li>Linguagem de Programação para Web I</li>
                                <li>Ética Profissional, Desenvolvimento Sustentável e Empreendedorismo</li>
                                <li>Fundamentos de Computação em Nuvem</li>
                                <li>Extensão</li>
                            </ol>
                            <em>3º semestre</em>
                            <ol>
                                <li>Linguagem de Banco de Dados</li>
                                <li>Linguagem de Programação para Web II</li>
                                <li>Linguagem de Programação Orientada à Objetos I</li>
                                <li>Gestão de Projetos</li>
                                <li>Laboratório de Inovação III</li>
                                <li>Infraestrutura de Redes</li>
                                <li>Sistemas Operacionais</li>
                                <li>Extensão</li>
                            </ol>
                            <em>4º semestre</em>
                            <ol>
                                <li>Linguagem de Programação Orientada à Objetos II</li>
                                <li>Linguagem de Programação para Mobile</li>
                                <li>Segurança da Informação</li>
                                <li>Laboratório de Inovação IV</li>
                                <li>Governança de TI</li>
                                <li>Eletiva</li>
                                <li>Extensão</li>
                            </ol>
                        </div>
                    </div>

                    <div class="boxDisciplina">
                        <span class='boxCTA boxDisciplina__accordionHeader'>
                            <div>
                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.58 14.004C4.172 13.812 3.884 13.5 3.716 13.068C3.548 12.636 3.62 12.18 3.932 11.7C4.124 11.34 4.412 11.028 4.796 10.764C5.204 10.476 5.672 10.128 6.2 9.72C6.728 9.312 7.256 8.748 7.784 8.028C7.76 7.98 7.736 7.932 7.712 7.884C7.712 7.812 7.7 7.764 7.676 7.74C6.74 7.836 5.96 8.004 5.336 8.244C4.712 8.484 4.172 8.7 3.716 8.892C3.26 9.084 2.816 9.18 2.384 9.18C1.808 9.204 1.352 9.048 1.016 8.712C0.68 8.352 0.524 7.956 0.548 7.524C0.524 7.092 0.68 6.708 1.016 6.372C1.352 6.036 1.808 5.868 2.384 5.868C2.816 5.868 3.26 5.964 3.716 6.156C4.172 6.348 4.712 6.552 5.336 6.768C5.96 6.984 6.728 7.152 7.64 7.272L7.892 7.056C7.292 6.336 6.716 5.784 6.164 5.4C5.636 4.992 5.168 4.644 4.76 4.356C4.376 4.068 4.076 3.756 3.86 3.42C3.62 2.892 3.548 2.424 3.644 2.016C3.764 1.584 4.016 1.248 4.4 1.008C4.808 0.767998 5.24 0.707998 5.696 0.827998C6.176 0.947998 6.572 1.236 6.884 1.692C7.1 2.028 7.232 2.436 7.28 2.916C7.352 3.396 7.448 3.96 7.568 4.608C7.688 5.232 7.916 5.964 8.252 6.804C8.3 6.78 8.408 6.768 8.576 6.768C8.96 5.952 9.2 5.232 9.296 4.608C9.392 3.984 9.464 3.432 9.512 2.952C9.56 2.472 9.68 2.052 9.872 1.692C10.184 1.212 10.568 0.923998 11.024 0.827998C11.48 0.731999 11.9 0.791999 12.284 1.008C12.692 1.176 12.968 1.488 13.112 1.944C13.28 2.376 13.208 2.832 12.896 3.312C12.704 3.672 12.404 3.996 11.996 4.284C11.588 4.572 11.12 4.92 10.592 5.328C10.088 5.712 9.56 6.276 9.008 7.02C9.056 7.044 9.08 7.092 9.08 7.164C9.08 7.212 9.092 7.26 9.116 7.308C10.076 7.188 10.868 7.008 11.492 6.768C12.116 6.528 12.656 6.312 13.112 6.12C13.568 5.928 14 5.832 14.408 5.832C15.032 5.832 15.512 6 15.848 6.336C16.184 6.672 16.34 7.056 16.316 7.488C16.316 7.92 16.148 8.304 15.812 8.64C15.476 8.976 15.008 9.144 14.408 9.144C14 9.144 13.568 9.06 13.112 8.892C12.656 8.7 12.116 8.496 11.492 8.28C10.868 8.04 10.088 7.872 9.152 7.776L8.936 7.992C9.536 8.688 10.1 9.24 10.628 9.648C11.156 10.056 11.624 10.404 12.032 10.692C12.44 10.956 12.74 11.256 12.932 11.592C13.22 12.12 13.304 12.6 13.184 13.032C13.088 13.44 12.848 13.764 12.464 14.004C12.032 14.244 11.576 14.304 11.096 14.184C10.616 14.064 10.232 13.776 9.944 13.32C9.728 12.96 9.584 12.552 9.512 12.096C9.464 11.616 9.38 11.064 9.26 10.44C9.14 9.792 8.9 9.06 8.54 8.244C8.492 8.268 8.384 8.28 8.216 8.28C7.832 9.096 7.592 9.816 7.496 10.44C7.4 11.064 7.328 11.616 7.28 12.096C7.256 12.552 7.136 12.96 6.92 13.32C6.656 13.824 6.284 14.124 5.804 14.22C5.348 14.292 4.94 14.22 4.58 14.004Z"/>
                                </svg>
                                Graduação em Ciência de Dados
                            </div>  

                            <svg class='boxDisciplina__seta' width="13" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.46155L5.92607 6.00869C6.2502 6.30789 6.7498 6.30789 7.07393 6.00869L12 1.46155" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>

                        <div class="boxDisciplina__accordionContent">
                            <em>1º semestre</em>
                            <ol>
                                <li>Introdução a Computação</li>
                                <li>Lógica de Programação</li>
                                <li>Matemática Computacional</li>
                                <li>Padrões Web</li>
                                <li>Laboratório de Inovação I</li>
                                <li>Comunicação Empresarial</li>
                                <li>Extensão</li>
                            </ol>
                            <em>2º semestre</em>
                            <ol>
                                <li>Fundamentos de Banco de Dados</li>
                                <li>Engenharia de Software</li>
                                <li>Linguagem Técnica de Programação</li>
                                <li>Laboratório de Inovação II</li>
                                <li>Linguagem de Programação para Web I</li>
                                <li>Ética Profissional, Desenvolvimento Sustentável e Empreendedorismo</li>
                                <li>Fundamentos de Computação em Nuvem</li>
                                <li>Extensão</li>
                            </ol>
                            <em>3º semestre</em>
                            <ol>
                                <li>Linguagem de Banco de Dados</li>
                                <li>Linguagem de Programação para Web II</li>
                                <li>Linguagem de Programação Orientada à Objetos I</li>
                                <li>Gestão de Projetos</li>
                                <li>Laboratório de Inovação III</li>
                                <li>Infraestrutura de Redes</li>
                                <li>Sistemas Operacionais</li>
                                <li>Extensão</li>
                            </ol>
                            <em>4º semestre</em>
                            <ol>
                                <li>Linguagem de Programação Orientada à Objetos II</li>
                                <li>Linguagem de Programação para Mobile</li>
                                <li>Segurança da Informação</li>
                                <li>Laboratório de Inovação IV</li>
                                <li>Governança de TI</li>
                                <li>Eletiva</li>
                                <li>Extensão</li>
                            </ol>
                        </div>
                    </div>

                    <div class="boxDisciplina">
                        <span class='boxCTA boxDisciplina__accordionHeader'>
                            <div>
                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.58 14.004C4.172 13.812 3.884 13.5 3.716 13.068C3.548 12.636 3.62 12.18 3.932 11.7C4.124 11.34 4.412 11.028 4.796 10.764C5.204 10.476 5.672 10.128 6.2 9.72C6.728 9.312 7.256 8.748 7.784 8.028C7.76 7.98 7.736 7.932 7.712 7.884C7.712 7.812 7.7 7.764 7.676 7.74C6.74 7.836 5.96 8.004 5.336 8.244C4.712 8.484 4.172 8.7 3.716 8.892C3.26 9.084 2.816 9.18 2.384 9.18C1.808 9.204 1.352 9.048 1.016 8.712C0.68 8.352 0.524 7.956 0.548 7.524C0.524 7.092 0.68 6.708 1.016 6.372C1.352 6.036 1.808 5.868 2.384 5.868C2.816 5.868 3.26 5.964 3.716 6.156C4.172 6.348 4.712 6.552 5.336 6.768C5.96 6.984 6.728 7.152 7.64 7.272L7.892 7.056C7.292 6.336 6.716 5.784 6.164 5.4C5.636 4.992 5.168 4.644 4.76 4.356C4.376 4.068 4.076 3.756 3.86 3.42C3.62 2.892 3.548 2.424 3.644 2.016C3.764 1.584 4.016 1.248 4.4 1.008C4.808 0.767998 5.24 0.707998 5.696 0.827998C6.176 0.947998 6.572 1.236 6.884 1.692C7.1 2.028 7.232 2.436 7.28 2.916C7.352 3.396 7.448 3.96 7.568 4.608C7.688 5.232 7.916 5.964 8.252 6.804C8.3 6.78 8.408 6.768 8.576 6.768C8.96 5.952 9.2 5.232 9.296 4.608C9.392 3.984 9.464 3.432 9.512 2.952C9.56 2.472 9.68 2.052 9.872 1.692C10.184 1.212 10.568 0.923998 11.024 0.827998C11.48 0.731999 11.9 0.791999 12.284 1.008C12.692 1.176 12.968 1.488 13.112 1.944C13.28 2.376 13.208 2.832 12.896 3.312C12.704 3.672 12.404 3.996 11.996 4.284C11.588 4.572 11.12 4.92 10.592 5.328C10.088 5.712 9.56 6.276 9.008 7.02C9.056 7.044 9.08 7.092 9.08 7.164C9.08 7.212 9.092 7.26 9.116 7.308C10.076 7.188 10.868 7.008 11.492 6.768C12.116 6.528 12.656 6.312 13.112 6.12C13.568 5.928 14 5.832 14.408 5.832C15.032 5.832 15.512 6 15.848 6.336C16.184 6.672 16.34 7.056 16.316 7.488C16.316 7.92 16.148 8.304 15.812 8.64C15.476 8.976 15.008 9.144 14.408 9.144C14 9.144 13.568 9.06 13.112 8.892C12.656 8.7 12.116 8.496 11.492 8.28C10.868 8.04 10.088 7.872 9.152 7.776L8.936 7.992C9.536 8.688 10.1 9.24 10.628 9.648C11.156 10.056 11.624 10.404 12.032 10.692C12.44 10.956 12.74 11.256 12.932 11.592C13.22 12.12 13.304 12.6 13.184 13.032C13.088 13.44 12.848 13.764 12.464 14.004C12.032 14.244 11.576 14.304 11.096 14.184C10.616 14.064 10.232 13.776 9.944 13.32C9.728 12.96 9.584 12.552 9.512 12.096C9.464 11.616 9.38 11.064 9.26 10.44C9.14 9.792 8.9 9.06 8.54 8.244C8.492 8.268 8.384 8.28 8.216 8.28C7.832 9.096 7.592 9.816 7.496 10.44C7.4 11.064 7.328 11.616 7.28 12.096C7.256 12.552 7.136 12.96 6.92 13.32C6.656 13.824 6.284 14.124 5.804 14.22C5.348 14.292 4.94 14.22 4.58 14.004Z"/>
                                </svg>
                                Graduação em Análise e Desenvolvimento de Sistemas
                            </div>  

                            <svg class='boxDisciplina__seta' width="13" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.46155L5.92607 6.00869C6.2502 6.30789 6.7498 6.30789 7.07393 6.00869L12 1.46155" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <div class="boxDisciplina__accordionContent">
                            <em>1º semestre</em>
                            <ol>
                                <li>Introdução a Computação</li>
                                <li>Lógica de Programação</li>
                                <li>Matemática Computacional</li>
                                <li>Padrões Web</li>
                                <li>Laboratório de Inovação I</li>
                                <li>Comunicação Empresarial</li>
                                <li>Extensão</li>
                            </ol>
                            <em>2º semestre</em>
                            <ol>
                                <li>Fundamentos de Banco de Dados</li>
                                <li>Engenharia de Software</li>
                                <li>Linguagem Técnica de Programação</li>
                                <li>Laboratório de Inovação II</li>
                                <li>Linguagem de Programação para Web I</li>
                                <li>Ética Profissional, Desenvolvimento Sustentável e Empreendedorismo</li>
                                <li>Fundamentos de Computação em Nuvem</li>
                                <li>Extensão</li>
                            </ol>
                            <em>3º semestre</em>
                            <ol>
                                <li>Linguagem de Banco de Dados</li>
                                <li>Linguagem de Programação para Web II</li>
                                <li>Linguagem de Programação Orientada à Objetos I</li>
                                <li>Gestão de Projetos</li>
                                <li>Laboratório de Inovação III</li>
                                <li>Infraestrutura de Redes</li>
                                <li>Sistemas Operacionais</li>
                                <li>Extensão</li>
                            </ol>
                            <em>4º semestre</em>
                            <ol>
                                <li>Linguagem de Programação Orientada à Objetos II</li>
                                <li>Linguagem de Programação para Mobile</li>
                                <li>Segurança da Informação</li>
                                <li>Laboratório de Inovação IV</li>
                                <li>Governança de TI</li>
                                <li>Eletiva</li>
                                <li>Extensão</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <?php endif;
            ?>
            <!-- >>FINAL DAS DISCIPLINAS -->

        </div>
    </main>

    <script src="../js/script.js"></script>

    <?php include('../footer.php')  ?>
</body>
</html>