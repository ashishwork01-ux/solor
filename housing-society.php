


<?php include 'header.php'; ?>

<style>
    
/* SECTION TITLE */
.title{
  text-align:center;
  font-size:28px;
  font-weight:700;
  margin-bottom:30px;
}
.stat img {
    width: 40px !important;
    display: block;
}

/* LOGOS */
.logo-row{
  display:flex;
  justify-content:center;
  align-items:center;
  gap:40px;
  flex-wrap:wrap;
}
.logo-row img{
  height:90px;
  opacity:0.7;
}

/* WHY SECTION */
.why{
  display:grid;
  grid-template-columns: 1fr 1fr;
  gap:30px;
  margin-top:50px;
}

.why img{
  width:100%;
  border-radius:12px;
}

/* STATS */
.stats{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:15px;
}

.stat{
  background:#eef2f7;
  padding:20px;
  border-radius:10px;
  font-weight:600;
}

/* MAP */
.map-box{
  background:#dfe8f3;
  border-radius:15px;
  padding:30px;
  margin-top:50px;

  display:grid;
  grid-template-columns:1fr 1fr;
  align-items:center;
}

.map-box img{
  width:100%;
  max-width:280px;
  justify-self:end;
}

.btn{
  margin-top:15px;
  padding:10px 18px;
  background:#0b1f66;
  color:#fff;
  border:none;
  border-radius:6px;
  cursor:pointer;
}

/* PROJECTS */
.projects{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:20px;
  margin-top:50px;
}

.project{
  background:#fff;
  border-radius:12px;
  overflow:hidden;
}

.project img{
  width:100%;
  height:150px;
  object-fit:cover;
}

.project p{
  padding:12px;
  font-weight:600;
}

/* SAVINGS */
.savings{
  margin-top:60px;
  text-align:center;
}

.saving-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:20px;
  margin-top:25px;
}

.box{
  background:#fff;
  padding:20px;
  border-radius:12px;
}

/* DOWNLOAD */
.download{
  margin-top:60px;
  display:grid;
  grid-template-columns:1fr 1fr;
  align-items:center;
}

.download img{
  width:180px;
  justify-self:end;
}

/* HOUSING */
.housing{
  margin-top:60px;
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:20px;
}

.housing img{
  width:100%;
  border-radius:12px;
}

.housing-stats{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:15px;
}

/* TESTIMONIAL */
.test-grid{
  margin-top:50px;
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:20px;
}

.test{
  background:#fff;
  padding:20px;
  border-radius:12px;
}

/* SAFETY */
.safety{
  margin-top:60px;
  text-align:center;
}

.safe-grid{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:20px;
  margin-top:25px;
}

.safe{
  background:#fff;
  border-radius:12px;
  overflow:hidden;
}

.safe img{
  width:100%;
  height:120px;
  object-fit:cover;
}

/* MOBILE */
@media(max-width:768px){

  .why,
  .map-box,
  .projects,
  .saving-grid,
  .download,
  .housing,
  .test-grid,
  .safe-grid{
    grid-template-columns:1fr;
  }

  .map-box img,
  .download img{
    justify-self:center;
    margin-top:20px;
  }
}



.d-flex {
    display: flex;
    gap: 20px;
 
}


</style>


    <!-- Hero Section -->
    <section class="hero" style="padding: 0; display: flex; min-height: 600px; background: white; flex-wrap: wrap;">
        <div class="hero-left" style="display: flex; flex-direction: column; position: relative;">
            <div style="padding: 60px 20px 20px; text-align: center; z-index: 2;">
               


                <h1 style="font-size: 2.5rem; line-height: 1.2; color: #111;">

                   Slash Your Society's Electricity


                    <br>


                    <span style="color: var(--primary); font-size: 3.5rem;">

                    Bills by up to 90%!

                </span></h1>

                <p> Guaranteed solar savings — professionally managed from design to maintenance. </p>


                <div style="display: flex; justify-content: center; margin-top: 20px;">


                    <div style="background: white; padding: 8px 15px; border-radius: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); font-size: 0.9rem; font-weight: 600; display: inline-flex; align-items: center; gap: 8px;">


                        <img src="assets/google.svg" width="16" alt="Google"> Rated <i class="fas fa-star" style="color: #333; font-size: 0.8rem;"></i>
                         4.8 on Google | 12000+ ratings
                    </div>
                </div>
            </div>
            <div style="flex: 1; background: url('assets/housing-society.png') center/cover no-repeat; position: relative; min-height: 300px;">
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



            <p style="text-align: center; color: #a0aabf; font-size: 0.9rem; margin-bottom: 30px;">

                      Our Solar Consultants will visit to understand your power requirements 
                    

                <br><span style="color: var(--primary);">

              and create a personalised savings plan for your society.

            </span></p>
            
            <form>
                <input type="text" placeholder="Full Name" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">




                <input type="tel" placeholder="Name of the Housing Society" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">


                <div class="d-flex">

                     <input type="text" placeholder="Whatsapp Number" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">


 <input type="text" placeholder="PIN Code" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">

  </div>  





    <div class="d-flex"> 


