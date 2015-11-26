<!DOCTYPE html>
<html>
    <head>
        <title>Ebchod</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="/css/glob.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/jquery.imageScroll.min.js"></script>
        <script type="text/javascript" src="/js/jquery.masonry.min.js"></script>
        <script type="text/javascript" src="/js/images.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>

    </head>
    <body>
        <div class="row header grey-bg">
            <div class="col-12">
                <nav>
                    <a class="logo" href="/"><img src="/img/logo-60.png" alt="Logo"></a>
                    <a href="">Spolupráce</a>
                    <a href="">Články</a>
                    <a href="">Kategorie</a>
                    <a href="">Nejnovější zboží</a>
                </nav>
                <div id="search">
                    <input placeholder="Vyhledávání" type="text" />
                    <button><i class="fa fa-plus"></i></button>
                    <button class="orange"><i class="fa fa-search"></i></button>

                    <div class="settings"></div>
                    <div class="autocomplete"></div>

                    <p class="small italic light-grey-text">Oblíbené: Kočárky</p>
                </div>
            </div>
        </div>
        
        @yield('main')

        <div class="row almost-black-bg footer">
            <div class="col-12">
                <div class="area">
                    <p class="grey-text justify">                    
                    <p class="grey-text justify">                    
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque aperiam esse voluptatibus ab laudantium possimus rerum et aliquam eum minus animi delectus dolorem est expedita perspiciatis reprehenderit eos vel minima excepturi debitis aspernatur ipsa, molestias ratione! Placeat maiores dolor illo ipsa ex facilis, ut excepturi in nesciunt ratione, ipsam id quas, quia explicabo a fuga maxime enim. Eligendi nihil accusantium, sunt repellendus doloribus, corrupti quae cumque voluptatum neque excepturi optio dolore illum laboriosam quasi blanditiis officiis quo, voluptas enim veniam omnis sint libero at voluptatem. Eius quisquam, eum facilis enim molestias repellendus excepturi sed corrupti ipsa! Commodi quod, tempora accusantium.
                    </p>               
                </div>
            </div>
        </div>
    </body>
</html>
