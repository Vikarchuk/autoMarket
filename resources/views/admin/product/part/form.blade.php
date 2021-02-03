@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ old('name') ?? $product->name ?? '' }}" class="form-control" placeholder="Name">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Brand:</strong>
            <input type="text" name="brand_id" value="{{ old('brand_id') ?? $product->brand_id ?? '' }}" class="form-control" placeholder="Brand">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category:</strong>
            <select name="category_id" class="form-control" title="Category">
                {{--                        <option value="{{$items[$product->category_id]}}">{{$product->category_id}}</option>--}}
                @foreach ($items as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price:</strong>
            <input type="text" class="form-control" name="price" placeholder="price"
                   required maxlength="100" value="{{ old('price') ?? $product->price ?? ''}}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product photos (can attach more than one):</strong>
            <input name="images[]" type="file" multiple="multiple">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        @isset($product->images)
            <strong>Delete image:</strong>
            <div class="form-group form-check">
                @foreach($product->images as $image)
                    <label class="form-check-label" for="remove">
                        <input type="checkbox" class="form-check-input"  name="remove[]" value="{{$image->id}}">
                        <img src="{{ asset('/storage/images/products/'.$image->body) }}" alt="" class="img-fluid">
                    </label>
                @endforeach
            </div>
        @endisset
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
