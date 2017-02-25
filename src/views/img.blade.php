@if(!empty($item->image_path))
    <img src='{{ $item->image_path }}' alt="{{ $item->name }}">
@endif
