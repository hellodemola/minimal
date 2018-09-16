<?php $this->load->view("header"); ?>
<?php $this->load->view("head"); ?>

<div class="container ">
<div class="row">

    <div class="four columns" style="text-align:left">
    <h5>    
    <a href="<?php echo site_url("welcome"); ?>">
    <p style="font-family:'roboto', arial, san serif; text-transform:capitalize;"> <span class="ion-arrow-left-b"> </span> Home </p>   
    </a>
    </h5>
    </div>

    <div class="eight columns" style="text-align:left">
    <h5><span class="ion-person"> </span> About </h5>
    <h5> I am a dude, I love building products using web technology. </h5>
    <p><a href="https://www.linkedin.com/in/ademola-onasoga-6b634b39/" target="_blank"> <span class="ion-plus-circled"></span> </a></p>

    <!-- <h5><a href="http://www.todaycommunitynewspapers.com/graikeja/"> Community News</h5> -->

    </div>

</div>
</div>
  
<?php $this->load->view('footer'); ?>