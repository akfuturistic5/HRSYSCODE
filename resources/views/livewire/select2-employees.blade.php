<div class="col-sm-6 col-md-3">
    <div class="input-block mb-3 form-focus select-focus">
        <select wire:model="selectedOption1" class="select2 floating select">
            @foreach ($options1 as $option)
                <option>{{ $option }}</option>
            @endforeach
        </select>
        @if ($project === 'project-list' && $type === 'role'   )
        <label class="focus-label">Role</label>
    @elseif ($project === 'employees'  && $type === 'designation'  ||  $project = 'employees-list' && $type === 'designation' ||$project === 'projects' && $type === 'role' )
        <label class="focus-label">Designation</label>
    @endif

    </div>
</div>

