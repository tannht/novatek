@extends('layouts.master')
@section('title') Form Validation @endsection
@section('content')
@component('components.breadcrumb')
    @slot('title') Form Validation @endslot
    @slot('li_1') Forms @endslot
    @slot('li_2') Form Validation @endslot
@endcomponent

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bootstrap Validation - Normal</h4>
                <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="validationCustom01">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="validationCustom02">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="validationCustom03">City</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="validationCustom04">State</label>
                                <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="validationCustom05">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                    <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bootstrap Validation (Tooltips)</h4>
                <p class="card-title-desc">If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group position-relative">
                                <label for="validationTooltip01">First name</label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group position-relative">
                                <label for="validationTooltip02">Last name</label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group position-relative">
                                <label for="validationTooltipUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label for="validationTooltip03">City</label>
                                <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid city.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label for="validationTooltip04">State</label>
                                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid state.
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Validation type</h4>
                <p class="card-title-desc">Parsley is a javascript form validation
                    library. It helps you provide your users with feedback on their form
                    submission before sending it to your server.</p>

                <form class="custom-validation" action="#">
                    <div class="form-group">
                        <label>Required</label>
                        <input type="text" class="form-control" required placeholder="Type something"/>
                    </div>

                    <div class="form-group">
                        <label>Equal To</label>
                        <div>
                            <input type="password" id="pass2" class="form-control" required
                                    placeholder="Password"/>
                        </div>
                        <div class="mt-2">
                            <input type="password" class="form-control" required
                                    data-parsley-equalto="#pass2"
                                    placeholder="Re-Type Password"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>E-Mail</label>
                        <div>
                            <input type="email" class="form-control" required
                                    parsley-type="email" placeholder="Enter a valid e-mail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <div>
                            <input parsley-type="url" type="url" class="form-control"
                                    required placeholder="URL"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Digits</label>
                        <div>
                            <input data-parsley-type="digits" type="text"
                                    class="form-control" required
                                    placeholder="Enter only digits"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Number</label>
                        <div>
                            <input data-parsley-type="number" type="text"
                                    class="form-control" required
                                    placeholder="Enter only numbers"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alphanumeric</label>
                        <div>
                            <input data-parsley-type="alphanum" type="text"
                                    class="form-control" required
                                    placeholder="Enter alphanumeric value"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Textarea</label>
                        <div>
                            <textarea required class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Range validation</h4>
                <p class="card-title-desc">Parsley is a javascript form validation
                    library. It helps you provide your users with feedback on their form
                    submission before sending it to your server.</p>

                <form action="#" class="custom-validation">

                    <div class="form-group">
                        <label>Min Length</label>
                        <div>
                            <input type="text" class="form-control" required
                                    data-parsley-minlength="6" placeholder="Min 6 chars."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Max Length</label>
                        <div>
                            <input type="text" class="form-control" required
                                    data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Range Length</label>
                        <div>
                            <input type="text" class="form-control" required
                                    data-parsley-length="[5,10]"
                                    placeholder="Text between 5 - 10 chars length"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Min Value</label>
                        <div>
                            <input type="text" class="form-control" required
                                    data-parsley-min="6" placeholder="Min value is 6"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Max Value</label>
                        <div>
                            <input type="text" class="form-control" required
                                    data-parsley-max="6" placeholder="Max value is 6"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Range Value</label>
                        <div>
                            <input class="form-control" required type="text range" min="6"
                                    max="100" placeholder="Number between 6 - 100"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Regular Exp</label>
                        <div>
                            <input type="text" class="form-control" required
                                    data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                    placeholder="Hex. Color"/>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
@section('script')  

<script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js')}}"></script>

<script src="{{ URL::asset('/assets/js/pages/form-validation.init.js')}}"></script>
@endsection
