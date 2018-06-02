<?php include('./includes/sessions.php');
      include('./backend/functions.php'); ?>
<?php $title = 'Kontakt'; ?>
<?php include('./includes/header.php') ?>
<?php include('./includes/contact-email.php') ?>


<div class="wrapper">
  <div class="content-wrapper contact-background">
    <div class="uk-container">
    <div class="breadcrums">
      <p><a href="index.php">Forside</a>/<a href="kontakt.php"> Kontakt</a></p>
    </div>

    <h1><?= $title ?></h1>

    <form id="minform" class="contactform" action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
      <fieldset class="uk-fieldset">
        <div class="uk-margin">
            <input data-validation-error-msg="Indtast kun bogstaver" data-validation="alphanumeric" data-validation-allowing="-_" class="uk-input" type="text" placeholder="Navn" name="navn" required>
        </div>
        <div class="uk-margin">
            <input data-validation-error-msg="Indtast E-mail" data-validation="email" class="uk-input" type="email" placeholder="E-mail" name="email" required>
        </div>
        <div class="uk-margin">
            <input class="uk-input" data-validation-error-msg="Indtast kun tal" type="text" placeholder="Telefonnummer" name="telefonnummer" data-validation="number" min="8" max="10" required>
        </div>
        <div class="uk-margin">
            <textarea class="uk-textarea" data-validation-length="10-500" rows="5" placeholder="Kommentar" name="kommentar"></textarea>
        </div>
        <div class="uk-margin">
          <button id="submit" class="uk-button uk-button-default" type="submit" name="send">Send</button>
        </div>
      </fieldset>
    </form>

      </div>
    </div>
  </div>
<script type="text/javascript">
$("#submit").attr('disabled','disabled');
$("#minform").keyup(function(){
  $("#submit").removeAttr('disabled');
});
$.validate({
  validateOnBlur : false
});

</script>
<?php include('./includes/footer.php') ?>
