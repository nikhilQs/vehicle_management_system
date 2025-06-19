<!DOCTYPE html>
<html>
<head>
  <title>About Us - M/S SP SINGH</title>
  <style>
    body {
      margin: 0;
      padding: 40px;
      font-family: 'Segoe UI', sans-serif;
      color: #fff;
      background: linear-gradient(to bottom right, #001f3f, #0074D9);
      text-align: center;
    }

    h2 {
      font-size: 36px;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    .intro {
      font-size: 16px;
      max-width: 1000px;
      margin: 0 auto 40px auto;
      line-height: 1.6;
      background: rgba(255, 255, 255, 0.05);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
      text-align: justify;
    }

    .menu button {
      display: block;
      width: 300px;
      padding: 12px;
      margin: 10px auto;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .menu button:hover {
      background: linear-gradient(to right, #0072ff, #00c6ff);
    }

    .details {
      display: none;
      margin: 15px auto;
      width: 80%;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 10px;
      padding: 15px;
      text-align: left;
    }

    ul.vehicle-list {
      list-style: none;
      padding-left: 0;
      text-align: left;
      max-width: 600px;
      margin: 0 auto;
      font-size: 16px;
    }

    ul.vehicle-list li {
      padding: 4px 0;
    }

    /* Download button top right */
    .download-button {
      position: absolute;
      top: 20px;
      right: 40px;
      background: linear-gradient(to right, #28a745, #218838);
      color: white;
      padding: 10px 18px;
      font-size: 14px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.3s;
    }

    .download-button:hover {
      background: linear-gradient(to right, #218838, #28a745);
    }
  </style>
</head>
<body>

  <!-- Download button -->
  <a href="COMPANY PROFILE.pdf" download class="download-button">📄 Download COMPANY Profile (PDF)</a>

  <h2>About M/S SP SINGH</h2>

  <div class="intro">
    <p>
      We feel immense to introduce our self as <strong>"M/S. S. P. Singh"</strong> which has been rendering significant service in execution of all types of civil & structural works, Mining Work, road constructions, transmission line work, foundation, erection, earthworks, excavation, site development work and all other types of Construction & infrastructural jobs.
      <br><br>
      We have the dedicated team of highly motivated, well qualified and technically skilled Engineers, supervisors & workforce. We believe in delivering quality work while maintaining high standards of ethics and values. We are able to undertake projects on turnkey basis using outsourcing or concession arrangements. Operating flexibility and adapting to clients' requirements is our priority. Delivering solutions that meet clients' needs in compliance with performance, budget and time constraints.
      <br><br>
      However narrow or broad the scope of the project entrusted to us, we have the reputation of completing our assignments successfully. We operate as your partner in meeting the planning and construction challenges of today and will perform your mandates in accordance with the highest quality & standards.
      <br><br>
      We have the capacity to mobilize manpower and equipment for all kinds of civil works of any magnitude. Our fleet includes L & T Machine, Kobelco Machine, Rock Breaker, Escort Vibrator, JCB Machine, Loader, Excavator, Dozers, Vibrator / Road rollers, Hyva dumpers, Concrete Mixers, Tractor, Water Tanker, Batching Plant and other construction as well as heavy earth moving equipment.
      <br><br>
      We take this opportunity to reaffirm our commitment to the highest level of quality and customer satisfaction. Further for your reference and to gain your confidence we enclose our company profile including list of machinery, product range, clients list etc.
      <br><br>
      We shall be highly obliged if given an opportunity to work with your esteemed organization. We also assure that we will prove our self by performing up to your satisfaction level.
      <br><br>
      With Best Regards,<br>
      <strong>S. P. Singh (Partner)</strong><br>
      Mob.: +91-9415230914, +91-9407875544, +91-7408888898<br>
      Email: <a href="mailto:spsingh.anp@gmail.com" style="color:#00ffff;">spsingh.anp@gmail.com</a>
    </p>
  </div>

  <div class="menu">
    <button onclick="toggleDetails('work')">1. Work Experience</button>
    <div id="work" class="details">
      <strong>Work Experience:</strong>
      <p>
        <strong>Power Plants:</strong> Land Development (Civil/Earthwork), Roads, Drains, & Culverts, Non Plant Building, Compound Wall & Retaining Walls, Filtered Water and fire Water Reservoirs, Pump House & Piping, Housing Colony.<br>
        <strong>Road & Highways:</strong> Providing service on back-to-back basis by delivering the requirements of clients according to the standards and time frame.<br>
        <strong>Mining:</strong> Identifying the required quarry, analyzing the quality of rock available, and obtaining all government formalities.<br>
        <strong>Controlled Blasting:</strong> Services for controlled blasting where needed.<br>
        <strong>Transportation:</strong> Transporting aggregates from the crushing point to the work site.<br>
        <strong>Hiring:</strong> Hiring of heavy earth moving equipment in all capacities.
      </p>
    </div>

    <button onclick="toggleDetails('employees')">2. Total No of Employees</button>
    <div id="employees" class="details">
      <strong>Employees:</strong>
      <p>120+ qualified professionals including site engineers, drivers, machine operators, and support staff.</p>
    </div>

    <button onclick="toggleDetails('certificates')">3. Work Certificates</button>
    <div id="certificates" class="details">
      <strong>Certificates:</strong>
      <p>ISO Certified, Registered Government Contractor, with multiple project completion certificates and accolades.</p>
    </div>

    <button onclick="toggleDetails('vehicles')">4. Total No of Vehicles</button>
    <div id="vehicles" class="details">
      <strong>Total No. of Vehicles & Machinery:</strong>
      <ul class="vehicle-list">
        <li>1. <strong>TATA HITACHI EX-210</strong> – 05 Units</li>
        <li>2. <strong>TATA HITACHI EX-200</strong> – 02 Units</li>
        <li>3. <strong>HYVA (06 Tyres)</strong> – 05 Units</li>
        <li>4. <strong>HYVA (10 Tyres)</strong> – 10 Units</li>
        <li>5. <strong>HYVA (12 Tyres)</strong> – 07 Units</li>
        <li>6. <strong>CAT JCB</strong> – 01 Unit</li>
        <li>7. <strong>Water Tanker</strong> – 02 Units</li>
        <li>8. <strong>Concrete Mixer</strong> – 01 Unit</li>
        <li>9. <strong>Road Roller</strong> – 01 Unit</li>
        <li>10. <strong>Diesel Generator Set</strong> – 02 Units</li>
        <li>11. <strong>Pay Loader</strong> – 01 Unit</li>
      </ul>
    </div>
  </div>

  <script>
    function toggleDetails(id) {
      const sections = document.querySelectorAll('.details');
      sections.forEach(sec => {
        sec.style.display = (sec.id === id && sec.style.display !== 'block') ? 'block' : 'none';
      });
    }
  </script>

</body>
</html>
