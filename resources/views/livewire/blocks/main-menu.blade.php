<section
    class="flex-col items-end justify-start hidden min-h-full text-right divide-y-2 divide-y divide-white lg:w-vw20 xl:w-vw15 lg:flex">
    @php
        $Menu = App\Menu::where('id', '!=',"1")->orderBy('id')->pluck('id');
        $Menu_Count = $Menu->count();
        
        foreach($Menu as $Menus){
            $Menu_Item= App\MenuItem::where('menu_id','=',$Menus)->get();
             echo
                "<div class='relative w-full cursor-pointer Menu__Container hover:bg-brand hover:text-dark' text-sm xl:text-base>
                <div class='p-2 Menu__Title '>";
                echo  App\Menu::where('id', '=',$Menus)->value('name');
                echo "</div>
                <div class='absolute top-0 duration-500 bg-opacity-50 Menu__Content bg-brand flex-col items-end'>
                ";
                foreach($Menu_Item as $Items)
                    echo"<a class='w-full p-2 text-decoration-none text-white' href='".App\Menu::where('id', '=',$Menus)->value('menu_caption')."$Items->url'>$Items->title</a>";
                echo"</div></div>";
        }
    @endphp
</section>
