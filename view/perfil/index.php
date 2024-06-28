<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>
<body>

    <?php include('../header.php') ;
        // VARIÁVEL QUE APRESENTA O CONTEÚDO DOS TRABALHOS OU MOSTRA UMA MENSAGEM QUE ESTÁ VAZIO (CASO TRUE)
        $empty = false;

        // VARIÁVEL QUE SELECIONA A DISCIPLINAS
        $disciplina = 'Padrões Web';
    ?>
    
    <main class="boxMain boxPerfil">
        <div class="boxPerfilWrapper">
            <!-- VERIFICANDO SE É O CONTEÚDO NORMAL OU A PÁGINA DE EDIÇÃO DOS CONTEÚDOS PESSOAIS -->
            <?php  if(@$_REQUEST["page"] != 'editar-dados') : ?>

                <!-- BANNER DO TOPO DA PÁGINA -->
                <div class="boxPerfil__header"> 
                    <img src='../img/perfilHeader.png' />

                    <!-- ÍCONE QUE ABRE O MODAL PARA EDITAR O BANNER -->
                    <a href='./?page=editar-dados' class="boxPerfil__header_editar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="50px"><path d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z"/></svg>
                    </a>
                </div>
            
                <!-- CARD DE DADOS DO PERFIL -->
                <div class="boxCardPerfil">
                    <div class="boxImg__wrapper">
                        <div class="boxImg">
                            <!-- IMAGEM DO PERFIL -->
                            <img src='../img/perfil.jpg' />
                        </div>
                        <!-- BOTÃO DE EDITAR -->
                        <a href='./?page=editar-dados' class="boxImg__svg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="50px"><path d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z"/></svg>
                        </a>
                    </div>

                    <h2>Kristine Andrejeva</h2>

                    <em>Especialista UX/UI</em>

                    <span class='boxLocal'>
                        <img src='../img/local.svg' />
                        Brasília, Brasil
                    </span>
                    
                    <div class="boxCardPerfil__icons">
                        <a href='' class='boxCardPerfil__github'>
                            <svg width="98" height="96" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z" fill="#00468B"/></svg>
                        </a>
                        <a href=''>
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px"> <path d="M24,4H6C4.895,4,4,4.895,4,6v18c0,1.105,0.895,2,2,2h18c1.105,0,2-0.895,2-2V6C26,4.895,25.105,4,24,4z M10.954,22h-2.95 v-9.492h2.95V22z M9.449,11.151c-0.951,0-1.72-0.771-1.72-1.72c0-0.949,0.77-1.719,1.72-1.719c0.948,0,1.719,0.771,1.719,1.719 C11.168,10.38,10.397,11.151,9.449,11.151z M22.004,22h-2.948v-4.616c0-1.101-0.02-2.517-1.533-2.517 c-1.535,0-1.771,1.199-1.771,2.437V22h-2.948v-9.492h2.83v1.297h0.04c0.394-0.746,1.356-1.533,2.791-1.533 c2.987,0,3.539,1.966,3.539,4.522V22z"/></svg>
                        </a> 
                        <a href=''>
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="29" height="29"> <path d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z"/></svg>
                        </a>
                    </div>
                    
                    <strong>sobre mim</strong>
                    <p>
                        Designer criativa com mais de 8 anos de experiência em UX/UI. Transformo ideias em experiências digitais intuitivas e atraentes. Adoro resolver problemas complexos com soluções simples. No meu tempo livre, gosto de explorar novas tecnologias e passar tempo com a família e amigos.
                    </p>
                </div>

                <?php  if(@$_REQUEST["page"] != $disciplina) : ?>

                    <!-- >>ÍNICIO DA ESCOLHA DAS DISCIPLINAS (**A PÁGINA COMEÇA AQUI**) -->
                    <div class="boxContentDisciplinas">
                        <span class='boxCTA'>
                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.58 14.004C4.172 13.812 3.884 13.5 3.716 13.068C3.548 12.636 3.62 12.18 3.932 11.7C4.124 11.34 4.412 11.028 4.796 10.764C5.204 10.476 5.672 10.128 6.2 9.72C6.728 9.312 7.256 8.748 7.784 8.028C7.76 7.98 7.736 7.932 7.712 7.884C7.712 7.812 7.7 7.764 7.676 7.74C6.74 7.836 5.96 8.004 5.336 8.244C4.712 8.484 4.172 8.7 3.716 8.892C3.26 9.084 2.816 9.18 2.384 9.18C1.808 9.204 1.352 9.048 1.016 8.712C0.68 8.352 0.524 7.956 0.548 7.524C0.524 7.092 0.68 6.708 1.016 6.372C1.352 6.036 1.808 5.868 2.384 5.868C2.816 5.868 3.26 5.964 3.716 6.156C4.172 6.348 4.712 6.552 5.336 6.768C5.96 6.984 6.728 7.152 7.64 7.272L7.892 7.056C7.292 6.336 6.716 5.784 6.164 5.4C5.636 4.992 5.168 4.644 4.76 4.356C4.376 4.068 4.076 3.756 3.86 3.42C3.62 2.892 3.548 2.424 3.644 2.016C3.764 1.584 4.016 1.248 4.4 1.008C4.808 0.767998 5.24 0.707998 5.696 0.827998C6.176 0.947998 6.572 1.236 6.884 1.692C7.1 2.028 7.232 2.436 7.28 2.916C7.352 3.396 7.448 3.96 7.568 4.608C7.688 5.232 7.916 5.964 8.252 6.804C8.3 6.78 8.408 6.768 8.576 6.768C8.96 5.952 9.2 5.232 9.296 4.608C9.392 3.984 9.464 3.432 9.512 2.952C9.56 2.472 9.68 2.052 9.872 1.692C10.184 1.212 10.568 0.923998 11.024 0.827998C11.48 0.731999 11.9 0.791999 12.284 1.008C12.692 1.176 12.968 1.488 13.112 1.944C13.28 2.376 13.208 2.832 12.896 3.312C12.704 3.672 12.404 3.996 11.996 4.284C11.588 4.572 11.12 4.92 10.592 5.328C10.088 5.712 9.56 6.276 9.008 7.02C9.056 7.044 9.08 7.092 9.08 7.164C9.08 7.212 9.092 7.26 9.116 7.308C10.076 7.188 10.868 7.008 11.492 6.768C12.116 6.528 12.656 6.312 13.112 6.12C13.568 5.928 14 5.832 14.408 5.832C15.032 5.832 15.512 6 15.848 6.336C16.184 6.672 16.34 7.056 16.316 7.488C16.316 7.92 16.148 8.304 15.812 8.64C15.476 8.976 15.008 9.144 14.408 9.144C14 9.144 13.568 9.06 13.112 8.892C12.656 8.7 12.116 8.496 11.492 8.28C10.868 8.04 10.088 7.872 9.152 7.776L8.936 7.992C9.536 8.688 10.1 9.24 10.628 9.648C11.156 10.056 11.624 10.404 12.032 10.692C12.44 10.956 12.74 11.256 12.932 11.592C13.22 12.12 13.304 12.6 13.184 13.032C13.088 13.44 12.848 13.764 12.464 14.004C12.032 14.244 11.576 14.304 11.096 14.184C10.616 14.064 10.232 13.776 9.944 13.32C9.728 12.96 9.584 12.552 9.512 12.096C9.464 11.616 9.38 11.064 9.26 10.44C9.14 9.792 8.9 9.06 8.54 8.244C8.492 8.268 8.384 8.28 8.216 8.28C7.832 9.096 7.592 9.816 7.496 10.44C7.4 11.064 7.328 11.616 7.28 12.096C7.256 12.552 7.136 12.96 6.92 13.32C6.656 13.824 6.284 14.124 5.804 14.22C5.348 14.292 4.94 14.22 4.58 14.004Z" fill="#00468B"/>
                            </svg>
                            Escolha uma disciplina para visualizar seus trabalhos
                        </span>

                        <div class="boxSemestres">

                            <!-- SELECT DOS SEMESTRES QUE SERÃO APRESENTADOS AS MATÉRIAS -->
                            <select>
                                <option> 1º semestre </option>
                                <option> 2º semestre </option>
                                <option> 3º semestre </option>
                                <option> 4º semestre </option>
                            </select>
                    
                            <!-- BOTÃO QUE MUDA A VISUALIZAÇÃO DE LISTA PARA CARDS (MUDA APENAS O FRONT) -->
                            <button>
                                <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.7" y="0.7" width="4.6" height="3.6" stroke="white" stroke-width="1.4"/>
                                    <rect x="7.7" y="6.7" width="4.6" height="3.6" stroke="white" stroke-width="1.4"/>
                                    <rect x="0.7" y="6.7" width="4.6" height="3.6" stroke="white" stroke-width="1.4"/>
                                    <rect x="7.7" y="0.7" width="4.6" height="3.6" stroke="white" stroke-width="1.4"/>
                                </svg>
                                Visualização
                            </button>
                        </div>

                        <!-- CARDS DAS DISCIPLINAS -->
                        <div class="boxCardsMaterias">
                            <div class="boxCard">
                                <div class="boxTags">
                                    <span>EAD</span>
                                    <span>Noturno</span>
                                </div>

                                <h3>Introdução a Computação</h3>
                                <span class='boxCard__time'>01/2024</span>

                                <div class="boxLink">
                                    <a href='./?page=<?php echo $disciplina ?>'>VISUALIZAR TRABALHOS</a>
                                </div>
                            </div>

                            <div class="boxCard">
                                <div class="boxTags">
                                    <span>EAD</span>
                                    <span>Noturno</span>
                                </div>

                                <h3>Lógica de Programação</h3>
                                <span class='boxCard__time'>01/2024</span>

                                <div class="boxLink">
                                    <a href='./?page=<?php echo $disciplina ?>'>VISUALIZAR TRABALHOS</a>
                                </div>
                            </div>

                            <div class="boxCard">
                                <div class="boxTags">
                                    <span>EAD</span>
                                    <span>Noturno</span>
                                </div>

                                <h3>Matemática Computacional</h3>
                                <span class='boxCard__time'>01/2024</span>

                                <div class="boxLink">
                                    <a href='./?page=<?php echo $disciplina ?>'>VISUALIZAR TRABALHOS</a>
                                </div>
                            </div>

                            <div class="boxCard">
                                <div class="boxTags">
                                    <span>EAD</span>
                                    <span>Noturno</span>
                                </div>

                                <h3>Padrões Web</h3>
                                <span class='boxCard__time'>01/2024</span>

                                <div class="boxLink">
                                    <a href='./?page=<?php echo $disciplina ?>'>VISUALIZAR TRABALHOS</a>
                                </div>
                            </div>

                            <div class="boxCard">
                                <div class="boxTags">
                                    <span>EAD</span>
                                    <span>Noturno</span>
                                </div>

                                <h3>Laboratório de Inovação I</h3>
                                <span class='boxCard__time'>01/2024</span>

                                <div class="boxLink">
                                    <a href='./?page=<?php echo $disciplina ?>'>VISUALIZAR TRABALHOS</a>
                                </div>
                            </div>

                            <div class="boxCard">
                                <div class="boxTags">
                                    <span>EAD</span>
                                    <span>Noturno</span>
                                </div>

                                <h3>Comunicação Empresarial</h3>
                                <span class='boxCard__time'>01/2024</span>

                                <div class="boxLink">
                                    <a href='./?page=<?php echo $disciplina ?>'>VISUALIZAR TRABALHOS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- >>FINAL DA ESCOLHA DAS DISCIPLINAS -->
                    
                    <!-- >>INÍCIO DA LISTAGEM DE PROJETOS (DEPOIS DE TER ESCOLHIDO UMA DISCIPLINA) -->
                    <?php else : ?>
                        <div class="boxVoltar">  
                            <a href='./'> 
                                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 9L1 5L5 1" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                voltar
                            </a>
                        </div>
                    <?php 
                        // VERIFICA SE TEM PROJETO DAQUELA DISCIPLINA
                        if (!$empty) :  ?>
                            <div class="boxHeaderCards">
                                <h1 class='boxHeader__disciplina'><?= $disciplina ?> <img src=<?=SENAC_DIR_PATH_VIEW.'img/lineBottom.svg'?> /></h1>
                                <button class='modalBtn adicionarBtn__typeB'>+ Adicionar projeto</button>
                            </div>
                            
                            <!-- LISTAGEM DOS TRABALHOS/PROJETOS -->
                            <ul class="listCards">
                                <li class="cardInfo">
                                    <div class="cardInfo__img">
                                        <img src='../img/bkgCard.png' />
                                    </div>
                                    <div class='cardInfo__content'>
                                        <strong>Portfólio pessoal (Menu + Web design)</strong>
                                        <time>1 de agosto de 2024</time>
                                        <a href='https://www.google.com.br/?hl=pt-BR' target='_blank'>Visualizar  projeto</a>   
                                    </div>
                                </li>
                                <li class="cardInfo">
                                    <div class="cardInfo__img">
                                        <img src='../img/bkgCard2.png' />
                                    </div>
                                    <div class='cardInfo__content'>
                                        <strong>Design responsivo aprendendo grid </strong>
                                        <time>1 de agosto de 2024</time>
                                        <a href='https://www.google.com.br/?hl=pt-BR' target='_blank'>Visualizar  projeto</a>   
                                    </div>
                                </li>
                                <li class="cardInfo">
                                    <div class="cardInfo__img">
                                        <img src='../img/bkg7.jpeg' />
                                    </div>
                                    <div class='cardInfo__content'>
                                        <strong>Food delivery site (Menu + Web design)</strong>
                                        <time>1 de agosto de 2021</time>
                                        <a href='https://www.google.com.br/?hl=pt-BR' target='_blank'>Visualizar  projeto</a>   
                                    </div>
                                </li>
                                <li class="cardInfo">
                                    <div class="cardInfo__img">
                                        <img src='../img/bkgCard.png' />
                                    </div>
                                    <div class='cardInfo__content'>
                                        <strong>Kayzen Asian food (Menu + Web design)</strong>
                                        <time>1 de agosto de 2021</time>
                                        <a href='https://www.google.com.br/?hl=pt-BR' target='_blank'>Visualizar  projeto</a>   
                                    </div>
                                </li>
                                <li class="cardInfo">
                                    <div class="cardInfo__img">
                                        <img src='../img/bkgCard.png' />
                                    </div>
                                    <div class='cardInfo__content'>
                                        <strong>Kayzen Asian food (Menu + Web design)</strong>
                                        <time>1 de agosto de 2021</time>
                                        <a href='https://www.google.com.br/?hl=pt-BR' target='_blank'>Visualizar  projeto</a>   
                                    </div>
                                </li>
                                <li class="cardInfo">
                                    <div class="cardInfo__img">
                                        <img src='../img/bkgCard.png' />
                                    </div>
                                    <div class='cardInfo__content'>
                                        <strong>Kayzen Asian food (Menu + Web design)</strong>
                                        <time>1 de agosto de 2021</time>
                                        <a href='https://www.google.com.br/?hl=pt-BR' target='_blank'>Visualizar  projeto</a>   
                                    </div>
                                </li>
                            </ul>

                        <!-- CASO NÃO TENHA NENHUM TRABALHO  -->
                        <?php else : ?>
                            <div class='boxNotFound'>
                                <div class='boxNotFound__img'>
                                    <h3>Seu espaço criativo está vazio</h3>
                                    <p>Você ainda não tem projetos publicados. Inicie agora e compartilhe com o mundo.</p>
                                    <img src='../img/empty-box.png' />
                                    <button class='modalBtn adicionarBtn'>+ Adicionar projeto</button>
                                </div>
                            </div>
                        <?php endif;
                    ?>
                    <!-- >>FINAL DA LISTAGEM DE PROJETOS -->
                <?php endif; ?>

            <!-- >>INÍCIO DA PÁGINA DE EDIÇÃO DE DADOS PESSOAIS -->
            <?php else : ?>
                <div class="container boxEditarPerfil__wrapper">
                    <div class="boxVoltar__typeB">
                        <a href='./'> 
                            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 9L1 5L5 1" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            voltar
                        </a>
                    </div>

                    <div class="boxEditarPerfil__wrapper">
                        <div class="boxEditarPerfil">
                            <h2>Editar dados</h2>

                            <div class="boxEditar">
                                <div class="boxImgEditar">
                                    <div class="boxImg">
                                        <img src='../img/perfil.jpg' />
                                    </div>

                                    <div class="boxEditar__file">
                                        <input
                                            type="file"
                                            name="boxEditar__file"
                                            id="boxEditar__file"
                                            class="boxEditar__inputFile"
                                        />
                                        <label class="boxEditar__labelFile" for="boxEditar__file">
                                            <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none" height="156" width="156"/><path d="M176,128h48a8,8,0,0,1,8,8v64a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V136a8,8,0,0,1,8-8H80" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><line fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="128" x2="128" y1="128" y2="24"/><polyline fill="none" points="80 72 128 24 176 72"  stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><circle cx="188" cy="168" r="10"/></svg>
                                            <span>Escolher arquivo</span></label
                                        >
                                    </div>
                                </div>

                                <form class="boxEditarForm boxForm">
                                    <div class="boxForm__row boxForm__rowImgWrapper">
                                        <img class="boxForm__row__img" src='../img/perfilHeader.png' />
                                        <div class="boxEditar__file">
                                            <input
                                                type="file"
                                                name="boxEditar__file"
                                                id="boxEditar__file"
                                                class="boxEditar__inputFile"
                                            />
                                            <label class="boxEditar__labelFile" for="boxEditar__file">
                                                <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none" height="156" width="156"/><path d="M176,128h48a8,8,0,0,1,8,8v64a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V136a8,8,0,0,1,8-8H80" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><line fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="128" x2="128" y1="128" y2="24"/><polyline fill="none" points="80 72 128 24 176 72"  stroke-linecap="round" stroke-linejoin="round" stroke-width="12"/><circle cx="188" cy="168" r="10"/></svg>
                                                <span>Escolher arquivo</span></label
                                            >
                                        </div>
                                    </div>

                                    <div class="boxForm__row">
                                        <label for="nome">Nome</label>
                                        <input placeholder="Kristine Andrejeva" type="text" name="nome" id="nome">
                                    </div>

                                    <div class="boxForm__row">
                                        <label for="ocupacao">Ocupação</label>
                                        <input placeholder="Especialista UX/UI" type="text" name="ocupacao" id="ocupacao">
                                    </div>

                                    <div class="boxForm__row">
                                        <label for="nacionalidade">Nacionalidade</label>
                                        <input placeholder="Brasília, Brasil" type="text" name="nacionalidade" id="nacionalidade">
                                    </div>

                                    <div class="boxForm__row boxForm__rowGithub">
                                        <label class='boxForm__github' for="nacionalidade">
                                            <svg width="98" height="96" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z" fill="#55555582"/></svg>
                                            Github
                                        </label>
                                        <input placeholder="github.com/KristineAndrejeva" type="text" name="nacionalidade" id="nacionalidade">
                                    </div>

                                    <div class="boxForm__row boxForm__rowGithub">
                                        <label class='boxForm__github' for="nacionalidade">
                                            <svg width="98" height="96" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z" fill="#55555582"/></svg>
                                            Linkedin
                                        </label>
                                        <input placeholder="linkedin.com/KristineAndrejeva" type="text" name="nacionalidade" id="nacionalidade">
                                    </div>

                                    <div class="boxForm__row boxForm__rowGithub">
                                        <label class='boxForm__github' for="nacionalidade">
                                            <svg width="98" height="96" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z" fill="#55555582"/></svg>
                                            Instagram
                                        </label>
                                        <input placeholder="instagram.com/KristineAndrejeva" type="text" name="nacionalidade" id="nacionalidade">
                                    </div>

                                    <div class="boxForm__row">
                                        <label for="sobre">Sobre mim</label>
                                        <textarea rows="4" cols="50" name="sobre" id="sobre"> </textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
             <!-- >>FINAL DA PÁGINA DE EDIÇÃO DE DADOS PESSOAIS -->

            <!-- BACKGROUND ESCURO DO MODAL DE ADICIONAR PROJETO -->
            <div class="boxModalBkg modalBtn"></div>

            <!-- MODAL DE ADICIONAR PROJETO -->
            <div id='modal' class='boxModal'>
                <button class='modalBtn closeBtn'>x</button>
                <h3> Adicionar atividade </h3>
                <form class='boxForm'>
                    <div class='boxForm__row'>
                        <label class='labelFixa' for='capa'>Adicione a url da imagem</label>
                        <input type="text" id="capa" />
                    </div>
                    <div class='boxForm__row'>
                        <label for='nome'>Nome</label>
                        <input type="text" id="nome"/>
                    </div>
                    <div class='boxForm__row'>
                        <label class='labelFixa' for='data'>Data</label>
                        <input type="date" id="data"/>
                    </div>
                    <div class='boxForm__row'>
                        <label for='descricao'>Descrição</label>
                        <input type="text" id="descricao"/>
                    </div>
                    <div class='boxForm__row'>
                        <label for='link'>Link do projeto</label>
                        <input type="text" id="link"/>
                    </div>
                    <button type='submit'>Adicionar projeto</button>
                </form>
            </div>
        </div>
    </main>

    <script src="../js/script.js"></script>

    <?php include('../footer.php')  ?>
</body>
</html>