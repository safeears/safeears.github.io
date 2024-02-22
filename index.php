<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Safe Ears - Your Story to SHARE, Our Ears to LISTEN </title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
                
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>

  <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png">

<style>

body{
    filter: noise(0.8);
}


.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Black with 50% opacity */
}

/* Carousel height */
.carousel-item {
  height: 470px; /* Adjust height as needed */
  position: relative;
  overflow: hidden;
}

.carousel-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* Black with 50% opacity */
}

.carousel-caption {
  position: absolute;
  top: 46%;
  left: 0;
  right: 0;
  transform: translateY(-50%);
  text-align: left;
}

.caption-content {
  padding: 20px;
  color: white;
}

.icon {
  display: block;
  width: 20%;
  text-align: center;
  display: table-cell;
  vertical-align: middle;
}

.text {
  display: block;
  width: 80%;
  display: table-cell;
  vertical-align: middle;
}


            
.items{
        display: flex;
        overflow-x: auto;
    }
    
    .items::-webkit-scrollbar{
        display: none;
    } 
    
    .items .options{
        min-width: 200px;
       
       
        margin: 10px;
      
           
        position: relative;
    
    }

    .options {
  /* Define initial background color */
  background-color: transparent;
  transform: scale(1);
  transition: transform 0.3s ease;
  color:white; 
  font-size:14px;

}

.options:hover {
  /* Define animation */
  animation: fadeIn 0.5s ease-in-out forwards;
   /* Scale up the element on hover */
   transform: scale(1.1);
   padding:20px;

}

@keyframes fadeIn {
  from {
    background-color: transparent;
  }
  to {
 background-color: #069672;

  }
}

    

</style>

</head>
<body>

<div class="banner" style="padding:11px;  background-color: #069672;">

<div class="container">

<h3 style="color:white; text-align:center; font-size:14px; letter-spacing:2px;"> BECOME A VOLUNTEER AND SUPPORT OUR CAUSE <i class="fa fa-chevron-right"> </i> </h3>

</div>

</div>

 
</div>

