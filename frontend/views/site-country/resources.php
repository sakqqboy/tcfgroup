<?php

/** @var yii\web\View $this */

use Codeception\Lib\Connector\Yii2;

$this->title = 'contact';
?>

<div class="col-12  home-contact2">
    <div class="col-12">
        <img src="<?= Yii::$app->homeUrl ?>img/Resources.png" class="img-Resources">
    </div>
    <div class="col-12 page-resource">
        Resource
        Center
    </div>
    <div class="col-12 detail-resource">
        In our Resource Center, you will find a collection of significant notifications, SROs, orders, and circulars issued by Bangladeshi regulators
    </div>
    <div class="col-12 title-resource">
        <i class="fa fa-search button-forms-search" aria-hidden="true"> </i>
        <input class="form-control form-control-lg Templates-Search" type="text" placeholder="Search forms & Templates" aria-label="Search forms & Templates">
    </div>
    <div class="col-12 pr12 form-select-search">
        <div class="row">
            <div class="col-lg-2 col-3">
                <select class="form-select form-select-lg mb-3 txt-search" aria-label=".form-select-sm example">
                    <option selected>Bangladesh</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-2 col-3">
                <select class="form-select form-select-lg mb-3 txt-search" aria-label=".form-select-sm example">
                    <option selected>Department</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-2 col-3">
                <select class="form-select form-select-lg mb-3 txt-search" aria-label=".form-select-sm example">
                    <option selected>Type</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary txt-search"> Search</button>
            </div>
        </div>
    </div>
</div>



