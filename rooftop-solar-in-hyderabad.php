


<?php include 'header.php'; ?>


    <!-- Hero Section -->
    <section class="hero" style="padding: 0; display: flex; min-height: 600px; background: white; flex-wrap: wrap;">
        <div class="hero-left" style="display: flex; flex-direction: column; position: relative;">
            <div style="padding: 60px 20px 20px; text-align: center; z-index: 2;">
                <p style="color: #888; font-size: 2.2rem; font-weight: 600; margin-bottom: 5px;"> నమస్కారం హైదరాబాద్! </p>
                <h1 style="font-size: 2.5rem; line-height: 1.2; color: #111;">Power Your Home with Solar <br><span style="color: var(--primary); font-size: 3.5rem;">at Zero Investment!</span></h1>
                <div style="display: flex; justify-content: center; margin-top: 20px;">
                    <div style="background: white; padding: 8px 15px; border-radius: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); font-size: 0.9rem; font-weight: 600; display: inline-flex; align-items: center; gap: 8px;">
                        <img src="assets/google.svg" width="16" alt="Google"> Rated <i class="fas fa-star" style="color: #333; font-size: 0.8rem;"></i> 4.8 on Google | 12000+ ratings
                    </div>
                </div>
            </div>
            <div style="flex: 1; background: url('assets/hero_solar.png') center/cover no-repeat; position: relative; min-height: 300px;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 50px; background: linear-gradient(to bottom, white, transparent);"></div>
                <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">40,000+ Homes Solarised</div>
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">150MW+ Installation Experience</div>
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">₹100Cr+ Savings Across India</div>
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">10+ Years of Experience</div>
                </div>
            </div>
        </div>
        
        <div class="hero-right" style="background: #2f3d54; padding: 50px 40px; color: white; display: flex; flex-direction: column; justify-content: center;">
            <h3 style="font-size: 2rem; font-weight: 500; margin-bottom: 10px; text-align: center;">Book a FREE Home Visit</h3>
            <p style="text-align: center; color: #a0aabf; font-size: 0.9rem; margin-bottom: 30px;">And get a FREE Personalised 3D Rooftop<br><span style="color: var(--primary);">Solar Design For Your Home.</span></p>
            
            <form>
                <input type="text" placeholder="Full Name" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">
                <input type="tel" placeholder="Phone Number" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">
                <input type="text" placeholder="Pincode" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">
                
                <p style="margin-bottom: 15px; color: #a0aabf; font-size: 0.9rem;">Monthly Electricity Bill</p>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                    <label style="background: white; color: #333; padding: 8px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; cursor: pointer;">
                        <input type="radio" name="bill" style="display: none;"> Less than ₹1500
                    </label>
                    <label style="background: white; color: #333; padding: 8px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; cursor: pointer;">
                        <input type="radio" name="bill" style="display: none;"> ₹1500 - ₹2500
                    </label>
                    <label style="background: white; color: #333; padding: 8px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; cursor: pointer;">
                        <input type="radio" name="bill" style="display: none;"> ₹2500 - ₹4000
                    </label>
                    <label style="background: white; color: #333; padding: 8px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; cursor: pointer;">
                        <input type="radio" name="bill" style="display: none;"> ₹4000 - ₹8000
                    </label>
                    <label style="background: #a3e635; color: #111; padding: 8px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; cursor: pointer;">
                        <input type="radio" name="bill" checked style="display: none;"> More than ₹8000
                    </label>
                </div>
                
                <button type="button" style="width: 100%; padding: 15px; background: var(--primary); color: white; border: none; border-radius: 8px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: background 0.3s;" onmouseover="this.style.background='var(--primary-hover)'" onmouseout="this.style.background='var(--primary)'">Book a FREE Consultation</button>
                <div style="text-align: center; margin-top: 15px;">
                    <span style="background: white; color: #333; font-size: 0.8rem; font-weight: 600; padding: 5px 15px; border-radius: 20px;">Limited slots only!</span>
                </div>
            </form>
        </div>
    </section>

    <!-- Stats Bar -->
    <div class="stats-bar" style="background: #f8f9fa; padding: 40px 20px; display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; border-bottom: 1px solid #eee;">
        <div class="stat-item" style="display: flex; gap: 15px; align-items: center;">
            <i class="fas fa-solar-panel" style="font-size: 2.5rem; color: var(--primary);"></i>
            <div>
                <h3 style="font-size: 1.5rem; font-weight: 800; color: #333; margin: 0; line-height: 1;">150MW+</h3>
                <p style="font-size: 0.75rem; color: #666; font-weight: 600; margin: 0; letter-spacing: 1px; text-transform: uppercase;">Installation Experience</p>
            </div>
        </div>
        <div class="stat-divider" style="width: 1px; background: #ddd; height: 50px;"></div>
        <div class="stat-item" style="display: flex; gap: 15px; align-items: center;">
            <i class="fas fa-money-bill-wave" style="font-size: 2.5rem; color: var(--primary);"></i>
            <div>
                <h3 style="font-size: 1.5rem; font-weight: 800; color: #333; margin: 0; line-height: 1;">250Cr+</h3>
                <p style="font-size: 0.75rem; color: #666; font-weight: 600; margin: 0; letter-spacing: 1px; text-transform: uppercase;">Total Customer Savings</p>
            </div>
        </div>
        <div class="stat-divider" style="width: 1px; background: #ddd; height: 50px;"></div>
        <div class="stat-item" style="display: flex; gap: 15px; align-items: center;">
            <i class="fas fa-certificate" style="font-size: 2.5rem; color: var(--primary);"></i>
            <div>
                <h3 style="font-size: 1.5rem; font-weight: 800; color: #333; margin: 0; line-height: 1;">10+ Years</h3>
                <p style="font-size: 0.75rem; color: #666; font-weight: 600; margin: 0; letter-spacing: 1px; text-transform: uppercase;">Trusted Industry Experience</p>
            </div>
        </div>
    </div>

    <!-- Features -->
    <section class="features">
        <div class="container">
            <p
                style="color: var(--primary); font-weight: 600; text-transform: uppercase; font-size: 0.9rem; margin-bottom: 10px;">
                Why Choose SolarCare</p>
            <h2 class="section-title">Smarter Solar. Stronger Savings.<br>Trusted Nationwide.</h2>

            <div class="feature-cards">
                <div class="f-card">
                    <img src="assets/guaranteed_savings.jpg"
                        alt="Guaranteed Savings">
                    <div class="f-card-content">
                        <h4>Guaranteed Savings</h4>
                        <p>Only solar company in India with a money-back promise</p>
                    </div>
                </div>
                <div class="f-card">
                   <img src="assets/hassle_free_process.jpg"
                        alt="Hassle-free process">
                    <div class="f-card-content">
                        <h4>Hassle-free process</h4>
                        <p>Installation, subsidy and service — all handled directly by us. Zero middlemen.</p>
                    </div>
                </div>
                <div class="f-card">
                   <img src="assets/storm_proof_structure.jpg"
                        alt="Storm-proof Structure">
                    <div class="f-card-content">
                        <h4>Storm-proof Structure</h4>
                        <p>WindPro Mount™ tested for 170 kmph storms — built for India’s toughest weather. Approved by IIT Bombay.</p>
                    </div>
                </div>
                <div class="f-card">
                   <img src="assets/reliable_after_sales_service.jpg"
                        alt="Reliable after-sales service">
                    <div class="f-card-content">
                        <h4>Reliable after-sales service</h4>
                        <p>Regular proactive maintenance for steady, year-after-year performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Journey Section -->
    <section class="journey">
        <div class="container journey-container">
            <div class="journey-content">
                <p
                    style="color: var(--primary); font-weight: 600; font-size: 0.9rem; margin-bottom: 10px; text-transform: uppercase;">
                    Easy Process</p>
                <h2>Your Journey to Zero Electricity Bills Starts Here</h2>
                <p>We handle everything from start to finish. Our experts will assess your roof, design a custom system,
                    handle permits, and install the panels.</p>
                <ul class="journey-list">
                    <li><i class="fas fa-check-circle"></i> Free Site Visit & Assessment</li>
                    <li><i class="fas fa-check-circle"></i> Custom System Design</li>
                    <li><i class="fas fa-check-circle"></i> Permit & Paperwork Handled</li>
                    <li><i class="fas fa-check-circle"></i> Professional Installation</li>
                </ul>
                <a href="#" class="btn btn-primary">Explore More Process</a>
            </div>
            <div class="journey-image">
                <img src="assets/easy_process.png" alt="Solar Cleaning">
                <div class="check-badge"><i class="fas fa-check"></i></div>
                <div class="warranty-badge">25% <br><span style="font-size:0.8rem; font-weight:400">More
                        Efficient</span></div>
            </div>
        </div>
    </section>

    <!-- Big Stats -->
    <section class="big-stats">
        <div class="container">
            <h2 class="section-title">Powering Homes Across India</h2>
            <div class="big-stats-grid">
                <div class="b-stat">
                    <h3>40,000+</h3>
                    <p>Homes Powered</p>
                </div>
                <div class="b-stat">
                    <h3>100+</h3>
                    <p>Cities Covered</p>
                </div>
                <div class="b-stat">
                    <h3>96%</h3>
                    <p>Customer Satisfaction</p>
                </div>
                <div class="b-stat">
                    <h3>1M+</h3>
                    <p>Tons of CO2 Saved</p>
                </div>
            </div>


            <div>

               <div class="d-flex_as">

                <img src="assets/Map.png">
                <p> We are present in 29 Cities across 9 States, and are growing every day. </p>


             </div>



        </div>
    </section>

    <!-- Estimator Section -->
    <section class="estimator">
        <div class="container">




            <div class="app-content text-center">
                   <div class="app-image"> <img src="assets/subsidy.png" class="img-"> </div>
                <h2> Go Solar with Zero Investment</h2>
                <p style="color: var(--text-light); margin-bottom: 30px; font-size: 1.1rem;"> Government subsidy covers your downpayment, and monthly solar saving covers your EMI.</p>

               
            </div>


             


            <div class="est-box1">


                     <div class="est-left1">
                    <h3>Get Savings and EMI Estimates</h3>
                    <p>Enter your average monthly electricity bill to calculate potential savings and EMI options.</p>

                        </div>
           


                      <div class="table_box">

