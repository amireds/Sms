
<div id="page-content">
    <!-- Quick Stats -->
    <div class="row text-center">

    </div>
    <!-- END Quick Stats -->

    <!-- Overview Block -->
    <div class="block full">
        <!-- Overview Content -->
        <div class="row">
            <div class="col-lg-12">
                <form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="col-lg-12">
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="example-chosen">Select State</label>
                            <div class="col-md-6">
                                <select id="example-chosen" name="example-chosen" class="select-chosen" data-placeholder="Select State" style="width: 250px;">
                                    <?php foreach($query as $row ) { ?>
                                        <option value="United States"><?php echo ucwords($row->title); ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="example-chosen-multiple">Select Local Govt Area</label>
                            <div class="col-md-6">
                                <select id="example-chosen-multiple" name="example-chosen-multiple" class="select-chosen" data-placeholder="Select LGA" style="width: 250px;" multiple>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="example-chosen-multiple">Select Locality</label>
                            <div class="col-md-6">
                                <select id="example-chosen-multiple" name="example-chosen-multiple" class="select-chosen" data-placeholder="Select Locality" style="width: 250px;" multiple>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="example-chosen-multiple">Select Street</label>
                            <div class="col-md-6">
                                <select id="example-chosen-multiple" name="example-chosen-multiple" class="select-chosen" data-placeholder="Select LGA" style="width: 250px;" multiple>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="example-text-input">Sender ID</label>
                            <div class="col-md-6">
                                <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Sender ID">
                                <!-- <span class="help-block">Input your business name or your name</span> -->
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="example-text-input">Confirmation Number</label>
                            <div class="col-md-6">
                                <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Sender ID">
                                <!-- <span class="help-block">Input your business name or your name</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group col-md-8">
                            <label class="col-md-2 control-label" for="example-textarea-input">Input Message</label>
                            <div class="col-md-9">
                                <textarea id="example-textarea-input" name="example-textarea-input" rows="9" class="form-control" placeholder="Content.."></textarea>
                                <span class="help-block col-md-offset-11">1/160</span>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-md-6 control-label" for="example-text-input">Confirmation Number</label>
                            <div class="col-md-9">
                                <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Number Of SMS">
                                <!-- <span class="help-block">Input your business name or your name</span> -->
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-md-9 control-label" for="example-text-input">Total number Of Available Numbers</label>
                            <div class="col-md-9">
                                <input type="text" id="example-text-input" name="example-text-input" class="form-control" value="200,000" disabled style="background-color:#043E50; color:#fff; text-align:center; font-weight:bolder;">
                                <!-- <span class="help-block">Input your business name or your name</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="example-datepicker">Select Date</label>
                            <div class="col-md-6">
                                <input type="text" id="example-datepicker" name="example-datepicker" class="form-control input-datepicker" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-md-4 control-label" for="example-timepicker">Select Time</label>
                            <div class="col-md-6">
                                <div class="input-group bootstrap-timepicker">
                                    <div class="bootstrap-timepicker-widget dropdown-menu">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" data-action="incrementHour"><i class="fa fa-chevron-up"></i></a>
                                                </td>
                                                <td class="separator">&nbsp;</td>
                                                <td>
                                                    <a href="#" data-action="incrementMinute"><i class="fa fa-chevron-up"></i></a>
                                                </td>
                                                <td class="separator">&nbsp;</td>
                                                <td>
                                                    <a href="#" data-action="incrementSecond"><i class="fa fa-chevron-up"></i></a>
                                                </td>
                                                <td class="separator">&nbsp;</td>
                                                <td class="meridian-column">
                                                    <a href="#" data-action="toggleMeridian">
                                                        <i class="fa fa-chevron-up"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control bootstrap-timepicker-hour" maxlength="2">
                                                </td>
                                                <td class="separator">:</td>
                                                <td>
                                                    <input type="text" class="form-control bootstrap-timepicker-minute" maxlength="2">
                                                </td>
                                                <td class="separator">:</td>
                                                <td>
                                                    <input type="text" class="form-control bootstrap-timepicker-second" maxlength="2">
                                                </td>
                                                <td class="separator">&nbsp;</td>
                                                <td>
                                                    <input type="text" class="form-control bootstrap-timepicker-meridian" maxlength="2">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" data-action="decrementHour">
                                                        <i class="fa fa-chevron-down"></i>
                                                    </a>
                                                </td>
                                                <td class="separator"></td>
                                                <td>
                                                    <a href="#" data-action="decrementMinute">
                                                        <i class="fa fa-chevron-down"></i>
                                                    </a>
                                                </td>
                                                <td class="separator">&nbsp;</td>
                                                <td>
                                                    <a href="#" data-action="decrementSecond">
                                                        <i class="fa fa-chevron-down"></i>
                                                    </a>
                                                </td>
                                                <td class="separator">&nbsp;</td>
                                                <td>
                                                    <a href="#" data-action="toggleMeridian">
                                                        <i class="fa fa-chevron-down"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <input type="text" id="example-timepicker" name="example-timepicker" class="form-control input-timepicker">
                                <span class="input-group-btn">
                                    <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-clock-o"></i></a>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group form-actions">
                            <div class="col-md-12 col-md-offset-10">
                                <button type="submit" class="btn btn-md btn-warning"><i class="fa fa-send-o"></i> SEND </button>
                                <!-- <button type="reset" class="btn btn-sm btn-success"><i class="fa fa-send"></i> Send Later</button> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Overview Content -->
    </div>
    <!-- END Overview Block -->
</div>