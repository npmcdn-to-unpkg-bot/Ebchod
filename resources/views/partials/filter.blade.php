<div class="filter">
    <div class="area">
        <p class="big bold dark-grey-text">Cena</p>
        <div data-min="{{ $priceRange[0]->first()->price }}" data-max="{{ $priceRange[1]->first()->price }}" class="price-range">
            <div class="min">
                <p class="small italic"></p>
            </div>
            <div class="max">
                <p class="small italic"></p>
            </div>
        </div>
    </div>
    <hr />
    <div class="area">
        <p class="big bold dark-grey-text">Kategorie</p>
        <div class="section-container" data-value="">
            <p class="bold"><span class="value">Vyberte kategorii</span><span style="float: right"><i class="fa fa-times delete"></i></span></p>
            <ul class="sections">
                <?= Helper::sectionTree($sections) ?>
            </ul>            
        </div>
    </div>
</div>  