<table class="rwd-table">
  <tbody>
    <tr>
      <th> System Size </th>
  <th>EMI Tenure</th>


      <th> Your Monthly Saving </th>
      <th> Monthly EMI  </th>

   

    </tr>



    <tr>
      <td data-th="Supplier Code">
         <p class="hedding_as">3kW </p>
<p class="size-12"> Suitable for Rs. 1500 to Rs. 2500 monthly bill </p>
      </td>

      <td data-th="Supplier Name">
       60 Months
      </td>






      <td data-th="Invoice Number">
      <span>  </span>
<p class="hedding_as "> ₹4000 </p>
<span class="green_text"> for 25 years! </span>
      </td>



      <td data-th="Invoice Date">
       <span> </span>
<p class="hedding_as"> ₹3700 </p>
<span> 60 months </span>
      </td>



 
    </tr>







      <tr>
      <td data-th="Supplier Code">
         <p class="hedding_as">4kW </p>
<p class="size-12"> Suitable for Rs. 2500 to Rs. 4000 monthly bill </p>
      </td>

      <td data-th="Supplier Name">
       60 Months
      </td>






      <td data-th="Invoice Number">
      <span>  </span>
<p class="hedding_as "> ₹5300 </p>
<span class="green_text"> for 25 years! </span>
      </td>



      <td data-th="Invoice Date">
       <span> </span>