<?php include('navbar.php'); ?>



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="border-bottom: 3px solid #069672;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-background" style="background-image: url('https://images.pexels.com/photos/2422280/pexels-photo-2422280.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-position: top center;"></div>
      <div class="overlay"></div>
      <div class="carousel-caption">
        <h2 style="letter-spacing:-1px; font-weight:800; "> CONFIDENTIALITY AND STORY SHARING  </h2>
        <p> We provide a platform for individuals to share their experiences anonymously, knowing that their stories will be heard without judgment. </p>

                  <a 
                  data-animation="animated fadeInUp" href="confidentiality.php" 
                  class="view-all hvr-bounce-to-right slide_learn_btn btn  btn btn-primary btn0">learn more</a>
                  &nbsp;
                  <a data-animation="animated fadeInUp" href="aboutus.php" style="background-color:#069672; color:white;"
                  class="view-all hvr-bounce-to-right slide_learn_btn btn">our sevices</a>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-background" style="background-image: url('https://images.unsplash.com/photo-1573495804664-b1c0849525af?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      <div class="overlay"></div>
      <div class="carousel-caption">
      <h2 style="letter-spacing:-1px; font-weight:800; ">  SUPPORT AND COUNSELING </h2>
      <p> Our team offers confidential counseling and support services for those who have experienced violence, helping them navigate their journey toward healing. </p>

                  <a 
                  data-animation="animated fadeInUp" href="supportandcounseling.php" 
                  class="view-all hvr-bounce-to-right slide_learn_btn btn  btn btn-primary btn0">learn more</a>
                  &nbsp;
                  <a data-animation="animated fadeInUp" href="aboutus.php" style="background-color:#069672; color:white;"
                  class="view-all hvr-bounce-to-right slide_learn_btn btn">our sevices</a>

      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-background" style="background-image: url('https://images.unsplash.com/photo-1674574124345-02c525664b65?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"></div>
      <div class="overlay"></div>
      <div class="carousel-caption">
      <h2 style="letter-spacing:-1px; font-weight:800; ">  ADVOCACY AND AWARENESS </h2>
        <p>

        We work tirelessly to raise awareness about the prevalence of violence and advocate for systemic change to prevent future harm.
        </p>

        <a 
                  data-animation="animated fadeInUp" href="awareness.php" 
                  class="view-all hvr-bounce-to-right slide_learn_btn btn  btn btn-primary btn0">learn more</a>
                  &nbsp;
                  <a data-animation="animated fadeInUp" href="aboutus.php" style="background-color:#069672; color:white;"
                  class="view-all hvr-bounce-to-right slide_learn_btn btn">our sevices</a>

      </div>
    </div>
 



    <div class="carousel-item">
      <div class="carousel-background" style="background-image: url('img/community.jpg'); background-position: center;"></div>
      <div class="overlay"></div>
      <div class="carousel-caption">
      <h2 style="letter-spacing:-1px; font-weight:800; "> COMMUNITY OUTREACH </h2>
        <p>

        Through workshops, events, and partnerships, we engage with communities to foster dialogue and promote healthy relationships.
        </p>

        <a 
                  data-animation="animated fadeInUp" href="community.php" 
                  class="view-all hvr-bounce-to-right slide_learn_btn btn  btn btn-primary btn0">learn more</a>
                  &nbsp;
                  <a data-animation="animated fadeInUp" href="aboutus.php" style="background-color:#069672; color:white;"
                  class="view-all hvr-bounce-to-right slide_learn_btn btn">our sevices</a>

      </div>
    </div>
  </div>



  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="banner" style="padding:11px;  background-color: #069672;">

<div class="container">

<h3 style="color:white; text-align:center; font-size:14px; letter-spacing:2px;"> Do you know you can share your STORY with us and we are here to LISTEN  <i class="fa fa-chevron-right"> </i> </h3>

</div>

</div>

 
</div>

<div style="margin-bottom: 50px;" > </div>


<div class="container">

<div class="row">

<div class="col-md-6 mb-3">

<h1 style="letter-spacing:-1px; font-weight:800; color:black; "> 
OUR MISSION
</h1>
<p style="text-align:justify;">  At Safe Ears, our mission is clear: to provide support, resources, and advocacy for those impacted by violence. Through education, outreach, and community engagement, we strive to create a world where everyone feels safe and valued. </p>


<br>

<div class="icon"> <i class="fa fa-lock" style="font-size:30px; color:#069672;"> </i> </div>
  <span class="text">
  <strong> Confidential and Safe Space </strong>  <br>
  We provide a confidential platform for individuals to share their experiences without fear of judgment or repercussions.
  </span>

<!----- Another row closed ----->



<br>

<div class="icon"> <i class="fa fa-heart" style="font-size:30px; color:#069672;"> </i> </div>
  <span class="text">
  <strong> Emotional Support </strong>  <br>
  Our team offers compassionate counseling and emotional support to help survivors navigate their healing journey.
  </span>

<!----- Another row closed ----->


<br>

<div class="icon"> <i class="fa fa-users" style="font-size:30px; color:#069672;"> </i> </div>
  <span class="text">
  <strong> Empowerment </strong>  <br>
  We empower survivors to reclaim their voices and take control of their lives through empowerment workshops and self-defense classes.
  </span>

<!----- Another row closed ----->



</div>

<div class="col-md-6 mb-3">



<br>

<div class="icon"> <i class="fa fa-asl-interpreting" style="font-size:30px; color:#069672;"> </i> </div>
  <span class="text">
  <strong> Community Engagement </strong>  <br>
  We engage with communities through outreach programs, workshops, and events to raise awareness and promote healthy relationships.
  </span>

<!----- Another row closed ----->



<br>

<div class="icon"> <i class="fa fa-book" style="font-size:30px; color:#069672;"> </i> </div>
  <span class="text">
  <strong> Education </strong>  <br>
  We provide educational resources and training to help individuals recognize the signs of violence and learn how to intervene safely.
  </span>

<!----- Another row closed ----->

<br>


<div class="card" style="border-radius:20px; padding: 30px; height:270px; background-size:cover; background-image:url('https://images.unsplash.com/photo-1593113646773-028c64a8f1b8?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

</div>



</div>



</div>

</div>

<div style="margin-bottom: 20px;" > </div>

<div class="company" style="background-color:  #069672; height:100%; ">


<div class="container">


<div class="row">


<div class="col-md-6 mb-3">


<div style="margin-bottom: 50px;" > </div>
<h1 style="letter-spacing:-1px; font-weight:800; color:white; "> 
OUR VISION
</h1>

<p style="text-align:justify; color:white;"> 
We envision a society where violence is no longer tolerated, where individuals are empowered to speak out and seek help without fear or stigma. We aspire to build communities built on respect, empathy, and understanding, where everyone can live free from the threat of harm. <br><br> At Safe Ears, our vision is a world where every person is valued, protected, and able to pursue their dreams without the shadow of violence looming over them.
</p>


<br>

<div class="icon"> <i class="fa fa-sign-language" style="font-size:30px; color:white;"> </i> </div>
  <span class="text" style="color:white;">
  <strong style="color:white;"> Cultivating Empathy </strong>  <br>
  By fostering a culture of empathy and understanding, we aim to promote empathy as a fundamental value in society, leading to stronger, more compassionate communities.
  </span>

<!----- Another row closed ----->



<br>

<div class="icon"> <i class="fa fa-spinner" style="font-size:30px; color:white;"> </i> </div>
<span class="text" style="color:white;">
<strong style="color:white;"> Breaking the Cycle</strong>  <br>
Through education and intervention, we strive to break the cycle of violence by addressing its underlying causes and providing individuals with the tools they need to build healthy relationships.
  </span>

<!----- Another row closed ----->


<br>

<div class="icon"> <i class="fa fa-universal-access" style="font-size:30px; color:white;"> </i> </div>
<span class="text" style="color:white;">
  <strong  style="color:white;"> Building Resilience </strong>  <br>
  We seek to empower individuals to overcome trauma and adversity, helping them build resilience and regain a sense of control over their lives.
  </span>

<!----- Another row closed ----->



</div>


<div class="col-md-6 mb-3">

<div style="margin-bottom: 50px;" > </div>


<div class="card" style="border-radius:20px; padding: 30px; height:270px; background-size:cover; background-image:url('https://images.unsplash.com/photo-1573497491208-6b1acb260507?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">

</div>



<br>

<div class="icon"> <i class="fa fa-street-view" style="font-size:30px; color:white;"> </i> </div>
<span class="text" style="color:white;">
  <strong  style="color:white;"> Creating Social Change </strong>  <br>
  Our vision extends beyond individual support to catalyze broader social change, challenging harmful norms and attitudes that perpetuate violence and discrimination.
  </span>

<!----- Another row closed ----->



<br>

<div class="icon"> <i class="fa fa-mars-stroke" style="font-size:30px; color:white;"> </i> </div>
<span class="text" style="color:white;">
  <strong  style="color:white;"> Promoting Gender Equality </strong>  <br>
  We advocate for gender equality and challenge traditional gender roles, recognizing that violence often stems from unequal power dynamics and societal norms.
  </span>

<!----- Another row closed ----->


<br>

<div class="icon"> <i class="fa fa-users" style="font-size:30px; color:white;"> </i> </div>
<span class="text" style="color:white;">
  <strong  style="color:white;"> Strengthening Communities </strong>  <br>
  By creating safe and inclusive spaces for dialogue and support, we aim to strengthen the fabric of communities and foster solidarity among individuals affected by violence.
  </span>

<!----- Another row closed ----->

</div>
<div style="margin-bottom: 50px;" > </div>
</div>



</div>

</div>


<div style="margin-bottom: 50px;" > </div>

<div class="container">

<h1 style="letter-spacing:-1px; font-weight:800; color:black; text-align:center; "> 
MEET THE TEAM
</h1>
<P style=" color:black;  text-align:center;"> Our team at Safe Ears is composed of passionate individuals committed to our mission of ending violence and providing support to those in need. Get to know the dedicated professionals who drive our organization forward: </P>


<div class="items">


<div class="options">

<img src="img/teams/1.png" class="img-fluid">
<p style="text-align:center; font-weight:bold;"> MOJU TOJU SAMSON </p>
<p style="text-align:center; font-size:10px; font-style:italic;"> I support SAFE EARS 
movement because
I believe everyone
deserves a stable
MENTAL AND EMOTIONAL
HEALTH.  </p>
  </div>


  
<div class="options">

<img src="img/teams/2.png" class="img-fluid">
<p style="text-align:center; font-weight:bold;"> AJAYI OLUWATOYESE  </p>
<p style="text-align:center; font-size:10px; font-style:italic;"> I support SAFE EARS
 movement because 
TOGETHER
 we can make
 a POSITIVE CHANGE and
 be the VOICE for the VOICELESS. </p>

  </div>



  
<div class="options">

<img src="img/teams/3.png" class="img-fluid">
<p style="text-align:center; font-weight:bold; "> PRECIOUS AUSTINE-USHIE
  </p>
<p style="text-align:center; font-size:10px; font-style:italic;">  I support SAFE EARS
 movement because 
 I'm PASSIONATE 
about people that go through
 things as a result of what
 happened to them and feel alone
 and stuck. </p>
  </div>

  
  
<div class="options">

<img src="img/teams/4.png" class="img-fluid">
<p style="text-align:center; font-weight:bold; "> TEMITAYO OYADEJI

  </p>
<p style="text-align:center; font-size:10px; font-style:italic;">   I support SAFE EARS
 movement because  
I want to help
 the SOCIETY to GROW
and I want people's STORY
to be HEARD.</p>
  </div>


  
  
<div class="options">

<img src="img/teams/5.png" class="img-fluid">
<p style="text-align:center; font-weight:bold; "> FABOYA DAMILOLA

  </p>
<p style="text-align:center; font-size:10px; font-style:italic;">   I support safe ears 
movement because
 I believe a lot of people
 need HELP and at safe ears
, we are READY to provide
 that help, to be the
 VOICE of the VOICELESS.</p>
  </div>


  
  
<div class="options">

<img src="img/teams/6.png" class="img-fluid">
<p style="text-align:center; font-weight:bold; "> ASHRAR MUNATSI


  </p>
<p style="text-align:center; font-size:10px; font-style:italic;">   I support SAFE EARS 
movement because 
I believe that there is no 
place for VIOLENCE and ABUSE 
in our SOCIETY, and that 
victims need and deserve
 a SAFE PLACE to run to for help.</p>
  </div>

  
  
<div class="options">

<img src="img/teams/7.png" class="img-fluid">
<p style="text-align:center; font-weight:bold; ">MARY IKHINE


  </p>
<p style="text-align:center; font-size:10px; font-style:italic;">  I support Safe Ears 
movement because
 everyone deserves
 a second chance, 
a better life and wellness
 mentally, physically and 
psychological.</p>
  </div>


  
  
<div class="options">

<img src="img/teams/8.png" class="img-fluid">
<p style="text-align:center; font-weight:bold; "> MIKE-NZEAGWU IFEANYI


  </p>
<p style="text-align:center; font-size:10px; font-style:italic;">  I support Safe Ears 
movement because 
I believe in 
change and growth, 
safe ears positions as 
ears to listen and shoulders 
to stand on through
 unspeakable life challenges, 
to grow and change for a
 better good .</p>
  </div>

  
  
<div class="options">

<img src="img/teams/9.png" class="img-fluid">
<p style="text-align:center; font-weight:bold; "> FASURE FAIDAT


  </p>
<p style="text-align:center; font-size:10px; font-style:italic;">  I support safe ears 
movement because 
I understand the fact that 
our present society is 
fashioned against victims 
hence a lot of  barriers to break 
before justice can be served...
And that's what we do at safe ears. </p>
  </div>


  
  
<div class="options">

<img src="img/teams/10.png" class="img-fluid">
<p style="text-align:center; font-weight:bold; "> YAKUBU SIMNOM NISSI



  </p>
<p style="text-align:center; font-size:10px; font-style:italic;"> I support SAFE EARS 
movement because
 i believe that 
growth and healing is possible, 
we at SAFE EARS are 
ready to journey with you
 through your 
process of healing. </p>
  </div>


  
  
<div class="options">

<img src="img/teams/11.png" class="img-fluid">
<p style="text-align:center; font-weight:bold; "> OLAMIDE ANUOLUWAPOSIMI ADESALU



  </p>
<p style="text-align:center; font-size:10px; font-style:italic;"> I support Safe Ears
 movement because
 rape is a 
menace that should be 
stopped in the society. </p>
  </div>

  
  
<div class="options">

<img src="img/teams/12.png" class="img-fluid">
<p style="text-align:center; font-weight:bold; "> HERALD OKOLI

  </p>
<p style="text-align:center; font-size:10px; font-style:italic;">   I support safe ears 
movement because
I believe there are people
 who need to be
 HEARD and HEALED. 
At SAFE EARS ,
 that's a POSSIBILITY.</p>
  </div>

  </div>

</div>




<div class="company" style="background-color:  #131313; height:100%; border-top: 6px solid #069672;
  ">

<div class="container">

<br><br><br>

<div class="row">

<div class="col-md-6 mb-3">
<h1 style="letter-spacing:-1px; color:white; font-weight:800;"> YOUR STORY TO <strong style="color:#069672;
"> SHARE </strong>, OUR EARS TO <strong style="color:#069672;
"> LISTEN  </strong> </h1>
<p style="color:white; "> 
At Safe Ears, we believe that everyone deserves to have their story heard. Whether you're a survivor of violence, a concerned friend or family member, or simply someone who wants to make a difference, we're here to listen.

</p>

<p style="color:white; ">
Together, we can create a safer, more compassionate world for all. Join us in our mission to end violence and build a future where everyone can thrive.
</p>

<p style="color:white; ">
If you'd like to get involved, share your story, or learn more about our services, please don't hesitate to reach out. Safe Ears is here for you.
</p>
</div>


<div class="col-md-6 mb-3">


<div class="card" style="border-radius:20px; padding: 30px; height:380px; background-size:cover; background-image:url('https://images.pexels.com/photos/5699431/pexels-photo-5699431.jpeg?auto=compress&cs=tinysrgb&w=600');">

</div>


</div>

</div>

<br><br>
</div>


</div>
<?php include('footer.php'); ?>

</body>
</html>