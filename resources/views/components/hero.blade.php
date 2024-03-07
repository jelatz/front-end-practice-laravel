<div {{$attributes->merge(['class' => 'relative z-0 h-hero'])}}>
    <div class="absolute bg-black opacity-50 left-0 w-full h-full z-0"></div>
    {{$slot}}
</div>