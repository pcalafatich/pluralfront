<!-- HEADER PARTIAL -->

<!-- HEADER  -->
<div class="header__area header__sticky">
    <div class="container custom__container">
        <div class="header__area-menubar">
            <!-- HEADER IZQUIERDO -->
            <div class="header__area-menubar-left">
                <div class="header__area-menubar-left-logo">
                    <a href="index.html">
                        <img class="dark-n" src="assets/img/logo-1.png" alt="">
                        <img class="light-n" src="assets/img/logo-2.png" alt="">
                    </a>
                </div>
            </div>
            <!-- FIN HEADER IZQUIERDO -->

            <!-- HEADER CENTRO -->
            <div class="header__area-menubar-center">
                <div class="header__area-menubar-center-menu menu-responsive">
                    <ul id="mobilemenu">
                        <li> <a href="{{ route('pages.index') }}">Inicio</a></li>
                        <li><a href="{{ route('pages.about') }}">Quienes Somos</a></li>
                        <li class="menu-item-has-children"><a href="#">Información</a>
                            <ul class="sub-menu">
                                <!-- <li class="menu-item-has-children"><a href="#">Servicios</a>
                                    <ul class="sub-menu">
                                        <li><a href="services.html">Services 01</a></li>
                                        <li><a href="services-two.html">Services 02</a></li>
                                        <li><a href="services-right-sidebar.html">Single Right Sidebar</a></li>
                                        <li><a href="services-left-sidebar.html">Single Left Sidebar</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="pricing.html">Planes</a></li>
                                <li><a href="faq.html">Preguntas y Respuestas</a></li>
                                <li><a href="testimonial.html">Testimonios</a></li>
                                <!-- <li class="menu-item-has-children"><a href="#">Equipo</a>
                                    <ul class="sub-menu">
                                        <li><a href="team-filter.html">Team Filter</a></li>
                                        <li><a href="team.html">Team 01</a></li>
                                        <li><a href="team-two.html">Team 02</a></li>
                                        <li><a href="team-three.html">Team 03</a></li>
                                        <li><a href="team-single.html">Team Single</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a href="request-quote.html">Contacto</a></li>
                                <li><a href="404-error.html">Error 404</a></li> -->
                            </ul>
                        </li>
                        <!-- <li class="menu-item-has-children"><a href="#">Proyectos</a>
                            <ul class="sub-menu">
                                <li><a href="project-filter.html">Filtro Proyectos</a></li>
                                <li class="menu-item-has-children"><a href="#">Project Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="project-two.html">2 Columnas</a></li>
                                        <li><a href="project-three.html">3 Columnas</a></li>
                                        <li><a href="project-four.html">4 Columnas</a></li>
                                    </ul>
                                </li>
                                <li><a href="project-single.html">Proyecto</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children"><a href="#">Grilla Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid-two.html">2 Columnas</a></li>
                                        <li><a href="blog-grid-three.html">3 Columnas</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Blog Standard</a>
                                    <ul class="sub-menu">
                                        <li><a href="standard-left-sidebar.html">Left SideBar</a></li>
                                        <li><a href="standard-full-width.html">Full Width</a></li>
                                        <li><a href="standard-right-sidebar.html">Right SideBar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Blog Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="single-left-sidebar.html">Left SideBar</a></li>
                                        <li><a href="single-full-width.html">Full Width</a></li>
                                        <li><a href="single-right-sidebar.html">Right SideBar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        <li ><a href=" {{ route('pages.contact') }}">Contacto</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="contact.html">Contact Style 01</a></li>
                                <li><a href="contact-two.html">Contact Style 02</a></li>
                                <li><a href="contact-three.html">Contact Style 03</a></li>
                                <li><a href="contact-four.html">Contact Style 04</a></li>
                            </ul> -->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- FIN HEADER CENTRO -->

            <!-- HEADER DERECHO	-->
            <div class="header__area-menubar-right">
                <div class="header__area-menubar-right-box">
                    <div class="header__area-menubar-right-box-search">
                        <div class="search">
                            <span class="header__area-menubar-right-box-search-icon open"><i class="fal fa-search"></i></span>
                        </div>
                        <div class="header__area-menubar-right-box-search-box">
                            <form>
                                <input type="search" placeholder="Buscar aquí.....">
                                <button type="submit"><i class="fal fa-search"></i>
                                </button>
                            </form> <span class="header__area-menubar-right-box-search-box-icon"><i class="fal fa-times"></i></span>
                        </div>
                    </div>
                    <div class="header__area-menubar-right-sidebar">
                        <div class="header__area-menubar-right-sidebar-popup-icon"><img src="assets/img/icon/menu.png" alt=""></div>
                    </div>
                    <div class="header__area-menubar-right-box-btn">
                        <a class="btn-one" href="">Solicite Asesor<i class="far fa-chevron-double-right"></i></a>
                    </div>
                    <!-- BARRA LATERAL DERECHA -->
                    <div class="header__area-menubar-right-sidebar-popup">
                        <div class="sidebar-close-btn"><i class="fal fa-times"></i></div>
                        <div class="header__area-menubar-right-sidebar-popup-logo">
                            <a href="index.html"> <img src="assets/img/logo-2.png" alt=""> </a>
                        </div>
                        <p>Nuestra tarjeta de descuentos beneficia tanto a Usuarios como a Comercios Adheridos, los Usuarios obtienen descuentos efectivos en sus compras y los Comercios obtienen mayor flujo de ventas, fidelización de clientes y Promoción de su Marca.</p>
                        <div class="header__area-menubar-right-box-sidebar-popup-contact">
                            <h4 class="mb-30">Contáctenos</h4>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-phone-alt icon-animation"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Llame YA</span>
                                    <h6><a href="tel:+549 223 5868910">+549 223 5868910 </a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Quick Email</span>
                                    <h6><a href="mailto:info@pluraldescuentos.com.ar">info@pluraldescuentos.com.ar</a></h6>
                                </div>
                            </div>
                            <div class="header__area-menubar-right-box-sidebar-popup-contact-item">
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="header__area-menubar-right-box-sidebar-popup-contact-item-content">
                                    <span>Sede central</span>
                                    <h6><a href="#">Brown 3185 Piso 1 Of 3 Mar del Plata (7600) </a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="header__area-menubar-right-box-sidebar-popup-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-overlay"></div>
                    <!-- FIN BARRA LATERAL DERECHA -->
                </div>
                <div class="responsive-menu"></div>
            </div>
            <!-- FIN HEADER DERECHO	-->
        </div>
    </div>
</div>
<!-- FIN HEADER -->
