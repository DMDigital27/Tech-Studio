<!doctype html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Our Work Portfolio | DM Tech Studio</title>
<meta name="description" content="Explore DM Tech Studio’s portfolio of high-performing websites, SEO, and digital marketing projects in Ahmedabad, Gujarat. See how we help businesses grow online.">

<link rel="stylesheet" href="assets/css/plugins.min.css">
<link rel="stylesheet" href="assets/css/main.min.css">
<link rel="canonical" href="https://dmtechstudio.com/work-portfolio.php"/>


<style>

body{
font-family:Arial;
background:#f7f7f7;
}

/* SECTION */

.portfolio-section{
padding:100px 20px;
}

.portfolio-container{
max-width:1200px;
margin:auto;
}

.portfolio-title{
text-align:center;
margin-bottom:60px;
}

.portfolio-title h2{
font-size:42px;
margin-bottom:10px;
}

.portfolio-title p{
color:#555;
}

/* GRID */

.portfolio-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
gap:35px;
}

/* CARD */

.portfolio-card{
background:#fff;
border-radius:14px;
overflow:hidden;
box-shadow:0 15px 35px rgba(0,0,0,0.1);
transition:transform .4s ease;
}

.portfolio-card:hover{
transform:translateY(-10px);
}

/* IMAGE AREA */

.portfolio-image{
height:420px;
overflow:hidden;
position:relative;
background:#000;
}

.portfolio-image img{
width:100%;
height:auto;
position:absolute;
top:0;
left:0;
transition:transform 20s linear;
}

.portfolio-card:hover img{
transform:translateY(-35%);
}

/* CONTENT */

.portfolio-content{
padding:25px;
}

.portfolio-content h3{
font-size:20px;
margin-bottom:8px;
}

.portfolio-content p{
font-size:14px;
color:#666;
margin-bottom:15px;
line-height:1.6;
}

/* BUTTON */

.preview-btn{
background:#000;
color:#fff;
border:none;
padding:10px 20px;
border-radius:5px;
cursor:pointer;
transition:.3s;
}

.preview-btn:hover{
background:#444;
}

/* POPUP */

.portfolio-popup{
display:none;
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,.9);
justify-content:center;
align-items:center;
z-index:9999;
}

.popup-box{
width:90%;
height:85%;
background:#fff;
border-radius:10px;
overflow:hidden;
position:relative;
}

.popup-box iframe{
width:100%;
height:100%;
border:none;
}

.close-btn{
position:absolute;
top:15px;
right:20px;
background:#000;
color:#fff;
padding:6px 12px;
cursor:pointer;
border-radius:4px;
z-index:10;
}

</style>

</head>

<body>

<?php require_once 'elements/header.php'; ?>


<section class="portfolio-section">

<div class="portfolio-container">

<div class="portfolio-title">
<h1>Our Work Portfolio</h1>
<p>Explore some of the professional websites and digital projects delivered by DM Tech Studio.</p>
</div>


<div class="portfolio-grid">


<!-- PROJECT 1 -->

<div class="portfolio-card">

<div class="portfolio-image">
<img src="https://dmtechstudio.com/assets/img/portfolio/FF.webp" alt="figure first">
</div>

<div class="portfolio-content">
<h3><a href="https://dmtechstudio.com/work-portfolio/figure-first.php">Figure First</a></h3>
<p>Figure First is a professionally designed fitness business website created to strengthen brand identity and generate quality leads. The website presents services, programs, and contact options clearly to attract and engage potential clients. </p>

<button class="preview-btn" onclick="openPreview('https://www.figurefirst.in/')">
Live Preview
</button>
</div>

</div>


<!-- PROJECT 2 -->

<div class="portfolio-card">

<div class="portfolio-image">
<img src="https://dmtechstudio.com/assets/img/portfolio/Health First Physiotherapy.webp" alt="Health First Physiotherapy">
</div>

<div class="portfolio-content">
<h3>Health First</h3>
<p>A professional healthcare website designed for physiotherapy services, allowing patients to easily learn about treatments, book appointments online, and connect with experts for better health support. </p>

<button class="preview-btn" onclick="openPreview('#')">
Live Preview
</button>
</div>

</div>


<!-- PROJECT 3 -->

<div class="portfolio-card">

<div class="portfolio-image">
<img src="https://dmtechstudio.com/assets/img/portfolio/Shree Trading.webp" alt="Shree Trading">
</div>

<div class="portfolio-content">
<h3>Shree Trading Co.</h3>
<p>A professional business website developed to showcase products and services clearly, strengthen brand presence, and help potential customers easily explore offerings and contact the company for business inquiries. </p>

<button class="preview-btn" onclick="openPreview('#')">
Live Preview
</button>
</div>

</div>


<!-- PROJECT 4 -->



<div class="portfolio-card">

<div class="portfolio-image">
<img src="https://dmtechstudio.com/assets/img/portfolio/Aagam Hospital.webp" alt="Aagam Hospital">
</div>

<div class="portfolio-content">
<h3>Aagam Hospital</h3>
<p>A professional hospital website designed to present medical services, doctor information, and patient support features. The platform helps patients easily access treatment details, healthcare information, and appointment assistance online. </p>

<button class="preview-btn" onclick="openPreview('https://www.aagamhospital.com/')">
Live Preview
</button>
</div>

</div>



<!-- PROJECT 5 -->


<div class="portfolio-card">

<div class="portfolio-image">
<img src="https://dmtechstudio.com/assets/img/portfolio/Amara.webp" alt="Amara Luxury Spa">
</div>

<div class="portfolio-content">
<h3><a href="https://dmtechstudio.com/work-portfolio/amara-luxury-spa.php">Amara Luxury Spa</a></h3>
<p>A luxury spa website professionally designed and developed with SEO optimization to improve online visibility. The website highlights spa services, wellness therapies, and the relaxing spa experience while helping attract more clients through search engines. </p>

<button class="preview-btn" onclick="openPreview('https://amaraluxuryspa.com/')">
Live Preview
</button>
</div>

</div>

<!-- PROJECT 6 -->


<div class="portfolio-card">

<div class="portfolio-image">
<img src="https://dmtechstudio.com/assets/img/portfolio/White Crown.webp" alt="White Crown Spa">
</div>

<div class="portfolio-content">
<h3>White Crown Spa</h3>
<p>A professional spa website designed with strong branding, modern layout, and SEO optimization to improve online visibility, attract potential clients, and showcase spa services in a clear and elegant way. </p>

<button class="preview-btn" onclick="openPreview('https://whitecrownspa.in/')">
Live Preview
</button>
</div>

</div>
</div>

</div>

</section>


<!-- POPUP -->

<div class="portfolio-popup" id="popup">

<div class="popup-box">

<div class="close-btn" onclick="closePreview()">X</div>

<iframe id="previewFrame"></iframe>

</div>

</div>


<script>

function openPreview(url){

document.getElementById("popup").style.display="flex";
document.getElementById("previewFrame").src=url;

}

function closePreview(){

document.getElementById("popup").style.display="none";
document.getElementById("previewFrame").src="";

}

</script>


<?php require_once 'elements/footer.php'; ?>

<script src="assets/js/libs.min.js"></script>
<script src="assets/js/app.min.js"></script>

</body>
</html>