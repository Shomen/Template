<?php
include 'header.php';
include('slider.php');
?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="container-fluid intro" id="home">
    <div class="container">
        <div class="row" id="introRow">
            <div class="col-xs-12 col-sm-7 col-lg-7 in-effect-left">
                <h1>Welcome Note</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed eget sapien sapien. Nunc quis justo nisl, a gravida augue. 
                    In quis varius metus. Pellentesque purus odioia eu vitae libero. 
                    Duis eget ante turpis, vestibulum tempus arcu. Curabitur quis mauris urna. 
                </p>
            </div>            
            <img src="img/desktop2.png" class="col-xs-1 col-sm-3 col-lg-3 in-effect-right">
        </div>        
    </div>

</div>
<div class="container">
    <!-- Home row of columns -->
    <div class="row sc_in" id="WhatWeDo">
        <div class="col-xs-12 col-sm-6 col-lg-4" id="ExcellentDesign">
            <img src="img/design.png" class="img-responsive">
            <h2>Excellent Design</h2>
            <p>
                Donec id elit non mi porta gravida at eget metus. 
                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
                ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. 
                Donec sed odio dui. 
            </p>

        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4" id="CustomSoftwares">
            <img src="img/customSoftware.png" class="img-responsive">
            <h2>Custom Softwares</h2>
            <p>
                Donec id elit non mi porta gravida at eget metus. 
                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
                ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. 
                Donec sed odio dui. 
            </p>                
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-4" id="BestSupport">
            <img src="img/support.png" class="img-responsive">
            <h2>Best Support</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, 
                egestas eget quam. Vestibulum id ligula porta felis euismod semper. 
                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
                ut fermentum massa justo sit.
            </p>                
        </div>
    </div>
</div>

<div class="container-fluid" id="recentProjects">
<div class="container sc_in">
    <div class="row" id="projects">
        <div class="col-xs-12 col-sm-12 col-lg-12" id="liProjects">
            <h1 >Recent Projects</h1>
            <ul class="list-group">
                <li class="list-group-item col-xs-12 col-sm-4 col-lg-4">

                    <img id="img1" src="img/project1.jpg" class="in-effect-right">

                </li>
                <li class="list-group-item col-xs-12 col-sm-4 col-lg-4">

                    <img src="img/project2.jpg" class="in-effect-right">                        

                </li>
                <li class="list-group-item col-xs-12 col-sm-4 col-lg-4">

                    <img src="img/office.jpg" class="in-effect-right">                        

                </li>                         
            </ul>            
        </div>
    </div>
</div>
</div>
    
<hr>
<?php
include 'footer.php';
?> 