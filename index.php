<?php

echo"<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>

        <link rel='stylesheet' href='assets/css/styles.css'>

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio | Maik</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class='l-header'>
            <nav class='nav bd-grid'>
                <div>
                    <a href='#' class='nav__logo'>Portfólio</a>
                </div>

                <div class='nav__menu' id='nav-menu'>
                    <ul class='nav__list'>
                        <li class='nav__item'><a href='#principal' class='nav__link active'>Principal</a></li>
                        <li class='nav__item'><a href='#sobre' class='nav__link'>Sobre</a></li>
                        <li class='nav__item'><a href='#skills' class='nav__link'>Skills</a></li>
                        <li class='nav__item'><a href='#comp' class='nav__link'>Habilidades e Competências</a></li>
                        <li class='nav__item'><a href='#contate' class='nav__link'>Contate-me</a></li>
                    </ul>
                </div>

                <div class='nav__toggle' id='nav-toggle'>
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class='l-main'>
            <!--===== PRINCIPAL =====-->
            <section class='home bd-grid' id='principal'>
                <div class='home__data'>
                    <h1 class='home__title'>Olá,<br>Eu sou <span class='home__title-color'>Maik</span><br> Programador Fullstack</h1>

                    <a href='#' class='button'>Contatos</a>
                </div>

                <div class='home__social'>
                    <a href='https://www.linkedin.com/in/jos%C3%A9-maik-freitas-dos-santos-6679641a6/' class='home__social-icon'><i class='bx bxl-linkedin'></i></a>
                    <a href='https://gitlab.com/maikemir2003' class='home__social-icon'><i class='bx bxl-gitlab' ></i></a>
                    <a href='https://github.com/maik001' class='home__social-icon'><i class='bx bxl-github' ></i></a>
                </div>

                <div class='home__img'>    
                    <img src='assets/img/maik.svg' alt='Maik'>
                </div>
            </section>

            <!--===== SOBRE =====-->
            <section class='about section ' id='sobre'>
                <h2 class='section-title'>Sobre</h2>

                <div class='about__container bd-grid'>
                    <div class='about__img'>
                        <img src='assets/img/icone-maik.svg' alt=''>
                    </div>
                    
                    <div>
                        <h2 class='about__subtitle'>Sou Maik</h2>
                        <p class='about__text'>Um amante das Tecnologias da Informação, especialmente Programação e Aspirante à desenvolvedor Fullstack Júnior. Tenho 17 anos, curso o 3° ano do técnico na área de Informática. Pretendo cursar Análise e Desenvolvimento de Sistemas na Faculdade. Sou uma pessoal boa para se trabalhar, bastante lógico, prudente e ético, sei ouvir críticas e consigo me autocorrigir quando preciso.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class='skills section' id='skills'>
                <h2 class='section-title'>Skills</h2>

                <div class='skills__container bd-grid'>          
                    <div>
                        <h2 class='skills__subtitle'>Skills Profissionais</h2>
                        <p class='skills__text'>Aqui estão algumas das Skills técnicas que eu aprendi e desenvolvi durante o decorder do curso de Técnico em Informática no Paulo Petrola e também de forma independente, através de Cursos e Bootcamps.</p>
                        <div class='skills__data'>
                            <div class='skills__names'>
                                <i class='bx bxs-window-alt skills__icon'></i>
                                <span class='skills__name'>Frontend</span>
                            </div>
                            <div class='skills__bar skills__front'>

                            </div>
                            <div>
                                <span class='skills__percentage'>40%</span>
                            </div>
                        </div>
                        <div class='skills__data'>
                            <div class='skills__names'>
                                <i class='bx bx-code-block skills__icon'></i>
                                <span class='skills__name'>Backend</span>
                            </div>
                            <div class='skills__bar skills__back'>
                                
                            </div>
                            <div>
                                <span class='skills__percentage'>60%</span>
                            </div>
                        </div>
                        <div class='skills__data'>
                            <div class='skills__names'>
                                <i class='bx bx-desktop skills__icon' ></i>
                                <span class='skills__name'>Desenvolvimento Desktop</span>
                            </div>
                            <div class='skills__bar skills__desk'>
                                
                            </div>
                            <div>
                                <span class='skills__percentage'>40%</span>
                            </div>
                        </div>
                        <div class='skills__data'>
                            <div class='skills__names'>
                                <i class='bx bxs-detail skills__icon'></i>
                                <span class='skills__name'>Desenvolvimento Web</span>
                            </div>
                            <div class='skills__bar skills__web'>
                                
                            </div>
                            <div>
                                <span class='skills__percentage'>50%</span>
                            </div>
                        </div>
                        <div class='skills__data'>
                            <div class='skills__names'>
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class='skills__name'>Design</span>
                            </div>
                            <div class='skills__bar skills__design'>
                            </div>
                            <div>
                                <span class='skills__percentage'>35%</span>
                            </div>
                        </div> 
                </div>
                    
                    <div>              
                        <img src='assets/img/skills.jpg' alt='' class='skills__img'>
                    </div>
                </div>
            </section>

            <!--===== HABILIDADES E COMPETÊNCIAS =====-->
            <section class='work section' id='comp'>
                <h2 class='section-title'>Habilidades e Competências</h2>
                <div class='work__container'>
                <h2 class='about__subtitle'>Com Certificações</h2>
                <div class='work__container bd-grid'>
                    <div class='work__img'>
                        <img src='assets/img/estrutura-1.png' alt='certificado'>
                    </div>
                    <div class='work__img'>
                        <img src='assets/img/logica-1.png' alt='certificado'>
                    </div>
                    <div class='work__img'>
                        <img src='assets/img/arquitetura-1.png' alt='certificado'>
                    </div>
                    <div class='work__img'>
                        <img src='assets/img/html-1.png' alt='certificado'>
                    </div>
                    <div class='work__img'>
                        <img src='assets/img/javascript-1.png' alt='certificado'>
                    </div>
                    <div class='work__img'>
                        <img src='assets/img/git-1.png' alt='certificado'>
                    </div>
                    <div class='work__img'>
                        <img src='assets/img/scrum-1.png' alt='certificado'>
                    </div>
                    <div class='work__img'>
                        <img src='assets/img/bootstrap-1.png' alt='certificado'>
                    </div>
                    <div class='work__img'>
                        <img src='assets/img/dotnet-1.png' alt='certificado'>
                    </div>
                </div>
                <h2 class='about__subtitle'>Sem Certificados </h2>
                <p class='about__text'>-Criação de Aplicações Web com arquitetura MVC através do paradigma Orientado à Objetos utilizando PHP, HTML, CSS, Js e Banco de dados SQL</p>
                <p class='about__text'>-Criação de Aplicações Desktop em Python usando GTK+ e Glade</p>
                <p class='about__text'>-Criação de Aplicações Desktop Qt5 usando tanto a biblioteca PyQt quanto o Qt comum em C++</p>
                <p class='about__text'>-Conhecimentos no Framework Backend Laravel e nos Frameworks frontend Foundation e Boostrap.</p>
                <p class='about__text'>-Criação de Aplicações Web com Java web,: JSP,Servlets, JSTL e Conexão com Banco de dados SQL.</p>
                <p class='about__text'>-Inglês Técnico e Espanhol básico</p>
                </div>
            </section>

            <!--===== CONTATE-ME =====-->
            <section class='contact section' id='contate'>
                <h2 class='section-title'>Contate-me</h2>

                <div class='contact__container bd-grid'>
                    <form action='' class='contact__form' method='POST' action='email.php'>
                        <input type='text' name='nome' placeholder='Nome' class='contact__input'>
                        <input type='mail' name='email' placeholder='Email' class='contact__input'>
                        <textarea name='mensagem' id='' cols='0' rows='10' class='contact__input'></textarea>
                        <input type='button' value='Enviar' class='contact__button button'>
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class='footer'>
            <p class='footer__title'>Maik</p>
            <div class='footer__social'>
                <a href='#' class='footer__icon'><i class='bx bxl-facebook' ></i></a>
                <a href='#' class='footer__icon'><i class='bx bxl-instagram' ></i></a>
                <a href='#' class='footer__icon'><i class='bx bxl-telegram' ></i></a>
            </div>
            <p>&#169; 2020 Todos os direitos reservados</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src='https://unpkg.com/scrollreveal'></script>

        <!--===== MAIN JS =====-->
        <script src='assets/js/main.js'></script>
    </body>
</html>
"
?>