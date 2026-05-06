<?php include 'header.php'; ?>


<style>
 

.img-res {
    width: 100%;
    height: auto;
}
 .solar-content {
    position: relative;
    padding-left: 60px;
}

ul.wp-block-list {
    margin-left: 30px;
}

.solar-content .step-circle-wrapper {
    position: absolute;
    left: 0;
}
.solar-content .step-circle {
    background-image: url(assets/circle-green.webp);
    background-repeat: no-repeat;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    background-size: 44px;
}
.position-relative {
position: relative !important;
}
.solar-content .step-circle .step-number {
        font-weight: 600;
 }
.solar-journey-section .solar-description {
        margin-bottom: 28px;
    }


.solar-journey-section .solar-description p  {
    font-size: .875rem;
    color: #5d627c;
    width: 100%;
    margin-bottom: 0;
}
.sub-content-section h2 {
        font-size: 36px;
        letter-spacing: -1px;
        margin-bottom: 2rem;
    }

.grid-page-wrapper .sub-content-section p, .grid-page-wrapper .sub-content-section ul li {
        font-size: 1rem;
        letter-spacing: normal;
    }



 .note-section {
    padding: 1rem;
    font-weight: 400;
    background-color: #f5f8fd;
    border: 1px solid #f1f1f5;
    border-radius: 12px;
    color: #2c3045;
    margin-bottom: 1.5rem;
}

 .sub-content-section h2 {
        font-size: 36px;
        letter-spacing: -1px;
        margin-bottom: 2rem;
    }

.did-know-box h3 {
        margin-left: 25px;
    }

.did-know-box h3 {
    margin-bottom: 4px;
    font-weight: 600;
    color: #2c3045;
    display: inline-block;
padding: 5px 10px;
    background-color: #fff;
}
.did-know-box > div {
    margin-top: -33px;
}
.did-know-box {
        padding: 1rem 2rem;
    }
.did-know-box {
    border: 1px solid #b2c8f1;
    border-radius: 10px;
    padding: 1rem;
    margin-bottom: 1rem;
    margin-top: 1.5rem;
} 


@media (min-width: 768px) {
    .subsidy-table {
        max-width: 810px;
        margin: 0 auto;
    }
 .sub-content-section p {
        font-size: 1rem;
        letter-spacing: normal;
        margin: 10px 0px;
    }
    .subsidy-table th {
        font-size: 1.25rem;
    }
    .subsidy-table th, .subsidy-table td {
        text-align: center;
    }
}
.subsidy-table table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    background-color: #f8f9fb;
    border: 1px solid #e2e4ec;
    border-radius: 10px;
    overflow: hidden;
}
.wp-block-table table {
    border-collapse: collapse;
    width: 100%;
}
 
.subsidy-table th {
    background-color: #f1f1f5;
    font-weight: 500;
    color: #1a1f38;
    font-size: .875rem;
}
.subsidy-table th, .subsidy-table td {
    padding: 12px 16px;
    text-align: left;
    border: 1px solid #e2e4ec;
    color: #5d627c;
    font-size: .875rem;
}

.wp-block-table .has-fixed-layout td, .wp-block-table .has-fixed-layout th {
    word-break: break-word;
}
.wp-block-table td, .wp-block-table th {
    border: 1px solid;
    padding: .5em;
}

</style>



<!-- Hero Section -->
    <section class="hero" style="padding: 0; display: flex; min-height: 600px; background: white; flex-wrap: wrap;">
        <div class="hero-left" style="display: flex; flex-direction: column; position: relative;">
            <div style="padding: 60px 20px 20px; text-align: center; z-index: 2;">
                <!-- <p style="color: #888; font-size: 2.2rem; font-weight: 600; margin-bottom: 5px;">नमस्ते इंडिया !</p> -->




                <h1 style="font-size: 2.5rem; line-height: 1.2; color: #111;">



                	On-grid Solar <br><span style="color: var(--primary); font-size: 3.5rem;">System Buying Guide</span></h1>





 
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
            <h3 style="font-size: 2rem; font-weight: 500; margin-bottom: 10px; text-align: center;">Book a FREE Consultation</h3>
            <p style="text-align: center; color: #a0aabf; font-size: 0.9rem; margin-bottom: 30px;">Get a genuine advice from our solar experts.<br><span style="color: var(--primary);">No pressure, book only if you are satisfied!</span></p>
            
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















