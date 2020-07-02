<footer class="text-white bg-gradient-r-low-high">
    <section class="w-full h-auto">
        <div class="flex flex-wrap flex-row-reverse items-start justify-start w-full text-xs lg:text-sm lg:justify-center">
                @php
                $Menu = App\Menu::where('id', '!=',"1")->orderBy('id')->pluck('id');
                $Menu_Count = $Menu->count();
                foreach($Menu as $Menus){
                $Menu_Item= App\MenuItem::where('menu_id','=',$Menus)->get();
                echo
                " <ul class='m-3 text-right'>
                <li class='text-brand font-semibold mb-2'>";
                echo  App\Menu::where('id', '=',$Menus)->value('name');
                echo "</li>";
                foreach($Menu_Item as $Items)
                echo"<li class='my-2'><a class='hover:text-brand text-decoration-none' href='".App\Menu::where('id', '=',$Menus)->value('menu_caption')."$Items->url'>$Items->title</a></li>";
                echo"</ul>";
                }
                @endphp
        </div>
        <div class="py-2 text-center lg:text-sm">
            {{ now()->year }} جميع الحقوق محفوظة 
        </div>
    </section>
</footer>
