<?php

function Navbar()
{
 echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
        <a
                class="navbar-brand d-flex align-items-center"
                href="ConsultaCasas.php"
            >
            <span class="ms-2">
                    Sistema de Alquiler de Casas
                </span>
            </a>

             <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/WebCS_G6_CasoEstudio2/View/ConsultaCasas.php"
                            aria-current="page"
                        >
                            Consula de Casas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/WebCS_G6_CasoEstudio2/View/AlquilerCasas.php"
                        >
                            Alquiler de Casas
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

';
}




function ImportCSS()
{
    echo '
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
        >
    ';
}