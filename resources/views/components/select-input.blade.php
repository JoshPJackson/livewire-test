<select {{ $attributes->merge(['class' => 'bg-white rounded-full border hover:border-purple hover:cursor-pointer appearance-none px-4 focus:outline-none']) }}>
    @foreach ($options as $value => $label)
        <option value="{{ $useLabelOnly ? $label : $value }}">{{ $label }}</option>
    @endforeach
 </select>
