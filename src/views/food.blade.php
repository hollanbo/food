<div class="col-xs-12">
    <div>
        <div class="inline-block hollanbo-food-img">
            @include('hollanbo_food::img', ['item' => $item])
        </div>
        <div class="inline-block va-top">
            <div class="hollanbo-food-title">
                {{ $item->name }}
            </div>
            <div class="hollanbo-food-ingredients">
                {{ $item->ingredient_list }}
            </div>
        </div>
    </div>
</div>
