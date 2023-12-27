<?php $page = 'clients'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Compose
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Compose
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="input-block mb-3">
                            <input type="email" placeholder="To" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <input type="email" placeholder="Cc" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <input type="email" placeholder="Bcc" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="input-block mb-3">
                            <input type="text" placeholder="Subject" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <div id="editor"></div>
                        </div>
                        <div class="input-block mb-0">
                            <div class="text-center">
                                <button class="btn btn-primary"><span>Send</span> <i class="fa-solid fa-paper-plane m-l-5"></i></button>
                                <button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i
                                        class="fa-regular fa-floppy-disk m-l-5"></i></button>
                                <button class="btn btn-success m-l-5" type="button"><span>Delete</span> <i
                                        class="fa-regular fa-trash-can m-l-5"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
