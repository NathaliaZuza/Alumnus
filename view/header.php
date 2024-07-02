<?php
    session_start(); 
    define('SENAC_DIR_PATH_VIEW', 'http://'. $_SERVER['HTTP_HOST'] . '/' . explode("/", $_SERVER['REQUEST_URI'])[1] . '/view/');
    $current_page = basename($_SERVER['REQUEST_URI'], ".php");
?>

<header class='boxHeader center <?= $current_page == 'definirPerfil' ? 'boxHeader__typeB' : '' ?> '>
    <div class='container'>
        <img src=<?=SENAC_DIR_PATH_VIEW.'img/senac.png'?> alt='logo senac'/>
    </div>
</header>


<nav class='boxNav center  <?= $current_page == 'DefinirPerfil' ? 'boxNav__typeB' : '' ?>'>
    <div class='container boxNav__content'>
        <ul>
            <li  id="menu"> <img src=<?=SENAC_DIR_PATH_VIEW.'img/menu.svg'?> alt="icon menu" /> Menu </li>
            <!-- <li> <a href=<?=SENAC_DIR_PATH_VIEW?> id=''>Início</a> </li> -->
            <?php 
                if($current_page !='DefinirPerfil') : ?>
                    <li onclick='handleMenu()'> <a href=<?=SENAC_DIR_PATH_VIEW.'Perfil'?> class='menuItem' id='perfil' >Perfil</a> </li>
                    <li> <a href=<?=SENAC_DIR_PATH_VIEW.'painelAdm/?page=usuarios'?> class='menuItem' id='adm'>Painel administrativo</a> </li>
                <?php endif;
            ?>
        </ul>
        <!-- <?php if(!isset($_SESSION['usuario_nome'])){
            echo'<a class="btnLogin" href='.SENAC_DIR_PATH_VIEW.'/login>Login</a>';
        } else {
            echo 'Bem vindo, '.$_SESSION['usuario_nome'].'!';
        }?> -->
        
        <a href=<?=SENAC_DIR_PATH_VIEW.'notificacao'?> id="notificacao" class='menuItem linkNotificacao'>
            <span>03</span>
            <svg enable-background="new 0 0 32 32" height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M28.857,25.485L26,20.723V14c0-5.177-3.954-9.446-9-9.949V3c0-0.552-0.448-1-1-1s-1,0.448-1,1v2c0,0.552,0.448,1,1,1  c4.411,0,8,3.589,8,8v7c0,0.182,0.049,0.359,0.143,0.515L26.233,25H5.766l2.091-3.485C7.951,21.359,8,21.182,8,21v-7  c0-3.079,1.8-5.92,4.585-7.238c0.499-0.236,0.712-0.832,0.476-1.332c-0.236-0.499-0.832-0.712-1.332-0.476  C8.249,6.601,6,10.151,6,14v6.723l-2.857,4.763c-0.186,0.309-0.19,0.693-0.013,1.008C3.307,26.807,3.64,27,4,27h8.142  c0.447,1.721,2,3,3.858,3c1.859,0,3.411-1.279,3.858-3H28c0.36,0,0.692-0.193,0.87-0.507C29.048,26.179,29.043,25.794,28.857,25.485  z M16,28c-0.737,0-1.375-0.405-1.722-1h3.443C17.375,27.595,16.737,28,16,28z"/></svg>
        </a>
    </div>
</nav>

