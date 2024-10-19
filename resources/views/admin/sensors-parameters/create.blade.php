<x-portal::input.select name="sensors_id" label="Sensor" horizontal>
    <option value="">Select Sensor</option>
    @foreach ($sensors as $r)
        <option value="{{ $r->id }}">{{ $r->name }}</option>
    @endforeach
</x-portal::input.select>
<x-portal::input type="text" name="name" label="Name" placeholder="Name"
    horizontal>{{ old('name') }}</x-portal::input>
<x-portal::input type="text" name="parameter" label="Parameter" placeholder="Parameter"
    horizontal>{{ old('parameter') }}</x-portal::input>
<x-portal::input type="text" name="unit" label="Unit" placeholder="Unit" horizontal
    required="false">{{ old('unit') }}</x-portal::input>
<x-portal::input.select.asset />
