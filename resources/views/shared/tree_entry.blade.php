<ul class="list-group__nested level-{{$level}}">
    @foreach ($entries as $item)
        <li class="list-group-item open">
        	<div class="title {{ $item['is_active'] == '0' ? ' text-muted' : '' }}" data-id="{{ $item['id'] }}">
                <span>
            		@if(isset($item['children']) && count($item['children']) > 0 )
    		        	<span class="icon-group">
    		        		<i class="fas fa-minus"></i>
    		        	</span>
    		        @endif
    		    	<span class="editable" data-name="{{ $item['name'] }}">{{ $item['name'] }}</span>
                </span>
                <span>
                    @php $ddd = $regions->filter(function($region) use($item) {
                        return $region->id == $item['region_id'];
                    })->first(); echo (isset($ddd->name) ? $ddd->name : __('No Region') ) ; @endphp

                </span>
            </div>
        @if(isset($item['children']) && count($item['children']) > 0 )
            @include ('shared.tree_entry', ['entries' => $item['children'], 'level' => $level+1])
        @endif
        </li>
    @endforeach
</ul>