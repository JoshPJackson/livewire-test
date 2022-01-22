<select {{ $attributes->merge(['class' => 'bg-white rounded-full border hover:border-purple hover:cursor-pointer appearance-none px-4']) }}>
    @foreach ($options as $value => $label)
    <option value="{{ $value }}">{{ $label }}</option>
    @endforeach
 </select>
