<nav class="w-full p-3 text-white navbar navbar-expand-lg bg-gradient-r-low-high lg:min-h-vh10">
    <img src="{{ asset('/img/NewKuwait.svg') }}" alt="" class="hidden w-32 h-auto lg:inline" />
    <button class="order-2 navbar-toggler hidden-lg-up focus:outline-none focus:shadow-none" type="button" data-toggle="collapse"
        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <div class="order-2 collapse navbar-collapse" id="collapsibleNavId">
<ul class='mt-2 mr-auto flex-col navbar-nav mt-lg-0 d-lg-none text-right'>
<li class="nav-item active">
                <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Registration <span class="sr-only">(current)</span></a>
            </li>
 @php
        $Menu = App\Menu::where('id', '!=',"1")->orderBy('id')->pluck('id');
        $Menu_Count = $Menu->count();
        
        foreach($Menu as $Menus){
            $Menu_Item= App\MenuItem::where('menu_id','=',$Menus)->get();
             echo
                "
                 <li class='nav-item dropdown'>
                 <a class='nav-link dropdown-toggle py-2' href='#' id='dropdownId' data-toggle='dropdown' aria-haspopup='true'
                    aria-expanded='false'>";
                echo  App\Menu::where('id', '=',$Menus)->value('name');
                echo "</a><div class='dropdown-menu dropdown-menu-right text-right' aria-labelledby='dropdownId'>";
                foreach($Menu_Item as $Items){
                    echo"                    
                    <a class='dropdown-item' href='".App\Menu::where('id', '=',$Menus)->value('menu_caption')."$Items->url'>$Items->title</a>";
                }
                echo" </div>";
        }
        
    @endphp
    </ul>
        <form class="my-2 form-inline my-lg-0 lg:ml-10 justify-center md:justify-end cursor-pointer">
        <div class="input-group rounded-full overflow-hidden w-full flex-no-wrap">
            <input class="w-full focus:outline-none focus:shadow-none p-2 text-right text-dark" type="search" name="" placeholder="Search">
            <div class="input-group-append">
                <span class="input-group-text bg-white border-0 border-l-2" id="my-addon">
                <i class="fas fa-search    "></i>
                </span>
            </div>
        </div>
        </form>
    </div>
    <img src="{{ asset('/img/KCB.svg') }}" alt=""
        class="order-1 w-24 h-auto lg:w-40 xl:w-48 lg:order-3" />
</nav>