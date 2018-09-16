<?php $this->load->view("header");?>
<?php $this->load->view("head");?>

<div class="container">
<div class="row">

    <div class="four columns">
    <h5> <a href="<?php echo site_url("works"); ?>"> <span class="ion-briefcase"> </span> Works </a></h5>
    <h5> <a href="https://github.com/hellodemola" target="_blank">  <span class="ion-social-codepen"> </span> Lab </a></h5>
    </div>

    <div class="four columns">
    <h5><a href="<?php echo site_url("contact"); ?>"><span class="ion-chatbubble-working"> </span> Contact</a></h5>
    <h5> <a href="https://medium.com/@hellodemola" target="_blank"> <span class="ion-social-rss-outline"> </span> Blog </a></h5>
    </div>

    <div class="four columns"> 
    <h5><a href="<?php echo site_url("about"); ?>"> <span class="ion-person"> </span> About </a></h5> 
    <h5> <a href="<?php echo site_url("feed"); ?>" target="_blank"> <span class="ion-social-twitter"> </span> Feeds </a></h5>
    </div>

</div>
</div>

<?php $this->load->view('footer');?>