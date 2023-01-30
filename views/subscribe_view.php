

<section class="container">
<p><?php echo $this->session->flashdata('subscribe_status'); ?></p>
<?php $string = validation_errors(); if(!empty($string)): ?>
<?php echo '<div class="alert">' .validation_errors(). '</div>' ?>
<?php endif; ?>
 <div class = "explore-info-loaded">
    <div class="con-1" style = "padding-top:30px">
      <header>
        <h1>Subscribe To Our News Letter</h1>
        <p>To receive the most up-to-date information about the faculty, sign up now. We'll keep you up to date on everything so you don't miss out.</p>
      </header>
    </div>
    <form class="form-sc" id="formSubscribe" action="<?=base_url()?>Subscribe/addnew" method="post">
    <div class="field">
      <label for="email"><b></b></label>
      <input type="email" class="mail" placeholder="Enter Email" name="cEmail" reqiured>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></p>
    <div>
      <button type="submit" class="ref-button">Sign Up</button>
    </div>
  </div>
  </div>
</form>

</section>