<div class="col-12 pr12 pl-40">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
            <div class="btn-group">
                <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= Yii::$app->homeUrl ?>img/icon3.png" class="img-icon"> National Board of Revenue
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="btn-group">
                <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= Yii::$app->homeUrl ?>img/icon4.png" class="img-icon"> Bangladesh Investment
                    Development Authority
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="btn-group">
                <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= Yii::$app->homeUrl ?>img/RJSC.png" class="img-icon"> Registrar of Joint Stock
                    Companies And Firms
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="btn-group">
                <button class="btn btn-outline-gray dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= Yii::$app->homeUrl ?>img/icon5.png" class="img-icon"> Bangladesh Bank
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="col-12 pl-10 mt-50">
    <table class="table table-striped">
        <thead style="font-size: 18px; background: #032E61; border-radius: 5px; color:#ffff; font-family:'klavika';">
            <tr>
                <th scope="col"> Description</th>
                <th scope="col">Category</th>
                <th scope="col">Document No.</th>
                <th scope="col">Last Update</th>
                <th scope="col">Authority</th>
                <th scope="col">Download</th>
            </tr>
        </thead>
        <tbody style="font-size: 11px; ">
            <tr>
                <th scope="row" style="color:#0078C8;">SRO regarding non-deduction of VAT from the payment of supplier of goods.</th>
                <td>Value Added Tax</td>
                <td>SRO No. 325-Ain/2022/206-Mushak</td>
                <td>22-10-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Mandatory tax return filing relaxed for loans and credit cards</th>
                <td>Other</td>
                <td>Doc No- 08.01.0000.030.06.005(part-1).21/203</td>
                <td>18-09-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Agreement for the avoidance of double taxation and the prevention of fiscal evasion with respect to taxes on income between Bangladesh and Maldives</th>
                <td>Double Taxation Avoidance Agreement</td>
                <td>SRO No. 190-AIN/Income Tax/2022</td>
                <td>18-07-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">VAT Audit Manual 2022</th>
                <td>Other</td>
                <td>VAT & SD Law 2012</td>
                <td>01-07-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Bangladesh Finance Act 2022</th>
                <td>Income Tax</td>
                <td>Finance Act, 2022</td>
                <td>01-07-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Amendment of General Order 03-VAT-2022 Regarding the Wholesale Businesses</th>
                <td>GO</td>
                <td>GO No -09/Mushak/2022</td>
                <td>01-07-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Amendment of Value Added Tax & Supplementary Duty Rules, 2016</th>
                <td>Value Added Tax</td>
                <td>SRO No. 223-Ain/2022/195-Mushak</td>
                <td>28-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Amendment of SRO Regarding Central Registration Rules, 2019</th>
                <td>Value Added Tax</td>
                <td>SRO No. 224-Ain/2022/196-Mushak</td>
                <td>28-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Amendment of SRO Regarding VAT Exemption</th>
                <td>Value Added Tax</td>
                <td>SRO No. 225-Ain/2022/197-Mushak</td>
                <td>28-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm" style="color:#0078C8;"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Amendment of SRO Regarding Definition of Services</th>
                <td>Value Added Tax</td>
                <td>SRO No. 226-Ain/2022/198-Mushak</td>
                <td>28-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Amendment of SRO Regarding VAT Deduction at Source</th>
                <td>Value Added Tax</td>
                <td>SRO No. 227-Ain/2022/199-Mushak</td>
                <td>28-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Amendment of SRO Regarding Exemption of Advance Tax (AT)</th>
                <td>Value Added Tax</td>
                <td>SRO No. 228-Ain/2022/200-Mushak</td>
                <td>28-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">SRO regarding VAT exemption on Linear Alkyl Benzene Sulphonic Acid(LASSA) & Sodium Lauryl Ether Sulphate(SLES) in Manufacturing Stage</th>
                <td>Value Added Tax</td>
                <td>SRO No. 229-Ain/2022/201-Mushak</td>
                <td>28-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">SRO regarding VAT exemption on Meditation Service</th>
                <td>Value Added Tax</td>
                <td>SRO No. 230-Ain/2022/202-Mushak</td>
                <td>28-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Bangladesh Finance Bill 2022/2023</th>
                <td>Income Tax</td>
                <td>Finance Bill 2022/2023</td>
                <td>09-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Amendment of The Stamp Act, 1899</th>
                <td>Stamp</td>
                <td>The Stamp Act, 1899 - Schedule 1</td>
                <td>01-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">Amendment of Value Added Tax & Supplementary Duty Rules, 2016</th>
                <td>Value Added Tax</td>
                <td>SRO no. 161/AIN/2022/174-Mushak</td>
                <td>28-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">SRO Regarding Changes of Excise Duty</th>
                <td>Value Added Tax</td>
                <td>SRO no. 162/AIN/2022/175-Mushak</td>
                <td>01-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">General Order regarding collection VA T & SD from cigarette</th>
                <td>GO</td>
                <td>GO No. 02-Mushak/2022</td>
                <td>01-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
            <tr>
                <th scope="row" style="color:#0078C8;">SRO Regarding VAT Exemption</th>
                <td>Value Added Tax</td>
                <td>SRO no. 163/AIN/2022/176-Mushak</td>
                <td>01-06-2022</td>
                <td>NBR</td>
                <td class="fot-sm"><button type="button" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download</button></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="col-12 mt-50 text-center">
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
    <span class="of-13"> Page &nbsp;&nbsp;1 &nbsp;&nbsp;&nbsp; of &nbsp;&nbsp;13</span>
    <button type="button" class="btn btn-primary"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
</div>

