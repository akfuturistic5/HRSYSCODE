<?php $page = 'edit-estimate'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Edit Estimate
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Edit Estimate
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Client <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Please Select</option>
                                <option selected>Barry Cuda</option>
                                <option>Tressa Wexler</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Project <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select Project</option>
                                <option selected>Office Management</option>
                                <option>Project Management</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Email</label>
                            <input class="form-control" type="email" value="barrycuda@example.com">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Tax</label>
                            <select class="select">
                                <option>Select Tax</option>
                                <option>VAT</option>
                                <option selected>GST</option>
                                <option>No Tax</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Client Address</label>
                            <textarea class="form-control" rows="3">5754 Airport Rd, Coosada, AL, 36020</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Billing Address</label>
                            <textarea class="form-control" rows="3">5754 Airport Rd, Coosada, AL, 36020</textarea>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Estimate Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text" value="2019/05/20">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Expiry Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text" value="2019/05/27">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-white" id="editTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="col-sm-2">Item</th>
                                        <th class="col-md-6">Description</th>
                                        <th>Unit Cost</th>
                                        <th>Qty</th>
                                        <th>Amount</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="tbodyone">
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input class="form-control" type="text" value="Vehicle Module">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text"
                                                value="Create, edit delete functionlity">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" value="112">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" value="1">
                                        </td>
                                        <td>
                                            <input class="form-control" readonly type="text" value="112">
                                        </td>
                                        <td><a href="javascript:void(0)" class="text-success font-18" id="addEditProduct"
                                                title="Add"><i class="fa-solid fa-plus"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <input class="form-control" type="text" value="Vehicle Module">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text"
                                                value="Create, edit delete functionlity">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" value="112">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" value="1">
                                        </td>
                                        <td>
                                            <input class="form-control" readonly type="text" value="112">
                                        </td>
                                        <td><a href="javascript:void(0)" class="text-danger font-18 remove"
                                                title="Remove"><i class="fa-regular fa-trash-can"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-white">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-end">Total</td>
                                        <td class="text-end pe-4">112</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-end">Tax</td>
                                        <td class="text-end pe-4">
                                            <input class="form-control text-end" value="0" readonly type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-end">
                                            Discount %
                                        </td>
                                        <td class="text-end">
                                            <input class="form-control text-end" value="0" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-end">
                                            <b>Grand Total</b>
                                        </td>
                                        <td class="text-end tdata-width pe-4">
                                            <b>$ 112</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Other Information</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn m-r-10">Save & Send</button>
                    <button class="btn btn-primary submit-btn">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