<aside id='aside' class="menuMobile">
    <ul>
        <li class='liClose menuItem'>
            <img class='menuMobile__logo' src=<?=SENAC_DIR_PATH_VIEW.'img/senac.png'?> alt='logo senac'/>
            <button id='closeBtn'>
                <svg viewBox="0 0 48 48" width="48px" height="48px"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"/></svg>
            </button>
        </li>

        <li class='menuMobile__definirPerfil menuItem' id='liDefinirPerfil'> <button id='admin'>Administrador</button>  <button id='user'>Usuário</button></li>

        <li class='menuItem' > 
            <a  id='inicioMobile' href=<?=SENAC_DIR_PATH_VIEW?>>
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="40px" height="20px"><path d="M 23.951172 4 A 1.50015 1.50015 0 0 0 23.072266 4.3222656 L 8.859375 15.519531 C 7.0554772 16.941163 6 19.113506 6 21.410156 L 6 40.5 C 6 41.863594 7.1364058 43 8.5 43 L 18.5 43 C 19.863594 43 21 41.863594 21 40.5 L 21 30.5 C 21 30.204955 21.204955 30 21.5 30 L 26.5 30 C 26.795045 30 27 30.204955 27 30.5 L 27 40.5 C 27 41.863594 28.136406 43 29.5 43 L 39.5 43 C 40.863594 43 42 41.863594 42 40.5 L 42 21.410156 C 42 19.113506 40.944523 16.941163 39.140625 15.519531 L 24.927734 4.3222656 A 1.50015 1.50015 0 0 0 23.951172 4 z M 24 7.4101562 L 37.285156 17.876953 C 38.369258 18.731322 39 20.030807 39 21.410156 L 39 40 L 30 40 L 30 30.5 C 30 28.585045 28.414955 27 26.5 27 L 21.5 27 C 19.585045 27 18 28.585045 18 30.5 L 18 40 L 9 40 L 9 21.410156 C 9 20.030807 9.6307412 18.731322 10.714844 17.876953 L 24 7.4101562 z"/></svg>
                Início
            </a>
        </li>
        <?php 
            if($current_page !='DefinirPerfil') : ?>
                <li class='menuItem'   onclick='handleMenu()'>
                    <a  id='perfilMobile' href=<?=SENAC_DIR_PATH_VIEW.'perfil'?> id='perfil' >
                        <svg fill="#000000" height="20px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.999 511.999" xml:space="preserve"> <path d="M448.071,60.408H63.928C28.677,60.408,0,89.087,0,124.336v263.327c0,35.251,28.677,63.928,63.928,63.928h384.143 c35.251,0,63.928-28.679,63.928-63.928V124.336C512,89.087,483.321,60.408,448.071,60.408z M34.724,124.336 c0-16.103,13.1-29.204,29.204-29.204h384.143c16.104,0,29.204,13.101,29.204,29.204v174.77l-67.564-53.476 c-5.319-4.21-12.601-4.935-18.647-1.861l-126.903,64.555l-132.924-98.268c-6.173-4.564-14.608-4.533-20.746,0.078l-75.767,56.896 V124.336z M460.34,329.987H298.163l98.726-50.221L460.34,329.987z M34.724,310.454l86.273-64.785l114.055,84.318H34.724V310.454z M477.276,387.663c0,16.104-13.101,29.205-29.205,29.205H63.928c-16.104,0-29.204-13.101-29.204-29.205V364.71 c0,0,442.013-0.032,442.552-0.082V387.663z"/> <path d="M318.272,123.618c-29.923,0-54.267,24.344-54.267,54.267s24.344,54.267,54.267,54.267s54.267-24.344,54.267-54.267 S348.194,123.618,318.272,123.618z M318.272,197.428c-10.776,0-19.543-8.767-19.543-19.543s8.767-19.543,19.543-19.543 s19.543,8.767,19.543,19.543S329.048,197.428,318.272,197.428z"/> </svg>
                        Perfil
                    </a>
                </li>

                <li class='menuItem' > 
                    <a href=<?=SENAC_DIR_PATH_VIEW.'painelAdm/?page=usuarios'?> id='admMobile'>
                        <svg width="40px" height="20px" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M14 20C17.3137 20 20 17.3137 20 14C20 10.6863 17.3137 8 14 8C10.6863 8 8 10.6863 8 14C8 17.3137 10.6863 20 14 20ZM18 14C18 16.2091 16.2091 18 14 18C11.7909 18 10 16.2091 10 14C10 11.7909 11.7909 10 14 10C16.2091 10 18 11.7909 18 14Z" fill-rule="evenodd"/><path clip-rule="evenodd" d="M0 12.9996V14.9996C0 16.5478 1.17261 17.822 2.67809 17.9826C2.80588 18.3459 2.95062 18.7011 3.11133 19.0473C2.12484 20.226 2.18536 21.984 3.29291 23.0916L4.70712 24.5058C5.78946 25.5881 7.49305 25.6706 8.67003 24.7531C9.1044 24.9688 9.55383 25.159 10.0163 25.3218C10.1769 26.8273 11.4511 28 12.9993 28H14.9993C16.5471 28 17.8211 26.8279 17.9821 25.3228C18.4024 25.175 18.8119 25.0046 19.2091 24.8129C20.3823 25.6664 22.0344 25.564 23.0926 24.5058L24.5068 23.0916C25.565 22.0334 25.6674 20.3813 24.814 19.2081C25.0054 18.8113 25.1757 18.4023 25.3234 17.9824C26.8282 17.8211 28 16.5472 28 14.9996V12.9996C28 11.452 26.8282 10.1782 25.3234 10.0169C25.1605 9.55375 24.9701 9.10374 24.7541 8.66883C25.6708 7.49189 25.5882 5.78888 24.5061 4.70681L23.0919 3.29259C21.9846 2.18531 20.2271 2.12455 19.0485 3.1103C18.7017 2.94935 18.3459 2.80441 17.982 2.67647C17.8207 1.17177 16.5468 0 14.9993 0H12.9993C11.4514 0 10.1773 1.17231 10.0164 2.6775C9.60779 2.8213 9.20936 2.98653 8.82251 3.17181C7.64444 2.12251 5.83764 2.16276 4.70782 3.29259L3.2936 4.7068C2.16377 5.83664 2.12352 7.64345 3.17285 8.82152C2.98737 9.20877 2.82199 9.60763 2.67809 10.0167C1.17261 10.1773 0 11.4515 0 12.9996ZM15.9993 3C15.9993 2.44772 15.5516 2 14.9993 2H12.9993C12.447 2 11.9993 2.44772 11.9993 3V3.38269C11.9993 3.85823 11.6626 4.26276 11.2059 4.39542C10.4966 4.60148 9.81974 4.88401 9.18495 5.23348C8.76836 5.46282 8.24425 5.41481 7.90799 5.07855L7.53624 4.70681C7.14572 4.31628 6.51256 4.31628 6.12203 4.7068L4.70782 6.12102C4.31729 6.51154 4.31729 7.14471 4.70782 7.53523L5.07958 7.90699C5.41584 8.24325 5.46385 8.76736 5.23451 9.18395C4.88485 9.8191 4.6022 10.4963 4.39611 11.2061C4.2635 11.6629 3.85894 11.9996 3.38334 11.9996H3C2.44772 11.9996 2 12.4474 2 12.9996V14.9996C2 15.5519 2.44772 15.9996 3 15.9996H3.38334C3.85894 15.9996 4.26349 16.3364 4.39611 16.7931C4.58954 17.4594 4.85042 18.0969 5.17085 18.6979C5.39202 19.1127 5.34095 19.6293 5.00855 19.9617L4.70712 20.2632C4.3166 20.6537 4.3166 21.2868 4.70712 21.6774L6.12134 23.0916C6.51186 23.4821 7.14503 23.4821 7.53555 23.0916L7.77887 22.8483C8.11899 22.5081 8.65055 22.4633 9.06879 22.7008C9.73695 23.0804 10.4531 23.3852 11.2059 23.6039C11.6626 23.7365 11.9993 24.1411 11.9993 24.6166V25C11.9993 25.5523 12.447 26 12.9993 26H14.9993C15.5516 26 15.9993 25.5523 15.9993 25V24.6174C15.9993 24.1418 16.3361 23.7372 16.7929 23.6046C17.5032 23.3985 18.1809 23.1157 18.8164 22.7658C19.233 22.5365 19.7571 22.5845 20.0934 22.9208L20.2642 23.0916C20.6547 23.4821 21.2879 23.4821 21.6784 23.0916L23.0926 21.6774C23.4831 21.2868 23.4831 20.6537 23.0926 20.2632L22.9218 20.0924C22.5855 19.7561 22.5375 19.232 22.7669 18.8154C23.1166 18.1802 23.3992 17.503 23.6053 16.7931C23.7379 16.3364 24.1425 15.9996 24.6181 15.9996H25C25.5523 15.9996 26 15.5519 26 14.9996V12.9996C26 12.4474 25.5523 11.9996 25 11.9996H24.6181C24.1425 11.9996 23.7379 11.6629 23.6053 11.2061C23.3866 10.4529 23.0817 9.73627 22.7019 9.06773C22.4643 8.64949 22.5092 8.11793 22.8493 7.77781L23.0919 7.53523C23.4824 7.14471 23.4824 6.51154 23.0919 6.12102L21.6777 4.7068C21.2872 4.31628 20.654 4.31628 20.2635 4.7068L19.9628 5.00748C19.6304 5.33988 19.1137 5.39096 18.6989 5.16979C18.0976 4.84915 17.4596 4.58815 16.7929 4.39467C16.3361 4.2621 15.9993 3.85752 15.9993 3.38187V3Z" fill-rule="evenodd"/></svg>
                        Painel administrativo
                    </a>
                </li>
                <?php endif;
        ?>
        <li> 
            <a href=<?=SENAC_DIR_PATH_VIEW.'login'?> id=''>
            <svg  height="20px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 489.9 489.9" xml:space="preserve">
                <path d="M468.3,255.8c0.1-0.1,0.1-0.1,0.2-0.2c0.3-0.4,0.6-0.7,0.8-1.1c0.1-0.1,0.1-0.2,0.2-0.3c0.2-0.4,0.5-0.8,0.7-1.2 c0-0.1,0.1-0.2,0.1-0.2c0.2-0.4,0.4-0.8,0.6-1.3c0-0.1,0-0.1,0.1-0.2c0.2-0.4,0.3-0.9,0.5-1.4c0-0.1,0-0.2,0.1-0.2 c0.1-0.5,0.3-0.9,0.3-1.4c0-0.2,0-0.3,0.1-0.5c0.1-0.4,0.1-0.8,0.2-1.2c0.1-0.6,0.1-1.1,0.1-1.7c0-0.6,0-1.1-0.1-1.7 c0-0.4-0.1-0.8-0.2-1.2c0-0.2,0-0.3-0.1-0.5c-0.1-0.5-0.2-0.9-0.3-1.4c0-0.1,0-0.2-0.1-0.2c-0.1-0.5-0.3-0.9-0.5-1.4 c0-0.1,0-0.1-0.1-0.2c-0.2-0.4-0.4-0.9-0.6-1.3c0-0.1-0.1-0.2-0.1-0.2c-0.2-0.4-0.4-0.8-0.7-1.2c-0.1-0.1-0.1-0.2-0.2-0.3  c-0.3-0.4-0.5-0.8-0.8-1.1c-0.1-0.1-0.1-0.1-0.2-0.2c-0.4-0.4-0.7-0.9-1.2-1.3l-98.9-98.8c-6.7-6.7-17.6-6.7-24.3,0 c-6.7,6.7-6.7,17.6,0,24.3l69.6,69.6H136.8c-9.5,0-17.2,7.7-17.2,17.1c0,9.5,7.7,17.2,17.2,17.2h276.8l-69.1,69.1  c-6.7,6.7-6.7,17.6,0,24.3c3.3,3.3,7.7,5,12.1,5s8.8-1.7,12.1-5l98.3-98.3C467.5,256.6,467.9,256.2,468.3,255.8z"/>
                <path d="M110.7,34.3h128c9.5,0,17.2-7.7,17.2-17.1c0-9.5-7.7-17.2-17.2-17.2h-128C59.4,0,17.6,41.8,17.6,93.1v303.7 c0,51.3,41.8,93.1,93.1,93.1h125.9c9.5,0,17.2-7.7,17.2-17.1c0-9.5-7.7-17.2-17.2-17.2H110.7c-32.4,0-58.8-26.4-58.8-58.8V93.1 C52,60.6,78.3,34.3,110.7,34.3z"/>
            </svg>
            Login
            </a> 
        </li>
        <li> 
            <a href=<?=SENAC_DIR_PATH_VIEW.'cadastro'?> id=''>
                <svg class="iconUSer" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" x2="20" y1="8" y2="14"/><line x1="23" x2="17" y1="11" y2="11"/></svg>
                Cadastro
            </a>
        </li>
    </ul>
    <button class='btnLogout'>
        <div>
            <div class="boxImg">
                <img src='../img/perfil.jpg' />
            </div>
                
            <div>
                <strong>Kristine Andrejeva</strong>
                <span>Clique para sair da conta</span>
            </div>
        </div>
        <svg fill="#6d6d6d;" height="80px" width="80px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 489.9 489.9" xml:space="preserve">
            <path d="M468.3,255.8c0.1-0.1,0.1-0.1,0.2-0.2c0.3-0.4,0.6-0.7,0.8-1.1c0.1-0.1,0.1-0.2,0.2-0.3c0.2-0.4,0.5-0.8,0.7-1.2 c0-0.1,0.1-0.2,0.1-0.2c0.2-0.4,0.4-0.8,0.6-1.3c0-0.1,0-0.1,0.1-0.2c0.2-0.4,0.3-0.9,0.5-1.4c0-0.1,0-0.2,0.1-0.2 c0.1-0.5,0.3-0.9,0.3-1.4c0-0.2,0-0.3,0.1-0.5c0.1-0.4,0.1-0.8,0.2-1.2c0.1-0.6,0.1-1.1,0.1-1.7c0-0.6,0-1.1-0.1-1.7 c0-0.4-0.1-0.8-0.2-1.2c0-0.2,0-0.3-0.1-0.5c-0.1-0.5-0.2-0.9-0.3-1.4c0-0.1,0-0.2-0.1-0.2c-0.1-0.5-0.3-0.9-0.5-1.4 c0-0.1,0-0.1-0.1-0.2c-0.2-0.4-0.4-0.9-0.6-1.3c0-0.1-0.1-0.2-0.1-0.2c-0.2-0.4-0.4-0.8-0.7-1.2c-0.1-0.1-0.1-0.2-0.2-0.3  c-0.3-0.4-0.5-0.8-0.8-1.1c-0.1-0.1-0.1-0.1-0.2-0.2c-0.4-0.4-0.7-0.9-1.2-1.3l-98.9-98.8c-6.7-6.7-17.6-6.7-24.3,0 c-6.7,6.7-6.7,17.6,0,24.3l69.6,69.6H136.8c-9.5,0-17.2,7.7-17.2,17.1c0,9.5,7.7,17.2,17.2,17.2h276.8l-69.1,69.1  c-6.7,6.7-6.7,17.6,0,24.3c3.3,3.3,7.7,5,12.1,5s8.8-1.7,12.1-5l98.3-98.3C467.5,256.6,467.9,256.2,468.3,255.8z"/>
            <path d="M110.7,34.3h128c9.5,0,17.2-7.7,17.2-17.1c0-9.5-7.7-17.2-17.2-17.2h-128C59.4,0,17.6,41.8,17.6,93.1v303.7 c0,51.3,41.8,93.1,93.1,93.1h125.9c9.5,0,17.2-7.7,17.2-17.1c0-9.5-7.7-17.2-17.2-17.2H110.7c-32.4,0-58.8-26.4-58.8-58.8V93.1 C52,60.6,78.3,34.3,110.7,34.3z"/>
        </svg>
    </button>
