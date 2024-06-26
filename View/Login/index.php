<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>
<body>
    <?php $usuarioValido = false; ?>

    <main class='boxLogin'>
        <div class="boxLoginContent">
            <div class="headerLogin">
                <a href="/" target="_blank">
                    <svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="26px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M28.347,5.157c-13.6,0-24.625,11.027-24.625,24.625c0,13.6,11.025,24.623,24.625,24.623c13.6,0,24.625-11.023,24.625-24.623  C52.972,16.184,41.946,5.157,28.347,5.157z M34.864,29.679h-4.264c0,6.814,0,15.207,0,15.207h-6.32c0,0,0-8.307,0-15.207h-3.006  V24.31h3.006v-3.479c0-2.49,1.182-6.377,6.379-6.377l4.68,0.018v5.215c0,0-2.846,0-3.398,0c-0.555,0-1.34,0.277-1.34,1.461v3.163  h4.818L34.864,29.679z"/></svg>
                </a>
                <a href="/" target="_blank">
                    <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.3834 4.49535C18.396 4.6757 18.396 4.85609 18.396 5.03644C18.396 10.5374 14.309 16.8758 6.83905 16.8758C4.53771 16.8758 2.39988 16.1929 0.601562 15.0078C0.928539 15.0464 1.2429 15.0593 1.58245 15.0593C3.48134 15.0593 5.22937 14.4023 6.62526 13.2815C4.83953 13.2428 3.34303 12.0447 2.82742 10.3957C3.07895 10.4343 3.33045 10.4601 3.59456 10.4601C3.95924 10.4601 4.32396 10.4085 4.66348 10.3184C2.8023 9.93189 1.40637 8.25714 1.40637 6.23454V6.18303C1.9471 6.49222 2.57593 6.68546 3.24238 6.71119C2.14831 5.96397 1.43153 4.68859 1.43153 3.2457C1.43153 2.47275 1.6327 1.76419 1.98484 1.14581C3.98436 3.67084 6.98994 5.31982 10.3602 5.50021C10.2973 5.19102 10.2596 4.86898 10.2596 4.5469C10.2596 2.25373 12.0704 0.385742 14.3215 0.385742C15.491 0.385742 16.5473 0.888171 17.2893 1.69979C18.2073 1.51944 19.0876 1.17159 19.8673 0.694932C19.5654 1.66117 18.9241 2.47279 18.0816 2.98806C18.899 2.89793 19.6913 2.66598 20.4206 2.34395C19.8674 3.16841 19.1757 3.90271 18.3834 4.49535Z"/>
                    </svg>
                </a>
                <a href="/" target="_blank">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.70511 4.48247C6.4637 4.48247 4.65578 6.33456 4.65578 8.63073C4.65578 10.9269 6.4637 12.779 8.70511 12.779C10.9465 12.779 12.7544 10.9269 12.7544 8.63073C12.7544 6.33456 10.9465 4.48247 8.70511 4.48247ZM8.70511 11.3276C7.25665 11.3276 6.07251 10.1182 6.07251 8.63073C6.07251 7.14328 7.25313 5.93382 8.70511 5.93382C10.1571 5.93382 11.3377 7.14328 11.3377 8.63073C11.3377 10.1182 10.1536 11.3276 8.70511 11.3276ZM13.8646 4.31278C13.8646 4.85072 13.4417 5.28035 12.9201 5.28035C12.395 5.28035 11.9756 4.84711 11.9756 4.31278C11.9756 3.77845 12.3985 3.34521 12.9201 3.34521C13.4417 3.34521 13.8646 3.77845 13.8646 4.31278ZM16.5465 5.29479C16.4866 3.99868 16.1976 2.8506 15.2707 1.90469C14.3474 0.958789 13.2267 0.662742 11.9615 0.597756C10.6575 0.521939 6.74917 0.521939 5.4452 0.597756C4.18353 0.659132 3.06283 0.955178 2.13596 1.90108C1.20909 2.84699 0.92363 3.99507 0.860194 5.29118C0.786185 6.627 0.786185 10.6309 0.860194 11.9667C0.920106 13.2628 1.20909 14.4109 2.13596 15.3568C3.06283 16.3027 4.18001 16.5987 5.4452 16.6637C6.74917 16.7395 10.6575 16.7395 11.9615 16.6637C13.2267 16.6023 14.3474 16.3063 15.2707 15.3568C16.1941 14.4109 16.4831 13.2628 16.5465 11.9667C16.6205 10.6309 16.6205 6.63061 16.5465 5.29479ZM14.8619 13.4C14.587 14.1076 14.0549 14.6528 13.3606 14.938C12.321 15.3604 9.854 15.2629 8.70511 15.2629C7.55621 15.2629 5.08573 15.3568 4.04961 14.938C3.35887 14.6564 2.82671 14.1112 2.5483 13.4C2.13596 12.3349 2.23112 9.8077 2.23112 8.63073C2.23112 7.45377 2.13949 4.92293 2.5483 3.86149C2.82318 3.15387 3.35534 2.60871 4.04961 2.32349C5.08926 1.90108 7.55621 1.99856 8.70511 1.99856C9.854 1.99856 12.3245 1.90469 13.3606 2.32349C14.0513 2.6051 14.5835 3.15026 14.8619 3.86149C15.2743 4.92654 15.1791 7.45377 15.1791 8.63073C15.1791 9.8077 15.2743 12.3385 14.8619 13.4Z"/>
                    </svg>
                </a>
                <a href="/" target="_blank">
                    <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.6893 2.63083C20.4513 1.73443 19.7498 1.02845 18.8592 0.788867C17.2449 0.353516 10.7719 0.353516 10.7719 0.353516C10.7719 0.353516 4.29884 0.353516 2.68452 0.788867C1.79392 1.02849 1.09249 1.73443 0.854422 2.63083C0.421875 4.25561 0.421875 7.64556 0.421875 7.64556C0.421875 7.64556 0.421875 11.0355 0.854422 12.6603C1.09249 13.5567 1.79392 14.2332 2.68452 14.4728C4.29884 14.9082 10.7719 14.9082 10.7719 14.9082C10.7719 14.9082 17.2449 14.9082 18.8592 14.4728C19.7498 14.2332 20.4513 13.5567 20.6893 12.6603C21.1219 11.0355 21.1219 7.64556 21.1219 7.64556C21.1219 7.64556 21.1219 4.25561 20.6893 2.63083ZM8.65481 10.7234V4.56774L14.065 7.64563L8.65481 10.7234Z"/>
                    </svg>
                </a>
                <a href="/" target="_blank">
                    <svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M30.071,27.101v-0.077c-0.016,0.026-0.033,0.052-0.05,0.077H30.071z"/><path d="M49.265,4.667H7.145c-2.016,0-3.651,1.596-3.651,3.563v42.613c0,1.966,1.635,3.562,3.651,3.562h42.12   c2.019,0,3.654-1.597,3.654-3.562V8.23C52.919,6.262,51.283,4.667,49.265,4.667z M18.475,46.304h-7.465V23.845h7.465V46.304z    M14.743,20.777h-0.05c-2.504,0-4.124-1.725-4.124-3.88c0-2.203,1.67-3.88,4.223-3.88c2.554,0,4.125,1.677,4.175,3.88   C18.967,19.052,17.345,20.777,14.743,20.777z M45.394,46.304h-7.465V34.286c0-3.018-1.08-5.078-3.781-5.078   c-2.062,0-3.29,1.389-3.831,2.731c-0.197,0.479-0.245,1.149-0.245,1.821v12.543h-7.465c0,0,0.098-20.354,0-22.459h7.465v3.179   c0.992-1.53,2.766-3.709,6.729-3.709c4.911,0,8.594,3.211,8.594,10.11V46.304z"/></g></svg>
                </a>
            </div>

            <div class="boxFormLogin">
                <img src="../img/senac.png" alt="logo senac" />

                <div class="boxFormWrapper">
                    <form action="../../../Controller/LoginController.php" method="post">
                        <div class="boxForm__row">
                            <svg class="svgUser" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title/><circle cx="12" cy="8" r="4"/><path d="M20,19v1a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V19a6,6,0,0,1,6-6h4A6,6,0,0,1,20,19Z"/></svg>
                            <input placeholder="Identificação de usuário" type="text" name="email" id="email">
                        </div>

                        <div class="boxForm__row">
                            <svg class="svgLock" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 8V6a6 6 0 1 1 12 0h-3v2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"/></svg>
                            <input placeholder="Senha" type="password" name="senha" id="senha">

                            <button type="submit" id="btnlogin">
                                <svg width="12" height="21" viewBox="0 0 12 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 19.5L10.5 10.5L1.5 1.5" stroke="white" stroke-width="2"/>
                                </svg>
                            </button>
                        </div>
                    </form>

                    <div class="boxForm__links">
                        <button class="modalLoginBtn modalBtnToggle">Gerenciar cadastro</button>
                        <span>Primeiro acesso? <a href="../../View/Cadastro?page=cadastrar">Cadastrar</a></span>
                    </div>
                </div>
            </div>

            <div class="boxImgLogin">
                <div class="headerBoxImg">
                    <span>Faculdade</span>
                </div>
                <img class="imgDesktop" src="../img/login/facul.png" />
                <img class="imgMobile" src="../img/login/facul_mobile.jpeg" />
            </div>

            <div class="boxFooterLogin">
                <span>Os conhecimentos alimentam novas possibilidades e abrem portas. </span>
                <span>SENAC © 2021.</span>  
            </div>

            <div class="boxModalBkg__login modalLoginBtn"></div>

            <div id='modal' class='boxModal__login'>
                <button class='modalLoginBtn closeBtn'>x</button>
                <?php 
                    if (!$usuarioValido) :  ?>
                    <h3>Insira o usuário e senha para continuar</h3>
                    <form class='boxForm'>
                        <div class='boxForm__row'>
                            <label for='usuario'>Usuário</label>
                            <input type="text" id="usuario" />
                        </div>
                        <div class='boxForm__row'>
                            <label for='senha'>Senha</label>
                            <input type="password" id="senha"/>
                        </div>
                        <div class='boxForm__footer'>
                            <button type='submit' class='btnContinuar'>Enviar</button>
                        </div>
                    </form>
                    <?php endif;
                ?>
                <?php 
                    if ($usuarioValido) :  ?>
                    <h3>Você realmente deseja excluir sua conta?</h3>
                    <form class='boxFormExcluir'>
                        <p>Ao confirmar a exclusão da conta você perderá o acesso ao seu portfólio e as pessoas não serão mais capazes de visualizar seus projetos.</p>
                        <div class='boxFormExcluir__btn'>
                            <button type='submit' class='btnContinuar btnCancelar'>Confirmar</button>
                            <button type='submit' class='btnContinuar'>Cancelar</button>
                        </div>
                    </form>
                    <?php endif;
                ?>
            </div>
        </div>
    </main>

    <script src="../js/script.js"></script>
</body>
</html>