<div class="col-12">
    <div class="col-12 connect-experts mt-40">
        <img src="<?= Yii::$app->homeUrl ?>img/Rectangle.png" class="image mr-1"> Connect Experts
    </div>
    <div class="col-12 Get-free mt-30">
        Get Free Appointment on your Business Issuefa-spin
    </div>
    <div class="col-12 If-you mt-10">
        If you would like to discuss a project or have a question, please fill in the form and we ll get right back to you.
    </div>
    <div class="col-12 mt-30 pr12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 mt-50 pl-40 pr-40 form-input">
                <div class="row">
                    <div class="col-7">
                        <p class="If-you2">Do you prefer to communicate as an entity or an individual?</p>
                    </div>
                    <div class="col-5">
                        <label for="formGroupExampleInput" class="form-label label-thin"> &nbsp;&nbsp;&nbsp;Select Country</label>
                        <select class="form-select mt-10" aria-label="Default select example">
                            <option selected>Bangladesh</option>
                            <option value="1">Brazil</option>
                            <option value="2">Combodia</option>
                            <option value="3">China</option>
                            <option value="4">Columbia</option>
                            <option value="5">Dubai(UAE)</option>
                            <option value="6">Hong kong</option>
                            <option value="7">India</option>
                            <option value="8">Indonesia</option>
                            <option value="9">kenya</option>
                            <option value="10">Japan</option>
                            <option value="11">Laos</option>
                            <option value="12">Malaysia</option>
                            <option value="13">Mexico</option>
                            <option value="14">Mongolia</option>
                            <option value="15">Nigeria</option>
                            <option value="16">Mayanmar</option>
                            <option value="17">Morocco</option>
                            <option value="18">Peru</option>
                            <option value="19">Philippines</option>
                            <option value="20">Russia</option>
                            <option value="21">South Afroca</option>
                            <option value="22">Singapore</option>
                            <option value="23">Sir Lanka</option>
                            <option value="24">Thailad</option>
                            <option value="25">Turkey</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="row mt-20">
                            <div class="col-5 left-box-select">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label ml-10" for="flexRadioDefault1"> Legal Entity</label>
                                </div>
                            </div>
                            <div class="col-5 left-box-select">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label ml-10" for="flexRadioDefault2"> Individual</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 your-company" style="margin-top: 30px;">
                    <label for="exampleInputCompany" class="form-label label-thin"> Your Company<span class="moon">*</span></label>
                    <input type="Company" class="form-control" id="exampleInputCompany" aria-describedby="company">
                </div>
                <div class="mb-3 your-company">
                    <label for="exampleInputName" class="form-label label-thin"> Your Name<span class="moon">*</span></label>
                    <input type="Name" class="form-control" id="exampleInputName" aria-describedby="name">
                </div>
                <div class="mb-3 your-company">
                    <label for="exampleInputPosition" class="form-label label-thin"> Position<span class="moon">*</span></label>
                    <input type="Position" class="form-control" id="exampleInputPosition" aria-describedby="position">
                </div>
                <div class="mb-3 your-company">
                    <label for="exampleInputEmail" class="form-label label-thin"> Your e-mail<span class="moon">*</span></label>
                    <input type="Email" class="form-control" id="exampleInputEmail" aria-describedby="email">
                </div>
                <div class="mb-3 your-company">
                    <div class="row">
                        <div class="col-6 text-start">
                            <label for="exampleInputEmail" class="form-label label-thin"> Phone Number<span class="moon">*</span></label>
                            <input type="number" class="form-control" placeholder="+880" aria-label="Phone">
                        </div>
                        <div class="col-6">
                            <label for="exampleInputEmail" class="form-label label-thin"> Your Business<span class="moon">*</span></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Select business Type</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 form-Questions mt-50 pr-40">
                <div class="mb-3">
                    <label for="exampleInputQuestions" class="form-label label-thin">Questions & Concern</label>
                    <input type="Questions" class="form-control" id="exampleInputQuestions" aria-describedby="Questions">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label label-thin">Details of Inquiry</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-6 text-start label-thin mt-4">
                        ATTACHMENT (IF ANY) <i class="fa fa-paperclip" aria-hidden="true"></i>
                    </div>
                    <div class="col-6 mt-4 text-end">
                        <button type="button" class="btn btn-primary button-get">Get Free Appointment</button>
                    </div>
                    <div class="col-4 text-start mt-4">
                        <div class="contact-social mb-2">Whatsapp</div>
                        <p class="info-tokyo"><i class="fa fa-whatsapp" aria-hidden="true"></i> inquarrytcf</p>
                    </div>
                    <div class="col-8 text-end mt-4">
                        <div class="contact-social mb-2">Email</div>
                        <p class="info-tokyo">f-info@tokyoconsultinggroup.com <i class="fa fa-envelope" aria-hidden="true"></i></p>
                    </div>
                    <div class="col-4 text-start mt-4">
                        <div class="contact-social mb-2">Skype</div>
                        <p class="info-tokyo"><i class="fa fa-skype" aria-hidden="true"></i> inquarrytcf</p>

                    </div>
                    <div class="col-8 text-end mt-4">
                        <div class="contact-social mb-2">Phone</div>
                        <p class="info-tokyo">+090-111-222 <i class="fa fa-phone" aria-hidden="true"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>