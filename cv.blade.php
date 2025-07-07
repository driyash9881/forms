@extends('layouts.auth_page')
@section('style')
<style>
    form#frmVehicleDetails {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.07);
        font-family: 'Segoe UI', sans-serif;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 25px;
        color: #333;
        font-weight: 600;
    }

    .StepNo {
        background-color: #FF6F00;
        color: white;
        padding: 4px 10px;
        border-radius: 50%;
        margin-right: 8px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label.control-label {
        font-weight: 500;
        margin-bottom: 8px;
        display: inline-block;
    }

    .radiolbl {
        display: inline-block;
        margin-right: 15px;
        font-weight: 400;
        color: #555;
    }

    input[type="radio"] {
        margin-right: 6px;
    }

    .custom-radio .form-group {
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    .error {
        color: #d93025;
        font-size: 13px;
        margin-top: 5px;
        display: block;
    }

    .row {
        margin-bottom: 15px;
    }

    .mr-r8 {
        margin-right: 10px;
    }

    .padding0 {
        padding: 0 !important;
    }

    .mr8rem {
        margin-right: 8rem;
    }

    @media (max-width: 768px) {
        form#frmVehicleDetails {
            padding: 20px;
        }
        .mr8rem {
            margin-right: 0;
        }
    }
  form#frmVehicleDetails {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.05);
        font-family: 'Segoe UI', sans-serif;
        font-size: 15px;
        color: #333;
    }

    h1, h2.subheading {
        font-size: 20px;
        font-weight: 600;
        margin: 25px 0 15px;
        color: #222;
        border-left: 4px solid #FF6F00;
        padding-left: 10px;
    }

    .StepNo {
        background-color: #FF6F00;
        color: white;
        padding: 5px 12px;
        border-radius: 50%;
        margin-right: 8px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-floating {
        position: relative;
    }

    label.control-label, label.cv-adon-label, .form-floating label {
        font-weight: 500;
        margin-bottom: 6px;
        display: block;
        color: #444;
    }

    select.form-control, input.form-control {
        border-radius: 8px;
        border: 1px solid #ccc;
        padding: 10px 12px;
        box-shadow: none;
        transition: border-color 0.2s;
    }

    select.form-control:focus, input.form-control:focus {
        border-color: #FF6F00;
        outline: none;
    }

    .radiolbl, label[for*="Cover"], label[for*="ProposarType"] {
        margin-right: 15px;
        display: inline-block;
        font-weight: 400;
        color: #333;
    }

    input[type="radio"], input[type="checkbox"] {
        margin-right: 6px;
    }

    .custom-radio .form-group {
        background: #f9f9f9;
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #e0e0e0;
    }

    .error {
        font-size: 13px;
        color: #d93025;
        display: block;
        margin-top: 4px;
    }

    .AddOnsLabel label {
        display: inline-block;
        margin-right: 15px;
        font-weight: 400;
        padding: 5px 0;
    }

    .no-of-driver-ll, .no-of-cleaner-ll, .no-of-employees-ll {
        margin-top: 8px;
    }

    .form-floating > label {
        position: absolute;
        top: -8px;
        left: 12px;
        background: white;
        padding: 0 4px;
        font-size: 13px;
        color: #777;
    }

    .pl-3 {
        padding-left: 1rem !important;
    }

    @media (max-width: 767px) {
        form#frmVehicleDetails {
            padding: 20px;
        }

        h1, h2.subheading {
            font-size: 18px;
        }

        .form-group {
            margin-bottom: 15px;
        }
    }
    /* Base styles */
.form-group {
    margin-bottom: 20px;
    position: relative;
}

label {
    font-weight: 500;
    margin-bottom: 6px;
    display: inline-block;
}

input[type="text"],
input[type="date"],
input[type="number"],
select {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    transition: all 0.3s ease;
    background-color: #fff;
}

input:focus,
select:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
    outline: none;
}

input[type="checkbox"],
input[type="radio"] {
    margin-right: 8px;
    cursor: pointer;
}

/* Floating labels compatibility */
.form-floating > label {
    top: -10px;
    left: 12px;
    font-size: 13px;
    color: #555;
    background: white;
    padding: 0 5px;
    pointer-events: none;
}

.form-floating {
    position: relative;
}

/* Section headings */
.subheading {
    font-size: 20px;
    font-weight: 600;
    color: #343a40;
    border-bottom: 1px solid #ddd;
    margin: 30px 0 20px;
    padding-bottom: 6px;
}

/* Error message styles */
span.error {
    color: #dc3545;
    font-size: 13px;
    margin-top: 4px;
    display: block;
}

/* Red asterisk */
.red {
    color: red;
}

/* Toggling sections (for display:none) */
.no-of-driver-ll,
.no-of-cleaner-ll,
.no-of-employees-ll,
.no-of-unnamed-passenger-ll,
.unnamed-pa-paid-driver-cover,
.unnamed-pa-passanger-cover,
.unnamed-pa-cleaner-cover,
.unnamed-pa-conductor-cover,
.geog-extn-countries,
.cng-value-cover,
.elec-acc-total,
.non-elec-acc-total {
    margin-top: 10px;
    padding: 10px 15px;
    border: 1px solid #e2e2e2;
    border-radius: 6px;
    background: #f9f9f9;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.03);
}

/* Checkbox label spacing */
label.col-md-4,
label.col-xs-12 {
    margin-bottom: 8px;
    display: block;
}

/* Add-ons label layout */
.AddOnsLabel label {
    display: flex;
    align-items: center;
    font-weight: 500;
    margin-bottom: 8px;
}

/* Select2 override (if using Select2) */
.select2-container--default .select2-selection--multiple {
    border-radius: 6px;
    padding: 6px;
    border-color: #ccc;
    background-color: #fff;
}

/* Mobile responsive tweaks */
@media (max-width: 767px) {
    .form-group {
        margin-bottom: 15px;
    }
    .subheading {
        font-size: 18px;
    }
}


/* Subheading styling */
.subheading {
    font-size: 22px;
    font-weight: 600;
    color: #333;
    margin-bottom: 20px;
    border-bottom: 2px solid #eee;
    padding-bottom: 6px;
}

/* Label styling */
.control-label {
    font-weight: 500;
    margin-bottom: 6px;
    color: #444;
    display: inline-block;
}

/* Radio buttons */
.custom-radio label {
    display: inline-block;
    margin-right: 20px;
    font-weight: 400;
    cursor: pointer;
}

.custom-radio input[type="radio"] {
    margin-right: 6px;
}

