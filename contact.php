<?php include('menu.php');?>
<section class="mb-4">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez-nous</h2>
    <p class="text-center w-responsive mx-auto mb-5">Si vous avez des questions ? N'hésitez pas à nous demander nous essayerons de vous répondre dans les plus brefs délais</p>
        <div class="container">
            <form id="contact-form" name="contact-form" action="contact.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Votre mail">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Objet">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Votre message"></textarea>
                        </div>

                    </div>
                </div>
                <div class="text-center text-md-left">
                <button type="submit" class="btn-primary btn">Envoyer</button>
            </div>
            </form>
            <div class="status">
                <?php 
                    if(isset($_POST['name']) && isset($_POST['subject']) && isset( $_POST['message']) && isset( $_POST['email']))
                    {
                        $name = $_POST['name'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                        $email = $_POST['email'];
                        
                        $message = wordwrap($message,70);

                        $to  = 'nicolassaysset@free.fr';
                        $headers = "From : " . $email . "Content-type : text/html\r\n";
                        mail($to, $subject, $message, $headers);
                        echo "Message envoyé!";
                    }
                ?>
            </div>
        </div>
</section>
<?php include('footer.php');?>