<div class="mt-5 text-center row">
    <p>{{__('login.qtion_account')}} <a href="{{url('register')}}" class="font-weight-medium text-primary"> {{__('login.signUp')}} </a> </p>
    <p>© <script>document.write(new Date().getFullYear())</script> {{__('login.dot_wilko')}} <i class="mdi mdi-heart text-danger"></i> {{__('by VMG')}},</p>
    <div class="dropdown show ml-4">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{__('Language')}}
        </a>
      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a href="lang/en" class="dropdown-item"><span class="mr-2 flag-icon flag-icon-us"></span>English</a></li>
            <li><a href="lang/fr" class="dropdown-item"> <span class="mr-2  flag-icon flag-icon-fr"></span>Français</a></li>
            <li><a href="lang/es" class="dropdown-item"> <span class="mr-2  flag-icon flag-icon-es"></span>Espanol</a></li>
            <li><a href="lang/ly" class="dropdown-item"> <span class="mr-2  flag-icon flag-icon-sa"></span>عربي</a></li>
        </div>
      </div>
</div>