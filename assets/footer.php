        <div class="footer-wrapper">
            <footer class="container py-5">
                <div class="footer-inner row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a class="navbar-brand mb-4" href="<?php echo SITE_PATH;?>/">
                            <img src="<?php echo SITE_PATH;?>/assets/images/logo.png" width="80" height="80" alt="Logo IMC Consultancy">
                            <span class="h5">IMC Cnsultancy</span>
                        </a>
                        <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, mollitia.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <p class="h3 text-light mb-3">MBBS Abroad</p>
                        <ul class="text-light footer-nav p-0">
                            <?php 
                                $footerCountries = $countryObj->getAllCountry();
                                while($country = mysqli_fetch_assoc($footerCountries)){?>
                                    <li>
                                        <a href="<?php echo SITE_PATH;?>/mbbs-in-<?php echo urlencode(strtolower($country['name']))?>">MBBS in <?php echo $country['name']?></a>
                                    </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <p class="h3 text-light mb-3">Quick Links</p>
                        <ul class="text-light footer-nav p-0">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Galley</a></li>
                            <li><a href="#">FAQ's</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <p class="h3 text-light mb-3">Contact Info</p>
                        <p class="text-light">
                            77/39 ground floor, behind Tagore public school, Mansarovar Sector 7, Shipra Path, Barh Devariya, Mansarovar, Jaipur, Rajasthan 302020
                        </p>
                        <p class="text-light">Phoe : <a href="tel:XXXXXXXXXX">+91-XXXXXXXXXX</a></p>
                        <p class="text-light">Email : <a href="mailto:info@imcconsultancy.co.in">imcconsultancy.co.in</a></p>
                    </div>
                </div>
            </footer>
        </div>
        
        
        <!-- Modal -->
        <div class="modal fade" id="applyNow" tabindex="-1" aria-labelledby="applyNowLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="navbar-brand">
                            <img src="<?php echo SITE_PATH;?>/assets/images/logo.png" width="80" height="80" alt="Logo IMC Consultancy">
                            <span class="brand">IMC Consultancy</span>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Get Free Counselling</h3>
                        <form>
                            <div class="form-group my-3">
                                <input type="text" class="form-control" id="inputName" placeholder="Name*">
                            </div>
                            <div class="form-group my-3">
                                <input type="text" class="form-control" id="inputMobile" placeholder="Mobile*">
                            </div>
                            <div class="form-group my-3">
                                <input type="email" class="form-control" id="inputEmail" placeholder="E-Mail Address*">
                            </div>
                            <div class="form-group my-3">
                                <input type="text" class="form-control" id="inputScore" placeholder="Neet Score">
                            </div>
                            <div class="form-group my-3">
                                <input type="text" class="form-control" id="inputCity" placeholder="City">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">                    
                        <button type="button" class="btn btn-dark">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="<?php echo SITE_PATH;?>/js/index.js"></script>
    </body>
</html>