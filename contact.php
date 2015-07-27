<?php
include 'header.php';
?>
<div class="container" id="contactDiv">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12">           
            <div class="col-xs-12 col-sm-12 col-lg-12" id="contactForm">
                <h2>
                    Visit Us
                </h2>

                <!--                Google Map-->
                                <div class="col-xs-12 col-sm-12 col-lg-12" id="map">
                                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                                    
                                        <div id="gmap_canvas" class="col-xs-12 col-sm-12 col-lg-12"></div>
                                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                                        <a class="google-map-code" id="get-map-data"></a>
                                    
                                    <script type="text/javascript"> function init_map() {
                                        var myOptions = {zoom: 14, center: new google.maps.LatLng(40.805478, -73.96522499999998), mapTypeId: google.maps.MapTypeId.ROADMAP};
                                        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                                        marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(40.805478, -73.96522499999998)});
                                        infowindow = new google.maps.InfoWindow({content: "<b>The Breslin</b><br/>2880 Broadway<br/> New York"});
                                        google.maps.event.addListener(marker, "click", function() {
                                            infowindow.open(map, marker);
                                        });
                                        infowindow.open(map, marker);
                                    }
                                    google.maps.event.addDomListener(window, 'load', init_map);</script>
                                </div>

                <!--                Contact Form-->
                <h2>
                    Contact Form
                </h2>
                <form class="" method="post" role="form" id="contactForm">
                    <div class="form-group col-xs-12 col-sm-4 col-lg-4">
                        <label class="control-label col-xs-12 col-sm-12 col-lg-12" for="nm">Name:</label>
                        <div class="col-xs-12 col-sm-12 col-lg-12">
                            <input type="text" class="form-control" id="nm" name="nm" placeholder="Enter Name">
                        </div>
                    </div>

                    <div class="form-group col-xs-12 col-sm-4 col-lg-4">
                        <label class="control-label col-xs-12 col-sm-12 col-lg-12" for="email">Email:</label>
                        <div class="col-xs-12 col-sm-12 col-lg-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                    </div>

                    <div class="form-group col-xs-12 col-sm-4 col-lg-4">
                        <label class="control-label col-xs-12 col-sm-12 col-lg-12" for="subject">Subject:</label>
                        <div class="col-xs-12 col-sm-12 col-lg-12">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                        <label class="control-label col-xs-12 col-sm-12 col-lg-12" for="emailmessage">Message:</label>
                        <div class="col-xs-12 col-sm-12 col-lg-12">                            
                            <textarea class="form-control col-xs-12 col-sm-12 col-lg-12" id="emailmessage" name="emailmessage" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <span class="clearfix"></span>
                        </div>
                    </div>
                </form>

                <!--                Address-->
                <div class="col-xs-12 col-sm-12 col-lg-12" id="address">
                    <div class="col-xs-12 col-sm-4 col-lg-4">
                        <h3>
                            Address
                        </h3>
                        <span class="glyphicon glyphicon-home"></span>
                        <span class="text-muted">
                            #House, Street, Road,<br>
                            City, State, Country.
                        </span>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4">
                        <h3>
                            Phones
                        </h3>
                        <span class="glyphicon glyphicon-phone col-xs-2 col-sm-2 col-lg-2"></span>
                        <span class="text-muted col-xs-10 col-sm-10 col-lg-10">
                            + 11 22 33 55 88
                        </span>
                        <span class="glyphicon glyphicon-phone-alt col-xs-2 col-sm-2 col-lg-2"></span>
                        <span class="text-muted col-xs-10 col-sm-10 col-lg-10">
                            + 88 77 66 555 444
                        </span>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4">
                        <h3>
                            Email
                        </h3>
                        <span class="glyphicon glyphicon-envelope col-xs-2 col-sm-2 col-lg-2"></span>
                        <span class="text-muted col-xs-10 col-sm-10 col-lg-10">
                            id@email.com
                        </span>
                        <span class="glyphicon glyphicon-download col-xs-2 col-sm-2 col-lg-2"></span>
                        <span class="text-muted col-xs-10 col-sm-10 col-lg-10">
                            Download vCard: www.url@vcard.com
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /Contact Div -->
<?php
include 'footer.php';
?> 