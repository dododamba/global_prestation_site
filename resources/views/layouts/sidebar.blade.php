<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li class="menu-title"><span class="mg-t-30 mg-b-25" style="border-top: 1px solid rgb(52, 58, 77);"></span></li>

                <li>
                    <a href="index" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-laptop"></i>
                        <span>Elements graphiques</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ url('messagebienvenu') }}" > Mot du CEO</a>
                        </li>
                        <li>
                            <a href="{{ url('apropos') }}" > A Propos</a>
                        </li>

                        <li>
                            <a href="{{ url('partenaire') }}" >Partenaires</a>
                        </li>


                     </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-globe"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ url('articles') }}" >Articles</a>
                        </li>
                        <li>
                            <a href="{{ url('categories') }}" >Categories</a>
                        </li>

                        <li>
                            <a href="{{ url('icons') }}" >Annonces</a>
                        </li>
                     </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-shopping-bag"></i>
                        <span>Service et Produits</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ url('service') }}" >Service</a>
                        </li>
                        <li>
                            <a href="{{ url('produit') }}" >Produit</a>
                        </li>


                     </ul>
                </li>


                <li>
                    <a href="{{ url('messagecontact') }}" class="waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span>Messages des visiteurs</span>
                    </a>

                </li>


                <li class="menu-title"><span class="mg-t-30 mg-b-25" style="border-top: 1px solid rgb(52, 58, 77);"></span></li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-plus"></i>
                        <span>Utilisations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ url('user') }}" >Utilisateurs</a>
                        </li>
                        <li>
                            <a href="{{ url('role') }}" >Roles</a>
                        </li>

                        <li>
                            <a href="{{ url('logs') }}" >Historiques</a>
                        </li>

                     </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-power-off"></i>
                        <span>Se deconnecter</span>
                    </a>

                </li>




            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