/* Select and Input styling */
select.form-control,
input.form-control {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    background-color: #fff;
    transition: border 0.3s ease;
}

select.form-control:focus,
input.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
    outline: none;
}

/* Floating label support */
.form-floating > label {
    position: absolute;
    top: -10px;
    left: 12px;
    background: #fff;
    padding: 0 5px;
    font-size: 13px;
    color: #777;
    z-index: 1;
}

/* Form group and section spacing */
.form-group {
    margin-bottom: 20px;
    position: relative;
}

.policy_intents {
    margin-top: 20px;
}

/* Error styles */
.error {
    color: #d9534f;
    font-size: 13px;
    margin-top: 5px;
    display: block;
}

/* Date input styling */
input[type="date"] {
    appearance: none;
    -webkit-appearance: none;
    background: #fff url("data:image/svg+xml,%3Csvg viewBox='0 0 16 16' fill='gray' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M3.5 0a.5.5 0 01.5.5V1h8V.5a.5.5 0 011 0V1h1.5A1.5 1.5 0 0116 2.5v11A1.5 1.5 0 0114.5 15h-13A1.5 1.5 0 010 13.5v-11A1.5 1.5 0 011.5 1H3V.5a.5.5 0 01.5-.5zM1 4v9.5a.5.5 0 00.5.5h13a.5.5 0 00.5-.5V4H1z'/%3E%3C/svg%3E") no-repeat right 0.75rem center/1em;
}

/* Declaration section */
.jti-fy.pt-3.border-decl {
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    padding: 15px 20px;
    border-radius: 6px;
    margin-top: 25px;
    font-size: 14px;
}

.jti-fy label input[type="checkbox"] {
    margin-right: 8px;
}

/* Sticky Get Quotes Button */
.getQuoteBtn {
    padding: 10px 20px;
    font-weight: 500;
    font-size: 15px;
    border-radius: 6px;
    margin-top: 20px;
    position: sticky;
    bottom: 10px;
    right: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    transition: background 0.3s ease;
}

.getQuoteBtn:hover {
    background-color: #0056b3;
    color: #fff;
}

/* Responsive layout */
@media (max-width: 767px) {
    .subheading {
        font-size: 18px;
    }

    .getQuoteBtn {
        width: 100%;
    }
}

</style>