<select name="cars" id="cars" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">
  <option value="volvo">Monthly bill.</option>
  <option value="saab">0 - ₹50,000</option>
  <option value="mercedes">₹50,000 - ₹2 Lacs</option>
  <option value="audi">Above ₹2 Lacs</option>
</select>



<select name="cars" id="cars" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">
  <option value="volvo">AGM status.</option>
  <option value="saab">We already have AGM Approval</option>
  <option value="mercedes">We do not have an AGM Approval yet</option>
  <option value="audi">We want help in preparing for our AGM</option>
</select>





 

</div>

                




               






                
                <p style="margin-bottom: 15px; color: #a0aabf; font-size: 0.9rem;">What is your Designation in the Society?*</p>


                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px;">
                    <label style="background: white; color: #333; padding: 8px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; cursor: pointer;">
                        <input type="radio" name="bill" style="display: none;"> Management committee member
                    </label>
                    <label style="background: white; color: #333; padding: 8px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; cursor: pointer;">
                        <input type="radio" name="bill" style="display: none;">Resident
                    </label>
                    <label style="background: white; color: #333; padding: 8px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; cursor: pointer;">
                        <input type="radio" name="bill" style="display: none;"> Builder
                    </label>
                    <label style="background: white; color: #333; padding: 8px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; cursor: pointer;">
                        <input type="radio" name="bill" style="display: none;"> Facility Manager
                    </label>
                  
                </div>
                
                <button type="button" style="width: 100%; padding: 15px; background: var(--primary); color: white; border: none; border-radius: 8px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: background 0.3s;" onmouseover="this.style.background='var(--primary-hover)'" onmouseout="this.style.background='var(--primary)'">Get Started </button>
                <div style="text-align: center; margin-top: 15px;">
                    <span style="background: white; color: #333; font-size: 0.8rem; font-weight: 600; padding: 5px 15px; border-radius: 20px;">Limited slots only!</span>
                </div>
            </form>
        </div>
    </section>



   <div class="container">


    <div class="big-stats">

    <!-- LOGOS -->
  <h2 class="title">Trusted Across India</h2>
  <div class="logo-row">
    <img src="assets/Untitled-design.png">
    <img src="assets/Frame-1171277046.webp">
    <img src="assets/Frame-1171277047.webp">
    <img src="assets/Frame-1171277045.webp">
  </div>

</div>



<div class="big-stats">

  <!-- WHY -->
    <h1> Why Choose SolarSquare </h1>
  <div class="why">





    <img src="assets/603x282-px.webp">
    <div class="stats">


      <div class="stat">
        <img      src="assets/subsidy (1).png">
       500+  Housing Societies</div>


      <div class="stat">
            <img src="assets/Solar_Power_Icon.png">

      800 Cr+ Projects</div>

      <div class="stat">

            <img src="assets/sunny.webp">
      10+ Years Experience</div>


      <div class="stat">

<img src="assets/person.webp">

      27000+ Customers</div>
    </div>
  </div>

</div>









<div class="big-stats">
  <!-- MAP -->
  <div class="map-box">
    <div>
      <h3>We serve 20+ states & UTs across India</h3>
      <button class="btn">Start Saving Today</button>
    </div>
    <img src="assets/Indian-Map.webp">
  </div>

</div>










<div class="big-stats">


<h2> Our Largest Projects in  </h2>


  <!-- PROJECT -->
  <div class="projects">
    <div class="project">
      <img src="assets/292x284-px.webp">
      <p>Mumbai</p>
    </div>
    <div class="project">
       <img src="assets/safety.webp">
      <p>Bangalore</p>
    </div>
    <div class="project">
       <img src="assets/292x284-px.webp">
      <p>Delhi</p>
    </div>
  </div>


</div>










  <!-- SAVINGS -->
  <div class="savings">
    <h2>Guaranteed Savings</h2>
    <div class="saving-grid">
      <div class="box">
            <img src="assets/Savings_Icon.webp">
      Subsidy Available</div>
      <div class="box">
            <img src="assets/Balance_icon.webp">
      Flexible Financing</div>
      <div class="box">
            <img src="assets/Rupee_Icon.webp">
      Payback in 4 Years</div>
    </div>
  </div>

  <!-- DOWNLOAD -->
  <div class="download">
    <div>
      <h3>Download Free Solar Guide</h3>
      <button class="btn">Download FREE</button>
    </div>
    <img src="assets/Guide.png">
  </div>

  <!-- HOUSING -->
  <div class="housing">
    <img src="assets/694x324-px.webp">
    <div class="housing-stats">
      <div class="stat">June 2024</div>
      <div class="stat">₹84L Savings</div>
      <div class="stat">1 Year Break</div>
      <div class="stat">₹60L Subsidy</div>
    </div>
  </div>

 
 

</div>

<br>
 


<?php include 'footer.php'; ?>






