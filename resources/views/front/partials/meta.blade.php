<p>{{trans('app.tag')}}
    @forelse($product->tags as $tag)
        <small>{{$tag->name}}</small>
    @empty
        <small>{{trans('app.noTag')}}</small>
    @endforelse
</p>

@if($cat=$product->category)
    <p>{{trans('app.category')}}{{$cat->title}}</p>
@else
    <p>{{trans('app.noCategory')}}</p>
@endif

<p>{{trans('app.dateCreate')}} {{$product->published_at->format('d/m/Y H:i:s')}}</p>