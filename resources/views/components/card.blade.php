{{--<div {{ $attributes->merge(['class'=>'w-full border shadow-md rounded-md p-5 ', --}}

{{-- @props(['type'=>'info','bg']) 

--}}
@props(['type'=>'info',''])
<div {{ $attributes->class(['w-full border shadow-md rounded-md p-5', 'bg-white =>$bg']) }}>

	{{ $slot }}
	{{ $type }}
	{{ $attributes }}
	

	{{ $attributes->whereStartsWith('wire:model') }}
	{{ $attributes->whereDoesntStartWith('wire:model') }}


@if ($attributes->has(['bg', 'class']))
    <div>All of the attributes are present</div>
@endif
</div>