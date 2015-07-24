<section class="small-section" id="kontakt">
<div class="container relative">
  
    <div class="row">
      <div class="col-md-8 col-xs-12 mt-30">
        <div class="text-center">
          <h4>Registrer deg her for mer utfyllende informasjon</h4>
        </div>
        <div class="mt-20 mb-20">
            <!-- Contact Form -->                            
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    
                  <form class="form contact-form" id="contact_form" method="post" action="<?php echo get_template_directory_uri(); ?>/contact_me.php">
                      
                          
                          
                              
                    <!-- Name -->
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Navn" pattern=".{3,100}" required>
                    </div>
                    
                    <!-- Email -->
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="input-md round form-control" placeholder="E-post" pattern=".{5,100}" required>
                    </div>
                    
                    <div class="form-group">
                    	<input type="tel" name="tel" id="tel" class="input-md round form-control" placeholder="Telefonnummer" pattern=".{5,100}" required>
                    </div>
                
                
                        <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Registrer</button>
                    
                              
                         
                      
                      
                      
                      
                      <div id="result"></div>
                  </form>
                    
                </div>
            </div>
            <!-- End Contact Form -->
                    
            </div>
        </div>
        
      <div class="col-md-4 col-xs-12">
        <h5 class="larger mb-0 align-left">Stian Bussesund</h5>
        <h5 class="mt-0 mb-20">- Partner / Megler MNEF -</h5>
        <div class="contact-item mb-20">
          <div class="ci-icon"> <i class="fa fa-mobile"></i> </div>
          <div class="ci-text"> (+47) 48 08 13 62 </div>
        </div>
        <div class="contact-item mb-20">
          <div class="ci-icon"> <i class="fa fa-phone"></i> </div>
          <div class="ci-text"> (+47) 55 27 40 70 </div>
        </div>
        <div class="contact-item mb-20">
          <div class="ci-icon"> <i class="fa fa-print"></i> </div>
          <div class="ci-text"> (+47) 55 27 40 71 </div>
        </div>
        <div class="contact-item mb-20">
          <div class="ci-icon"> <i class="fa fa-envelope"></i> </div>
          <div class="ci-text"> <a href="mailto:stbu@proaktiveiendom.no">stbu@proaktiveiendom.no</a> </div>
        </div>
      </div>
    </div>
  
</div>
</section>