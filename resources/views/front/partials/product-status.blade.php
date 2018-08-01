@if($status === 0)
    нет в наличии
@elseif($status === 1)
    в наличии
@elseif($status === 2)
    ожидание
@endif