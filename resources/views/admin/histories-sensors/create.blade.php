<x-portal::input.select name="sensors_parameters_id" label="Sensors Parameters" horizontal>
    <option value="">Select Sensors Parameters</option>
</x-portal::input.select>
<x-portal::input type="number" name="value" label="Value" placeholder="Value" horizontal>{{old('value')}}</x-portal::input>
<x-portal::input.select.asset />