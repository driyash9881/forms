@extends('layouts.auth_page')
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <br>
 <form
        class="VehicleDetailsForm ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength ng-valid-min ng-valid-minlength"
        id="frmVehicleDetails" name="frmVehicleDetails" style="">
        <input type="hidden" id="VehicleFullName" name="VehicleFullName" value="">
        <input type="hidden" id="quoteId" name="quoteId" value="6838" class="quoteId" autocomplete="off">
        <input type="hidden" id="pdic" name="pdic" value="" autocomplete="off">
        <input type="hidden" id="custom_idv" name="custom_idv" value="" autocomplete="off">
        <textarea name="globalIdv" id="globalIdv" hidden=""></textarea>
        <input type="hidden" id="PrevPolicyType" name="PrevPolicyType" value="" autocomplete="off">
        <input type="hidden" id="isTransferVehicle" name="isTransferVehicle" value="No" autocomplete="off">
        <input type="hidden" id="isPreElectricAcc" name="isPreElectricAcc" value="Yes" autocomplete="off">
        <input type="hidden" id="isPreNonElectricAcc" name="isPreNonElectricAcc" value="Yes" autocomplete="off">
        <input type="hidden" id="isPreviousCNG" name="isPreviousCNG" value="Yes" autocomplete="off">
        <input type="hidden" name="digit_zero_dep_claim" value="">
        <div class=" padding0 mr8rem">
            <h1><span class="StepNo">1</span> Basic Detail</h1>
            <div class="form-horizontal">
                <div class="row">
                    <div class="col-md-6 custom-radio">
                        <ng-form name="frmPolicyType" class="ng-pristine ng-valid ng-valid-required">
                            <div class="form-group">
                                <label class="control-label col-md-12">Policy<span class="red">*</span></label>
                                <div class="col-md-12">
                                    <label for="renew" class="radiolbl mr-r8">
                                        <input checked="" type="radio" name="PolicyType" id="renew" value="renew"
                                            required=""
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
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmPolicyType.PolicyType.$error.required">
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
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmProposarType.ProposarType.$error.required">
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
                                <label class="control-label col-md-12">Policy Cover<span class="red">*</span></label>
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
                                    <label for="ODOnly" id="ODOnlyLabel">
                                        <input type="radio" name="CoverType" id="ODOnly" class=""
                                            value="policy-od">
                                        Own Damage Only
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
                        <ng-form name="frmMake" class="ng-pristine ng-invalid ng-invalid-required">
                            <div class="form-floating">
                                <select
                                    class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                    id="Make" name="Make" ng-model="VehicleInfoMDL.MakeId"
                                    ng-change="GetModel(false)" ng-options="n.Value as n.Text for n in MakeList"
                                    required="" data-make-id="79" data-model-id="741" data-fueltype-id="DIESEL"
                                    data-varient-id="7531">
                                    <option value="">Select Manufacturer</option>
                                    <option value="26" class="">
                                        MARUTI SUZUKI</option>
                                    <option value="18" class="">
                                        HYUNDAI</option>
                                    <option value="79" class="">
                                        KIA</option>
                                    <option value="41" class="">
                                        TATA</option>
                                    <option value="23" class="">
                                        MAHINDRA AND MAHINDRA</option>
                                    <option value="42" class="">
                                        TOYOTA</option>
                                    <option value="16" class="">
                                        HONDA</option>
                                    <option value="14" class="">
                                        FORD</option>
                                    <option value="32" class="">
                                        NISSAN MOTORS</option>
                                    <option value="37" class="">
                                        RENAULT</option>
                                    <option value="39" class="">
                                        SKODA</option>
                                    <option value="43" class="">
                                        VOLKSWAGEN</option>
                                    <option value="46" class="">
                                        JEEP</option>
                                    <option value="83" class="">
                                        MORRIS GARAGES</option>
                                    <option value="45" class="">
                                        ISUZU</option>
                                    <option value="133" class="">
                                        CITROEN</option>
                                    <option value="28" class="">
                                        MERCEDES-BENZ</option>
                                    <option value="5" class="">
                                        BMW</option>
                                    <option value="3" class="">
                                        AUDI</option>
                                    <option value="82" class="">
                                        AC SIX</option>
                                    <option value="115" class="">
                                        ALDER</option>
                                    <option value="1" class="">
                                        ALFA ROMEO</option>
                                    <option value="109" class="">
                                        ALVIS</option>
                                    <option value="100" class="">
                                        AMERICAN LAFRANCE</option>
                                    <option value="2" class="">
                                        ASTON MARTIN</option>
                                    <option value="68" class="">
                                        ATVEA</option>
                                    <option value="77" class="">
                                        AUBURN</option>
                                    <option value="121" class="">
                                        AUBURN 8 101</option>
                                    <option value="60" class="">
                                        AUSTIN</option>
                                    <option value="89" class="">
                                        AUTOCAR</option>
                                    <option value="125" class="">
                                        BADAL</option>
                                    <option value="51" class="">
                                        BAJAJ</option>
                                    <option value="4" class="">
                                        BENTLEY</option>
                                    <option value="98" class="">
                                        BENTOM</option>
                                    <option value="111" class="">
                                        BRIGGS AND STRATTON</option>
                                    <option value="119" class="">
                                        BRUSH MODEL</option>
                                    <option value="94" class="">
                                        BUGATTI</option>
                                    <option value="61" class="">
                                        BUICK</option>
                                    <option value="822" class="">
                                        BYD</option>
                                    <option value="58" class="">
                                        CADILLAC</option>
                                    <option value="7" class="">
                                        CHEVROLET</option>
                                    <option value="8" class="">
                                        CHRYSLER</option>
                                    <option value="52" class="">
                                        CITREON</option>
                                    <option value="88" class="">
                                        CORD</option>
                                    <option value="97" class="">
                                        CUNNINGHAM</option>
                                    <option value="9" class="">
                                        DAEWOO</option>
                                    <option value="110" class="">
                                        DART MODEL</option>
                                    <option value="10" class="">
                                        DATSUN</option>
                                    <option value="78" class="">
                                        DE SOTO</option>
                                    <option value="136" class="">
                                        DESOTO</option>
                                    <option value="29" class="">
                                        DETROITER</option>
                                    <option value="53" class="">
                                        DODGE</option>
                                    <option value="117" class="">
                                        EICHER POLARIS</option>
                                    <option value="126" class="">
                                        EMF MODEL 30</option>
                                    <option value="139" class="">
                                        ESCORT</option>
                                    <option value="11" class="">
                                        FERRARI</option>
                                    <option value="12" class="">
                                        FIAT</option>
                                    <option value="13" class="">
                                        FORCE</option>
                                    <option value="86" class="">
                                        GARDNER</option>
                                    <option value="90" class="">
                                        GENERA</option>
                                    <option value="127" class="">
                                        GENERAL MOTORS</option>
                                    <option value="81" class="">
                                        GRAHAM PAIGE</option>
                                    <option value="142" class="">
                                        GREAVES</option>
                                    <option value="134" class="">
                                        HILLMAN</option>
                                    <option value="15" class="">
                                        HINDUSTAN</option>
                                    <option value="80" class="">
                                        HUDSON</option>
                                    <option value="72" class="">
                                        HUMBER</option>
                                    <option value="17" class="">
                                        HUMMER</option>
                                    <option value="33" class="">
                                        HUPMOBILE</option>
                                    <option value="54" class="">
                                        ICML</option>
                                    <option value="137" class="">
                                        IHC MODEL AW</option>
                                    <option value="19" class="">
                                        INFINITI</option>
                                    <option value="20" class="">
                                        JAGUAR</option>
                                    <option value="59" class="">
                                        JM4 MOTORSPORTS</option>
                                    <option value="71" class="">
                                        KAISER</option>
                                    <option value="101" class="">
                                        KARMAN GHIA</option>
                                    <option value="141" class="">
                                        KIBILINGER</option>
                                    <option value="122" class="">
                                        KIBLINGER MODEL D</option>
                                    <option value="21" class="">
                                        LAMBORGHINI</option>
                                    <option value="56" class="">
                                        LANCHESTER</option>
                                    <option value="22" class="">
                                        LAND ROVER</option>
                                    <option value="31" class="">
                                        LASALLE</option>
                                    <option value="47" class="">
                                        LEXUS</option>
                                    <option value="84" class="">
                                        LINCOLN</option>
                                    <option value="85" class="">
                                        LINCOLN ZEPHYR</option>
                                    <option value="65" class="">
                                        M G MOTORS</option>
                                    <option value="24" class="">
                                        MAHINDRA RENAULT</option>
                                    <option value="25" class="">
                                        MAHINDRA REVA</option>
                                    <option value="104" class="">
                                        MARMON</option>
                                    <option value="27" class="">
                                        MASERATI</option>
                                    <option value="107" class="">
                                        MAXWELL</option>
                                    <option value="62" class="">
                                        MCLAREN</option>
                                    <option value="118" class="">
                                        MG CAR COMPANY LTD</option>
                                    <option value="116" class="">
                                        MGB SPORTS</option>
                                    <option value="69" class="">
                                        MINERVA</option>
                                    <option value="6" class="">
                                        MINI</option>
                                    <option value="30" class="">
                                        MITSUBISHI</option>
                                    <option value="96" class="">
                                        MORGAN</option>
                                    <option value="73" class="">
                                        MORRIS</option>
                                    <option value="75" class="">
                                        MORRIS MINOR</option>
                                    <option value="114" class="">
                                        MOTEGO</option>
                                    <option value="92" class="">
                                        OAKLAND</option>
                                    <option value="105" class="">
                                        OLDMOBILE R</option>
                                    <option value="132" class="">
                                        OLDSMOBILES</option>
                                    <option value="34" class="">
                                        OPEL</option>
                                    <option value="112" class="">
                                        ORIENT BUCKBOARD</option>
                                    <option value="130" class="">
                                        PACKAARD</option>
                                    <option value="67" class="">
                                        PACKARD</option>
                                    <option value="120" class="">
                                        PEUGEOT 201</option>
                                    <option value="70" class="">
                                        PIERCE ARROW</option>
                                    <option value="57" class="">
                                        PLYMOUTH</option>
                                    <option value="124" class="">
                                        PONTIAC</option>
                                    <option value="123" class="">
                                        PONTIAC FIREBIRD</option>
                                    <option value="35" class="">
                                        PORSCHE</option>
                                    <option value="36" class="">
                                        PREMIER</option>
                                    <option value="131" class="">
                                        R ROVER</option>
                                    <option value="103" class="">
                                        RAMBLER</option>
                                    <option value="106" class="">
                                        RED BUG</option>
                                    <option value="66" class="">
                                        RELLY</option>
                                    <option value="76" class="">
                                        RILEY</option>
                                    <option value="38" class="">
                                        ROLLS ROYCE</option>
                                    <option value="99" class="">
                                        ROVER</option>
                                    <option value="135" class="">
                                        SAAB</option>
                                    <option value="64" class="">
                                        SAN</option>
                                    <option value="113" class="">
                                        SEARS MODEL</option>
                                    <option value="40" class="">
                                        SSANGYONG</option>
                                    <option value="50" class="">
                                        STANDARD COMPANION</option>
                                    <option value="49" class="">
                                        STANDARD HERALD</option>
                                    <option value="129" class="">
                                        STEVENS</option>
                                    <option value="63" class="">
                                        STEYR</option>
                                    <option value="140" class="">
                                        STUDEBAKAER CHAMPION</option>
                                    <option value="74" class="">
                                        STUDEBAKER</option>
                                    <option value="91" class="">
                                        STUTZ</option>
                                    <option value="93" class="">
                                        SUNBEAM ALPINE</option>
                                    <option value="87" class="">
                                        TRIUMPH</option>
                                    <option value="95" class="">
                                        TRIUMPH SPITFIRE</option>
                                    <option value="138" class="">
                                        UNO</option>
                                    <option value="102" class="">
                                        VELOX</option>
                                    <option value="44" class="">
                                        VOLVO</option>
                                    <option value="48" class="">
                                        WILLYS INDIA</option>
                                    <option value="128" class="">
                                        WILLYS MOTOR LTD</option>
                                    <option value="108" class="">
                                        WILLYS SIX</option>
                                    <option value="55" class="">
                                        WOLSELEY</option>
                                </select>
                                <span class="error ng-hide"
                                    ng-show="VehicleDetailsSubmited &amp;&amp; frmMake.Make.$error.required">
                                    Select Manufacturer
                                </span>
                                <span class="error" id="make_field_error" style="display: none;">Please Select
                                    Manufacture.</span>
                                <div class="col-md-12">
                                    <!-- <label for="Make" class="custom-label">Manufacturer<span
                                                                class="red">*</span></label> -->

                                </div>
                                <label for="floatingSelect">Manufacturer<span class="red">*</span></label>
                            </div>
                            <div class="form-group">

                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6">
                        <ng-form name="frmModel" class="ng-pristine ng-invalid ng-invalid-required">
                            <div class="form-group">
                                <div class="form-floating">
                                    <select
                                        class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                        id="Model" name="Model" ng-model="VehicleInfoMDL.ModelId"
                                        ng-change="GetFuelType(false)" ng-options="n.Value as n.Text for n in ModelList"
                                        required="">
                                        <option value="">Select Vehicle Model</option>
                                        <option value="869">CARENS</option>
                                        <option value="740">CARNIVAL</option>
                                        <option value="870">EV6</option>
                                        <option value="738">SELTOS</option>
                                        <option value="741" selected="selected">SONET</option>
                                        <option value="836">SORENTO</option>
                                        <option value="7712">SYROS</option>
                                    </select>
                                    <span class="error ng-hide"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmModel.Model.$error.required">
                                        Select Model
                                    </span>
                                    <span class="error" id="model_field_error" style="display: none;">Please Select
                                        Model.</span>
                                    <label for="floatingSelect">Model<span class="red">*</span></label>
                                </div>

                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6">
                        <ng-form name="frmFuelType" class="ng-pristine ng-invalid ng-invalid-required">
                            <div class="form-group">
                                <div class="form-floating">
                                    <select
                                        class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                        name="FuelType" id="FuelType" ng-model="VehicleInfoMDL.FuelType"
                                        ng-change="GetVarient(false)" required="">
                                        <option value="">Select Vehicle Fuel Type</option>
                                        <option value="PETROL">PETROL</option>
                                        <option value="DIESEL" selected="selected">DIESEL</option>
                                        <option value="EXTERNAL FITTED CNG">EXTERNAL FITTED CNG</option>
                                    </select>
                                    <span class="error ng-hide"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmFuelType.FuelType.$error.required">
                                        Select Fuel Type
                                    </span>
                                    <span class="error" id="fuel_field_error" style="display: none;">Please Select
                                        Fuel.</span>
                                    <label for="floatingSelect">Fuel Type<span class="red">*</span></label>
                                </div>
                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6">
                        <ng-form name="frmVarient" class="ng-pristine ng-invalid ng-invalid-required">
                            <div class="form-group">
                                <div class="form-floating">

                                    <select
                                        class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                        name="Varient" id="Varient" ng-model="VehicleInfoMDL.VehicleMMVInfoId"
                                        ng-options="n.Item1 as n.Item2 +' '+ n.Item3 for n in VarientList" required="">
                                        <option value="">Select Vehicle Varient</option>
                                        <option value="7531" selected="selected" style="">1.5 GTX PLUS (1493 CC)
                                        </option>
                                        <option value="6238" style="">1.5 GTX PLUS AT (1493 CC)</option>
                                        <option value="6243" style="">1.5 HTE (1493 CC)</option>
                                        <option value="7529" style="">1.5 HTK (1493 CC)</option>
                                        <option value="6245" style="">1.5 HTK PLUS (1493 CC)</option>
                                        <option value="9111" style="">1.5 HTK PLUS AT (1493 CC)</option>
                                        <option value="6247" style="">1.5 HTX (1493 CC)</option>
                                        <option value="9112" style="">1.5 HTX AT ANNIVERSARY EDITION (1493 CC)
                                        </option>
                                        <option value="9114" style="">1.5 HTX MT ANNIVERSARY EDITION (1493 CC)
                                        </option>
                                        <option value="9113" style="">1.5 HTX AT (1493 CC)</option>
                                        <option value="6251" style="">1.5 HTX PLUS (1493 CC)</option>
                                        <option value="9110" style="">1.5 GTX PLUS AT (1493 CC)</option>
                                        <option value="6249" style="">1.5 HTX PLUS AT (1493 CC)</option>
                                        <option value="83179" style="">1.5 HTK PLUS (O) MT (1498 CC)</option>
                                    </select>
                                    <span class="error ng-hide"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmVarient.Varient.$error.required">
                                        Select Variant
                                    </span>
                                    <span class="error" id="variant_field_error">Please Select
                                        Variant.</span>
                                    <label for="floatingSelect">Variant<span class="red">*</span></label>
                                </div>
                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6">
                        <ng-form name="frmInvoiceDate" class="ng-pristine ng-invalid ng-invalid-required">
                            <div class="form-group">
                                <div class="form-floating">

                                    <input type="date" id="VehicleInvoiceDate" name="VehicleInvoiceDate"
                                        class="form-control" onkeydown="return false" style="text-transform:uppercase"
                                        placeholder="DD-MM-YYYY" max="2024-09-03" min="2005-07-05">
                                    <span class="error ng-hide" id="invoice_date_field_error"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmInvoiceDate.InvoiceDate.$error.required">
                                        Vehicle Invoice Date required
                                    </span>
                                    <label for="VehicleInvoiceDate">Vehicle
                                        Registration Date<span class="red">*</span></label>
                                </div>
                            </div>
                        </ng-form>
                    </div>
                    <div class="col-md-6">
                        <ng-form name="frmManufactureDate" class="ng-pristine ng-invalid ng-invalid-required">
                            <div class="form-group">
                                <div class="form-floating">
                                    <input type="month" id="vehicleManufactureDate" name="vehicleManufactureDate"
                                        class="form-control" onkeydown="return false" style="text-transform:uppercase"
                                        placeholder="MM-YYYY" min="2020-12" max="2021-12">
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
                    <div class="col-md-6" id="BharatSeries_div">
                        <label class="control-label col-md-12">Is Registration Number BHARAT Series ?</label>
                        <label class="col-md-2" for="BharatSYes">
                            <input type="radio" name="BharatSeries" id="BharatSYes" ng-model="VehicleInfoMDL.BharatS"
                                value="YES" class="">
                            Yes
                        </label>
                        <label class="col-md-2" for="BharatSNo">
                            <input type="radio" name="BharatSeries" id="BharatSNo" ng-model="VehicleInfoMDL.BharatS"
                                value="NO" class="" checked="">
                            No
                        </label>
                    </div>
                    <div class="col-md-6" id="registrationNo_div">
                        <div class="form-group">
                            <div class="form-floating">

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
                                <label for="registrationNo">Registration
                                    Number<span class="red">*</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="RTO_div" style="display:none;">
                        <ng-form name="frmRTO"
                            class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength">
                            <div class="form-group">
                                <div class="form-floating">

                                    <input type="text"
                                        class="text-uppercase form-control basicAutoComplete input_capital only-alphaNum"
                                        id="RTO_Code" name="RTO_Code" ng-trim="true" data-url="/get-rto-code"
                                        maxlength="4" ng-change="GetRTO(VehicleInfoMDL.RTO_Code)" value=""
                                        required="" placeholder="e.g. DL01 or Delhi" autocomplete="off">
                                    <div id="divloaderRTO" style="display:none"
                                        title="Please type slowly to view RTO and select from list">
                                        <div class="RTOBox">
                                            <ul>
                                                <!-- ngRepeat: row in RegisteredRTOList -->
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="msg-error">Note: Please type slowly to view RTO and
                                        select from list.</span>
                                    <span class="error ng-hide" id="rto_field_error"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmRTO.RTO_Code.$error.required">
                                        RTO is required
                                    </span>
                                    <label for="RTO">RTO <span style="color: red">*</span></label>
                                </div>

                            </div>
                        </ng-form>
                    </div>
                    <input type="hidden" id="RTO" ng-model="VehicleInfoMDL.FkRTOId" autocomplete="off"
                        class="ng-pristine ng-untouched ng-valid ng-empty">

                    <div class="col-md-6" id="MRegNo_div" style="display:none;">
                        <ng-form name="frmRTO"
                            class="ng-pristine ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength">
                            <div class="form-group">
                                <div class="form-floating">

                                    <input type="text" name="MRegNo" id="MRegNo"
                                        class="form-control text-uppercase input_capital" value-type="alphaNumeric"
                                        value="" autocomplete="nope" capitalize="" maxlength="" limit-to="7"
                                        placeholder="For e.g. 21BH8888AA" required="">
                                    <span class="error ng-hide" id="RegNo_Required_error">
                                        Reg No. is required
                                    </span>
                                    <span class="error ng-hide" id="RegNo_Invalid_error">
                                        Please enter valid Reg No.
                                    </span>
                                    <label for="MRegNo">Reg. No.<span style="color: red">*</span></label>
                                </div>
                            </div>
                        </ng-form>
                    </div>


                    <div class="col-md-6 ng-hide externalfittedcng"
                        ng-show="VehicleInfoMDL.FuelType=='EXTERNAL FITTED CNG'" style="display: none;">
                        <ng-form name="frmBioFuelPrice"
                            class="ng-pristine ng-valid ng-valid-min ng-valid-minlength ng-valid-required">
                            <div class="form-group">
                                <div class="col-md-12 form-floating">
                                    <input type="number"
                                        class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-min ng-valid-minlength ng-valid-required"
                                        name="BioFuelPrice" id="BioFuelPrice"
                                        ng-model="VehicleInfoMDL.AdditionalBenefit.CNGValue" onpaste="return false"
                                        ng-required="VehicleInfoMDL.FuelType=='EXTERNAL FITTED CNG'" value-type="int"
                                        min="1000" max="100000" limit-to="5" ng-minlength="4"
                                        onkeypress="if(this.value.length==6) return false;">
                                    <label for="BioFuelPrice" id="">External fitted
                                        CNG IDV (<i class="fa fa-rupee"></i>)<span class="red" id="ex_cng_idv_lbl"
                                            style="display: none;">*</span></label>
                                    <span class="error ng-hide" id="BioFuelPriceError">
                                        External fitted CNG IDV is required
                                    </span>
                                </div>
                            </div>
                        </ng-form>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="Accessories" id="accessories" style="">
                    <h2 class="subheading ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">Accessories
                    </h2>
                    <div class="row ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">
                        <div class="col-md-6">
                            <ng-form name="frmElectricalAcc" class="ng-pristine ng-valid ng-valid-min ng-valid-minlength">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <input type="number" class="form-control" name="ElectricalAccessories"
                                            id="ElectricalAccessories" onpaste="return false"
                                            placeholder="Electrical Accessories" value-type="int" min="100"
                                            max="999999" onkeypress="if(this.value.length==6) return false;">
                                        <label for="ElectricalAccessories">Electrical Accessories (<i
                                                class="fa fa-rupee"></i>)</label>
                                        <span class="error ng-hide" id="ElectricalAccessories_Error"></span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6">
                            <ng-form name="frmNonElectricalAcc"
                                class="ng-pristine ng-valid ng-valid-min ng-valid-minlength">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <input type="number" class="form-control" name="NonElectricalAccessories"
                                            id="NonElectricalAccessories" onpaste="return false"
                                            placeholder="Non-Electrical Accessories" value-type="int" min="100"
                                            max="999999" onkeypress="if(this.value.length==6) return false;">
                                        <label for="NonElectricalAccessories">Non-Electrical Accessories (<i
                                                class="fa fa-rupee"></i>)</label>
                                        <span class="error ng-hide" id="NonElectricalAccessories_Error"></span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="caraddons" id="caraddons" style="">
                    <h2 class="subheading ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">Add-ons
                    </h2>
                    <div class="row AddOnsLabel ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <!-- Loop through with addons -->
                                    <label for="Zero Dep" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <input name="addons[partsDepreciation]" type="checkbox" id="partsDepreciation"
                                            class="add-ons-all">
                                        Zero Dep </label>
                                    <label for="Return to Invoice" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <input name="addons[returnToInvoice]" type="checkbox" id="returnToInvoice"
                                            class="add-ons-all">
                                        Return to Invoice </label>
                                    <label for="NCB Protection" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <input name="addons[ncbProtection]" type="checkbox" id="ncbProtection"
                                            class="add-ons-all">
                                        NCB Protection </label>
                                    <label for="Personal Belonging" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <input name="addons[personalBelonging]" type="checkbox" id="personalBelonging"
                                            class="add-ons-all">
                                        Personal Belonging </label>
                                    <label for="Engine Protection" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <input name="addons[engineProtection]" type="checkbox" id="engineProtection"
                                            class="add-ons-all">
                                        Engine Protection </label>
                                    <label for="Consumables" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <input name="addons[consumables]" type="checkbox" id="consumables"
                                            class="add-ons-all">
                                        Consumables </label>
                                    <label for="Road Side Assitance" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <input name="addons[roadSideAssistance]" type="checkbox" id="roadSideAssistance"
                                            class="add-ons-all">
                                        Road Side Assitance </label>
                                    <label for="Key Replacement" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <input name="addons[keyAndLockProtect]" type="checkbox" id="keyAndLockProtect"
                                            class="add-ons-all">
                                        Key Replacement </label>
                                    <label for="Tyre Protection" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <input name="addons[tyreProtection]" type="checkbox" id="tyreProtection"
                                            class="add-ons-all">
                                        Tyre Protection </label>
                                    <label for="Rim Protection" class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                        <input name="addons[rimProtection]" type="checkbox" id="rimProtection"
                                            class="add-ons-all">
                                        Rim Protection </label>
                                    <label class="zdep_pp" id="ZeroDep1Cont" for="ZeroDep1"
                                        style="display: inline-block;">
                                        <input type="checkbox" name="ZeroDep1" id="ZeroDep1" class="add-ons-all">
                                        Zero Dep in previous policy
                                    </label>
                                    <!--For TATA AIG => START -->
                                    <input type="hidden" name="PrevTyreProtection" id="PrevTyreProtection"
                                        value="No">
                                    <input type="hidden" name="PrevEngineProtection" id="PrevEngineProtection"
                                        value="No">
                                    <input type="hidden" name="PrevConsumableProtection" id="PrevConsumableProtection"
                                        value="No">
                                    <input type="hidden" name="PrevRTI" id="PrevRTI" value="No">
                                    <!--For TATA AIG => END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <h2 class="subheading" id="additinalCoversHeading">Additional Covers</h2>
                <div class="row AddOnsLabel">
                    <div class="col-md-12" id="additinalCoversCont">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="DriverCover" class="col-xs-12 col-md-4">
                                    <input name="additinalcover[DriverCover]" type="checkbox" id="DriverCover"
                                        ng-model="VehicleInfoMDL.AdditionalBenefit.PADriverCleanCondReq"
                                        class="ng-pristine ng-untouched ng-valid ng-empty">
                                    Legal Liability to Paid Driver
                                </label>
                                <label id="additional-covers" for="CPARequired" class="col-xs-12 col-md-4"
                                    ng-show="VehicleInfoMDL.proposerType =='I'"
                                    title="An accident cover which provides financial assistance to the car's owner in case of disablement or death due to an accident. Every individual vehicle owner must opt for this cover as per IRDAI guidelines, except for those without a driving license or having an existing Personal Accident cover of at least Rs. 15 lakhs.">
                                    <input name="additinalcover[CPARequired]" type="checkbox" id="CPARequired"
                                        ng-model="VehicleInfoMDL.AdditionalBenefit.CPARequired"
                                        class="ng-pristine ng-untouched ng-valid ng-empty" checked="">
                                    Owner Driver Personal Accident Cover
                                </label>
                                <label for="PAPaidDriver" class="col-xs-12 col-md-4" id="PAPaidDriver_lbl">
                                    <input name="additinalcover[PAPaidDriver]" type="checkbox" id="PAPaidDriver"
                                        class="ng-pristine ng-untouched ng-valid ng-empty">
                                    Paid Driver Personal Accident Cover
                                </label>
                                <label for="LLToEmployee" class="col-xs-12 col-md-4 " id="LLToEmployee_lbl"
                                    style="display: none;">
                                    <input name="additinalcover[LLToEmployee]" type="checkbox" id="LLToEmployee"
                                        onchange="return llEmployeeCover()"
                                        class="ng-pristine ng-untouched ng-valid ng-empty">
                                    Legal Liability To Employee Cover
                                    <div class="col-md-12 llemployee-cover mt-2" style="display: none;">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <div class="noemploy">
                                                    <label for="LLECount" class="custom-label">No Of
                                                        Employee</label>
                                                    <select
                                                        class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                                        name="LLECount" id="LLECount" required="required">
                                                        <option value="" selected="selected">--Select
                                                            Number Of Employee--</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </select>
                                                    <span class="error llemployeecount ng-hide">
                                                        LL Employee Member Count required
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <label for="UnNamedPA" class="col-xs-12 col-md-4">
                                    <input name="additinalcover[UnNamedPA]" type="checkbox" id="UnNamedPA"
                                        onchange="return unnamedPassangerCover()"
                                        class="ng-pristine ng-untouched ng-valid ng-empty">
                                    Unnamed Passenger Personal Accident Cover
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group unnamed-passanger-cover">
                                        <div class="col-xs-12 col-md-6 form-floating">

                                            <select
                                                class="form-control ng-pristine ng-empty ng-invalid ng-invalid-required ng-touched"
                                                name="UNPASI" id="UNPASI" required="required">
                                                <option value="" selected="selected">--Select Cover
                                                    Amount--</option>
                                                <option value="50000">50,000/-</option>
                                                <option value="100000">1,00,000/-</option>
                                                <option value="200000">2,00,000/-</option>
                                            </select>
                                            <span class="error uncoveramount ng-hide">
                                                Cover Amount required
                                            </span>
                                            <label for="UNPASI">Cover
                                                Amount</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <label class="control-label col-md-12">Do You Want to Restrict Third Party Property
                                Damage?<span class="red">*</span></label>
                            <label for="rdoTPPDY">
                                <input type="radio" name="isTPPD" id="rdoTPPDY" value="Y" required="">
                                Yes
                            </label>
                            <label for="rdoTPPDN">
                                <input type="radio" name="isTPPD" id="rdoTPPDN" value="N" checked="">
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

                <div class="cardiscounts" id="cardiscounts" style="">
                    <h2 class="subheading ng-hide">Discount</h2>
                    <div class="row AddOnsLabel">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="Voluntary" class="col-xs-12 col-md-4">
                                        <input name="discount[Voluntary]" type="checkbox" id="Voluntary"
                                            ng-model="VehicleInfoMDL.CarDiscounts.VoluntaryDeductable"
                                            class="ng-pristine ng-untouched ng-valid ng-empty">
                                        Voluntary Excess
                                    </label>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" id="Voluntarydiv" style="display:none">
                            <div class="form-group">
                                <div ng-show="VehicleInfoMDL.CarDiscounts.VoluntaryDeductable==true"
                                    class="col-xs-12 col-md-6 form-floating">
                                    <select
                                        class="form-control ng-pristine ng-empty ng-touched ng-invalid ng-invalid-required"
                                        name="VoluntaryValue" id="VoluntaryValue"
                                        ng-model="VehicleInfoMDL.CarDiscounts.VoluntaryDeductableLimit"
                                        ng-required="VehicleInfoMDL.CarDiscounts.VoluntaryDeductable==true"
                                        required="required">
                                        <option value="" selected="selected">--Select Voluntary
                                            Excess Value--</option>
                                        <option value="2500">2500</option>
                                        <option value="5000">5000</option>
                                        <option value="7500">7500</option>
                                        <option value="15000">15000</option>
                                        <option value="20000">20000</option>
                                        <option value="25000">25000</option>
                                    </select>
                                    <label for="Voluntary">Voluntary Excess
                                        Value</label>
                                    <span class="error VoluntaryValueRequired ng-hide"
                                        ng-show="VehicleDetailsSubmited &amp;&amp; frmVolValue.VoluntaryValue.$error.required">
                                        Voluntary Excess Value required
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="previous-policy" class="previous_policy">
                    <h2 class="subheading">Previous Policy Detail</h2>
                    <div class="row AddOnsLabel">
                        <div class="col-md-6 custom-radio">
                            <ng-form name="frmPolicyExpired" class="ng-pristine ng-invalid ng-invalid-required">
                                <div class="form-group">

                                    <div class="col-md-12">
                                        <label class="control-label col-md-12">Policy Expired ?<span
                                                class="red">*</span></label>
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
                                        <span id="PolicyExpired_Required_error" class="error ng-hide">
                                            Policy Expired required
                                        </span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-lg-6" id="divHavePrevPolDetail" style="display:none;">
                            <ng-form name="frmHavePreviousPolicyDetail">
                                <div class="form-group">

                                    <div class="col-md-12">
                                        <label class="control-label col-md-12">Do you remember previous
                                            policy details?<span class="red">*</span></label>
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
                        <div class="col-lg-6 polexptype" id="divPolExpiredType" style="display: none;">
                            <div class="form-group">
                                <div class="form-floating">

                                    <select class="form-control" id="PolExpiredType" name="PolExpiredType">
                                        <option value="" selected="selected">Select</option>
                                        <option value="20">Expired within 90 days</option>
                                        <option class="ng-binding ng-scope" value="25">Expired more than
                                            90 days</option>
                                    </select>
                                    <span class="col-md-12 error ng-hide" id="PolExpiredType_Required_error">Select
                                        Expired Type</span>
                                    <label for="PreviousNCB1">Policy Expired
                                        Type<span class="red">*</span></label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="policy_intents"> -->
                        <div id="divPrevclaim" class="col-md-6 custom-radio ng-hide policy_intents"
                            ng-hide="VehicleInfoMDL.PolicyExpired == 'YES' || VehicleInfoMDL.CoverType=='L'"
                            style="">
                            <ng-form name="frmClaimPrevious" class="ng-pristine ng-valid ng-valid-required">
                                <div class="form-group">

                                    <div class="col-md-12">
                                        <label class="control-label col-md-12">Claim in previous
                                            year<span class="red">*</span></label>
                                        <label for="ClaimYes">
                                            <input type="radio" name="ClaimPrevious" id="ClaimYes" value="YES"
                                                ng-model="VehicleInfoMDL.AnyClaimed" class="ClaimPrevious">
                                            Yes
                                        </label>
                                        <label for="ClaimNo">
                                            <input type="radio" name="ClaimPrevious" id="ClaimNo" value="NO"
                                                ng-model="VehicleInfoMDL.AnyClaimed" class="ClaimPrevious">
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
                            ng-hide="VehicleInfoMDL.PolicyExpired == 'YES' || VehicleInfoMDL.CoverType=='L' || VehicleInfoMDL.AnyClaimed == 'YES'"
                            style="">
                            <ng-form name="frmPrevNCB" class="ng-pristine ng-valid ng-valid-required">
                                <div class="form-group">
                                    <div class="form-floating">

                                        <select
                                            class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-required"
                                            id="PreviousNCB" ng-model="VehicleInfoMDL.NCBPer" name="PreviousNCB"
                                            ng-required="VehicleInfoMDL.PolicyType =='R' &amp;&amp; VehicleInfoMDL.PolicyExpired =='NO' &amp;&amp; VehicleInfoMDL.CoverType=='P' &amp;&amp; VehicleInfoMDL.AnyClaimed == 'NO'">
                                            <option value="" selected="selected">Select Previous NCB
                                            </option>
                                            <option value="0">
                                                0</option>
                                            <option value="20">
                                                20</option>
                                            <option value="25">
                                                25</option>
                                            <option value="35">
                                                35</option>
                                            <option value="45">
                                                45</option>
                                            <option value="50">
                                                50</option>
                                            <option value="55">
                                                55</option>
                                            <option value="65">
                                                65</option>
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
                        <div class="col-md-6 policy_intents" id="PreviousPolicyExpirydiv" style="">
                            <ng-form name="frmPExpiryDate" ng-hide="VehicleInfoMDL.PolicyExpired == 'YES'"
                                class="ng-pristine ng-valid ng-valid-required">

                                <div class="form-group">
                                    <div class="form-floating">

                                        <input type="date" onkeydown="return false" id="PreviousPolicyExpiry"
                                            name="PreviousPolicyExpiry" class="form-control"
                                            style="text-transform:uppercase" placeholder="DD-MM-YYYY" min="2025-07-05"
                                            max="2025-10-03">
                                        <div class="clearfix"></div>
                                        <span class="error ng-hide" id="policy_date_error" style="display: none;">
                                            Previous Policy Expiry Date is required
                                        </span>
                                        <span class="error prevpolerror" id="spnPreviousPolicyExpiryDate"
                                            style="display: none;"></span>
                                        <label for="PreviousPolicyExpiry" id="PrevPolicyLabel">Previous Policy Expiry
                                            Date<span class="red">*</span></label>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <div class="col-md-6 PolicyTypeOD" style="display: none;">
                            <ng-form name="PP_OD_START_DATE" class="">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <input type="date" name="PP_OD_START_DATE" id="PP_OD_START_DATE"
                                            class="form-control" onkeydown="return false"
                                            style="text-transform:uppercase" placeholder="DD-MM-YYYY" min="2020-07-05"
                                            max="2024-09-05">
                                        <label for="PP_OD_START_DATE" id="OdStartLabel">Previous Policy OD Start
                                            Date<span class="red">*</span></label>
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
                        <div class="col-md-6 PolicyTypeOD" style="display: none;">
                            <ng-form name="PP_OD_END_DATE" class="">
                                <div class="form-group">
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
                                        <span class="error ng-hide" id="PP_OD_END_DATE_Error"></span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>

                        <div class="col-md-6 PolicyTypeOD" style="display: none;">
                            <ng-form name="PP_TP_START_DATE" class="">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <input type="date" name="PP_TP_START_DATE" id="PP_TP_START_DATE"
                                            class="form-control" onkeydown="return false"
                                            style="text-transform:uppercase" placeholder="DD-MM-YYYY" min="2020-07-05"
                                            max="2024-09-05">
                                        <label for="PP_TP_START_DATE" id="TpStartLabel">
                                            Previous Policy TP Start Date<span class="red">*</span></label>
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
                        <div class="col-md-6 PolicyTypeOD" style="display: none;">
                            <ng-form name="PP_TP_END_DATE" class="">
                                <div class="form-group">
                                    <div class="col-md-12 form-floating">
                                        <input type="date" name="PP_TP_END_DATE" id="PP_TP_END_DATE"
                                            class="form-control" onkeydown="return false"
                                            style="text-transform:uppercase" placeholder="DD-MM-YYYY" min="2024-07-05"
                                            max="2028-09-05" readonly="">
                                        <label for="PP_TP_END_DATE" id="TpEndLabel">Previous Policy TP End Date<span
                                                class="red">*</span></label>
                                        <span class="error ng-hide" id="PP_TP_END_DATE_Field_Error">
                                            Previous Policy TP End Date is required
                                        </span>
                                        <span class="error ng-hide" id="PP_TP_END_DATE_Invalid_Error">
                                            Please enter valid Previous Policy TP End Date
                                        </span>
                                        <span class="error ng-hide" id="PP_TP_END_DATE_Error"></span>
                                    </div>
                                </div>
                            </ng-form>
                        </div>
                        <!-- </div> -->

                    </div>
                </div>
                <!--<div class="Add-ons-IDV" id="Add-ons-IDV" style="display:none;">
                                                                        <h2 class="subheading ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">IDV</h2>
                                    <div class="row AddOnsLabel ng-hide" ng-show="VehicleInfoMDL.CoverType == 'P'">
                                        <div class="col-md-6 custom-radio">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="BestIDV">
                                                        <input type="radio" name="IDVradio" id="BestIDV" ng-model="VehicleInfoMDL.IDVradio" value="BestIDV" ng-checked="true" class="bestidv ng-pristine ng-untouched ng-valid ng-empty" checked="checked">
                                                        Best IDV
                                                    </label>
                                                    <label for="CustomIDV" style="display:none;">
                                                        <input type="radio" name="IDVradio" id="CustomIDV" ng-model="VehicleInfoMDL.IDVradio" value="GetOwnIDV" class="bestidv ng-pristine ng-untouched ng-valid ng-empty"  disabled="disabled" >
                                                        Custom IDV
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caridvdiv" class="col-md-6 ng-hide" ng-show="VehicleInfoMDL.IDVradio=='GetOwnIDV'">
                                            <div class="form-group">
                                                <ng-form name="frmSelectedIDV" class="ng-pristine ng-valid ng-valid-maxlength ng-valid-required">
                                                    <div class="col-md-12">
                                                        <label for="IDV" class="custom-label">Enter IDV</label>
                                                        <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength ng-valid-required" name="SelectedIDV" ng-model="VehicleInfoMDL.SelectedIDV" id="IDV" placeholder="IDV" value-type="int" onpaste="return false" autocomplete="nope" maxlength="9" ng-required="VehicleInfoMDL.IDVradio=='GetOwnIDV'" ng-trim="true">

                                                        <span class="error ng-hide" ng-show="VehicleDetailsSubmited &amp;&amp; frmSelectedIDV.SelectedIDV.$error.required">
                                                            IDV is required
                                                        </span>
                                                        <span class="error ng-hide" ng-show="VehicleDetailsSubmited &amp;&amp; !frmSelectedIDV.SelectedIDV.$error.required &amp;&amp; !frmSelectedIDV.SelectedIDV.$valid">
                                                            Please enter valid IDV
                                                        </span>
                                                        <span id="spnErrorSelectedIDV" class="error ng-hide" ng-show="!RangeCheckIDV"></span>
                                                    </div>
                                                </ng-form>
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
                    I / We declare that the rate of NCB claimed by me / us is correct and that no claim has arisen in the
                    expiring policy period. I / We further undertake that if this declaration is found to be incorrect, all
                    benefits under the policy in respect of Section I of the Policy will stand forfeited.
                </label>
            </div>
            <div class="text-end">
                <button class="btn btn-primary getQuoteBtn btn-bg-color position-sticky" type="button"
                    ng-click="VehicleDetailSave()" rel="VehicleDetails" data-focus="VehicleDetails" id="getQuotebtn"
                    data-id="2">
                    Get Quotes</button>
            </div>
        </div>
    </form>
    </div>

   
@endsection
