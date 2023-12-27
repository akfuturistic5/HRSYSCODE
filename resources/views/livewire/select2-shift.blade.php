
<div class="col-sm-6 col-md-3">
    <div class="input-block mb-3 form-focus select-focus">
        <select wire:model="selectedOption1" class="select2 select floating">
            @foreach ($options1 as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}">{{ $optionLabel }}</option>
            @endforeach
        </select>
        <label class="focus-label">Department</label>
    </div>
</div>
