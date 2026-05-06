


<?php include 'header.php'; ?>
<style>
 

.container_box {
  width: 420px;
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  margin: 30px;
  display: inline-block;
    vertical-align: text-top;
}

h2 { margin-bottom: 15px; }

label { font-size: 14px; display:block; margin-top:10px; }

input, select {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
  border-radius: 6px;
  border: 1px solid #ccc;
}

input[type="range"] { border:none; }

.box {
  background: #f4f7fb;
  padding: 12px;
  margin-top: 12px;
  border-radius: 8px;
}

.grid {
  display: flex;
  justify-content: space-between;
}

.grid div {
  width: 48%;
}

strong { color: #1a73e8; }
</style>



<div class="container">


<div class="container_box">
  <h2>Solar Calculator</h2>

  <label>Pin Code</label>
  <input type="text" value="452010 (Indore)">

  <label>Monthly Bill (₹)</label>
  <input type="range" id="bill" min="500" max="10000" value="1300">
  <p>₹ <span id="billVal"></span></p>

  <label>Loan Tenure</label>
  <select id="tenure">
    <option value="3">3 Years</option>
    <option value="5" selected>5 Years</option>
    <option value="7">7 Years</option>
  </select>

  <div class="box grid">
    <div>
      <p>System Size</p>
      <strong id="size"></strong> kW
    </div>
    <div>
      <p>Roof Area</p>
      <strong id="area"></strong> sq.ft
    </div>
  </div>






</div>


<div class="container_box">

  <div class="box">
    <p>Monthly Saving: ₹ <strong id="monthly"></strong></p>
    <p>Yearly Saving: ₹ <strong id="yearly"></strong></p>
  </div>

  <div class="box">
    <p>Total Cost: ₹ <span id="total"></span></p>
    <p>Subsidy: ₹ <span id="subsidy"></span></p>
    <p><strong>Net Cost: ₹ <span id="net"></span></strong></p>
  </div>

  <div class="box grid">
    <div>
      <p>Lifetime Savings</p>
      <strong id="lifetime"></strong>
    </div>
    <div>
      <p>ROI</p>
      <strong id="roi"></strong> %
    </div>
  </div>

  <div class="box">
    <p>EMI: ₹ <strong id="emi"></strong> /month</p>
  </div>

  <div class="box">
    <p>CO₂ Saved: <strong id="co2"></strong> kg</p>
    <p>Trees Planted: <strong id="trees"></strong></p>
    <p>Distance Saved: <strong id="distance"></strong> km</p>
  </div>

 </div>   




</div>






<script>
const bill = document.getElementById("bill");
const tenure = document.getElementById("tenure");

function formatINR(num){
  return num.toLocaleString('en-IN');
}

function calculate(){
  let b = +bill.value;
  let t = +tenure.value;

  document.getElementById("billVal").innerText = formatINR(b);

  let size = (b / 600);
  let area = size * 60;
  let monthly = b * 2;
  let yearly = monthly * 12;

  let total = size * 75000;
  let subsidy = total * 0.38;
  let net = total - subsidy;

  let lifetime = yearly * 25;
  let roi = ((lifetime - net) / net) * 100;

  let emi = net / (t * 12);

  let co2 = size * 1200;
  let trees = size * 40;
  let distance = size * 10500;

  // Set values
  document.getElementById("size").innerText = size.toFixed(2);
  document.getElementById("area").innerText = Math.round(area);

  document.getElementById("monthly").innerText = formatINR(monthly);
  document.getElementById("yearly").innerText = formatINR(yearly);

  document.getElementById("total").innerText = formatINR(Math.round(total));
  document.getElementById("subsidy").innerText = formatINR(Math.round(subsidy));
  document.getElementById("net").innerText = formatINR(Math.round(net));

  document.getElementById("lifetime").innerText = formatINR(Math.round(lifetime));
  document.getElementById("roi").innerText = roi.toFixed(1);

  document.getElementById("emi").innerText = formatINR(Math.round(emi));

  document.getElementById("co2").innerText = Math.round(co2);
  document.getElementById("trees").innerText = Math.round(trees);
  document.getElementById("distance").innerText = formatINR(Math.round(distance));
}

bill.addEventListener("input", calculate);
tenure.addEventListener("change", calculate);
window.onload = calculate;
</script>














<?php include 'footer.php'; ?>






