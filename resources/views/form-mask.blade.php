<?php $page = 'form-mask'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Form Mask
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Form Mask
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0">Form Mask</h4>
                    <p class="card-text">Input masks can be used to force the user to enter data conform a specific format.
                        Unlike validation, the user can't enter any other key than the ones specified by the mask.</p>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Phone</label>
                            <input type="text" id="phone" class="form-control">
                            <span class="form-text text-muted">(999) 999-9999</span>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Date</label>
                            <input type="text" id="date" class="form-control">
                            <span class="form-text text-muted">dd/mm/yyyy</span>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">SSN field 1</label>
                            <input type="text" id="ssn" class="form-control">
                            <span class="form-text text-muted">e.g "999-99-9999"</span>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Phone field + ext.</label>
                            <input type="text" id="phoneExt" class="form-control">
                            <span class="form-text text-muted">+40 999 999 999</span>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Product Key</label>
                            <input type="text" id="product" class="form-control">
                            <span class="form-text text-muted">e.g a*-999-a999</span>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Currency</label>
                            <input type="text" id="currency" class="form-control">
                            <span class="form-text text-muted">$ 999,999,999.99</span>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Eye Script</label>
                            <input type="text" id="eyescript" class="form-control">
                            <span class="form-text text-muted">~9.99 ~9.99 999</span>
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Percent</label>
                            <input type="text" id="pct" class="form-control">
                            <span class="form-text text-muted">e.g "99%"</span>
                        </div>
                        <div class="input-block mb-0">
                            <label class="col-form-label">Credit Card Number</label>
                            <input type="text" class="form-control" id="ccn">
                            <span class="form-text text-muted">e.g "999.999.999.9999"</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
