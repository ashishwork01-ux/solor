


<?php include 'header.php'; ?>


<style>

.d-fle {
    display: flex;
    gap: 17px;
}



 
.d-flex {
    display: flex !important;
    gap: 20px;
}
  








































 

/* TABS */
.tabs{
  display:flex;
  gap:10px;
  padding: 5px 25px;
}

.tab{
  flex:1;
  padding:10px;
  text-align:center;
  background:#dbe4f2;
  border-radius:20px;
  cursor:pointer;
  font-weight:bold;
}

.tab.active{
  background:#1e6edc;
  color:#fff;
}

/* FORM */
.form-box{
 
  padding:5px 25px;
  border-radius:10px;
}

.form-box h2{
  margin-bottom:10px;
}

.form-box p{
  font-size:14px;
  margin-bottom:15px;
}

input{
  width:100%;
  padding:12px;
  margin-bottom:10px;
  border:1px solid #ccc;
  border-radius:6px;
}

/* BILL BUTTONS */
.bill-options{
  display:flex;
  flex-wrap:wrap;
  gap:10px;
  margin:10px 0;
}

.bill-options button{
  padding:10px;
  border:none;
  border-radius:20px;
  background:#e6ebf5;
  cursor:pointer;
}

.bill-options button.active{
  background:#1e6edc;
  color:#fff;
}

/* BUTTON */
.submit-btn{
  width:100%;
  padding:15px;
  background:#0d2b87;
  color:#fff;
  border:none;
  border-radius:8px;
  margin-top:10px;
  cursor:pointer;
  font-size:16px;
} 
.tab-content{
  display:none;
}