<p class="hedding_as"> ₹4800 </p>
<span> 60 months </span>
      </td>



 
    </tr>


      <tr>
      <td data-th="Supplier Code">
         <p class="hedding_as">5kW </p>
<p class="size-12"> Suitable for Rs. 4000 to Rs. 8000 monthly bill </p>
      </td>

      <td data-th="Supplier Name">
       60 Months
      </td>






      <td data-th="Invoice Number">
      <span>  </span>
<p class="hedding_as "> ₹7500 </p>
<span class="green_text"> for 25 years! </span>
      </td>



      <td data-th="Invoice Date">
       <span> </span>
<p class="hedding_as"> ₹6000 </p>
<span> 60 months </span>
      </td>



 
    </tr>

  </tbody>
</table>





                </div>    


                    
                    
            

 


               



            </div>


          





        </div>
    </section>

    <!-- App Section -->
    <section class="app-section">
        <div class="container app-container">
            <div class="app-image">
                <img src="assets/solar_app.png" alt="Solar App">
            </div>
            <div class="app-content">
                <p
                    style="color: var(--primary); font-weight: 600; font-size: 0.9rem; margin-bottom: 10px; text-transform: uppercase;">
                    Smart Monitoring</p>
                <h2>Real-time Monitoring App</h2>
                <p style="color: var(--text-light); margin-bottom: 30px; font-size: 1.1rem;"> Track the performance of your Solar System–anywhere, anytime.</p>

                <div class="app-list">
                    <div class="app-list-item">
                        <i class="fas fa-chart-line"></i>
                        <div>
                            <h4 style="margin-bottom:5px;"> Track your power generation</h4>
                            <p style="color:var(--text-light); font-size:0.9rem;">Instantly see how much electricity your solar panels are producing in real time, with clear and easy-to-understand data.</p>
                        </div>
                    </div>
                    <div class="app-list-item">
                        <i class="fa-solid fa-eye-slash"></i>
                        <div>
                            <h4 style="margin-bottom:5px;">Get 100% visibility on your savings</h4>
                            <p style="color:var(--text-light); font-size:0.9rem;">Keep track of your daily, monthly, and yearly savings on electricity bills with detailed insights.</p>
                        </div>
                    </div>


                    <div class="app-list-item">
                        <i class="fa-solid fa-award"></i>
                        <div>
                            <h4 style="margin-bottom:5px;">Track your referrals & rewards on the go

