<!DOCTYPE html>
<html>
    
    @include('partials.head')

    <body id="master">
        <div class="row header">

            <!--
            <div class="img-header" data-image="/img/banner.png" data-width="1300" data-height="865"></div>
            <div class="img-header" data-image="/img/banner2.png" data-width="1697" data-height="1131"></div>
            <div class="img-header" data-image="/img/banner.jpg" data-width="2000" data-height="1000"></div>
            <div class="img-header" data-image="/img/banner2.jpg" data-width="2000" data-height="1000"></div>
            <div class="img-header" data-image="/img/banner3.jpg" data-width="3500" data-height="1555"></div>
            -->
            <div class="img-header" data-image="/img/banner4.jpg" data-width="2000" data-height="1000"></div>
            <div class="col-12">
 
                @include('partials.menu')
                
                <div class="motto">
                    <h1 class="center light dark-grey-text">Široká škála kvalitního zboží na jednom místě</h1>
                </div>

                @include('partials.filter')
                
            </div>
        </div>
        
        @yield('main')
        
        <div class="row almost-black-bg">
            @include('partials.footer')            
        </div>
    </body>
</html>
