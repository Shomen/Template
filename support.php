<?php
include 'header.php';
?>
<div class="container" id="supportDiv">
    <div class="row">        
        <div class="col-xs-12 col-sm-12 col-lg-12">            
            <div class="col-xs-12 col-sm-6 col-lg-6 sc_in in-effect-left">
                <h1 id="h1LetUs">
                    Let Us Help you
                </h1>
                <p id="supportText" class="col-xs-12 col-sm-12 col-lg-12">
                    <strong class="col-xs-12 col-sm-12 col-lg-12">
                        Vivamus magna velit, congue a convallis a, faucibus in enim. 
                        Proin condimentum lobortis tortor eu condimentum. 
                        Donec scelerisque quam vitae quam tempor non aliquet arcu lobortis.                    
                    </strong>
                    <span class="text-muted col-xs-12 col-sm-12 col-lg-12">
                        Integer mauris est, hendrerit tempus faucibus et, blandit eu diam.
                        Praesent quis sodales libero. Quisque et pharetra arcu, mattis ultricies erat.
                        Pellentesque laciniaortor at tellus pellsque rutrum. Fusce id risus risus. 
                        Duis elit erat, viverra at tellus eget, faucibus facilisis augue.                 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Donec scelerisque quam vitae quam tempor non aliquet arcu lobortis.                 
                        Integer mauris est, hendrerit tempus faucibus et, blandit eu diam.
                        Praesent quis sodales libero. Quisque et pharetra arcu, mattis ultricies erat.
                    </span>
                </p>
            </div>
            <img id="supportImg"class="img-responsive col-xs-12 col-sm-6 col-lg-6 in-effect-right" src="img/support.jpg">
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-12 sc_in" id="productSupport">
            <h2 class="col-xs-12 col-sm-12 col-lg-12">
                Product Support
            </h2>
            <ul class="list-group col-xs-12 col-sm-12 col-lg-12">
                <li class="list-group-item col-xs-1 col-sm-1 col-lg-1 productSupportSteps" id="step1" onclick="showData('#supportDiv #productSupport #dataStep1', '#supportDiv #productSupport .productSupportData', '#supportDiv #productSupport #step1', '#supportDiv #productSupport .productSupportSteps')">
                    Step1
                </li>
                <li class="list-group-item col-xs-1 col-sm-1 col-lg-1 productSupportSteps" id="step2" onclick="showData('#supportDiv #productSupport #dataStep2', '#supportDiv #productSupport .productSupportData', '#supportDiv #productSupport #step2', '#supportDiv #productSupport .productSupportSteps')">
                    Step2
                </li>
                <li class="list-group-item col-xs-1 col-sm-1 col-lg-1 productSupportSteps" id="step3" onclick="showData('#supportDiv #productSupport #dataStep3', '#supportDiv #productSupport .productSupportData', '#supportDiv #productSupport #step3', '#supportDiv #productSupport .productSupportSteps')">
                    Step3
                </li>
            </ul>

            <div class="col-xs-12 col-sm-8 col-lg-8 productSupportData" id="dataStep1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Donec scelerisque quam vitae quam tempor non aliquet arcu lobortis.                 
                Integer mauris est, hendrerit tempus faucibus et, blandit eu diam.
            </div>
            <div class="col-xs-12 col-sm-8 col-lg-8 productSupportData" id="dataStep2">
                Step2  Details
            </div>
            <div class="col-xs-12 col-sm-8 col-lg-8 productSupportData" id="dataStep3">
                Step3 Details
            </div>
        </div>

        <!--        Consulting Support-->

        <div class="col-xs-12 col-sm-12 col-lg-12 sc_in" id="consulting">
            <h2 class="col-xs-12 col-sm-12 col-lg-12">
                Consulting with new start?
            </h2>
            <ul class="list-group col-xs-12 col-sm-12 col-lg-12">
                <li class="list-group-item col-xs-1 col-sm-1 col-lg-1 consultingSteps" id="step1" onclick="showData('#supportDiv #consulting #dataStep1', '#supportDiv #consulting .consultingData', '#supportDiv #consulting #step1', '#supportDiv #consulting .consultingSteps')">
                    Step1
                </li>
                <li class="list-group-item col-xs-1 col-sm-1 col-lg-1 consultingSteps" id="step2" onclick="showData('#supportDiv #consulting #dataStep2', '#supportDiv #consulting .consultingData', '#supportDiv #consulting #step2', '#supportDiv #consulting .consultingSteps')">
                    Step2
                </li>
                <li class="list-group-item col-xs-1 col-sm-1 col-lg-1 consultingSteps" id="step3" onclick="showData('#supportDiv #consulting #dataStep3', '#supportDiv #consulting .consultingData', '#supportDiv #consulting #step3', '#supportDiv #consulting .consultingSteps')">
                    Step3
                </li>
            </ul>

            <div class="col-xs-12 col-sm-8 col-lg-8 consultingData" id="dataStep1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Donec scelerisque quam vitae quam tempor non aliquet arcu lobortis.                 
                Integer mauris est, hendrerit tempus faucibus et, blandit eu diam.
            </div>
            <div class="col-xs-12 col-sm-8 col-lg-8 consultingData" id="dataStep2">
                Step2 Details
            </div>
            <div class="col-xs-12 col-sm-8 col-lg-8 consultingData" id="dataStep3">
                Step3 Details
            </div>
        </div>

        <!--         Other Support-->
        <div class="col-xs-12 col-sm-12 col-lg-12 sc_in" id="other">
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <h2 class="col-xs-12 col-sm-12 col-lg-12">
                    New on the site?
                </h2>
                <span class="text-muted">
                    Donec scelerisque quam vitae quam tempor non aliquet arcu lobortis.                 
                    Integer mauris est, hendrerit tempus faucibus et, blandit eu diam.
                </span>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <h2 class="col-xs-12 col-sm-12 col-lg-12">
                    Quick Start Guide
                </h2>
                <span class="text-muted">
                    Donec scelerisque quam vitae quam tempor non aliquet arcu lobortis.                 
                    Integer mauris est, hendrerit tempus faucibus et, blandit eu diam.
                </span>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <h2 class="col-xs-12 col-sm-12 col-lg-12">
                    Customer Success
                </h2>
                <span class="text-muted">
                    Donec scelerisque quam vitae quam tempor non aliquet arcu lobortis.                 
                    Integer mauris est, hendrerit tempus faucibus et, blandit eu diam.
                </span>
            </div>
        </div>
    </div>
</div><!-- /Support Div -->
<?php
include 'footer.php';
?> 