</h4>
                            <p style="color:var(--text-light); font-size:0.9rem;">Monitor your referral earnings and rewards anytime, anywhere directly from the app.</p>
                        </div>
                    </div>



                    <div class="app-list-item">
                       <i class="fa-brands fa-hubspot"></i>
                        <div>
                            <h4 style="margin-bottom:5px;">Full transparency on promised vs. actual generation</h4>
                            <p style="color:var(--text-light); font-size:0.9rem;">Compare expected performance with actual output to ensure your system is delivering exactly what was promised.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>
            <div class="test-grid">
                <div class="test-card">
                    <i class="fas fa-quote-right"></i>
                    <div class="test-user">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User">
                        <div>
                            <h4 style="font-size:1rem; color:var(--dark-navy)">Rahul Sharma</h4>
                            <p style="font-size:0.8rem; color:var(--text-light)">Indore</p>
                        </div>
                    </div>
                    <p style="font-size:0.9rem; line-height:1.6; color:var(--text-light);">"Getting solar from SolarCare
                        was the best decision. My electricity bill has reduced by 90%. The team was very professional
                        and the app is great to track daily generation."</p>
                </div>
                <div class="test-card dark">
                    <i class="fas fa-quote-right"></i>
                    <div class="test-user">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
                        <div>
                            <h4 style="font-size:1rem; color:white">Priya Patel</h4>
                            <p style="font-size:0.8rem; color:#a0aabf">Bhopal</p>
                        </div>
                    </div>
                    <p style="font-size:0.9rem; line-height:1.6; color:#a0aabf;">"Excellent service! From the initial
                        visit to the final installation, everything was smooth. The EMI options made it very affordable
                        for us. Highly recommended."</p>
                </div>
                <div class="test-card">
                    <i class="fas fa-quote-right"></i>
                    <div class="test-user">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="User">
                        <div>
                            <h4 style="font-size:1rem; color:var(--dark-navy)">Amit Kumar</h4>
                            <p style="font-size:0.8rem; color:var(--text-light)">Ujjain</p>
                        </div>
                    </div>
                    <p style="font-size:0.9rem; line-height:1.6; color:var(--text-light);">"The quality of the panels is
                        top-notch. It's been 6 months and I haven't faced a single issue. The post-installation support
                        is also very responsive."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <span>What is the cost of solar rooftop plant installation in Bhopal?</span>
                    <i class="fas fa-chevron-down" style="color:#aaa;"></i>
                </div>
                <div class="faq-item">
                    <span>What is the solar subsidy in MP?</span>
                    <i class="fas fa-chevron-down" style="color:#aaa;"></i>
                </div>
                <div class="faq-item">
                    <span>Can I run a 1.5-ton AC on solar without batteries?</span>
                    <i class="fas fa-chevron-down" style="color:#aaa;"></i>
                </div>
                <div class="faq-item">
                    <span>Can I run 2 ACs on a 5 kW solar system?</span>
                    <i class="fas fa-chevron-down" style="color:#aaa;"></i>
                </div>


                 <div class="faq-item">
                    <span> Is 3 kW enough for 2 ACs?</span>
                    <i class="fas fa-chevron-down" style="color:#aaa;"></i>
                </div>



            </div>
        </div>
    </section>



<?php include 'footer.php'; ?>






