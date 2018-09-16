<?php $this->load->view("header"); ?>

<style>
    .timeline-tweet{
        font-family:'roboto', sans serif; 
        font-weight:100;
    }
</style>

<body>
<div class="centered">
      
    <div class="head">      
            <h1><a  href="<?php echo site_url("welcome"); ?>"> Hellodemola </a></h1>
            <h3>Web developer</h3>
    </div>

    <div class="container ">
        <div class="row">
            <a class="twitter-timeline"  href="https://twitter.com/search?q=hellodemola" data-widget-id="963410997770969093">Tweets about hellodemola</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            
        </div>
    </div>
  

  <?php $this->load->view('footer'); ?>
