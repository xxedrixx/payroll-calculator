<?php
session_start();
$page_title = "PAYROLL CALCULATOR MONTANA STATE from Hery and C SHOP";
include 'header.php';
include 'sendEmail.php';
?>

<main>
    <div class="contactCard">
        <div class="card text-center m-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Montana - USA <br>
                    Sales Manager</h5>
                <p class="card-text">PO BOX 382 <br>
                    Belt, Montana 59412 <br>
                    TEl : +1-01-406-868-9338 <br>
                    Mail : <a href="mailto:heryandc@payroll.heryandc-shop.com">heryandc@payroll.heryandc-shop.com</a>
                </p>
            </div>
        </div>
        <div class="card text-center m-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Antananarivo - MADAGASCAR <br>
                    Sales Manager</h5>
                <p class="card-text">TEl :+261(0)340558353 <br>
                    Mail : <a href="mailto:contact@payroll.heryandc-shop.com">contact@payroll.heryandc-shop.com</a> <br> <br> </p>
            </div>
        </div>

    </div>
    <h2 class="instructionLarge">Contact Us</h2>
    <h2 class="instructionMobile">Contact Us</h2>
    <div class="contact-form">
        <form method="POST">
            <div class="form-group">
                <label for="name" class="form-label"></label>
                <input type="text" id="name" name="name" class="form-input" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label"></label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label"></label>
                <input type="text" id="subject" name="subject" class="form-input" placeholder="Enter the subject" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label"></label>
                <textarea id="message" name="message" class="form-input" rows="5" placeholder="Enter your message" required></textarea>
            </div>
            <div class="col-md-12 mb-3"><?php echo $alert; ?></div>
            <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</main>

<?php include 'footer.php';
