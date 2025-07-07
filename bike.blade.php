@extends('layouts.auth_page')
@section('content')
    <div class="container">
        <br><br>
        <br>
 <form class="BikeDetailsForm ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength"
        id="frmBikeDetails" name="frmBikeDetails" style="">
        <input type="hidden" id="quoteId" name="quoteId" value="6840" class="quoteId" autocomplete="off">
        <input type="hidden" id="pdic" name="pdic" value="" autocomplete="off">
        <input type="hidden" id="isRenewal" name="isRenewal" value="" autocomplete="off">
        <input type="hidden" id="PrevPolicyType" name="PrevPolicyType" value="" autocomplete="off">
        <input type="hidden" id="renewalICCode" name="renewalICCode" value="">
        <input type="hidden" id="renewalLookForOtherIC" name="renewalLookForOtherIC" value="false">
        <input type="hidden" id="custom_idv" name="custom_idv" value="" autocomplete="off">
        <textarea name="globalIdv" id="globalIdv" hidden=""></textarea>
        <input type="hidden" id="isTransferVehicle" name="isTransferVehicle" value="No" autocomplete="off">
        <input type="hidden" id="isPolicyTypeBreaking" name="isPolicyTypeBreaking" value="No" autocomplete="off">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding0  mr8rem">
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
                            <div class="form-float mb-3">
                                <label class="control-label col-md-12">Policy<span class="red">*</span></label>
                                <div class="col-md-12">
                                    <label class="mr-r8">
                                        <input type="radio" name="PolicyType" id="renew" value="renew" required=""
                                            checked="">
                                        Renew
                                    </label>
                                    <label class="mr-r8">
                                        <input type="radio" name="PolicyType" id="new" value="new"
                                            required="">
                                        New
                                    </label>
                                    <div class="clearfix"></div>
                                    <span class="error ng-hide"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmPolicyType.PolicyType.$error.required">
                                        Policy required
                                    </span>
                                </div>
                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6 custom-radio">
                        <ng-form name="frmProposarType">
                            <div class="form-float mb-3">
                                <label class="control-label col-md-12">Proposer<span class="red">*</span></label>
                                <div class="col-md-12">
                                    <label for="individual" class="mr-r8">
                                        <input type="radio" name="ProposarType" id="individual" value="individual"
                                            required="" checked="">
                                        Individual
                                    </label>
                                    <label for="corporate" class="mr-r8">
                                        <input type="radio" name="ProposarType" id="corporate" value="corporate"
                                            required="">
                                        Corporate
                                    </label>
                                    <div class="clearfix"></div>
                                    <span class="error ng-hide"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmProposarType.ProposarType.$error.required">
                                        Proposer required
                                    </span>
                                </div>
                            </div>
                        </ng-form>
                    </div>
                </div>
                <div class="clearfix"></div>
                <h2 class="subheading" style="display:none;">Policy Tenure</h2>
                <div class="row">
                    <div class="col-md-6" style="display:none;">
                        <div class="form-float mb-3">
                            <div class="col-md-12">
                                <label for="PolicyTenure" class="custom-label">Policy Tenure</label>
                                <select>
                                    <option label="1 year" value="1" selected="selected">1 year</option>
                                    <option label="2 year" value="2">2 year</option>
                                    <option label="3 year" value="3">3 year</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 custom-radio">
                        <ng-form name="frmPCoverType">
                            <div class="form-float mb-3">
                                <label class="control-label col-md-12">Policy Cover<span class="red">*</span></label>
                                <div class="col-md-12">
                                    <label for="rdoP" class="mr-r8">
                                        <input type="radio" name="CoverType" id="rdoP" class=""
                                            value="policy-comprehensive">
                                        Comprehensive
                                    </label>
                                    <label for="rdoL" class="mr-r8">
                                        <input type="radio" name="CoverType" id="TPOnly" class=""
                                            value="policy-tp" checked="">
                                        Third Party Only
                                    </label>
                                    <label for="od" id="ODOnlyLabel">
                                        <input type="radio" name="CoverType" id="ODOnly" class=""
                                            value="policy-od">
                                        Own Damage Only
                                    </label>
                                    <div class="clearfix"></div>
                                    <span class="error ng-hide"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmPCoverType.CoverType.$error.required">
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
                        <ng-form name="frmMake" class="ng-pristine ng-invalid ng-invalid-required">
                            <div class=" mb-3">
                                <div class="col-md-12 form-floating">
                                    <select
                                        class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                        id="Make" name="Make" ng-model="BikeInfoMDL.MakeId"
                                        ng-change="GetModel(false)" ng-options="n.Value as n.Text for n in MakeList"
                                        required="" data-make-id="10" data-model-id="100" data-varient-id="417">
                                        <option value="" disabled="disabled">Select Manufacturer</option>
                                        <option value="10" class="">HERO MOTOCORP</option>
                                        <option value="2" class="">BAJAJ</option>
                                        <option value="11" class="">HONDA</option>
                                        <option value="26" class="">TVS</option>
                                        <option value="30" class="">YAMAHA</option>
                                        <option value="22" class="">SUZUKI</option>
                                        <option value="21" class="">ROYAL ENFIELD</option>
                                        <option value="37" class="">HERO HONDA</option>
                                        <option value="2509" class="">KINETIC GREEN</option>
                                        <option value="61" class="">AMPERE</option>
                                        <option value="1" class="">APRILIA</option>
                                        <option value="40" class="">ATHER ENERGY</option>
                                        <option value="102" class="">ATUMMOBILE</option>
                                        <option value="50" class="">AVAN MOTORS</option>
                                        <option value="53" class="">AVERA ELECTRIC VEHICLE</option>
                                        <option value="56" class="">AVON CYCLES LTD</option>
                                        <option value="72" class="">BAHUBALI</option>
                                        <option value="103" class="">BALAJI</option>
                                        <option value="77" class="">BATTRE</option>
                                        <option value="3" class="">BENELLI</option>
                                        <option value="85" class="">BENLING INDIA</option>
                                        <option value="93" class="">BHARATHI BUSINESS MACHINES</option>
                                        <option value="34" class="">BIG DOG</option>
                                        <option value="4" class="">BMW</option>
                                        <option value="2508" class="">BSA</option>
                                        <option value="5" class="">CAGIVA</option>
                                        <option value="108" class="">CASE NEW HOLLAND INDIA PVT LTD</option>
                                        <option value="33" class="">CLEVELAND CYCLEWERKS</option>
                                        <option value="63" class="">CRAYON MOTORS PVT LTD</option>
                                        <option value="78" class="">DEXPRESS</option>
                                        <option value="106" class="">DIWA E VEHICLE</option>
                                        <option value="91" class="">DMW</option>
                                        <option value="6" class="">DUCATI</option>
                                        <option value="2221" class="">E SPRINTO</option>
                                        <option value="86" class="">ECO FUEL SYSTEMS PVT LTD</option>
                                        <option value="107" class="">EDRIVE</option>
                                        <option value="65" class="">ELECTRECA VEHICLES</option>
                                        <option value="41" class="">ELECTROTHERM</option>
                                        <option value="73" class="">EVOLET</option>
                                        <option value="7" class="">FAB MOTORS</option>
                                        <option value="95" class="">FIADO</option>
                                        <option value="105" class="">FIDATO</option>
                                        <option value="96" class="">FIRST BIKE</option>
                                        <option value="82" class="">GALLANT</option>
                                        <option value="8" class="">GLOBAL AUTOMOBILES</option>
                                        <option value="75" class="">GOREEN E MOBILITY PVT LTD</option>
                                        <option value="94" class="">GT FORCE</option>
                                        <option value="9" class="">HARLEY DAVIDSON</option>
                                        <option value="42" class="">HERO ELECTRIC</option>
                                        <option value="62" class="">Hester</option>
                                        <option value="35" class="">HUSQVARNA</option>
                                        <option value="12" class="">HYOSUNG</option>
                                        <option value="13" class="">INDIAN MOTORCYCLE</option>
                                        <option value="32" class="">JAWA</option>
                                        <option value="51" class="">JITENDRA ELECTRIC VEHICLE</option>
                                        <option value="83" class="">JOY E BIKE</option>
                                        <option value="14" class="">KAWASAKI</option>
                                        <option value="15" class="">KINETIC</option>
                                        <option value="121" class="">KK AGRO</option>
                                        <option value="76" class="">KOMAKI</option>
                                        <option value="16" class="">KTM</option>
                                        <option value="98" class="">KYTE</option>
                                        <option value="43" class="">LAMBRETTA</option>
                                        <option value="101" class="">LI IONS ELEKTRIK SOLUTIONS</option>
                                        <option value="17" class="">LML</option>
                                        <option value="44" class="">LOHIA AUTO</option>
                                        <option value="2507" class="">LORDS AUTOMATIVE</option>
                                        <option value="80" class="">LUNDAFEI</option>
                                        <option value="55" class="">MAC</option>
                                        <option value="18" class="">MAHINDRA</option>
                                        <option value="74" class="">MANTRA E BIKES</option>
                                        <option value="52" class="">MOBYCY</option>
                                        <option value="19" class="">MONTO</option>
                                        <option value="71" class="">MUDIT SR RONGDA</option>
                                        <option value="47" class="">NDS ECO MOTORS</option>
                                        <option value="88" class="">NEXZU MOBILITY PVT LTD</option>
                                        <option value="68" class="">NSW E VEHICLES</option>
                                        <option value="36" class="">ODYSSE</option>
                                        <option value="46" class="">OKINAWA</option>
                                        <option value="2222" class="">OLA ELECTRIC</option>
                                        <option value="69" class="">OMJAY EV LTD</option>
                                        <option value="90" class="">OREVA</option>
                                        <option value="45" class="">PIAGGIO</option>
                                        <option value="104" class="">PROSSPA E SCOOOTY</option>
                                        <option value="70" class="">PURE ELECTRIC VEHICLES</option>
                                        <option value="49" class="">RAFT MOTORS</option>
                                        <option value="57" class="">RAFTAAR</option>
                                        <option value="20" class="">REGAL RAPTOR</option>
                                        <option value="38" class="">REVOLT</option>
                                        <option value="100" class="">SAHARA EVOLS</option>
                                        <option value="60" class="">SBTEK E MOTO PVT LTD</option>
                                        <option value="92" class="">SERA ELECTRIC AUTO PVT LTD</option>
                                        <option value="84" class="">SPEEGO</option>
                                        <option value="59" class="">SUPER ECO</option>
                                        <option value="81" class="">SUPERTECH</option>
                                        <option value="39" class="">SV MOTORS</option>
                                        <option value="23" class="">SYM</option>
                                        <option value="24" class="">TERRA MOTORS</option>
                                        <option value="97" class="">THUKRAL ELECTRIC</option>
                                        <option value="79" class="">TNR</option>
                                        <option value="87" class="">TOXMO ELECTRIC PVT LTD</option>
                                        <option value="25" class="">TRIUMPH</option>
                                        <option value="48" class="">TUNWAL</option>
                                        <option value="66" class="">UCE</option>
                                        <option value="67" class="">UJAAS ENERGY LTD</option>
                                        <option value="27" class="">UM GLOBAL</option>
                                        <option value="54" class="">UMA AUTO INDUSTRIES</option>
                                        <option value="64" class="">UP TELELINKS LTD</option>
                                        <option value="28" class="">VIBGYOR</option>
                                        <option value="29" class="">VICTORY</option>
                                        <option value="99" class="">VIERTRIC MOTORS</option>
                                        <option value="89" class="">VIKRAM</option>
                                        <option value="31" class="">YEZDI</option>
                                        <option value="58" class="">YUKIE</option>
                                    </select>
                                    <span class="error ng-hide"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmMake.Make.$error.required">
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
                            <div class=" mb-3">
                                <div class="col-md-12 form-floating">
                                    <select
                                        class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                        id="Model" name="Model" ng-model="BikeInfoMDL.ModelId"
                                        ng-change="GetVarient(false)" ng-options="n.Value as n.Text for n in ModelList"
                                        required="">
                                        <option value="">Select Vehicle Model</option>
                                        <option value="74">ACHIEVER</option>
                                        <option value="79">CBZ X-TREME</option>
                                        <option value="81">CD DAWN</option>
                                        <option value="82">CD DELUXE</option>
                                        <option value="365">DESTINI 125</option>
                                        <option value="364">DUET</option>
                                        <option value="369">GIZMO</option>
                                        <option value="83">GLAMOUR</option>
                                        <option value="85">GLAMOUR FI</option>
                                        <option value="84">GLAMOUR I3S</option>
                                        <option value="87">GLAMOUR SX</option>
                                        <option value="14859">HARLEY DAVIDSON X440</option>
                                        <option value="703">HF 100</option>
                                        <option value="88">HF DAWN</option>
                                        <option value="89">HF DELUXE</option>
                                        <option value="90">HF DELUXE I3S</option>
                                        <option value="91">HUNK</option>
                                        <option value="92">IGNITOR</option>
                                        <option value="93">IMPULSE</option>
                                        <option value="94">JOY</option>
                                        <option value="95">KARIZMA</option>
                                        <option value="366">MAESTRO</option>
                                        <option value="367">MAESTRO EDGE</option>
                                        <option value="14863">MAVRICK 440</option>
                                        <option value="370">PANTHER</option>
                                        <option value="96">PASSION</option>
                                        <option value="97">PASSION PLUS</option>
                                        <option value="98">PASSION PLUS I3S</option>
                                        <option value="99">PASSION PRO</option>
                                        <option value="100" selected="selected">PASSION PRO I3S</option>
                                        <option value="101">PASSION XPRO</option>
                                        <option value="8362">PASSION XTEC</option>
                                        <option value="368">PLEASURE</option>
                                        <option value="113">PLEASURE PLUS</option>
                                        <option value="8361">PLEASURE PLUS XTEC</option>
                                        <option value="372">PUCH</option>
                                        <option value="102">SLEEK</option>
                                        <option value="103">SPLENDOR</option>
                                        <option value="104">SPLENDOR ISMART</option>
                                        <option value="105">SPLENDOR NXG</option>
                                        <option value="106">SPLENDOR PLUS</option>
                                        <option value="107">SPLENDOR PLUS I3S</option>
                                        <option value="11863">SPLENDOR PLUS X-TECH</option>
                                        <option value="108">SPLENDOR PRO</option>
                                        <option value="371">STREET</option>
                                        <option value="109">SUPER SPLENDOR</option>
                                        <option value="110">SUPER SPLENDOR I3S</option>
                                        <option value="112">X PULSE</option>
                                        <option value="11862">XOOM 110</option>
                                        <option value="14864">XOOM 125</option>
                                        <option value="14865">XOOM 160</option>
                                        <option value="14866">XPULSE 210</option>
                                        <option value="111">XTREME</option>
                                        <option value="11867">XTREME 125R</option>
                                        <option value="14867">XTREME 250R</option>
                                    </select> <span class="error ng-hide"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmModel.Model.$error.required">
                                        Select Model
                                    </span>
                                    <span class="error" id="model_field_error">Please Select Model.</span>
                                    <label for="Model">Model<span class="red">*</span></label>

                                </div>

                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6" style="display:none;">
                        <ng-form name="frmFuelType" class="ng-pristine ng-valid">
                            <div class=" mb-3">
                                <div class="col-md-12 form-floating">
                                    <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                        name="FuelType" id="FuelType" ng-model="BikeInfoMDL.FuelType" value="">
                                    <span class="error" id="fuel_field_error">Please Select Fuel.</span>
                                    <label for="FuelType">Fuel Type<span class="red">*</span></label>

                                </div>

                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6">
                        <ng-form name="frmVarient" class="ng-pristine ng-invalid ng-invalid-required">
                            <div class=" mb-3">
                                <div class="col-md-12 form-floating">
                                    <select
                                        class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                        name="Varient" id="Varient" ng-model="BikeInfoMDL.VehicleMMVInfoId"
                                        ng-options="n.Item1 as n.Item2 +' '+n.Item3 +' CC'  for n in VarientList"
                                        required="">
                                        <option value="">Select Vehicle Varient</option>
                                        <option value="417" selected="selected" style="font-weight:600">SELF ST CAST
                                        </option>
                                        <option value="2158" style="font-weight:600">DRUM I3S IBS</option>
                                        <option value="421" style="font-weight:600">IBS DISC BRAKE</option>
                                        <option value="419" style="font-weight:600">IBS DRUM BRAKE</option>
                                        <option value="3095" style="font-weight:600">SELF DISC ALLOY</option>
                                        <option value="3096" style="font-weight:600">SELF DRUM ALLOY</option>
                                        <option value="2321" style="font-weight:600">SELF DRUM ALLOY IBS</option>
                                        <option value="2322" style="font-weight:600">SELF DRUM ALLOY IBS BS VI</option>
                                        <option value="2323" style="font-weight:600">SELF DRUM SPOKE</option>
                                        <option value="418" style="font-weight:600">SELF ST DISC BRAKE</option>
                                        <option value="2471" style="font-weight:600">110 CC I3S SELF START DISC BRAKE
                                            ALLOY WHEEL</option>
                                        <option value="2472" style="font-weight:600">110 CC I3S SELF START DRUM BRAKE
                                            ALLOY WHEEL</option>
                                        <option value="425" style="">DISC BSVI</option>
                                        <option value="424" style="">DRUM BSVI</option>
                                        <option value="2316" style="">DSS</option>
                                        <option value="3092" style="">DRS</option>
                                        <option value="4151" style="">I3S</option>
                                    </select>
                                    <span class="error ng-hide"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmVarient.Varient.$error.required">
                                        Select Variant
                                    </span>
                                    <span class="error" id="variant_field_error">Please Select Variant.</span>
                                    <label for="Varient">Variant<span class="red">*</span></label>

                                </div>
                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6">
                        <ng-form name="frmInvoiceDate" class="ng-pristine ng-invalid ng-invalid-required">
                            <div class="mb-3">
                                <div class="col-md-12 form-floating ">
                                    <input type="date" onkeydown="return false" id="VehicleInvoiceDate"
                                        name="VehicleInvoiceDate" class="form-control" style="text-transform:uppercase"
                                        placeholder="DD-MM-YYYY" max="2024-09-03" min="2005-07-05">
                                    <span class="error ng-hide" id="invoice_date_field_error"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmInvoiceDate.InvoiceDate.$error.required">
                                        Vehicle Invoice Date required
                                    </span>
                                    <span class="error ng-hide" id="invoice_date_invalid_date_error">
                                        Please enter valid Invoice Date
                                    </span>
                                    <label for="VehicleInvoiceDate">Vehicle Registration Date<span
                                            class="red">*</span></label>

                                </div>
                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6">
                        <ng-form name="frmManufactureDate" class="ng-pristine ng-invalid ng-invalid-required">
                            <div class=" mb-3">
                                <div class="col-md-12 form-floating">
                                    <input type="month" id="vehicleManufactureDate" name="vehicleManufactureDate"
                                        class="form-control" onkeydown="return false" style="text-transform:uppercase"
                                        placeholder="MM-YYYY" min="2016-05" max="2017-05">
                                    <span class="error ng-hide" id="manufacture_date_field_error"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; vehicleManufactureDate.InvoiceDate.$error.required">
                                        Vehicle Manufacture Date required
                                    </span>
                                    <label for="vehicleManufactureDate">Vehicle Manufacture Date<span
                                            class="red">*</span></label>

                                </div>
                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="col-md-12 form-floating ">
                                <input type="text" name="registrationNo" id="registrationNo"
                                    class="form-control text-uppercase input_capital" value-type="alphaNumeric"
                                    value="" capitalize="" maxlength="14" limit-to="10"
                                    placeholder="For e.g. MH02CJ8888" required="" autocomplete="off">
                                <span class="col-md-12 error ng-hide" id="registrationNo_Required_error">
                                    Registration Number required
                                </span>
                                <span class="col-md-12 error ng-hide" id="registrationNo_error"
                                    ng-show="PropSubmited &amp;&amp; !frmRegNo.RegNo.$error.required &amp;&amp; !frmRegNo.RegNo.$valid">
                                    Please enter valid Registration Number
                                </span>
                                <label for="registrationNo">Registration Number<span
                                        class="red PolicyTypeR">*</span></label>

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div id="previous-policy">
                    <h2 class="subheading">Previous Policy Detail</h2>
                    <div class="row AddOnsLabel">
                        <div class="col-md-6 custom-radio">
                            <ng-form name="frmPolicyExpired">
                                <div class="form-floating mb-3">
                                    <div class="col-md-12">
                                        <label class="col-lg-12 control-label">Policy Expired ?<span
                                                class="red">*</span></label>
                                        <label for="PolicyExpYes">
                                            <input type="radio" name="PolicyExpired" id="PolicyExpYes" value="YES">
                                            Yes
                                        </label>
                                        <label for="PolicyExpNo">
                                            <input type="radio" name="PolicyExpired" id="PolicyExpNo" value="NO">
                                            No
                                        </label>
                                        <div class="clearfix"></div>
                                        <span class="error ng-hide" id="PolicyExpired_Required_error"
                                            ng-show="VehicleDetailsSubmited &amp;&amp; frmPolicyExpired.PolicyExpired.$error.required">
                                            Policy Expired required
                                        </span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-lg-6" id="divHavePrevPolDetail" style="">
                            <ng-form name="frmHavePreviousPolicyDetail">
                                <div class="form-floating mb-3">
                                    <div class="col-md-12">
                                        <label class="control-label col-md-12">Do you remember previous policy
                                            details?<span class="red">*</span></label>
                                        <label for="HavePrevPolDetailYes"><input type="radio" name="HavePrevPolDetail"
                                                id="HavePrevPolDetailYes" value="YES" checked="true">Yes</label>
                                        <label for="HavePrevPolDetailNo"><input type="radio" name="HavePrevPolDetail"
                                                id="HavePrevPolDetailNo" value="NO">No</label>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-lg-6 polexptype" id="divPolExpiredType" style="display: block;">
                            <div class=" mb-3">
                                <div class="form-floating col-md-12">
                                    <select
                                        class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-required"
                                        id="PreviousNCB1" name="PreviousNCB1">
                                        <option value="" selected="selected" disabled="disabled">Select</option>
                                        <!-- ngRepeat: n in NCBList -->
                                        <option placeholder="--Select Previous NCB--" value="20">Expired within 90
                                            days</option><!-- end ngRepeat: n in NCBList -->
                                        <option ng-repeat="n in NCBList" placeholder="--Select Previous NCB--"
                                            ng-value="n.Value" class="ng-binding ng-scope" value="25">Expired more
                                            than 90 days</option><!-- end ngRepeat: n in NCBList -->
                                    </select>
                                    <label for="PreviousNCB1">Policy Expired Type<span class="red">*</span></label>
                                    <span class="col-md-12 error ng-hide" id="PreviousNCB1_Required_error">Select Expired
                                        Type</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 custom-radio policy_intents policy-expired" id="divPrevclaim"
                            style="display: none;">
                            <ng-form name="frmClaimPrevious">
                                <div class="form-floating mb-3">
                                    <div class="col-md-12 ">
                                        <label class="control-label col-md-12">Claim in previous year<span
                                                class="red">*</span></label>
                                        <label for="ClaimYes"><input type="radio" name="ClaimPrevious" id="ClaimYes"
                                                value="YES">Yes</label>
                                        <label for="ClaimNo"><input type="radio" name="ClaimPrevious" id="ClaimNo"
                                                value="NO">No</label>
                                        <div class="clearfix"></div>
                                        <span class="error ng-hide" id="ClaimPrevious_Required_error">
                                            Claim in previous year required
                                        </span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-lg-6 policy_intents policy-expired" id="divPrevNCB" style="display: none;">
                            <div class=" mb-3">
                                <div class="col-md-12 form-floating">
                                    <select
                                        class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-required"
                                        id="PreviousNCB" name="PreviousNCB">
                                        <option value="" selected="selected" disabled="disabled">Select Previous
                                            NCB</option>
                                        <option value="0">0</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="35">35</option>
                                        <option value="45">45</option>
                                        <option value="50">50</option>
                                        <option value="55">55</option>
                                        <option value="65">65</option>
                                    </select>
                                    <span class="col-md-12 error ng-hide" id="previous_ncb_error">Select Previous
                                        NCB</span>
                                    <label for="PreviousNCB">Previous NCB<span class="red">*</span></label>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 policy_intents previous-expiry" id="divPrevExpiry" style="display: block;">
                            <div class=" mb-3">
                                <div class="col-md-12 form-floating">
                                    <input type="date" onkeydown="return false" id="PreviousPolicyExpiry"
                                        name="PreviousPolicyExpiry" style="text-transform:uppercase" class="form-control"
                                        placeholder="DD-MM-YYYY" min="2017-01-01" max="2025-04-06">
                                    <span class="error ng-hide" id="policy_date_error">
                                        Previous Policy Expiry Date is required
                                    </span>
                                    <span class="error" id="spnPreviousPolicyExpiryDate"></span>
                                    <div class="prevpolerror error">Previous Policy Expiry Date not less than 1-Sep-2021
                                    </div>
                                    <label for="PreviousPolicyExpiry" id="PrevPolicyLabel">Previous Policy Expiry
                                        Date<span class="red">*</span></label>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 PolicyTypeOD" style="display:none">
                            <ng-form name="PP_OD_START_DATE" class="">
                                <div class="form-floating mb-3">
                                    <div class="col-md-12 form-floating">
                                        <input type="date" name="PP_OD_START_DATE" id="PP_OD_START_DATE"
                                            class="form-control" onkeydown="return false"
                                            style="text-transform:uppercase" placeholder="DD-MM-YYYY" min="2020-07-05"
                                            max="2025-09-03">
                                        <label for="PP_OD_START_DATE" id="OdStartLabel">Previous Policy OD Start Date<span
                                                class="red">*</span></label>
                                        <span class="error ng-hide" id="PP_OD_START_DATE_Field_Error">
                                            Previous Policy OD Start Date is required
                                        </span>
                                        <span class="error ng-hide" id="PP_OD_START_DATE_Invalid_Error">
                                            Please enter valid Previous Policy OD Start Date
                                        </span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6 PolicyTypeOD" style="display:none">
                            <ng-form name="PP_OD_END_DATE" class="">
                                <div class=" mb-3">
                                    <div class="col-md-12 form-floating">
                                        <input type="date" name="PP_OD_END_DATE" id="PP_OD_END_DATE"
                                            class="form-control" onkeydown="return false"
                                            style="text-transform:uppercase" placeholder="DD-MM-YYYY" min="2024-07-05"
                                            max="2025-09-03" readonly="">
                                        <label for="PP_OD_END_DATE" id="OdEndLabel">Previous Policy OD End Date<span
                                                class="red">*</span></label>
                                        <span class="error ng-hide" id="PP_OD_END_DATE_Field_Error">
                                            Previous Policy OD End Date is required
                                        </span>
                                        <span class="error ng-hide" id="PP_OD_END_DATE_Invalid_Error">
                                            Please enter valid Previous Policy OD End Date
                                        </span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6 PolicyTypeOD" style="display:none">
                            <ng-form name="PP_TP_START_DATE" class="">
                                <div class=" mb-3">
                                    <div class="col-md-12 form-floating">
                                        <input type="date" name="PP_TP_START_DATE" id="PP_TP_START_DATE"
                                            class="form-control" onkeydown="return false"
                                            style="text-transform:uppercase" placeholder="DD-MM-YYYY" min="2020-07-05"
                                            max="2024-10-05">
                                        <label for="PP_TP_START_DATE" id="TpStartLabel">Previous Policy TP Start Date<span
                                                class="red">*</span></label>
                                        <span class="error ng-hide" id="PP_TP_START_DATE_Field_Error">
                                            Previous Policy TP Start Date is required
                                        </span>
                                        <span class="error ng-hide" id="PP_TP_START_DATE_Invalid_Error">
                                            Please enter valid Previous Policy TP Start Date
                                        </span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6 PolicyTypeOD" style="display:none">
                            <ng-form name="PP_TP_END_DATE" class="">
                                <div class=" mb-3">
                                    <div class="col-md-12 form-floating">
                                        <input type="date" name="PP_TP_END_DATE" id="PP_TP_END_DATE"
                                            class="form-control" onkeydown="return false"
                                            style="text-transform:uppercase" placeholder="DD-MM-YYYY" min="2024-07-05"
                                            max="2029-10-05" readonly="">
                                        <label for="PP_TP_END_DATE" id="TpEndLabel">Previous Policy TP End Date<span
                                                class="red">*</span></label>
                                        <span class="error ng-hide" id="PP_TP_END_DATE_Field_Error">
                                            Previous Policy TP End Date is required
                                        </span>
                                        <span class="error ng-hide" id="PP_TP_END_DATE_Invalid_Error">
                                            Please enter valid Previous Policy TP End Date
                                        </span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                    </div>
                </div>

                <div id="additional-covers">
                    <h2 class="subheading" ng-show="BikeInfoMDL.proposerType =='I'">Additional Covers</h2>
                    <div class="row AddOnsLabel">
                        <div class="col-md-6" id="paCoverCont">
                            <div class="form-floating mb-3">
                                <div class="col-md-12">
                                    <label for="CPARequired" class="col-xs-12 col-md-12"
                                        title="An accident cover which provides financial assistance to the bike's owner in case of disablement or death due to an accident. Every individual vehicle owner must opt for this cover as per IRDAI guidelines, except for those without a driving license or having an existing Personal Accident cover of at least Rs. 15 lakhs.">
                                        <input type="checkbox" id="CPARequired" name="CPARequired" checked="">
                                        Owner Driver Personal Accident Cover
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">

                                <div class="col-md-12">
                                    <label class="control-label col-md-12">Do You Want to Restrict Third Party Property
                                        Damage?<span class="red">*</span></label>
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
                <div class="clearfix"></div>
                <div class="addonstab" id="Add-ons-IDV" style="display: block;">
                    <h2 class="subheading ng-hide">Add-ons</h2>
                    <div class="row AddOnsLabel ng-hide">
                        <div class="col-md-12 zdep" id="addonzdep">
                            <div class="form-floating mb-3">
                                <div class="col-md-12">
                                    <label for="ZeroDep" class="col-xs-12 col-md-4">
                                        <input type="checkbox" id="ZeroDep" name="ZeroDep">
                                        Zero Dep
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row AddOnsLabel ng-hide">
                        <div class="col-md-12 ">
                            <div class="form-floating mb-3 zdep_pp">
                                <div class="col-md-12">
                                    <label for="ZeroDep1" class="col-xs-12 col-md-4">
                                        <input type="checkbox" id="ZeroDep1" name="ZeroDep1">
                                        Zero Dep in previous policy
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="jti-fy pt-3 border-decl" id="chkQuoteDeclaration_div" style="display:none;">
                <label for="chkQuoteDeclaration" class="col-md-12">
                    <input type="checkbox" id="chkQuoteDeclaration" name="chkQuoteDeclaration" value="1"
                        ng-model="chkQuoteDeclaration" required=""
                        class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required">
                    I / We declare that the rate of NCB claimed by me / us is correct and that no claim has arisen in the
                    expiring policy period. I / We further undertake that if this declaration is found to be incorrect, all
                    benefits under the policy in respect of Section I of the Policy will stand forfeited.
                </label>
            </div>

            <div class="text-end">
                <button class="btn btn-primary getQuoteBtn btn-bg-color" type="button" ng-click="VehicleDetailSave()"
                    rel="VehicleDetails" data-focus="VehicleDetails" data-id="2" id="getQuotebtn"><i
                        class="icon-next"></i> Get Quotes</button>
            </div>
        </div>
    </form>
    </div>
   
@endsection
