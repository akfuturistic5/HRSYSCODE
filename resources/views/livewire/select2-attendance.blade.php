<div class="col-sm-3">
    <div class="input-block mb-3 form-focus select-focus">
        <select wire:model="selectedOption1" class="select2 floating select">
            @foreach ($options1 as $option)
                <option>{{ $option }}</option>
            @endforeach
        </select>
        <label class="focus-label">Select Month</label>
    </div>
</div>

