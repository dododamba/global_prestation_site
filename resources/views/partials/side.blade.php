
<aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./"><img src="{{ asset('front') }}/assets/img/logo.png" alt="TMP" style="width: 100px;height: 100px;" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Tableau de bord</a>
                        </li>
                        <h3 class="menu-title">Elements graphiques</h3><!-- /.menu-title -->
                        <li>
                            <a href="{{ url('messagebienvenu') }}" > Mot du CEO</a>
                        </li>
                        <li>
                            <a href="{{ url('apropos') }}" > A Propos</a>
                        </li>

                        <li>
                            <a href="{{ url('icons') }}" > Icones résaux </a>
                        </li>

                        <li>
                            <a href="{{ url('citations') }}" > Citations</a>
                        </li>


                        <li class="menu-item-has-children active dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon"></i>Coordonnés</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon"></i><a href="{{ url('coordonee') }}">Géo Localisation</a></li>
                                <li><i class="menu-icon"></i><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </li>


                        <h3 class="menu-title">Gallerie</h3><!-- /.menu-title -->
                        <li>
                            <a href="{{ url('gallery') }}" > <i class="menu-icon"></i>Photo</a>
                        </li>
                        <li>
                            <a href="{{ url('carousel') }}" > <i class="menu-icon"></i>Slider</a>
                        </li>

                        <li>
                            <a href="{{ url('logos') }}" > <i class="menu-icon"></i>Logo </a>
                        </li>



                        <h3 class="menu-title">Service et Produits</h3><!-- /.menu-title -->
                        <li>
                            <a href="{{ url('service') }}" > <i class="menu-icon"></i>Service</a>
                        </li>
                        <li>
                            <a href="{{ url('produit') }}" > <i class="menu-icon"></i>Produit</a>
                        </li>

                        <li>
                            <a href="{{ url('technologie') }}" > <i class="menu-icon"></i>Technologies</a>
                        </li>

                        <h3 class="menu-title">Utilisation </h3><!-- /.menu-title -->
                        <li>
                            <a href="{{ url('user') }}" > <i class="menu-icon"></i>Utilisateurs</a>
                        </li>
                        <li>
                            <a href="{{ url('role') }}" > <i class="menu-icon"></i>Roles</a>
                        </li>

                        <li>
                            <a href="{{ url('logs') }}" > <i class="menu-icon"></i>Historiques</a>
                        </li>


                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>
