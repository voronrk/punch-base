<div class="field" id="products">

    <label class="label">Виды продукции</label>
    <div class="field-wrapper-small">
    @foreach($products as $product)
        <label class="checkbox"><input type="checkbox" id="{{$product->value}}">{{$product->value}}</label>
    @endforeach
    </div>
    <div class="field-view-more is-size-7 has-text-info">Показать еще</div>
</div>