<section class="sub-content-section overflow-hidden">
    <div class="container ">
        <div class="wp-block-group">
            <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">

            		<br>


                <p>An on-grid solar system is also known as a grid-tied system since it is connected to the main utility grid. One of the best things about installing on-grid solar at home is the subsidy you get. <a href="#">The Indian government offers homeowners a subsidy</a>                    for installing a rooftop on-grid solar system ranging between Rs. 30,000 and Rs. 78,000 (depending upon the installed system capacity).</p>


                <br>



                <p>The on-grid solar system price varies from city to city and, of course, depends on the size of the system. Let’s give you a price demonstration from two different cities (one from North India and one from South India) to give you an idea
                    about the <a href="#">on-grid solar system cost:</a></p>


                    <br>




                <ul class="wp-block-list">
                    <li>3 kW on-grid solar system price in Bhopal with subsidy: ~ Rs. 1.42 lakh</li>
                    <li>5 kW on-grid solar system price in Bengaluru with subsidy: ~ Rs. 2.97 lakh</li>
                </ul>


                <br>


                <p class="note-section"><strong>*Please Note:</strong> The on-grid solar plant prices listed above are indicative as of 22nd April 2026 for SolarSquare Blue 6ft variant. The final on-grid solar system cost in India depends on your city, DISCOM charges, product
                    variant opted for, panel type, system capacity, inverter type, mounting structure height, type of after-sales service, savings guarantee, roof height, etc. Also, prices are subject to change without prior notice.</p>
                <p>In this article, we’ve threaded the ins and outs of on-grid solar systems for you: workings, price details with and without a subsidy, and installation tips. Dive in for details!</p>
            </div>
        </div>


         <br>


        <div class="wp-block-group">
            <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                <h2 class="wp-block-heading"><span class="ez-toc-section" id="What_is_an_On-grid_Solar_System"></span>What is an On-grid Solar System?<span class="ez-toc-section-end"></span></h2>

 <br>



                <p>An on-grid solar system connects directly to the utility grid through a bi-directional meter (net meter). Most Indian homes with a reliable grid connection choose on-grid solar since this system is powerful enough to support all household
                    energy requirements.</p>

                     <br>



                <p>The on-grid solar system is a careful compilation of many components, listed below, arranged together to convert sunlight into electricity</p>


                 <br>



                <ul class="wp-block-list">
                    <li><a href="https://www.solarsquare.in/blog/types-of-solar-panels/"><strong>Solar panels</strong></a></li>
                    <li><a href="https://www.solarsquare.in/blog/solar-inverter/"><strong>A solar inverter</strong></a></li>
                    <li><a href="https://www.solarsquare.in/blog/introducing-intelligent-windpro-mount-2-solar-module-mounting-technology/"><strong>Solar module mounting structures</strong></a></li>
                    <li>A bi-directional net meter or <a href="https://www.solarsquare.in/blog/smart-meter-reader/"><strong>smart meter</strong></a></li>
                    <li>Solar accessories (AC and DC cables, AC and DC combiner boxes, conduit trays, lightning arrester, MC4 connectors)</li>
                </ul>

                		 <br>


                <p>Wondering what the individual role of these components is? Let’s break it down for you!</p>
            </div>
        </div>


         <br>






        <div class="wp-block-group points-section">
            <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                <h2 class="wp-block-heading"><span class="ez-toc-section" id="What_Are_the_On-Grid_Solar_System_Components"></span>What Are the On-Grid Solar System Components?<span class="ez-toc-section-end"></span></h2>
                <div class="wp-block-group did-know-box">
                    <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                        <h3 class="wp-block-heading">Did you know?</h3>
                        <p>When maintained properly, an on-grid solar system can last for 25 years. Contrary to popular belief, cleaning your panels with sprinklers can actually damage them. To keep your system operating at its peak efficiency, be sure to
                            sign up for professional after-sales services.</p>
                    </div>
                </div>

                	<br>


                <p>Here’s a breakdown of how every single component in an on-grid solar system comes together to power your home.</p>


                <br>




                <div class="wp-block-group">
                    <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                        <h4 class="wp-block-heading">1. Solar Panels</h4>
                        <p>Solar panels are the most visible part of the solar system. They’re installed on the rooftop, facing the South direction. When sunlight falls on these panels, they absorb that sunlight and convert it into electricity.</p>


                        <br>


                        <div class="wp-block-group did-know-box">
                            <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                                <h3 class="wp-block-heading">Did you know?</h3>
                                <p>Solar electricity directly from the panels is DC power. Since homes require alternating current (AC), a solar inverter is needed to convert direct current into AC.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <br>
                <div class="wp-block-group">
                    <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                        <h4 class="wp-block-heading">2. Solar Inverter</h4>
                        <p>Without a solar inverter, the entire solar system would have been an impractical model. The solar inverter converts DC into AC.
                            <br>
                            <br>This conversion is essential because that’s the only way to convert electricity generated from an on-grid solar system into a usable form (AC) that can run household appliances.</p>
                    </div>
                </div>

                <br>
                <div class="wp-block-group">
                    <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                        <h4 class="wp-block-heading">3. Solar Module Mounting Structures</h4>
                        <p>These are the pillars that support solar panels. They must be of a standard grade so that they can withstand heavy winds during storms and cyclones and hold the weight of the solar panels for 25 years (that’s the life of a solar
                            system).
                            <br>
                            <br>The best solar module mounting structures are prefabricated in precision labs. They’re coated with hot-dip galvanizing on steel to make them rust-proof.
                            <br>
                            <br>For instance, SolarSquare’s Intelligent WindPro MountTM 2.0 mounting structure, which is IIT-Bombay approved, can:</p>
                        <ul class="wp-block-list">
                            <li>Withstand wind speeds as high as 170 kmph</li>
                            <li>Prevent rusting for years because they have a high-density galvanized iron (HDGI) coating of 80 microns to withstand corrosion</li>
                        </ul>
                    </div>
                </div>


                <br>


                <div class="wp-block-group">
                    <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                        <h4 class="wp-block-heading">4. Solar Accessories</h4>
                        <p>They might not sound that important in the entire setup, but solar accessories are as important as a panel, an inverter, or a mounting structure. Let’s see how!</p>
                        <ul class="wp-block-list list-gap">
                            <li><strong>AC and DC cables:</strong> They are required for wiring solar panels and connecting different parts to make the entire solar grid functional.</li>
                            <li><strong>DC combiner boxes: </strong>A DC combiner box works like an isolation box. All the cables carrying DC current from the panels are isolated in this box. DC power coming from the panels can be as high as 1,000 volts,
                                even more. It’s dangerous (potentially lethal); hence, a DC combiner box is required. This box feeds the DC current into the solar inverter and the solar inverter produces alternating current.&nbsp;</li>
                            <li><strong>AC combiner boxes</strong>: The AC power from the on-grid solar inverter is fed into an AC combiner box (all cables carrying the AC current from multiple inverters are combined in this box).</li>
                            <li><strong>Earthing strips and wires</strong>: Once the entire on-grid solar system is set up, earthing is completed using these components.</li>
                        </ul>
                        <p class="note-grey-section">Please Note: all the DC cable connections are made using MC4 connectors.</p>
                    </div>
                </div>



