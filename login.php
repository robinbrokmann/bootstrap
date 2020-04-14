<?php
require_once "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<div class="header-div">
    <img alt="header" class="img-fluid w-100 header-img" src="img/header6.jpg">
</div>
<div class="container-fluid contact_form">
    <div class="container-fluid wrapper contact_form_inner">
        <h2>login</h2>
        <form data-toggle="validator" role="form">
            <div class="form-group">
                <label for="inputName" class="control-label">Naam</label>
                <input type="text" class="form-control" id="inputName" placeholder="Voer Naam in" required>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="control-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email"  class ="alert alert-danger" data-error="Dit is een onjuist mail-adres" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="control-label">Wachtwoord</label>
                <div class="form-inline row">
                    <div class="form-group col-sm-6">
                        <input type="password" data-minlength="8" class="form-control" id="inputPassword" placeholder="Wachtwoord" required>
                        <div class="help-block">Minimum of 8 characters</div>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Deze wachtwoorden komen niet overheen" placeholder="Bevestig" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="terms" data-error="Kijk of er fouten weer worden gegeven." required>
                        De gegevens kloppen.
                    </label>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php
require_once "footer.php";
?>
