@extends('layouts.page')

@section('main')

    <script type="text/javascript" src="/js/load_products.js"></script>
    <div class="row-90 white-bg">
        <div class="col-3">
            
            @include('partials.side-bar')

        </div>
        <div class="col-9">
            <?php if(!isset($_GET['pattern']) && !isset($_GET['section']) && !isset($_GET['min']) && !isset($_GET['max'])) : ?>
                <div class="col-12 area-8">
                    <img src="/img/logo.png" width="500" alt="">
                </div>
                <div class="col-6 area-4">
                    <p class="big justify dark-grey-text">
                        Na této stránce najdete nejširší škálu produktů z mnoha e-shopů, se kterými spolupracujeme.
                    </p>
                </div>
                <div class="col-6 area-4">
                    <p class="big justify dark-grey-text">
                        Využijte filterů a vyberte si zboží přesně podle Vašeho gusta!
                    </p>
                </div>
            <?php else : ?>
                <div class="col-12 area">
                        <h3 class="cetner">Nelezené produkty</h3>
                </div>
                <div class="col-12 area grey-bg">
                    <form>
                        Směr řazení&nbsp;
                        <select name="order" id="order">
                            <option value="price-asc">Nejlevnější</option>
                            <option value="price-desc">Nejdražší</option>
                            <option value="views-desc">Nejoblíbenější</option>
                        </select>
                    </form>
                </div>
                <div class="col-12 grid" id="product_feed"></div>
            <?php endif; ?>
        </div>
    </div>
@stop