</aside>

<button id='bkgClose'></button>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var links = document.querySelectorAll('.menuItem');
        var adm = document.getElementById('adm');
        var notificacao = document.getElementById('notificacao');
        var perfil = document.getElementById('perfil');
        var inicioMobile = document.getElementById('inicioMobile');
        var admMobile = document.getElementById('admMobile');
        var perfilMobile = document.getElementById('perfilMobile');

        links.forEach(function (link) {
            var href = link.getAttribute('href');

            if (window.location.pathname.includes('painelAdm')) {
                adm.classList.add('active');
                admMobile.classList.add('active');
            } else if (window.location.pathname.includes('notificacao')) {
                notificacao.classList.add('active');
            } else if (window.location.pathname.includes('perfil')) {
                perfil.classList.add('active');
                perfilMobile.classList.add('active');
            }  else {
                inicioMobile.classList.add('active');
            }
        });

        const menu = document.getElementById("menu");
        const aside = document.getElementById("aside");
        const closeBtn = document.getElementById("closeBtn");
        const bkgClose = document.getElementById("bkgClose");
        console.log(menu, 'mrnu');
        menu.addEventListener("click", function (){
            aside.classList.toggle("active");
            bkgClose.classList.toggle("active");
        })
        closeBtn.addEventListener("click", function (){
            aside.classList.toggle("active");
            bkgClose.classList.toggle("active");
        })
        bkgClose.addEventListener("click", function (){
            aside.classList.toggle("active");
            bkgClose.classList.toggle("active");
        })

        const liDefinirPerfil = document.getElementById("liDefinirPerfil");
        const admin = document.getElementById("admin");
        const user = document.getElementById("user");

        user.addEventListener("click", function (){
            liDefinirPerfil.classList.add("user");
        });

        admin.addEventListener("click", function (){
            liDefinirPerfil.classList.remove("user");
        });
    });
</script>