.tab-content.active{
  display:block;


 </style>


    <!-- Hero Section -->
    <section class="hero" style="padding: 0; display: flex; min-height: 600px; background: white; flex-wrap: wrap;">



        <div class="hero-left" style="display: flex; flex-direction: column; position: relative;">
            <div style="padding: 60px 20px 20px; text-align: center; z-index: 2;">
                 
                <h1 style="font-size: 2.5rem; line-height: 1.2; color: #111;">

                   Schedule a FREE consultation

                     <br><span style="color: var(--primary); font-size: 3.5rem;">

                    with us today!
                </span></h1>

                <p>Please fill the form and we will get in touch with you for the consultation </p>


                <div style="display: flex; justify-content: center; margin-top: 20px;">
                    <div style="background: white; padding: 8px 15px; border-radius: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); font-size: 0.9rem; font-weight: 600; display: inline-flex; align-items: center; gap: 8px;">
                        <img src="assets/google.svg" width="16" alt="Google"> Rated <i class="fas fa-star" style="color: #333; font-size: 0.8rem;"></i> 4.8 on Google | 12000+ ratings
                    </div>
                </div>
            </div>
            <div style="flex: 1; background: url('assets/home_bannr.png') center/cover no-repeat; position: relative; min-height: 460px;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 50px; background: linear-gradient(to bottom, white, transparent);"></div>
                <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">40,000+ Homes Solarised</div>
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">150MW+ Installation Experience</div>
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">₹100Cr+ Savings Across India</div>
                    <div style="background: rgba(0,0,0,0.6); color: white; padding: 6px 12px; border-radius: 4px; font-size: 0.8rem;">10+ Years of Experience</div>
                </div>
            </div>
        </div>










        
        <div class="hero-right" style="background: #2f3d54; padding:0px 25px; color: white; display: flex; flex-direction: column; justify-content: center;">







<div class="right">


<div class="top_fix">

<div class="tabs">
  <div class="tab active" onclick="changeTab('res')">Residential</div>
  <div class="tab" onclick="changeTab('soc')">Housing Society</div>
  <div class="tab" onclick="changeTab('com')">Commercial</div>
</div>

 </div>   




<!-- TABS -->


<!-- FORM CONTENTS -->
<div class="form-box tab-content active" id="res">


            <h3 style="font-size: 2rem; font-weight: 500; margin-bottom: 0px; text-align: center;">Book a FREE Consultation</h3>
            <p style="text-align: center; color: #a0aabf; font-size: 0.9rem; margin-bottom: 10px;">Get a genuine advice from our solar experts. 

<br><span style="color: var(--primary);">No pressure, book only if you are satisfied!</span></p>
            
            <form>
                <input type="text" placeholder="Full Name" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">
                <input type="tel" placeholder="Whatsapp Number" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">
                
                
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

                <input type="text" placeholder="Pincode" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">


                <div class="inputfield terms d-fle">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label> 
          <p>I agree to SolarSquare Terms of use and Privacy Policy.</p>
       </div>


                
                <button type="button" style="width: 100%; padding: 15px; background: var(--primary); color: white; border: none; border-radius: 8px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: background 0.3s;" onmouseover="this.style.background='var(--primary-hover)'" onmouseout="this.style.background='var(--primary)'">Book a FREE Consultation</button>
                <div style="text-align: center; margin-top: 15px;">
                    <span style="background: white; color: #333; font-size: 0.8rem; font-weight: 600; padding: 5px 15px; border-radius: 20px;">Limited slots only!</span>
                </div>
            </form>



</div>
















<div class="form-box tab-content" id="soc">



            <form>
                <input type="text" placeholder="Full Name" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">
                <input type="tel" placeholder="Name of the Housing Society" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">




                <div class="d-flex">

                     <input type="text" placeholder="Whatsapp Number" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">


 <input type="text" placeholder="PIN Code" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">

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


  
                <div class="inputfield terms d-fle">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label> 
          <p>I agree to SolarSquare Terms of use and Privacy Policy.</p>
       </div>


                
                <button type="button" style="width: 100%; padding: 15px; background: var(--primary); color: white; border: none; border-radius: 8px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: background 0.3s;" onmouseover="this.style.background='var(--primary-hover)'" onmouseout="this.style.background='var(--primary)'">Get Started </button>
                <div style="text-align: center; margin-top: 15px;">
                    <span style="background: white; color: #333; font-size: 0.8rem; font-weight: 600; padding: 5px 15px; border-radius: 20px;">Limited slots only!</span>
                </div>
            </form>






</div>
















<div class="form-box tab-content" id="com">
 


<form>
                <input type="text" placeholder="Full Name" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">


                <input type="tel" placeholder="Company Name" required style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">




                <div class="d-flex">

                     <input type="text" placeholder="City" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">


 <input type="text" placeholder="PIN Code" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">

  </div>


  <div class="d-flex"> 


<input type="text" placeholder="Whatsapp Number" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">



<input type="text" placeholder="Monthly Bill" required="" style="width: 100%; padding: 15px; margin-bottom: 20px; border-radius: 6px; border: none; font-size: 1rem; color: #333; outline: none;">




 

</div>


 
  
                <div class="inputfield terms d-fle">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label> 
          <p>I agree to SolarSquare Terms of use and Privacy Policy.</p>
       </div>


                
                <button type="button" style="width: 100%; padding: 15px; background: var(--primary); color: white; border: none; border-radius: 8px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: background 0.3s;" onmouseover="this.style.background='var(--primary-hover)'" onmouseout="this.style.background='var(--primary)'">Get Started </button>
                <div style="text-align: center; margin-top: 15px;">
                    <span style="background: white; color: #333; font-size: 0.8rem; font-weight: 600; padding: 5px 15px; border-radius: 20px;">Limited slots only!</span>
                </div>
            </form>











</div>

  </div>









        </div>
    </section>





<script>
function changeTab(tabId){

  // remove active from tabs
  document.querySelectorAll('.tab').forEach(t=>{
    t.classList.remove('active');
  });

  // add active to clicked tab
  event.target.classList.add('active');

  // hide all content
  document.querySelectorAll('.tab-content').forEach(c=>{
    c.classList.remove('active');
  });

  // show selected content
  document.getElementById(tabId).classList.add('active');
}
</script>


<?php include 'footer.php'; ?>