<br>



                <div class="wp-block-group">
                    <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                        <h4 class="wp-block-heading">5. Bi-directional Meter</h4>
                        <p>Also known as a net meter, the bi-directional meter is basically designed to keep a track of:</p>
                        <ol class="wp-block-list">
                            <li>Electricity supplied to the grid</li>
                            <li>Electricity imported from the grid</li>
                        </ol>
                        <p>An on-grid solar system will not become functional until and unless the regular meter is replaced with a bidirectional meter.
                            <br>
                            <br>The net meter helps the discom track the power generated by the solar system, the power consumed, the power supplied to the grid, and the power imported.
                            <br>
                            <br>At the end of every month, when the electricity bill is generated, the readings from the bidirectional meter give an account of:</p>
                        <ol class="wp-block-list">
                            <li>How many units were supplied to the grid?</li>
                            <li>How many units were taken from the grid?</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>



        <br>






        <div class="wp-block-group points-section">
            <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                <p>Here’s how this <a href="#">solar net metering process</a> helps:</p>
                <ul class="wp-block-list">
                    <li><strong>If you supply more units to the grid than</strong> you consumed, those units will be deducted from your bill. It will reduce the bill further.</li>
                    <li><strong>If you use extra units from the grid</strong> in addition to what your solar plant generated, those units</li>
                </ul>
            </div>
        </div>


        <br>


        <div class="wp-block-group">
            <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                <section class="solar-journey-section">
                    <div class="get-solar-wrapper">
                        <h2><span class="ez-toc-section" id="How_Does_an_On-grid_Solar_System_Work"></span>How Does an On-grid Solar System Work?<span class="ez-toc-section-end"></span></h2>


                        <br>


                        <p>Now you’ve seen how multiple on-grid solar system components come together, it makes sense to break down the process of sunlight getting converted into electricity.</p>



                         <br>







                        <div class="solar-options">
                            <div class="solar-option d-flex align-items-center">
                                <div class="solar-content">
                                    <div class="step-circle-wrapper d-flex align-items-center">
                                        <div class="step-circle position-relative"> <span class="step-number">1</span></div>
                                    </div>
                                    <h3>Solar Energy Capture and DC Power Generation</h3>
                                    <div class="solar-description">
                                        <p>Solar panels, composed of photovoltaic (PV) cells, absorb photons from sunlight and free electrons within the cell’s semiconductor material. This movement of electrons generates a direct current (DC). The total
                                            DC output depends on factors such as panel efficiency, sunlight intensity, and shading. Needless to say, higher irradiance yields more current.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="solar-option d-flex align-items-center">
                                <div class="solar-content">
                                    <div class="step-circle-wrapper d-flex align-items-center">
                                        <div class="step-circle position-relative"> <span class="step-number">2</span></div>
                                    </div>
                                    <h3>DC-to-AC Conversion via the Solar Inverter:</h3>
                                    <div class="solar-description">
                                        <p>The inverter is the heart of your solar system. It takes the panel-generated DC and inverts it into alternating current (AC), matching the frequency (50 Hz in India) and voltage of the local grid. Modern inverters
                                            also perform maximum power point tracking (MPPT) to continually adjust voltage/current inputs, extracting the highest possible power from your panels.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="solar-option d-flex align-items-center">
                                <div class="solar-content">
                                    <div class="step-circle-wrapper d-flex align-items-center">
                                        <div class="step-circle position-relative"> <span class="step-number">3</span></div>
                                    </div>
                                    <h3>Bidirectional Meter Integration</h3>
                                    <div class="solar-description">
                                        <p>Once converted to grid-compliant AC, the electricity flows through a bi-directional (net) meter. This meter precisely records both incoming units drawn from the grid and outgoing units exported from your solar system,
                                            ensuring you’re billed only for the net energy you consume.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="solar-option d-flex align-items-center">
                                <div class="solar-content">
                                    <div class="step-circle-wrapper d-flex align-items-center">
                                        <div class="step-circle position-relative"> <span class="step-number">4</span></div>
                                    </div>
                                    <h3>Household Consumption of Solar-Generated AC</h3>
                                    <div class="solar-description">
                                        <p>During the day, your home’s appliances, such as lights, fans, fridges, air conditioners, and electronics, draw AC power directly from the inverter output. Because solar power is typically the first source used,
                                            it reduces or altogether replaces the need to import electricity from the grid.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="solar-option d-flex align-items-center">
                                <div class="solar-content">
                                    <div class="step-circle-wrapper d-flex align-items-center">
                                        <div class="step-circle position-relative"> <span class="step-number">5</span></div>
                                    </div>
                                    <h3>Exporting Excess Solar Power</h3>
                                    <div class="solar-description">
                                        <p>If your panels produce more electricity than your household consumes at any moment, the surplus AC automatically travels back through the bi-directional meter into the grid. Your meter records these exported units,
                                            which may earn you financial credit or feed-in benefits under your local net-metering policy.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="solar-option d-flex align-items-center">
                                <div class="solar-content">
                                    <div class="step-circle-wrapper d-flex align-items-center">
                                        <div class="step-circle position-relative"> <span class="step-number">6</span></div>
                                    </div>
                                    <h3>Importing Grid Power When Needed</h3>
                                    <div class="solar-description">
                                        <p>After sunset or during low-sunlight periods when it’s cloudy, the bi-directional meter switches to import mode if your solar output drops below your home’s demand. It draws the shortfall from the grid, using up
                                            any previously accrued credits first, so your appliances continue running seamlessly without interruption.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <figure class="wp-block-image size-full bg-img img-res"><img class="img-res" src="assets/banner-022.webp"></figure>





            </div>
        </div>


















        <section class="wp-block-group solar-price-section text-md-center">
            <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                <h2 class="wp-block-heading"><span class="ez-toc-section" id="Solar_Subsidy_For_On-grid_System"></span><strong>Solar Subsidy For On-grid System</strong><span class="ez-toc-section-end"></span></h2>
                <p>The central government of India offers the <a href="https://www.solarsquare.in/blog/solar-panel-subsidy-in-india-under-pm-surya-ghar-muft-bijli-yojana/"><strong>PM Surya Ghar solar subsidy</strong></a> when you install an on-grid solar
                    power system for homes. This subsidy remains the same for all states in India.&nbsp;</p>
                <p>Here are the subsidy breakdown details:</p>
                <figure class="wp-block-table subsidy-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Solar System Size</th>
                                <th>Solar Subsidy Offered Under PM Surya Ghar Muft Bijli Yojana</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1 kWp</td>
                                <td>Rs. 30,000</td>
                            </tr>
                            <tr>
                                <td>2 kWp</td>
                                <td>Rs. 60,000</td>
                            </tr>
                            <tr>
                                <td>3kWp and higher</td>
                                <td>Rs. 78,000</td>
                            </tr>
                        </tbody>
                    </table>
                </figure>
                <p><strong><em>Please note</em></strong>: The subsidy is capped at Rs. 78,000 for on-grid rooftop solar systems that are 3 kWp or higher.&nbsp;</p>
            </div>
        </section>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong><em>Did you know?</em></strong> The state governments of UP and Delhi offer additional subsidies to homeowners on top of the central government’s subsidy.&nbsp;
                            <br><strong>Here are the state subsidy details for UP homeowners:</strong>
                            <br><strong>State subsidy for 1-2 kW solar systems</strong>: Rs. 15,000/ kW&nbsp;<strong>State subsidy for systems &gt;=2 kW</strong>: Rs. 30,000
                            <br><strong>Here are the state subsidy details for Delhi homeowners:</strong>
                            <br><strong>State subsidy by the Delhi government</strong>: Rs. 10,000/ kWState subsidy is capped at Rs. 30,000 in Delhi</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p>Based on the details above, here’s a breakdown of the on-grid solar system subsidy for different capacity solar systems:</p>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong>On-grid Solar System Size</strong></td>
                        <td><strong>On-grid Solar System Subsidy in All States Except UP and Delhi</strong></td>
                        <td><strong>Total On-grid Solar System Subsidy in UP</strong></td>
                        <td><strong>Total On-grid Solar System Subsidy in Delhi</strong></td>
                    </tr>
                    <tr>
                        <td>1 kWp</td>
                        <td>Rs. 30,000</td>
                        <td>Rs. 30,000 + Rs. 15,000 = Rs. 45,000</td>
                        <td>Rs. 30,000 + Rs. 10,000 = Rs. 40,000</td>
                    </tr>
                    <tr>
                        <td>2 kWp</td>
                        <td>Rs. 60,000</td>
                        <td>Rs. 60,000 + Rs. 30,000 = Rs. 90,000</td>
                        <td>Rs. 60,000 + Rs. 20,000 = Rs. 80,000</td>
                    </tr>
                    <tr>
                        <td>3 kWp</td>
                        <td>Rs. 78,000</td>
                        <td>Rs. 78,000 + Rs. 30,000 = Rs. 1.08 lakh</td>
                        <td>Rs. 78,000 + Rs. 30,000 = Rs. 1.08 lakh</td>
                    </tr>
                    <tr>
                        <td>4 kWp</td>
                        <td>Rs. 78,000</td>
                        <td>Rs. 78,000 + Rs. 30,000 = Rs. 1.08 lakh</td>
                        <td>Rs. 78,000 + Rs. 30,000 = Rs. 1.08 lakh</td>
                    </tr>
                    <tr>
                        <td>5 kWp</td>
                        <td>Rs. 78,000</td>
                        <td>Rs. 78,000 + Rs. 30,000 = Rs. 1.08 lakh</td>
                        <td>Rs. 78,000 + Rs. 30,000 = Rs. 1.08 lakh</td>
                    </tr>
                    <tr>
                        <td>10 kWp</td>
                        <td>Rs. 78,000</td>
                        <td>Rs. 78,000 + Rs. 30,000 = Rs. 1.08 lakh</td>
                        <td>Rs. 78,000 + Rs. 30,000 = Rs. 1.08 lakh</td>
                    </tr>
                </tbody>
            </table>
        </figure>



        <br>

        <h2 class="wp-block-heading"><span class="ez-toc-section" id="On-Grid_Solar_System_Price_in_India_in_2026"></span><strong>On-Grid Solar System Price in India in 2026</strong><span class="ez-toc-section-end"></span></h2>
        <p>The solar system price in India is not fixed. It changes based on multiple factors, including:</p>
        <ul class="wp-block-list">
            <li>Your city</li>
            <li>Solar system size</li>
            <li>DISCOM charges</li>
            <li>Product variant opted for</li>
            <li>Panel type</li>
            <li>Inverter type</li>
            <li>Mounting structure height</li>
            <li>Type of after-sales service</li>
            <li>Savings guarantee</li>
            <li>Roof height</li>
        </ul>
        <p>Based on the factors listed above, we’ve estimated the price of an on-grid solar system in India in different cities. Let’s explore the details!</p>
        <h3 class="wp-block-heading"><strong>2 kW Solar System Price in India With and Without Subsidy in 2026</strong></h3>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong><em>Did you know? </em></strong>A 2 kW on-grid solar system can generate 2,800 to 2,900 units of electricity annually, sufficient to power a 1-2 BHK home in India.</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p>Here’s a breakdown of the estimated on-grid solar system price for a 2 kW solar system in different parts of India:</p>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong>City</strong></td>
                        <td><strong>2 kW Solar System Price Without Subsidy (Starting Price – Indicative for Base Variant)*</strong></td>
                        <td><strong>Subsidy For On-grid System</strong></td>
                        <td><strong>2 kW Solar System Price With Subsidy (Starting Price – Indicative for Base Variant)*</strong></td>
                    </tr>
                    <tr>
                        <td>Pune, <a href="https://www.solarsquare.in/blog/2-kw-solar-panel-price-in-maharashtra-with-subsidy/"><strong>Maharashtra</strong></a></td>
                        <td>~Rs. 1.85 lakh</td>
                        <td>Rs. 60,000</td>
                        <td>~Rs. 1.25 lakh</td>
                    </tr>
                    <tr>
                        <td>Bhopal, <a href="https://www.solarsquare.in/blog/2-kw-solar-panel-price-in-madhya-pradesh-with-subsidy/"><strong>Madhya Pradesh</strong></a></td>
                        <td>~Rs. 1.95 lakh</td>
                        <td>Rs. 60,000</td>
                        <td>~Rs. 1.35 lakh</td>
                    </tr>
                    <tr>
                        <td>Lucknow, <a href="https://www.solarsquare.in/blog/2-kw-solar-panel-price-in-uttar-pradesh-with-subsidy/"><strong>Uttar Pradesh</strong></a></td>
                        <td>~Rs. 1.85 lakh</td>
                        <td>Rs. 90,000</td>
                        <td>~Rs. 95,000</td>
                    </tr>
                    <tr>
                        <td>Jaipur, <a href="https://www.solarsquare.in/blog/2-kw-solar-panel-price-in-rajasthan-with-subsidy/"><strong>Rajasthan</strong></a></td>
                        <td>~Rs. 1.85 lakh</td>
                        <td>Rs. 60,000</td>
                        <td>~Rs. 1.25 lakh</td>
                    </tr>
                    <tr>
                        <td>Ahmedabad, <a href="https://www.solarsquare.in/blog/2-kw-solar-panel-price-in-gujarat-with-subsidy/"><strong>Gujarat</strong></a></td>
                        <td>~Rs. 1.80 lakh</td>
                        <td>Rs. 60,000</td>
                        <td>~Rs. 1.25 lakh</td>
                    </tr>
                    <tr>
                        <td>Bangalore, <a href="https://www.solarsquare.in/blog/2-kw-solar-panel-price-in-karnataka-with-subsidy/"><strong>Karnataka</strong></a></td>
                        <td>~Rs. 2.15 lakh</td>
                        <td>Rs. 60,000</td>
                        <td>~Rs. 1.55 lakh</td>
                    </tr>
                    <tr>
                        <td>Hyderabad, <a href="https://www.solarsquare.in/blog/2-kw-solar-panel-price-in-telangana-with-subsidy/"><strong>Telangana</strong></a></td>
                        <td>~Rs. 1.80 lakh</td>
                        <td>Rs. 60,000</td>
                        <td>~Rs. 1.20 lakh</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.solarsquare.in/blog/2-kw-solar-panel-price-in-delhi-with-subsidy/"><strong>Delhi&nbsp;</strong></a></td>
                        <td>~Rs. 2.00 lakh</td>
                        <td>Rs. 80,000</td>
                        <td>~Rs. 1.20 lakh</td>
                    </tr>
                    <tr>
                        <td>Chennai, Tamil Nadu</td>
                        <td>~Rs. 2.00 lakh</td>
                        <td>Rs. 60,000</td>
                        <td>~Rs. 1.40 lakh</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p><strong><em>*Please note</em></strong>: These prices are indicative as of 22nd April 2026 for SolarSquare Blue 6ft variant. The final 2 kW on-grid solar system price in India depends on your city, DISCOM charges, product variant opted for, panel
            type, inverter type, mounting structure height, type of after-sales service, savings guarantee, roof height, etc. Also, prices are subject to change without prior notice.</p>
        <h3 class="wp-block-heading"><strong>3 kW On-grid Solar System Price in India With and Without Subsidy in 2026</strong>&nbsp;</h3>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong><em>Did you know? </em></strong>A 3 kW on-grid solar system can generate 4,200 to 4,350 units of electricity annually, sufficient to run a single 1.5-ton air conditioner.&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p>Here’s a tabulated snapshot of the 3 kW solar system price in India with and without a subsidy:</p>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong>City</strong></td>
                        <td><strong>3 kW On-grid Solar System Price Without Subsidy (Starting Price – Indicative for Base Variant)*&nbsp;</strong></td>
                        <td><strong>On-grid Solar System Subsidy</strong></td>
                        <td><strong>3 kW On-Grid Solar System Price With Subsidy (Starting Price – Indicative for Base Variant)*&nbsp;</strong></td>
                    </tr>
                    <tr>
                        <td>Pune, Maharashtra</td>
                        <td>~Rs. 2.20 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.42 lakh</td>
                    </tr>
                    <tr>
                        <td>Bhopal, Madhya Pradesh</td>
                        <td>~Rs. 2.25 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.47 lakh</td>
                    </tr>
                    <tr>
                        <td>Lucknow, Uttar Pradesh</td>
                        <td>~Rs. 2.15 lakh</td>
                        <td>Rs. 1.08 lakh</td>
                        <td>~Rs. 1.07 lakh</td>
                    </tr>
                    <tr>
                        <td>Jaipur, Rajasthan</td>
                        <td>~Rs. 2.20 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.42 lakh</td>
                    </tr>
                    <tr>
                        <td>Ahmedabad, Gujarat&nbsp;</td>
                        <td>~Rs. 2.10 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.32 lakh</td>
                    </tr>
                    <tr>
                        <td>Bangalore, Karnataka</td>
                        <td>~Rs. 2.50 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.72 lakh</td>
                    </tr>
                    <tr>
                        <td>Hyderabad, Telangana</td>
                        <td>~Rs. 2.15 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.37 lakh</td>
                    </tr>
                    <tr>
                        <td>Delhi&nbsp;</td>
                        <td>~Rs. 2.30 lakh</td>
                        <td>Rs. 1.08 lakh</td>
                        <td>~Rs. 1.22 lakh</td>
                    </tr>
                    <tr>
                        <td>Chennai, Tamil Nadu</td>
                        <td>~Rs. 2.25 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.47 lakh</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p><strong><em>*Please note</em></strong>: These prices are indicative as of 22nd April 2026 for SolarSquare Blue 6ft variant. The final 3 kW on-grid solar system price in India depends on your city, DISCOM charges, product variant opted for, panel
            type, inverter type, mounting structure height, type of after-sales service, savings guarantee, roof height, etc. Also, prices are subject to change without prior notice.</p>
        <h3 class="wp-block-heading"><strong>4 kW On-Grid Solar System Price in India With and Without Subsidy in 2026</strong></h3>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong><em>Did you know? </em></strong>A 4 kW on-grid solar system can generate 5,600 to 5,800 units of electricity annually.&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p>Here’s a detailed breakdown of the estimated 4 kW on-grid solar system price in India with and without a subsidy:&nbsp;</p>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong>City</strong></td>
                        <td><strong>4 kW On-grid Solar System Price in India Without Subsidy </strong><strong>(Starting Price – Indicative for Base Variant)*</strong></td>
                        <td><strong>Subsidy for On-grid System&nbsp;</strong></td>
                        <td><strong>4 kW On-Grid Solar System Price in India With Subsidy </strong><strong>(Starting Price – Indicative for Base Variant)*</strong></td>
                    </tr>
                    <tr>
                        <td>Pune, Maharashtra</td>
                        <td>~Rs. 2.65 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.87 lakh</td>
                    </tr>
                    <tr>
                        <td>Bhopal, Madhya Pradesh</td>
                        <td>~Rs. 2.70 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.92 lakh</td>
                    </tr>
                    <tr>
                        <td>Lucknow, Uttar Pradesh</td>
                        <td>~Rs. 2.70 lakh</td>
                        <td>Rs. 1.08 lakh</td>
                        <td>~Rs. 1.62 lakh</td>
                    </tr>
                    <tr>
                        <td>Jaipur, Rajasthan</td>
                        <td>~Rs. 2.70 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.92 lakh</td>
                    </tr>
                    <tr>
                        <td>Ahmedabad, Gujarat&nbsp;</td>
                        <td>~Rs. 2.55 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.77 lakh</td>
                    </tr>
                    <tr>
                        <td>Bangalore, Karnataka</td>
                        <td>~Rs. 2.95 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 2.17 lakh</td>
                    </tr>
                    <tr>
                        <td>Hyderabad, Telangana</td>
                        <td>~Rs. 2.65 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.87 lakh</td>
                    </tr>
                    <tr>
                        <td>Delhi&nbsp;</td>
                        <td>~Rs. 2.75 lakh</td>
                        <td>Rs. 1.08 lakh</td>
                        <td>~Rs. 1.67 lakh</td>
                    </tr>
                    <tr>
                        <td>Chennai, Tamil Nadu</td>
                        <td>~Rs. 2.65 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 1.87 lakh</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p><strong>Please note:</strong> These prices are indicative as of 22nd April 2026 for SolarSquare Blue 6ft variant. The final 4 kW on-grid solar system price in India depends on your city, DISCOM charges, product variant opted for, panel type, inverter
            type, mounting structure height, type of after-sales service, savings guarantee, roof height, etc. Also, prices are subject to change without prior notice.</p>
        <h3 class="wp-block-heading"><strong>5 kW On-Grid Solar System Price in India With and Without Subsidy in 2026</strong></h3>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong><em>Did you know? </em></strong>A 5 kW on-grid solar power system can generate 7,000 to 7,250 units of electricity annually, sufficient to power a 3-4 BHK home in India.&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p>Here’s a detailed breakdown of the estimated 5 kW on-grid solar system price in India with and without a subsidy:&nbsp;</p>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong>City</strong></td>
                        <td><strong>5 kW On-grid Solar System Price in India Without Subsidy </strong><strong>(Starting Price – Indicative for Base Variant)*</strong></td>
                        <td><strong>Subsidy for On-grid System&nbsp;</strong></td>
                        <td><strong>5 kW On-Grid Solar System Price in India With Subsidy </strong><strong>(Starting Price – Indicative for Base Variant)*</strong></td>
                    </tr>
                    <tr>
                        <td>Pune, Maharashtra</td>
                        <td>~Rs. 3.25 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 2.47 lakh</td>
                    </tr>
                    <tr>
                        <td>Bhopal, Madhya Pradesh</td>
                        <td>~Rs. 3.35 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 2.57 lakh</td>
                    </tr>
                    <tr>
                        <td>Lucknow, Uttar Pradesh</td>
                        <td>~Rs. 3.30 lakh</td>
                        <td>Rs. 1.08 lakh</td>
                        <td>~Rs. 2.22 lakh</td>
                    </tr>
                    <tr>
                        <td>Jaipur, Rajasthan</td>
                        <td>~Rs. 3.30 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 2.52 lakh</td>
                    </tr>
                    <tr>
                        <td>Ahmedabad, Gujarat&nbsp;</td>
                        <td>~Rs. 3.15 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 2.32 lakh</td>
                    </tr>
                    <tr>
                        <td>Bangalore, Karnataka</td>
                        <td>~Rs. 3.85 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 3.07 lakh</td>
                    </tr>
                    <tr>
                        <td>Hyderabad, Telangana</td>
                        <td>~Rs. 3.45 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 2.67 lakh</td>
                    </tr>
                    <tr>
                        <td>Delhi&nbsp;</td>
                        <td>~Rs. 3.35 lakh</td>
                        <td>Rs. 1.08 lakh</td>
                        <td>~Rs. 2.27 lakh</td>
                    </tr>
                    <tr>
                        <td>Chennai, Tamil Nadu</td>
                        <td>~Rs. 3.45 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 2.67 lakh</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p><strong>Please note:</strong> These prices are indicative as of 22nd April 2026 for SolarSquare Blue 6ft variant. The final 5 kW on-grid solar system price in India depends on your city, DISCOM charges, product variant opted for, panel type, inverter
            type, mounting structure height, type of after-sales service, savings guarantee, roof height, etc.&nbsp; Also, prices are subject to change without prior notice.</p>
        <h3 class="wp-block-heading"><strong>10 kW On-Grid Solar System Price in India With and Without Subsidy in 2026</strong></h3>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong><em>Did you know? </em></strong>A 10 kW on-grid solar power system can generate 14,000 to 14,500 units of electricity annually, sufficient to power a 4-5 BHK home and 2-3 Acs (1.5 tons each) in India.&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p>Let’s give you a glimpse of the on-grid solar panel installation cost in India for a 10 kW solar system:</p>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong>City</strong></td>
                        <td><strong>10 kW On-grid Solar System Price in India Without Subsidy </strong><strong>(Starting price – Indicative for Base Variant)*</strong></td>
                        <td><strong>On-grid Solar System Subsidy</strong></td>
                        <td><strong>10 kW On-grid Solar System Price in India With Subsidy </strong><strong>(Starting price – Indicative for Base Variant)*</strong></td>
                    </tr>
                    <tr>
                        <td>Pune, Maharashtra</td>
                        <td>~Rs. 5.85 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 5.07 lakh</td>
                    </tr>
                    <tr>
                        <td>Bhopal, Madhya Pradesh</td>
                        <td>~Rs. 5.90 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 5.12 lakh</td>
                    </tr>
                    <tr>
                        <td>Lucknow, Uttar Pradesh</td>
                        <td>~Rs. 5.85 lakh</td>
                        <td>Rs. 1.08 lakh</td>
                        <td>~Rs. 4.77 lakh</td>
                    </tr>
                    <tr>
                        <td>Jaipur, Rajasthan</td>
                        <td>~Rs. 6.05 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 5.27 lakh</td>
                    </tr>
                    <tr>
                        <td>Ahmedabad, Gujarat&nbsp;</td>
                        <td>~Rs. 5.75 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 4.97 lakh</td>
                    </tr>
                    <tr>
                        <td>Bangalore, Karnataka</td>
                        <td>~Rs. 6.50 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 5.72 lakh</td>
                    </tr>
                    <tr>
                        <td>Hyderabad, Telangana</td>
                        <td>~Rs. 6.00 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 5.22 lakh</td>
                    </tr>
                    <tr>
                        <td>Delhi&nbsp;</td>
                        <td>~Rs. 5.95 lakh</td>
                        <td>Rs. 1.08 lakh</td>
                        <td>~Rs. 5.17 lakh</td>
                    </tr>
                    <tr>
                        <td>Chennai, Tamil Nadu</td>
                        <td>~Rs. 5.80 lakh</td>
                        <td>Rs. 78,000</td>
                        <td>~Rs. 5.02 lakh</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p><strong>*Please note:</strong> These prices are indicative as of 22nd April 2026 for SolarSquare Blue 6ft variant. The final 10 kW solar system price in India depends on your city, DISCOM charges, product variant opted for, panel type, inverter
            type, mounting structure height, type of after-sales service, savings guarantee, roof height, etc.&nbsp; Also, prices are subject to change without prior notice.</p>
        <p><strong>Here’s the estimated starting price for solar panel installation in India before subsidy – Base variant:&nbsp;</strong></p>
        <ul class="wp-block-list">
            <li><strong>Starting price of solar panel installation in India for a 2 kWp system (Base variant)</strong>: ~Rs. 1.85 lakh* in Pune to ~Rs. 2.15 lakh* in Bangalore</li>
            <li><strong>Starting price of solar panel installation in India for a 3 kWp system (Base variant)</strong>: ~Rs. 2.10 lakh* in Ahmedabad to ~Rs. 2.50 lakh* in Bangalore</li>
            <li><strong>Starting price of solar panel installation in India for a 4 kWp system (Base variant)</strong>: ~Rs. 2.55 lakh* in Ahmedabad to ~Rs. 2.95 lakh* in Bangalore</li>
            <li><strong>Starting price of solar panel installation in India for a 5 kWp system (Base variant)</strong>: ~Rs. 3.15 lakh* in Ahmedabad to ~Rs. 3.85 lakh* in Bangalore</li>
            <li><strong>Starting price of solar panel installation in India for a 10 kWp system (Base variant)</strong>: ~Rs. 5.75 lakh* in Ahmedabad to ~Rs. 6.50 lakh* in Bangalore</li>
        </ul>
        <p><strong>*Please note:</strong> These prices are indicative as of 22nd April 2026 for SolarSquare Blue 6ft variant. The actual final on-grid solar system cost depends on your city, DISCOM charges, product variant opted for, panel type, inverter
            type, mounting structure height, type of after-sales service, savings guarantee, roof height, etc. &nbsp;Also, prices are subject to change without prior notice.</p>
        <p><strong>Here’s the estimated starting price for solar panel installation in India after a subsidy&nbsp; – Base variant:</strong></p>
        <ul class="wp-block-list">
            <li><strong>Starting price of solar panel installation in India for a 2 kWp system (Base variant)</strong>: ~Rs. 95,000* in Lucknow to ~Rs. 1.55 lakh* in Bangalore</li>
            <li><strong>Starting price of solar panel installation in India for a 3 kWp system (Base variant)</strong>: ~Rs. 1.07 lakh* in Lucknow to ~Rs. 1.73 lakh* in Bangalore</li>
            <li><strong>Starting price of solar panel installation in India for a 4 kWp system (Base variant)</strong>: ~Rs. 1.62 lakh* in Lucknow to ~Rs. 2.62 lakh* in Bangalore</li>
            <li><strong>Starting price of solar panel installation in India for a 5 kWp system (Base variant)</strong>: ~Rs. 2.67 lakh* in Lucknow to ~Rs. 3.07 lakh* in Bangalore</li>
            <li><strong>Starting price of solar panel installation in India for a 10 kWp system (Base variant)</strong>: ~Rs. 4.72 lakh* in Lucknow to ~Rs. 5.67 lakh* in Bangalore</li>
        </ul>
        <p><strong>*Please note:</strong> These prices are indicative as of 22nd April 2026 for SolarSquare Blue 6ft variant. The actual final on-grid solar system cost depends on your city, DISCOM charges, product variant opted for, panel type, inverter
            type, mounting structure height, type of after-sales service, savings guarantee, roof height, etc. &nbsp;Also, prices are subject to change without prior notice.</p>
        <h2 class="wp-block-heading"><span class="ez-toc-section" id="Whats_the_ROI_On_On-grid_Solar_Panel_Installation"></span><strong>What’s the ROI On On-grid Solar Panel Installation?</strong><span class="ez-toc-section-end"></span></h2>
        <p>The return on investment depends on a lot of factors, including:&nbsp;</p>
        <ul class="wp-block-list">
            <li>The type of solar panels and the inverter you chose</li>
            <li>The amount of sunlight your house receives</li>
        </ul>
        <p>Let’s give you an example of ROI on installing an on-grid solar system in Pune.&nbsp;</p>
        <p>Here are a few factors we’ve considered:&nbsp;</p>
        <ul class="wp-block-list">
            <li>The electricity rates increase by 3-6% every year</li>
            <li>The annual degradation rate of a well-maintained solar system is 1%</li>
        </ul>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong>Solar System Size</strong></td>
                        <td><strong>Solar Panel Price in Pune with Subsidy (Starting Price – Indicative for Base Variant)*</strong></td>
                        <td><strong>Approximate Savings From a Solar System Over 25 Years with SolarSquare as Your Solar Company in India*</strong></td>
                        <td><strong>Return on Investment (ROI)</strong></td>
                    </tr>
                    <tr>
                        <td>2 kW</td>
                        <td>~Rs. 1.25 lakh</td>
                        <td>~Rs. 10.74 lakh</td>
                        <td>~9x</td>
                    </tr>
                    <tr>
                        <td>3 kW</td>
                        <td>~Rs. 1.43 lakh</td>
                        <td>~Rs. 16.11 lakh</td>
                        <td>~11.8x</td>
                    </tr>
                    <tr>
                        <td>4 kW</td>
                        <td>~Rs. 1.87 lakh</td>
                        <td>~Rs. 21.48 lakh</td>
                        <td>~11.8x</td>
                    </tr>
                    <tr>
                        <td>5 kW</td>
                        <td>~Rs. 2.47 lakh</td>
                        <td>~Rs. 33.46 lakh</td>
                        <td>~14.1x</td>
                    </tr>
                    <tr>
                        <td>10 kW</td>
                        <td>~Rs. 5.07 lakh</td>
                        <td>~Rs. 66.92 lakh</td>
                        <td>~13.6x</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p><strong><em>*Please note</em></strong>: The above-mentioned solar panel price in Pune with subsidy for on-grid solar systems is indicative as of 22nd April 2026 for the SolarSquare Blue 6ft variant. The final cost of solar panel installation in
            Pune depends on your DISCOM charges, city, product variant opted for, panel type, inverter type, mounting structure height, type of after-sales service, savings guarantee, roof height, etc. Prices are subject to change. Also, while calculating
            savings from rooftop solar in Pune, we have considered an annual tariff escalation of 3% and an annual plant degradation rate of 1%. The actual final savings from an on-grid solar plant in India depend on the types of solar panels you’ve installed
            and their efficiency, intensity of sunlight your rooftop receives, orientation of the panels and tilt angle, the pollution level and weather conditions in your city, the temperature, shadow on the roof, impact of dirt/dust, and how well you
            maintain your panels after installation.</p>
        <p>Not from Pune, but would like to get an estimate of how much money you’ll save by installing an on-grid solar system at home? &nbsp;Use <a href="https://www.solarsquare.in/blog/solar-calculator/"><strong>SolarSquare’s free solar power calculator to get an estimate of the savings and ROI</strong></a>            you can receive in your city.</p>






        <br>




        <h2 class="wp-block-heading"><span class="ez-toc-section" id="Advantages_and_Disadvantages_of_On-Grid_Solar_Systems"></span><strong>Advantages and Disadvantages of On-Grid Solar Systems</strong><span class="ez-toc-section-end"></span></h2>
        <p>Installing solar at home comes with unique advantages (and a few limitations). Let’s get started with the many benefits you’ll reap by installing a rooftop on-grid solar system at home:</p>
        <ul class="wp-block-list">
            <li><strong>Energy Production Monitoring</strong>: It’s easy to keep track of the units of electricity that your solar system generated.</li>
            <li><strong>Simplified Solar Billing</strong>: It’s easier to understand the solar electricity bill.</li>
            <li><strong>Rapid Payback &amp; Decades of Free Power</strong>: Once the solar on-grid system’s price breaks even in 3 to 5 years, you get free solar electricity for the next 20-22 years.</li>
            <li><strong>Significant Monthly Savings</strong>: The monthly electricity bill reduces substantially.</li>
            <li><strong>There’s no Battery Requirement</strong>: Your grid plays the role of the battery. The system will directly supply excess units to the grid and take them back when needed.</li>
            <li><strong>No Battery Replacement Costs</strong>: Since there’s no battery, there are no battery replacement charges involved.</li>
            <li><strong>Most Affordable Solar Option</strong>: Of the 3 types of solar systems, the on-grid solar system for homes is the most affordable.</li>
            <li><strong>Exclusive Solar Subsidy</strong>: The government offers a subsidy for an on-grid solar system for homes (using DCR panels).</li>
        </ul>
        <p>Now that you know the advantages, <strong><em>let’s also walk you through the limitations of installing on-grid solar: power outages!</em></strong></p>
        <p>Although connection with the grid is a sure benefit, it’s also a limitation. When there’s a power cut from the grid, the on-grid solar system automatically shuts down. This interruption in power supply is known as a power outage.</p>
        <ul class="wp-block-list">
            <li>The main reason an on-grid solar inverter is designed to shut down automatically when the grid fails is to eliminate safety risks.&nbsp;</li>
            <li>This feature, which differentiates on-grid inverters from all other types, is called Anti-Islanding Protection.</li>
        </ul>
        <p>During power outages, an on-grid inverter will stop generating AC power immediately. Otherwise, electrical maintenance personnel working directly on the wiring at the location of the electrical fault may suffer electric shocks.&nbsp;</p>



        <br>







        <h2 class="wp-block-heading"><span class="ez-toc-section" id="Whats_the_Difference_Between_Off-Grid_and_On-Grid_Solar_Systems"></span><strong>What’s the Difference Between Off-Grid and On-Grid Solar Systems?</strong><span class="ez-toc-section-end"></span></h2>
        <p>The main difference between off-grid and on-grid solar systems is battery storage. An on-grid solar plant is connected to the grid, not lead-acid or lithium batteries. On the other hand, an off-grid solar system is connected to a battery bank
            rather than the grid.&nbsp;</p>
        <p>An on-grid solar system is most recommended for areas with a stable grid supply. Since power outages are not an issue in such areas, on-grid solar makes most sense as they’re cheaper than off-grid solar systems.&nbsp;</p>
        <p>An off-grid solar system is most recommended for areas where grid supply is unavailable or unreliable. In both cases, backup power is essential.&nbsp;</p>
        <p>Here’s a tabulated snapshot of the key differences between the two types:</p>
        <figure class="wp-block-table">
            <table class="has-fixed-layout">
                <tbody>
                    <tr>
                        <td><strong>Feature</strong></td>
                        <td><strong>On-Grid Solar Power System in India</strong></td>
                        <td><strong>Off-Grid Solar Power System in India</strong></td>
                    </tr>
                    <tr>
                        <td>Are they connected to the grid?</td>
                        <td>Yes</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>Do they need a battery bank to store solar energy?</td>
                        <td>No</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Are they eligible for a solar subsidy in India?</td>
                        <td>Yes
                            <br>
                        </td>
                        <td>No&nbsp;</td>
                    </tr>
                    <tr>
                        <td>How do they work?</td>
                        <td>Solar panels produce electricity during the day. Any power not used in real time is sent to the grid. At night, the system draws power from the grid to keep appliances running.&nbsp;</td>
                        <td>The electricity generated by the solar panels during the day is used in two ways:
                            <br>It keeps the load running in real time.Excess energy is used to charge the lead-acid or lithium batteries through a <a href="https://www.solarsquare.in/blog/solar-charge-controllers/"><strong>solar panel charge controller</strong></a>.
                            <br>Electricity stored in the battery bank keeps the load running at night.</td>
                    </tr>
                    <tr>
                        <td>When are they most recommended?</td>
                        <td>Ideal for <a href="https://www.solarsquare.in/housing-society"><strong>rooftop solar systems for housing societies</strong></a>, homes, and commercial buildings in areas with rare power outages and a very reliable grid.&nbsp;</td>
                        <td>Ideal for residential and <a href="https://www.solarsquare.in/commercial"><strong>commercial rooftop systems</strong></a> in areas with unreliable or unavailable grid power.</td>
                    </tr>
                </tbody>
            </table>
        </figure>

        <br>


        <h2 class="wp-block-heading"><span class="ez-toc-section" id="How_to_Install_an_On-Grid_Solar_System_at_Home"></span><strong>How to Install an On-Grid Solar System at Home?</strong><span class="ez-toc-section-end"></span></h2>
        <p>Before we can walk you through the on-grid solar panel installation process, it’s important to clarify that installing rooftop solar is not a DIY task. You must leave it in the hands of experts to install solar because it’s critical to:</p>
        <ul
        class="wp-block-list">
            <li>Identify whether or not your rooftop can support the weight of a solar system.</li>
            <li>Determine there’s enough shadow-free area on your roof that’ll maximize your ROI.</li>
            <li>Determine the tilt angle and panel direction that’ll expose your solar panels to maximum sunlight.&nbsp;</li>
            <li>Carry out the installation safely with the right protective gear.</li>
            </ul>
            <p>None of the aforementioned factors can be executed to perfection if you do them yourself, and all of them affect the final power generation.&nbsp;</p>
            <p>
                <br>That said, here are the simple steps SolarSquare’s professionals follow to install an on-grid solar system at your home:</p>
            <ul class="wp-block-list">
                <li><strong>Step 1: Rooftop Inspection and Site Assessment</strong>: A trained engineer surveys your rooftop to map shadow-casting objects and determine the optimal panel orientation (usually south in India) and tilt angle (approximately equal
                    to your latitude). This analysis maximizes sunlight exposure and long-term energy yield.&nbsp;</li>
                <li><strong>Step 2: Roof Mounting and Panel Clamping</strong>: Mounting structures are securely fixed to your roof using corrosion-protected rails and fasteners. Panels are then clamped onto these rails, following the manufacturer’s torque
                    specifications to prevent damage.&nbsp;</li>
                <li><strong>Step 3: Inverter Installation &amp; Electrical Wiring</strong>: Solar strings (series-connected panels) are routed to the DC combiner box, then to the inverter, which converts DC into grid-compatible AC. AC output is channelled
                    through an AC combiner box to your bi-directional meter, with all cables protected in conduit or trays.</li>
                <li><strong>Step 4: Earthing &amp; Lightning Protection: </strong>Dedicated earthing rods and cables bond both DC and AC components to the ground, safeguarding against electrical faults. A lightning arrester mounted above the panels intercepts
                    strikes and diverts surge energy safely to the earthing grid.</li>
                <li><strong>Step 5: System Commissioning &amp; Monitoring Setup</strong>: Technicians verify string voltages, phase sequence, and inverter settings before energizing the system. Finally, the inverter is linked to your Wi-Fi for real-time performance
                    monitoring, ensuring SolarSquare’s team promptly spots and resolves any issues.</li>
            </ul>
            <h3 class="wp-block-heading"><strong>Why Choose SolarSquare as Your Solar Company?</strong></h3>
            <p>Kyunki, mehanagi bijli se muft bijli tak ka safar aasaan banaata hai, SolarSquare!</p>
            <p>Here are a few reasons that make SolarSquare India’s most-trusted solar rooftop company:</p>
            <ul class="wp-block-list">
                <li><strong>Zero-investment Solar Scheme: </strong>We offer homeowners easy loans and financing options where your government subsidy offsets the initial out-of-pocket down payment. So, you’re starting from Rs. 0 out of your own pocket. You
                    can choose an EMI schedule from 6 to 60 months, aligning payments with your budget and monthly cash flow.</li>
                <li><strong>Swift Installation</strong>: There’s no middlemen involved. The entire process of setting up your solar system will be completed by our team in 8 hours.</li>
                <li><strong>Solid After-sales Support</strong>: We offer scheduled <strong><em>monthly maintenance visits over 5 years</em></strong> for deep cleaning and preventive checks.</li>
                <li><strong>Leakage-Free Guarantee</strong>: Our <a href="https://www.youtube.com/watch?v=-lSrIsDWiyc"><strong>HILTI AirTight chemical anchoring</strong></a> protects your roof. And if a leak still appears, <strong><em>we offer a Rs. 1 lakh water-leakage warranty for 1 year</em></strong>.&nbsp;</li>
                <li><strong>Money-back Guarantee</strong>: We’re the first and only solar company in India to offer<strong> </strong>a<strong> </strong><strong><em>savings guarantee with a money-back promise at Rs. 8 per unit if we fall short </em></strong>on
                    promised generation.</li>
                <li><strong>IIT Bombay-Approved Solar Mounting Structures</strong>: Our solar mounting structures are built to withstand cyclonic winds of up to 180 km/hr.&nbsp;</li>
                <li><strong>99.91% Storm-Safety Record</strong>: While the entire country has been plagued by news of solar panels being thrown off roofs during cyclones, SolarSquare’s installations have maintained a storm-safety record of 99.91% over the
                    last two years.&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>


            <br>


            <h2 class="wp-block-heading"><span class="ez-toc-section" id="Conclusion"></span><strong>Conclusion</strong><span class="ez-toc-section-end"></span></h2>
            <p>Installing an on-grid solar system is a big decision, and it’s your right to be critical about it. When you choose high-quality components, a system you install today can last at least 25 years.&nbsp;</p>
            <p>The solar panel installation cost in India varies from city to city, and you should trust a company that’s highly rated by customers. For instance, SolarSquare boasts an impressive rating of 4.8, from 12,000+ genuine customers.&nbsp;&nbsp;</p>
            <p>Moreover, the Indian government is offering homeowners a subsidy to install on-grid solar panels. This subsidy will be offered only till the government meets its target of solarizing 1 crore homes under the PM Surya Ghar Muft Bijli Yojana.
                So, why the wait now? Go solar and get freedom from paying for electricity now!</p>
    </div>
</section>











<?php include 'footer.php'; ?>


