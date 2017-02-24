<div class="col-xs-12">
    <div>
        <div class="inline-block">
            {{ $item['photo'] }}
        </div>
        <div class="inline-block">

            <div>
                {{ $item['name'] }}
            </div>
            <div>
                @foreach($item['ingredients'] as $ingredient)
                    {{ $ingredient }}
                @endforeach
            </div>
        </div>
    </div>
</div>