@endsection
@section('content')
    <div class="container">
        <br><br><br><br>
        <form
            class="VehicleDetailsForm ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength ng-valid-min ng-valid-minlength"
            id="frmVehicleDetails" name="frmVehicleDetails" style="">
            <input type="hidden" id="VehicleFullName" name="VehicleFullName" value="">
            <input type="hidden" id="quoteId" name="quoteId" value="" class="quoteId" autocomplete="off">
            <input type="hidden" id="pdic" name="pdic" value="" autocomplete="off">
            <input type="hidden" id="custom_idv" name="custom_idv" value="" autocomplete="off">
            <input type="hidden" id="isTransferVehicle" name="isTransferVehicle" value="No" autocomplete="off">
            <input type="hidden" id="RCOwnerNumber" name="RCOwnerNumber" value="" autocomplete="off">
            <input type="hidden" id="isPreviousCNG" name="isPreviousCNG" value="Yes" autocomplete="off">
            <input type="hidden" id="custom_body_idv" name="custom_body_idv" value="" autocomplete="off">
            <input type="hidden" id="custom_chassis_idv" name="custom_chassis_idv" value="" autocomplete="off">

            <div class="padding0  mr8rem">
                <input type="hidden" id="isPreElectricAcc" name="isPreElectricAcc" value="Yes" autocomplete="off">
                <input type="hidden" id="isPreNonElectricAcc" name="isPreNonElectricAcc" value="Yes" autocomplete="off">

                <h1><span class="StepNo">1</span> Basic Detail</h1>
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert" id="CVFormAlert" style="display: none"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 custom-radio">
                            <ng-form name="frmPolicyType">
                                <div class="form-group">
                                    <label class="control-label col-md-12">Policy<span class="red">*</span></label>
                                    <div class="col-md-12">
                                        <label for="renew" class="radiolbl mr-r8">
                                            <input checked="" type="radio" name="PolicyType" id="renew"
                                                value="renew" required=""
                                                class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                                            Renew
                                        </label>
                                        <label for="new" class="radiolbl mr-r8">
                                            <input type="radio" name="PolicyType" id="new"
                                                ng-model="VehicleInfoMDL.PolicyType" value="new" required=""
                                                class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                                            New
                                        </label>
                                        <div class="clearfix"></div>
                                        <span class="col-md-12 error ng-hide"
                                            ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmPolicyType.PolicyType.$error.required">
                                            Policy required
                                        </span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>

                        <div class="col-md-6 custom-radio">
                            <ng-form name="frmProposarType" class="ng-pristine ng-valid ng-valid-required">
                                <div class="form-group">
                                    <label class="control-label col-md-12">Proposer<span class="red">*</span></label>
                                    <div class="col-md-12">
                                        <label for="individual" class="radiolbl mr-r8">
                                            <input type="radio" name="ProposarType" id="individual" value="individual"
                                                ng-model="VehicleInfoMDL.proposerType" ng-checked="true" required=""
                                                class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required"
                                                checked="checked">
                                            Individual
                                        </label>
                                        <label for="corporate" class="radiolbl">
                                            <input type="radio" name="ProposarType" id="corporate" value="corporate"
                                                ng-model="VehicleInfoMDL.proposerType" required=""
                                                class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                                            Corporate
                                        </label>
                                        <div class="clearfix"></div>
                                        <span class="col-md-12 error ng-hide"
                                            ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmProposarType.ProposarType.$error.required">
                                            Proposer required
                                        </span>
                                    </div>

                                </div>
                            </ng-form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 custom-radio">
                            <ng-form name="frmPCoverType" class="ng-pristine ng-valid ng-valid-required">
                                <div class="form-group">
                                    <label class="control-label col-md-12">Policy Cover<span
                                            class="red">*</span></label>
                                    <div class="col-md-12">
                                        <label for="rdoP" class="mr-r8">
                                            <input type="radio" name="CoverType" id="rdoP"
                                                value="policy-comprehensive" ng-model="VehicleInfoMDL.CoverType"
                                                required=""
                                                class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
                                            Comprehensive
                                        </label>
                                        <label for="rdoL" class="mr-r8">
                                            <input type="radio" name="CoverType" id="TPOnly" value="policy-tp"
                                                class="ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required"
                                                checked="">
                                            Third Party Only
                                        </label>
                                        <div class="clearfix"></div>
                                        <span class="error ng-hide">
                                            Policy Cover required
                                        </span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                    <h2 class="subheading">Vehicle Details</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ng-form name="frmVechicleType" class="ng-pristine ng-invalid ng-invalid-required">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <select
                                            class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                            id="Type" name="Type" ng-model="VehicleInfoMDL.TypeId"
                                            ng-change="GetModel(false)" ng-options="n.Value as n.Text for n in MakeList"
                                            required="">
                                            <option value="">Select Vehicle Type</option>
                                            <option value="1" class="">Goods Carrying</option>
                                            <option value="2" class="">Passenger Carrying</option>
                                            <option value="3" class="">Miscellaneous</option>
                                        </select>
                                        <span class="error ng-hide"
                                            ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmType.Type.$error.required">
                                            Select Vehicle Type
                                        </span>
                                        <span class="error" id="type_field_error">Please Select Vehicle Type.</span>
                                        <label for="Type">Vehicle Type<span class="red">*</span></label>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6">
                            <ng-form name="frmMake" class="ng-pristine ng-invalid ng-invalid-required">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <select
                                            class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                            id="Make" name="Make" ng-model="VehicleInfoMDL.MakeId"
                                            ng-change="GetModel(false)" ng-options="n.Value as n.Text for n in MakeList"
                                            required="">
                                            <option value="">Select Vehicle Manufacturer</option>
                                        </select>
                                        <span class="error ng-hide"
                                            ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmMake.Make.$error.required">
                                            Select Manufacturer
                                        </span>
                                        <span class="error" id="make_field_error">Please Select Manufacture.</span>
                                        <label for="Make">Manufacturer<span class="red">*</span></label>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6">
                            <ng-form name="frmModel" class="ng-pristine ng-invalid ng-invalid-required">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <select
                                            class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                            id="Model" name="Model" ng-model="VehicleInfoMDL.ModelId"
                                            ng-change="GetFuelType(false)"
                                            ng-options="n.Value as n.Text for n in ModelList" required="">
                                            <option value="" selected="selected" class="">Select Vehicle
                                                Model
                                            </option>
                                        </select>
                                        <label for="Model">Model<span class="red">*</span></label>
                                        <span class="error ng-hide"
                                            ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmModel.Model.$error.required">
                                            Select Model
                                        </span>
                                        <span class="error" id="model_field_error">Please Select Model.</span>
                                    </div>

                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6">
                            <ng-form name="frmFuelType" class="ng-pristine ng-invalid ng-invalid-required">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <select
                                            class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                            name="FuelType" id="FuelType" ng-model="VehicleInfoMDL.FuelType"
                                            ng-change="GetVarient(false)" required="">
                                            <option value="">Select Fuel Type</option>
                                        </select>
                                        <label for="FuelType">Fuel Type<span class="red">*</span></label>
                                        <span class="error ng-hide"
                                            ng-show="VehicleDetailsSubmited &amp;&amp; frmFuelType.FuelType.$error.required">
                                            Select Fuel Type
                                        </span>
                                        <span class="error" id="fuel_field_error">Please Select Fuel.</span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6">
                            <ng-form name="frmVarient" class="ng-pristine ng-invalid ng-invalid-required">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <select
                                            class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                            name="Varient" id="Varient" ng-model="VehicleInfoMDL.VehicleMMVInfoId"
                                            ng-options="n.Item1 as n.Item2 + ' ' +  n.Item3 for n in VarientList"
                                            required="">
                                            <option value="" selected="selected" class="">Select Variant
                                            </option>
                                        </select>
                                        <label for="Varient">Variant<span class="red">*</span></label>
                                        <span class="error ng-hide"
                                            ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmVarient.Varient.$error.required">
                                            Select Variant
                                        </span>
                                        <span class="error" id="variant_field_error">Please Select Variant.</span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6">
                            <ng-form name="frmInvoiceDate" class="ng-pristine ng-invalid ng-invalid-required">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <input type="date" id="VehicleInvoiceDate" name="VehicleInvoiceDate"
                                            class="form-control" onkeydown="return false"
                                            style="text-transform:uppercase" placeholder="DD-MM-YYYY" max="2024-09-03">
                                        <label for="VehicleInvoiceDate">Vehicle Registration Date<span
                                                class="red">*</span></label>
                                        <span class="error ng-hide" id="invoice_date_field_error"
                                            ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmInvoiceDate.InvoiceDate.$error.required">
                                            Vehicle Invoice Date required
                                        </span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12 form-floating">
                                    <input type="text" name="registrationNo" id="registrationNo"
                                        class="form-control text-uppercase input_capital" value-type="alphaNumeric"
                                        value="" capitalize="" maxlength="14" limit-to="10"
                                        placeholder="For e.g. MH02CJ8888" required="" autocomplete="off">
                                    <label for="registrationNo">Registration Number<span
                                            class="red PolicyTypeR">*</span></label>
                                    <span class="col-md-12 error ng-hide" id="registrationNo_Required_error">
                                        Registration Number required
                                    </span>
                                    <span class="col-md-12 error ng-hide" id="registrationNo_error"
                                        ng-show="PropSubmited &amp;&amp; !frmRegNo.RegNo.$error.required &amp;&amp; !frmRegNo.RegNo.$valid">
                                        Please enter valid Registration Number
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" id="permitTypeCont">
                            <ng-form name="frmPermitType" class="ng-pristine ng-invalid ng-invalid-required">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <select class="form-control" id="PermitType" name="PermitType" required="">
                                            <option value="">Select Permit Type</option>
                                            <option value="public" class="">Public</option>
                                            <option value="private" class="">Private</option>
                                        </select>
                                        <label for="Type">Permit Type<span class="red">*</span></label>
                                        <span class="error" id="permit_type_field_error">Please Select Permit
                                            Type.</span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>

                        <div class="col-md-6" id="manufacturingBuildTypeCont">
                            <ng-form name="frmManufacturingBuildType" class="ng-pristine ng-invalid ng-invalid-required">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <select class="form-control" name="ManufacturingBuildType"
                                            id="ManufacturingBuildType" required="">
                                            <option value="">Select Manufacturing Built Type</option>
                                            <option value="fully-built" class="">Fully Built</option>
                                            <option value="partially-built" class="">Partially Built</option>
                                        </select>
                                        <label for="Type">Manufacturing Built Type<span
                                                class="red">*</span></label>
                                        <span class="error" id="ManufacturingBuildType_field_error">Please Select
                                            Manufacturing Built Type.</span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>

                        <div class="col-md-6" id="grossVehicleWeightCont" style="display: none;">
                            <div class="form-group">
                                <div class="col-md-12 form-floating">
                                    <input type="number" name="gross_vehicle_weight" id="grossVehicleWeight"
                                        class="form-control" min="0" max="999999">
                                    <label for="grossVehicleWeight">Gross Vehicle Weight<span
                                            class="red">*</span></label>
                                    <span class="error ng-hide" id="gross_vehicle_weight_field_error">
                                        Gross Vehicle Weight required
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" id="pcv_option" style="display:none;">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="IsSchoolBus" class="col-xs-12 col-md-12" title="Is School Bus ?">
                                        <input name="IsSchoolBus" type="checkbox" id="IsSchoolBus">
                                        Is School Bus?
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="cvaddons" id="cvaddons">
                        <h2 class="subheading ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">Add-ons
                        </h2>
                        <div class="row AddOnsLabel ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <!-- Loop through with addons -->
                                        <label for="Zero Dep" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                            <input name="addons[partsDepreciation]" type="checkbox"
                                                id="partsDepreciation" class="add-ons-all">
                                            Zero Dep </label>
                                        <label for="Road Side Assitance" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                            <input name="addons[roadSideAssistance]" type="checkbox"
                                                id="roadSideAssistance" class="add-ons-all">
                                            Road Side Assitance </label>
                                        <label class="zdep_pp" id="ZeroDep1Cont" for="ZeroDep1">
                                            <input type="checkbox" name="ZeroDep1" id="ZeroDep1" class="add-ons-all">
                                            Zero Dep in previous policy
                                        </label>
                                        <!--For TATA AIG => START -->
                                        <input type="hidden" name="PrevTyreProtection" id="PrevTyreProtection"
                                            value="No">
                                        <input type="hidden" name="PrevEngineProtection" id="PrevEngineProtection"
                                            value="No">
                                        <input type="hidden" name="PrevConsumableProtection"
                                            id="PrevConsumableProtection" value="No">
                                        <input type="hidden" name="PrevRTI" id="PrevRTI" value="No">
                                        <input type="hidden" name="PreCngLpg" id="PreCngLpg" value="Yes">
                                        <!--For TATA AIG => END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <h2 class="subheading">Additional Covers</h2>
                    <div class="AddOnsLabel pl-3">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class=" ">
                                        <label id="additional-covers" for="CPARequired" class="col-xs-12 col-md-12"
                                            ng-show="VehicleInfoMDL.proposerType == 'I'"
                                            title="An accident cover which provides financial assistance to the car's owner in case of disablement or death due to an accident. Every individual vehicle owner must opt for this cover as per IRDAI guidelines, except for those without a driving license or having an existing Personal Accident cover of at least Rs. 15 lakhs.">
                                            <input name="additinalcover[CPARequired]" type="checkbox" id="CPARequired"
                                                ng-model="VehicleInfoMDL.AdditionalBenefit.CPARequired"
                                                class="ng-pristine ng-untouched ng-valid ng-empty" checked="checked">
                                            Owner Driver Personal Accident Cover
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <div class="row ml0">
                                            <label for="IMT23" class="col-xs-12 col-md-12">
                                                <input name="additinalcover[IMT23Cover]" type="checkbox" id="IMT23Cover"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty"
                                                    checked="checked">IMT23
                                                Cover
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="col-md-12 ">
                                        <div class="row ml0">
                                            <label for="LLDriverCover" class="col-xs-12 col-md-12"
                                                title="Legal Liability To Paid Driver">
                                                <input name="additinalcover[LLDriverCover]" type="checkbox"
                                                    id="LLDriverCover">
                                                Legal Liability to Paid Driver
                                            </label>
                                            <div class="col-xs-12 col-md-12 no-of-driver-ll form-floating"
                                                style="display: none;">
                                                <input type="text" class="form-control" name="NoOfDriverLL"
                                                    id="NoOfDriverLL" onkeypress="return isNumberKey(event)"
                                                    onpaste="return false" placeholder="No. Of Driver" maxlength="2"
                                                    value-type="int" ng-minlength="1" limit-to="1" autocomplete="off"
                                                    min="1">
                                                <label for="NoOfDriverLL" class="cv-adon-label">No. Of Driver</label>
                                                <span class="error ng-hide" id="NoOfDriverLL_field_error">
                                                    No. Of Driver is required
                                                </span>
                                                <span class="error ng-hide" id="NoOfDriverLL_error">
                                                    Min No. Of Driver is 1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="LLCleanersCover" class="col-xs-12 col-md-12"
                                                title="Legal Liability To Cleaners">
                                                <input name="additinalcover[LLCleanersCover]" type="checkbox"
                                                    id="LLCleanersCover">
                                                Legal Liability To Cleaners
                                            </label>
                                            <div class="col-xs-12 col-md-12 no-of-cleaner-ll form-floating"
                                                style="display: none;">
                                                <input type="text"
                                                    class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-min ng-valid-minlength"
                                                    name="NoOfCleanersLL" id="NoOfCleanersLL"
                                                    onkeypress="return isNumberKey(event)" onpaste="return false"
                                                    placeholder="No. Of Cleaners" maxlength="2" autocomplete="off"
                                                    min="1">
                                                <label for="NoOfCleanersLL" class="cv-adon-label">No. Of Cleaners</label>
                                                <span class="error ng-hide" id="NoOfCleanersLL_field_error">
                                                    No. Of Cleaners is required
                                                </span>
                                                <span class="error ng-hide" id="NoOfCleanersLL_error">
                                                    Min No. Of Cleaners is 1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4" id="LLEmployees">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="LLEmployeesCover" class="col-xs-12 col-md-12"
                                                title="Legal Liability To Employees">
                                                <input name="additinalcover[LLEmployeesCover]" type="checkbox"
                                                    id="LLEmployeesCover">
                                                Legal Liability To Employees
                                            </label>
                                            <div class="col-xs-12 col-md-12 no-of-employees-ll form-floating"
                                                style="display: none;">
                                                <input type="text"
                                                    class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-min ng-valid-minlength"
                                                    name="NoOfEmployeesLL" id="NoOfEmployeesLL"
                                                    onkeypress="return isNumberKey(event)" onpaste="return false"
                                                    placeholder="No. Of Employees" maxlength="2" autocomplete="off"
                                                    min="1">
                                                <label for="NoOfEmployeesLL" class="cv-adon-label">No. Of
                                                    Employees</label>
                                                <span class="error ng-hide" id="NoOfEmployeesLL_field_error">
                                                    No. Of Employees is required
                                                </span>
                                                <span class="error ng-hide" id="NoOfEmployeesLL_error">
                                                    Min No. Of Employees is 1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="LLUnnamedPassengerCover" class="col-xs-12 col-md-12"
                                                title="Legal Liability To Unnamed Passenger">
                                                <input name="additinalcover[LLUnnamedPassengerCover]" type="checkbox"
                                                    id="LLUnnamedPassengerCover">
                                                Legal Liability To Unnamed Passenger
                                            </label>
                                            <div class="col-xs-12 col-md-12 no-of-unnamed-passenger-ll form-floating"
                                                style="display: none;">
                                                <input type="text"
                                                    class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-min ng-valid-minlength"
                                                    name="NoOfUnnamedPassengerLL" id="NoOfUnnamedPassengerLL"
                                                    onkeypress="return isNumberKey(event)" onpaste="return false"
                                                    placeholder="No. Of Unnamed Passenger" maxlength="2"
                                                    autocomplete="off" min="1">
                                                <label for="NoOfUnnamedPassengerLL" class="cv-adon-label">No. Of Unnamed
                                                    Passenger</label>
                                                <span class="error ng-hide" id="NoOfUnnamedPassengerLL_field_error">
                                                    No. Of Unnamed Passenger is required
                                                </span>
                                                <span class="error ng-hide" id="NoOfUnnamedPassengerLL_error">
                                                    Min No. Of Unnamed Passenger is 1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="UnNamedPAPaidDriver" class="col-xs-12 col-md-12">
                                                <input name="additinalcover[UnNamedPAPaidDriver]" type="checkbox"
                                                    id="UnNamedPAPaidDriver"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty">
                                                Unnamed Paid Driver Personal Accident Cover
                                            </label>
                                            <div class="col-md-12 unnamed-pa-paid-driver-cover form-floating"
                                                style="display: none;">
                                                <select
                                                    class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                                    name="UNPASIPaidDriver" id="UNPASIPaidDriver" required="required">
                                                    <option value="" selected="selected">--Select Cover Amount--
                                                    </option>
                                                    <option value="100000">1,00,000/-</option>
                                                    <option value="200000">2,00,000/-</option>
                                                    <option value="300000">3,00,000/-</option>
                                                    <option value="400000">4,00,000/-</option>
                                                    <option value="500000">5,00,000/-</option>
                                                </select>
                                                <label for="UNPASIPaidDriver" class="cv-adon-label">Un. Paid Driver PA
                                                    Cover
                                                    Amount (<i class="fa fa-rupee"></i>)</label>
                                                <span class="error ng-hide" id="UNPaidDriverCoverAmount_field_error">
                                                    Un. Paid Driver PA Cover is required
                                                </span>
                                                <span class="error ng-hide" id="NoOfUnNamedPAPassenger_error">
                                                    Min No. Of Un. Paid Driver PA is 1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="UnNamedPAPassenger" class="col-xs-12 col-md-12">
                                                <input name="additinalcover[UnNamedPAPassenger]" type="checkbox"
                                                    id="UnNamedPAPassenger"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty">
                                                Unnamed Passenger Personal Accident Cover
                                            </label>
                                            <div class="col-md-12 unnamed-pa-passanger-cover form-floating"
                                                style="display: none;">
                                                <select
                                                    class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                                    name="UNPASIPassenger" id="UNPASIPassenger" required="required">
                                                    <option value="" selected="selected">--Select Cover Amount--
                                                    </option>
                                                    <option value="100000">1,00,000/-</option>
                                                    <option value="200000">2,00,000/-</option>
                                                    <option value="300000">3,00,000/-</option>
                                                    <option value="400000">4,00,000/-</option>
                                                    <option value="500000">5,00,000/-</option>
                                                </select>
                                                <label for="UNPASIPassenger" class="cv-adon-label">Un. Passenger PA Cover
                                                    Amount (<i class="fa fa-rupee"></i>)</label>
                                                <span class="error ng-hide" id="UNPassengerCoverAmount_field_error">
                                                    Un. Passenger PA Cover is required
                                                </span>
                                            </div>
                                            <div class="col-xs-12 col-md-12 mt-t10 form-floating"
                                                id="NoOfUnNamedPAPassengerCont" style="display: none;">
                                                <input type="text"
                                                    class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-min ng-valid-minlength"
                                                    name="NoOfUnNamedPAPassenger" id="NoOfUnNamedPAPassenger"
                                                    onkeypress="return isNumberKey(event)" onpaste="return false"
                                                    placeholder="No. Of Unnamed PA Passenger" maxlength="2"
                                                    autocomplete="off" min="1">
                                                <label for="NoOfUnNamedPAPassenger" class="cv-adon-label">No. Of Unnamed
                                                    PA
                                                    Passenger</label>
                                                <span class="error ng-hide" id="NoOfUnNamedPAPassenger_field_error">
                                                    No. Of Unnamed PA Passenger is required
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="UnNamedPACleaner" class="col-xs-12 col-md-12">
                                                <input name="additinalcover[UnNamedPACleaner]" type="checkbox"
                                                    id="UnNamedPACleaner"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty">
                                                Unnamed Cleaner Personal Accident Cover
                                            </label>
                                            <div class="col-md-12 unnamed-pa-cleaner-cover form-floating"
                                                style="display: none;">
                                                <select
                                                    class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                                    name="UNPASICleaner" id="UNPASICleaner" required="required">
                                                    <option value="" selected="selected">--Select Cover Amount--
                                                    </option>
                                                    <option value="100000">1,00,000/-</option>
                                                    <option value="200000">2,00,000/-</option>
                                                    <option value="300000">3,00,000/-</option>
                                                    <option value="400000">4,00,000/-</option>
                                                    <option value="500000">5,00,000/-</option>
                                                </select>
                                                <label for="UNPASICleaner" class="cv-adon-label">Un. Cleaner PA Cover
                                                    Amount
                                                    (<i class="fa fa-rupee"></i>)</label>
                                                <span class="error ng-hide" id="UNCleanerCoverAmount_field_error">
                                                    Un. Cleaner PA Cover is required
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="UnNamedPAConductor" class="col-xs-12 col-md-12">
                                                <input name="additinalcover[UnNamedPAConductor]" type="checkbox"
                                                    id="UnNamedPAConductor"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty">
                                                Unnamed Conductor Personal Accident Cover
                                            </label>
                                            <div class="col-md-12 unnamed-pa-conductor-cover form-floating"
                                                style="display: none;">
                                                <select
                                                    class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                                    name="UNPASIConductor" id="UNPASIConductor" required="required">
                                                    <option value="" selected="selected">--Select Cover Amount--
                                                    </option>
                                                    <option value="100000">1,00,000/-</option>
                                                    <option value="200000">2,00,000/-</option>
                                                    <option value="300000">3,00,000/-</option>
                                                    <option value="400000">4,00,000/-</option>
                                                    <option value="500000">5,00,000/-</option>
                                                </select>
                                                <label for="UNPASIConductor" class="cv-adon-label">Un. Conductor PA Cover
                                                    Amount (<i class="fa fa-rupee"></i>)</label>
                                                <span class="error ng-hide" id="UNConductorCoverAmount_field_error">
                                                    Un. Conductor PA Cover is required
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="GeogExtn" class="col-xs-12 col-md-12"
                                                title="Do you want to extend the cover to other countries?">
                                                <input name="additinalcover[GeogExtn]" type="checkbox" id="GeogExtn"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty">
                                                Geographical Extension
                                            </label>
                                            <div class="col-md-12 geog-extn-countries">
                                                <div class="form-group form-floati ng overflow-hidden">
                                                    <label for="GeogExtnCountries" class="cv-adon-labe"
                                                        style="width: 100%;">Geog. Extn. Countries</label>
                                                    <select
                                                        class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched s-example-basic-single select2-hidden-accessible"
                                                        name="GeogExtnCountries[]" id="GeogExtnCountries" multiple=""
                                                        required="required" tabindex="-1" aria-hidden="true">
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" style="width: auto;"><span class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1">
                                                                <ul class="select2-selection__rendered">
                                                                    <li class="select2-search select2-search--inline">
                                                                        <input class="select2-search__field"
                                                                            type="search" tabindex="0"
                                                                            autocomplete="off" autocorrect="off"
                                                                            autocapitalize="off" spellcheck="false"
                                                                            role="textbox" aria-autocomplete="list"
                                                                            placeholder="" style="width: 0.75em;"></li>
                                                                </ul>
                                                            </span></span><span class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span>
                                                    <span class="error ng-hide" id="GeogExtnCountries_field_error">
                                                        Select as least one country
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4" id="cngAmtInput">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="CNG" class="col-xs-12 col-md-12">
                                                <input name="additinalcover[CNG]" type="checkbox" id="CNG"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty">
                                                CNG - IMT25 Cover
                                            </label>
                                            <div class="col-md-12 cng-value-cover" id="cngValueCover">
                                                <div class="form-group form-floating">
                                                    <input type="text"
                                                        class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-min ng-valid-minlength"
                                                        name="CNGValue" id="CNGValue" maxlength="6"
                                                        onkeypress="return isNumberKey(event)" onpaste="return false"
                                                        placeholder="CNG Value"
                                                        ng-model="VehicleInfoMDL.AddonCover.CNGValue" value-type="int"
                                                        ng-minlength="3" limit-to="5" autocomplete="off">
                                                    <label for="CNGValue">CNG Value - IMT 25 (<i
                                                            class="fa fa-rupee"></i>)</label>
                                                    <span class="error ng-hide" id="CNGValue_field_error"
                                                        ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmCNGValue.CNGValue.$error.required">
                                                        CNG Value is required
                                                    </span>
                                                    <span class="error ng-hide" id="CNGValue_Custom_field_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 od-cover">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="ElectricalAccessoriesCover" class="col-xs-12 col-md-12">
                                                <input name="additinalcover[ElectricalAccessoriesCover]" type="checkbox"
                                                    id="ElectricalAccessoriesCover"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty">
                                                Electrical Accessories - IMT 24
                                            </label>
                                            <div class="col-md-12 elec-acc-total">
                                                <div class="form-group form-floating">
                                                    <input type="text"
                                                        class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-min ng-valid-minlength"
                                                        name="ElecAccTotal" id="ElecAccTotal" maxlength="6"
                                                        onkeypress="return isNumberKey(event)" onpaste="return false"
                                                        placeholder="Electrical Accessories"
                                                        ng-model="VehicleInfoMDL.AddonCover.ElecAccTotal" value-type="int"
                                                        ng-minlength="2" limit-to="5" autocomplete="off">
                                                    <label for="ElecAccTotal">Electrical Accessories - IMT 24 (<i
                                                            class="fa fa-rupee"></i>)</label>
                                                    <span class="error ng-hide" id="ElecAccTotal_field_error"
                                                        ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmElecAccTotal.ElecAccTotal.$error.required">
                                                        Electrical Accessories is required
                                                    </span>
                                                    <span class="error ng-hide"
                                                        id="ElecAccTotal_Custom_field_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 od-cover">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label for="NonElectricalAccessoriesCover" class="col-xs-12 col-md-12">
                                                <input name="additinalcover[NonElectricalAccessoriesCover]"
                                                    type="checkbox" id="NonElectricalAccessoriesCover"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty">
                                                Non Electrical Accessories - IMT 24
                                            </label>
                                            <div class="col-md-12 non-elec-acc-total">
                                                <div class="form-group form-floating">
                                                    <input type="text"
                                                        class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-min ng-valid-minlength"
                                                        name="NonElecAccTotal" id="NonElecAccTotal" maxlength="6"
                                                        onkeypress="return isNumberKey(event)" onpaste="return false"
                                                        placeholder="Non Electrical Accessories"
                                                        ng-model="VehicleInfoMDL.AddonCover.NonElecAccTotal"
                                                        value-type="int" ng-minlength="2" limit-to="5"
                                                        autocomplete="off">
                                                    <label for="NonElecAccTotal">Non Electrical Accessories - IMT 24 (<i
                                                            class="fa fa-rupee"></i>)</label>
                                                    <span class="error ng-hide" id="NonElecAccTotal_field_error"
                                                        ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmNonElecAccTotal.NonElecAccTotal.$error.required">
                                                        Non Electrical Accessories is required
                                                    </span>
                                                    <span class="error ng-hide"
                                                        id="NonElecAccTotal_Custom_field_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="row ml0">
                                            <label class="control-label col-md-12">Restricts Third Party Property
                                                Damage<span class="red">*</span></label>
                                            <div class="d-block">
                                                <label for="rdoTPPDY">
                                                    <input type="radio" name="isTPPD" id="rdoTPPDY" value="Y"
                                                        required="">
                                                    Yes
                                                </label>
                                                <label for="rdoTPPDN">
                                                    <input type="radio" name="isTPPD" id="rdoTPPDN" value="N"
                                                        checked="">
                                                    No
                                                </label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <span class="error ng-hide"
                                                ng-show="VehicleDetailsSubmited &amp;&amp; frmPCoverType.isTPPD.$error.required">
                                                TPPD required
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  <div class="cardiscounts" id="cardiscounts">
                                            <h2 class="subheading ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">Discount</h2>
                                            <div class="row AddOnsLabel ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="Antitheft" class="col-xs-12 col-md-4" title="The anti-theft device should be ARAI approved.Gear lock and Steering wheel lock are example of anti-theft device. Kindly note that Centre lock will not be treated as an anti-theft device.">
                                                                <input name="discount[Antitheft]" type="checkbox" id="Antitheft" ng-model="VehicleInfoMDL.CarDiscounts.Antitheft" class="ng-pristine ng-untouched ng-valid ng-empty">
                                                                Anti-theft
                                                            </label>
                                                            <label for="Voluntary" class="col-xs-12 col-md-4">
                                                                <input name="discount[Voluntary]"  type="checkbox" id="Voluntary" ng-model="VehicleInfoMDL.CarDiscounts.VoluntaryDeductable" class="ng-pristine ng-untouched ng-valid ng-empty">
                                                                Voluntary
                                                            </label>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="col-md-12" id="Voluntarydiv" style="display:none">
                                                            <div class="form-group">
                                                                <div ng-show="VehicleInfoMDL.CarDiscounts.VoluntaryDeductable == true" class="col-xs-12 col-md-6">
                                                                    <label for="Voluntary" class="custom-label">Voluntary Value</label>
                                                                    <select class="form-control ng-pristine ng-empty ng-touched ng-invalid ng-invalid-required" name="VoluntaryValue" id="VoluntaryValue" ng-model="VehicleInfoMDL.CarDiscounts.VoluntaryDeductableLimit" ng-required="VehicleInfoMDL.CarDiscounts.VoluntaryDeductable==true" required="required">
                                                                        <option value="" selected="selected">--Select Voluntary Value--</option>
                                                                        <option value="2500">2500</option>
                                                                        <option value="5000">5000</option>
                                                                        <option value="7500">7500</option>
                                                                        <option value="15000">15000</option>
                                                                    </select>
                                                                    <span class="error VoluntaryValueRequired ng-hide" ng-show="VehicleDetailsSubmited & amp; & amp; frmVolValue.VoluntaryValue.$error.required">
                                                                        Voluntary Value required
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                    <div ng-show="VehicleInfoMDL.PolicyType == 'R'" id="previous-policy" class="previous_policy">
                        <h2 class="subheading">Previous Policy Detail</h2>
                        <div class="row AddOnsLabel">
                            <div class="col-md-6 custom-radio">
                                <ng-form name="frmPolicyExpired" class="ng-pristine ng-invalid ng-invalid-required">
                                    <div class="form-group col-md-12">
                                        <label class="control-label col-md-12">Policy Expired ?<span
                                                class="red">*</span></label>
                                        <div class="">
                                            <label for="PolicyExpYes">
                                                <input type="radio" name="PolicyExpired" id="PolicyExpYes"
                                                    value="YES" ng-model="VehicleInfoMDL.PolicyExpired"
                                                    class="PolicyExpired">
                                                Yes
                                            </label>
                                            <label for="PolicyExpNo">
                                                <input type="radio" name="PolicyExpired" id="PolicyExpNo"
                                                    value="NO" ng-model="VehicleInfoMDL.PolicyExpired"
                                                    class="PolicyExpired">
                                                No
                                            </label>
                                            <div class="clearfix"></div>
                                            <span id="PolicyExpired_Required_error" class="error ng-hide"
                                                ng-show="VehicleDetailsSubmited &amp; amp; &amp; amp; frmPolicyExpired.PolicyExpired.$error.required">
                                                Policy Expired required
                                            </span>
                                        </div>
                                    </div>
                                </ng-form>
                            </div>
                            <div class="col-lg-6" id="divHavePrevPolDetail" style="display:none;">
                                <ng-form name="frmHavePreviousPolicyDetail">
                                    <div class="form-group col-md-12">
                                        <label class="control-label col-md-12">Do you remember previous policy
                                            details?<span class="red">*</span></label>
                                        <div class="">
                                            <label for="HavePrevPolDetailYes"><input type="radio"
                                                    name="HavePrevPolDetail" id="HavePrevPolDetailYes" value="YES"
                                                    checked="true">Yes</label>
                                            <label for="HavePrevPolDetailNo"><input type="radio"
                                                    name="HavePrevPolDetail" id="HavePrevPolDetailNo"
                                                    value="NO">No</label>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </ng-form>
                            </div>
                            <div class="col-lg-6 polexptype" id="divPolExpiredType">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <select class="form-control" id="PolExpiredType" name="PolExpiredType">
                                            <option value="" selected="selected">Select</option>
                                            <option value="20">Expired within 90 days</option>
                                            <option class="ng-binding ng-scope" value="25">Expired more than 90 days
                                            </option>
                                        </select>
                                        <label for="PreviousNCB1">Policy Expired Type<span
                                                class="red">*</span></label>
                                        <span class="col-md-12 error ng-hide" id="PolExpiredType_Required_error">Select
                                            Expired Type</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="policy_intents"> -->
                            <div id="divPrevclaim" class="col-md-6 custom-radio ng-hide policy_intents"
                                ng-hide="VehicleInfoMDL.PolicyExpired == 'YES' || VehicleInfoMDL.CoverType == 'L'">
                                <ng-form name="frmClaimPrevious" class="ng-pristine ng-valid ng-valid-required">
                                    <div class="form-group">

                                        <div class="col-md-12">
                                            <label class="control-label col-md-12">Claim in previous year<span
                                                    class="red">*</span></label>
                                            <label for="ClaimYes">
                                                <input type="radio" name="ClaimPrevious" id="ClaimYes"
                                                    value="YES" ng-model="VehicleInfoMDL.AnyClaimed"
                                                    ng-required="VehicleInfoMDL.PolicyExpired =='NO' &amp;&amp; VehicleInfoMDL.PolicyType =='R' &amp;&amp; VehicleInfoMDL.CoverType=='P'"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-required ClaimPrevious">
                                                Yes
                                            </label>
                                            <label for="ClaimNo">
                                                <input type="radio" name="ClaimPrevious" id="ClaimNo"
                                                    value="NO" ng-model="VehicleInfoMDL.AnyClaimed"
                                                    ng-required="VehicleInfoMDL.PolicyExpired =='NO' &amp;&amp; VehicleInfoMDL.PolicyType =='R' &amp;&amp; VehicleInfoMDL.CoverType=='P'"
                                                    class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-required ClaimPrevious">
                                                No
                                            </label>
                                            <div class="clearfix"></div>
                                            <span class="error ClaimPrevious_Required_error ng-hide"
                                                id="ClaimPrevious_Required_error">
                                                Claim in previous year required
                                            </span>
                                        </div>
                                    </div>
                                </ng-form>
                            </div>

                            <!-- <div class="prevoius_ncb_intents"> -->
                            <div id="divPrevNCB" class="col-md-6 ng-hide policy_intents prevoius_ncb_intents"
                                ng-hide="VehicleInfoMDL.PolicyExpired == 'YES' || VehicleInfoMDL.CoverType == 'L' || VehicleInfoMDL.AnyClaimed == 'YES'">
                                <ng-form name="frmPrevNCB" class="ng-pristine ng-valid ng-valid-required">
                                    <div class="form-group">
                                        <div class="col-md-12 form-floating">
                                            <select
                                                class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-required"
                                                id="PreviousNCB" ng-model="VehicleInfoMDL.NCBPer" name="PreviousNCB"
                                                ng-required="VehicleInfoMDL.PolicyType =='R' &amp;&amp; VehicleInfoMDL.PolicyExpired =='NO' &amp;&amp; VehicleInfoMDL.CoverType=='P' &amp;&amp; VehicleInfoMDL.AnyClaimed == 'NO'">
                                                <option value="" selected="selected">Select Previous NCB</option>
                                                <option value="0">0</option>
                                                <option value="20">20</option>
                                                <option value="25">25</option>
                                                <option value="35">35</option>
                                                <option value="45">45</option>
                                                <option value="50">50</option>
                                                <option value="55">55</option>
                                                <option value="65">65</option>
                                            </select>
                                            <label for="PreviousNCB">Previous NCB<span class="red">*</span></label>
                                        </div>
                                        <span class="col-md-12 error ng-hide" id="previous_ncb_error">
                                            Select Previous NCB
                                        </span>
                                    </div>
                                </ng-form>
                            </div>
                            <!-- </div> -->
                            <div class="col-md-6 policy_intents" id="PreviousPolicyExpirydiv">
                                <ng-form name="frmPExpiryDate" ng-hide="VehicleInfoMDL.PolicyExpired == 'YES'"
                                    class="ng-pristine ng-valid ng-valid-required">

                                    <div class="form-group">
                                        <div class="col-md-12 form-floating">
                                            <input type="date" onkeydown="return false" id="PreviousPolicyExpiry"
                                                name="PreviousPolicyExpiry" class="form-control"
                                                style="text-transform:uppercase" placeholder="DD-MM-YYYY"
                                                min="2025-07-05" max="2025-09-03">
                                            <label for="PreviousPolicyExpiry">Previous Policy Expiry Date<span
                                                    class="red">*</span></label>
                                            <div class="clearfix"></div>
                                            <span class="error ng-hide" id="policy_date_error">
                                                Previous Policy Expiry Date is required
                                            </span>
                                            <span class="error prevpolerror" id="spnPreviousPolicyExpiryDate"></span>
                                        </div>
                                    </div>
                                </ng-form>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <!--<div class="Add-ons-IDV" id="Add-ons-IDV">
                                            <h2 class="subheading ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">IDV</h2>
                                            <div class="row AddOnsLabel ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">
                                                <div class="col-md-6 custom-radio">
                                                    <div class="form-group">
                                                        <div class="col-md-12 form-floating">
                                                            <label for="BestIDV">
                                                                <input type="radio" name="IDVradio" id="BestIDV" ng-model="VehicleInfoMDL.IDVradio" value="BestIDV" ng-checked="true" class="bestidv ng-pristine ng-untouched ng-valid ng-empty" checked="checked">
                                                                Best IDV
                                                            </label>
                                                            <label for="CustomIDV">
                                                                <input type="radio" name="IDVradio" id="CustomIDV" ng-model="VehicleInfoMDL.IDVradio" value="GetOwnIDV" class="bestidv ng-pristine ng-untouched ng-valid ng-empty"  disabled="disabled" >
                                                                Custom IDV
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caridvdiv" class="col-md-6 ng-hide" ng-show="VehicleInfoMDL.IDVradio == 'GetOwnIDV'">
                                                    <div class="form-group">
                                                        <ng-form name="frmSelectedIDV" class="ng-pristine ng-valid ng-valid-maxlength ng-valid-required">
                                                            <div class="col-md-12">
                                                                <label for="IDV" class="custom-label">Enter IDV</label>
                                                                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength ng-valid-required" name="SelectedIDV" ng-model="VehicleInfoMDL.SelectedIDV" id="IDV" placeholder="IDV" value-type="int" onpaste="return false" autocomplete="nope" maxlength="9" ng-required="VehicleInfoMDL.IDVradio=='GetOwnIDV'" ng-trim="true">

                                                                <span class="error ng-hide" ng-show="VehicleDetailsSubmited & amp; & amp; frmSelectedIDV.SelectedIDV.$error.required">
                                                                    IDV is required
                                                                </span>
                                                                <span class="error ng-hide" ng-show="VehicleDetailsSubmited & amp; & amp; !frmSelectedIDV.SelectedIDV.$error.required & amp; & amp; !frmSelectedIDV.SelectedIDV.$valid">
                                                                    Please enter valid IDV
                                                                </span>
                                                                <span id="spnErrorSelectedIDV" class="error ng-hide" ng-show="!RangeCheckIDV"></span>
                                                            </div>
                                                        </ng-form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>-->
                </div>
                <div class="clearfix"></div>
                <div class="jti-fy pt-3 border-decl" id="chkQuoteDeclaration_div" style="display:none;">
                    <label for="chkQuoteDeclaration" class="col-md-12">
                        <input type="checkbox" id="chkQuoteDeclaration" name="chkQuoteDeclaration" value="1"
                            ng-model="chkQuoteDeclaration" required=""
                            class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required">
                        I / We declare that the rate of NCB claimed by me / us is correct and that no claim has arisen in
                        the
                        expiring policy period. I / We further undertake that if this declaration is found to be incorrect,
                        all
                        benefits under the policy in respect of Section I of the Policy will stand forfeited.
                    </label>
                </div>
                <div class="text-end">
                    <button class="btn btn-primary getQuoteBtn btn-bg-color position-sticky" type="button"
                        ng-click="VehicleDetailSave()" rel="VehicleDetails" data-focus="VehicleDetails"
                        data-id="2" id="getQuotebtn"><i class="icon-next"></i> Get Quotes</button>
                </div>
            </div>
        </form>
    </div>
@endsection
