<div class="col-sm-6 col-md-3">
    <div class="input-block mb-3 form-focus">
        @if (!Route::is(['payslip-reports']))
            @if ($reportType === 'attendance-reports')
                <div class="cal-icon">
            @endif
        @endif
        <select wire:model="selectedOption1" class="select2 floating select">
            @foreach ($options1 as $option)
                <option>{{ $option }}</option>
            @endforeach
        </select>
        <label class="focus-label">Month</label>
        @if (!Route::is(['payslip-reports']))
            @if ($reportType === 'attendance-reports')
    </div>
    @endif
    @endif
</div>
</div>


