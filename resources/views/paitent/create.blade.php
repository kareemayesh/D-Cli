@extends('layouts.Master')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green-haze">
                        <i class=" font-green-haze fa fa-user-plus"></i>
                        <span class="caption-subject bold uppercase">Add Staff Member</span>
                    </div>
                    <div class="actions">

                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <label class="col-md-3 control-label" for="form_control_1">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="form_control_1" >
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>


                            <div class="form-group form-md-line-input">
                                <label class="col-md-3 control-label" for="form_control_1">Job Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="form_control_1" >
                                    <div class="form-control-focus"> </div>
                                </div>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <label class="col-md-3 control-label" for="form_control_1">sex</label>
                                    <div class="col-md-9">
                                        <div class="md-radio-list">
                                            <div class="md-radio">
                                                <input type="radio" id="radio50" name="radio211" class="md-radiobtn">
                                                <label for="radio50">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>male</label>
                                            </div>
                                            <div class="md-radio has-error">
                                                <input type="radio" id="radio51" name="radio211" class="md-radiobtn" checked="">
                                                <label for="radio51">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>female</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-3 control-label" for="form_control_1">phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="form_control_1" >
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>


                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <button type="button" class="btn default">Cancel</button>
                                    <button type="button" class="btn blue">save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection