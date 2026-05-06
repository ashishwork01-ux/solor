


<?php include 'header.php'; ?>

<style>
  .d-fle {
    display: flex;
    gap: 17px;
}

.form_my {
    background-color: #fff;
    padding: 20px;
    border-radius: 25px;
}


.form_my h2, p {
    color:#0e1628 ;
 
}




.form_my input{
    border: 1px solid #ccc;
 
}



</style>



  <!-- Hero Section -->
    <section class="hero" style="padding: 0;   min-height: 600px; background: white;  ">


        <div class="hero-center" style="display: flex; flex-direction: column; position: relative;">
            <div style="padding: 60px 20px 20px; text-align: center; z-index: 2;">
                 
                <h1 style="font-size: 2.5rem; line-height: 1.2; color: #111;">

                   India’s top companies

                     <br><span style="color: var(--primary); font-size: 3.5rem;">

                   choose SolarCare.
                </span></h1>


                <div class=""> <a href="#" class="btn btn-primary desktop-quote">Get a Quote</a> </div>


 
            </div>
            <div style="flex: 1; background: url('assets/commercial.png') center/cover no-repeat; position: relative; min-height: 400px;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 50px; background: linear-gradient(to bottom, white, transparent);"></div>
                <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">40,000+ Homes Solarised</div>
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">150MW+ Installation Experience</div>
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">₹100Cr+ Savings Across India</div>
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">10+ Years of Experience</div>
                </div>
            </div>
        </div>
        
     

    </section>






        <!-- Journey Section -->
    <section class="journey">
        <div class="container journey-container">
            <div class="journey-content">
               
                <h2>Submit a solar project enquiry</h2>
                <p>Our solar experts will guide you in your solar journey.</p>
           
           
            </div>
            <div class="journey-image">
               

               <div class="form_my" >

                <div class="form-component">
     
        <h2 class="title fw-bold" id="">Book a FREE Visit</h2>
        <p class="desc" style="margin-bottom: 20px;">Our Solar Consultants will visit to understand your power requirements and create a personalised savings plan for your enterprise.</p>

      

        <form>

                <input type="text" placeholder="Full Name" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px;   font-size: 1rem; color: #333; outline: none;">


                <input type="tel" placeholder="Company Name" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px;   font-size: 1rem; color: #333; outline: none;">



                <div class="d-fle">


                     <input type="tel" placeholder="City" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px;  font-size: 1rem; color: #333; outline: none;">



 <input type="tel" placeholder="Pin Code" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px;   font-size: 1rem; color: #333; outline: none;">




                </div>    

                 <div class="d-fle">

                     <input type="tel" placeholder="Whatsapp Number" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px;   font-size: 1rem; color: #333; outline: none;">


 <input type="tel" placeholder="Monthly Bill" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px;  font-size: 1rem; color: #333; outline: none;">

                     


                  </div>  

 
  <div class="inputfield terms d-fle">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label> 
          <p>I agree to SolarSquare Terms of use and Privacy Policy.</p>
       </div>
              
                
                <button type="button" style=" margin-top: 20px; width: 100%;   padding: 15px; background: var(--primary); color: white; border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; border-radius: 8px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: background 0.3s;" onmouseover="this.style.background='var(--primary-hover)'" onmouseout="this.style.background='var(--primary)'">Submit Details</button>
                <div style="text-align: center; margin-top: 15px;">
                    <span style="background: white; color: #333; font-size: 0.8rem; font-weight: 600; padding: 5px 15px; border-radius: 20px;">Limited slots only!</span>
                </div>
            </form>






 
</div>


               </div>
                
                
            </div>
        </div>
    </section>





<style>

/* Container */
.section{
  max-width:1200px;
  margin:auto;
  padding:50px 20px;
}

/* Heading */
.section h1{
  text-align:center;
  font-size:32px;
  font-weight:700;
  color:#1a1a1a;
  margin-bottom:40px;
  line-height:1.4;
}

/* Cards */
.cards{
  display:flex;
  gap:25px;
}

/* Card */
.card{
  position:relative;
  flex:1;
  border-radius:15px;
  overflow:hidden;
  cursor:pointer;
}

.card img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}

/* Gradient Overlay */
.overlay{
  position:absolute;
  bottom:0;
  left:0;
  width:100%;
  padding:25px;
  color:white;

  background: linear-gradient(
    to top,
    rgba(0, 0, 120, 0.95) 0%,
    rgba(0, 0, 180, 0.8) 40%,
    rgba(0, 0, 255, 0) 100%
  );
}

/* Text */
.overlay h3{
  font-size:22px;
  margin-bottom:10px;
}

.overlay p{
  font-size:14px;
  line-height:1.5;
  opacity:0.9;
  color: #fff;
}

/* Hover Effect */
.card:hover img{
  transform:scale(1.05);
  transition:0.4s;
}

/* Responsive */
@media(max-width:900px){
  .cards{
    flex-direction:column;
  }

  .section h1{
    font-size:24px;
  }
}

















/* Row */
.testimonial{
  display:flex;
  align-items:stretch; /* IMPORTANT FIX */
  margin-bottom:30px;
}

/* Image */
.testimonial img{
  width:35%;
  height:100%;
  object-fit:cover;
  border-radius:20px 0 0 20px;
}

/* Content */
.content{
  width:65%;
  padding:30px;
  display:flex;
  flex-direction:column;
  justify-content:center; /* CENTER ALIGN FIX */
  border-radius:0 20px 20px 0;
}

/* Dark */
.dark{
  background:#0b1f66;
  color:#fff;
}

/* Light */
.light{
  background:#eaeaea;
  color:#333;
}

/* Text */
.content p{
  font-size:15px;
  line-height:1.6;
  margin-bottom:15px;
  color: #fff;
}

.content h4{
  font-size:15px;
  font-weight:600;
}

/* Reverse */
.reverse{
  flex-direction:row-reverse;
}

.reverse img{
  border-radius:0 20px 20px 0;
}

.reverse .content{
  border-radius:20px 0 0 20px;
}

/* Responsive */
@media(max-width:768px){
  .testimonial{
    flex-direction:column;
  }

  .testimonial img,
  .content{
    width:100%;
  }

  .testimonial img{
    height:200px;
    border-radius:20px 20px 0 0;
  }

  .content{
    border-radius:0 0 20px 20px;
  }
}
</style>




    <!-- Estimator Section -->
    <section class="estimator">
        <div class="container">


<section class="section">

  <h1>
   Hassle-free, professional and friendly installation experience – we are committed to making your solar journey easy
  </h1>

  <div class="cards">

    <!-- Card 1 -->
    <div class="card">
      <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc" alt="">
      <div class="overlay">
        <h3>Best price challenge</h3>
        <p>
          We create premium solar systems using top-quality components, all at competitive prices, to guarantee a lifetime of high performance and savings.
        </p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
      <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837" alt="">
      <div class="overlay">
        <h3>Great solar starts with precision designs</h3>
        <p>
         We survey your roof, take measurements, and conduct shadow analysis in our softwares to come up with precise 3D design for your rooftop solar. We consult with you and take approvals on the design before installation.
        </p>
      </div>
    </div>

  </div>

</section>
         


                    


          





        </div>
    </section>





      <!-- Big Stats -->
    <section class="big-stats">
        <div class="container">
            <h2 class="section-title">Powering Homes Across India</h2>
            <div class="big-stats-grid">
                <div class="b-stat1">
                    <img src="assets/hs-section-3-1.webp">
                    <h3>200+</h3>
                    <p>commercial projects</p>
                </div>
                <div class="b-stat1">
                    <img src="assets/hs-section-3-3.webp">
                    <h3>10+</h3>
                    <p>years</p>
                </div>
                <div class="b-stat1">
                    <img src="assets/hs-section-3-4.webp">
                    <h3>130+ MWp</h3>
                    <p>installation experience</p>
                </div>
                <div class="b-stat1">
                    <img src="assets/cm-stats-2.webp">
                    <h3>140₹+ Cr</h3>
                    <p>saving annually</p>
                </div>
            </div>


            <div>
 


        </div>
    </section>



<section class="section">

  <h1>Exceptional quality. End-to-end service. Delighted customers.</h1>

  <!-- First -->
  <div class="testimonial">
    <img src="assets/340x184.webp">
    <div class="content dark">
      <p>
        The SolarSquare team was very professional and had excellent interpersonal relations.
        Project was completed within 3 months without escalations.
      </p>
      <h4>C K Tharad, Senior VP, LN J Bhilwara Group</h4>
    </div>
  </div>

  <!-- Second -->
  <div class="testimonial reverse">
    <img src="assets/297x139.webp">
    <div class="content light">
      <p style="color:#000;">
        I am happy to acknowledge that SolarSquare has met the strictest Quality & Safety norms.
      </p>
      <h4>Anish Sengupta, Johnson & Johnson</h4>
    </div>
  </div>

</section>




<?php include 'footer.php'; ?>






