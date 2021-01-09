<?php include('include/header.php');?>


<link rel="stylesheet" href="boot/bootstrap.min.css">

<br><br><br><br>
<div class="row">
<div class="col-lg-2"></div>

           <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">T/F Quiz</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add Quiz</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                         
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Add  Question</label>
                                                <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Correct answer</label>
                                                <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                 <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Incorrect Answer</label>
                                                <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                             
                                                   <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Upload Your Question</label>
                                                <input id="cc-number" name="cc-number" type="file" class="form-control cc-number identified visa" value="" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                                <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Choose Category</label><br>
                                               <select id="cc-number" name="cc-number" style="width:650px;height:30px;">
                                                <option>Cat1</option>       
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                        
                                         
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">Add</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
<div class="col-lg-2"></div>
</div>
<?php include('include/footer.php');?>
