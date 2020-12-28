<?php 
    session_start();
?>

<?php require_once("./includes/header.php")?>

<header>
    <?php require_once("includes/navbar.php") ?>
</header>

<div class="container">
    <?php
        $message_class = "";
         if(isset($_SESSION['success'])){
             $message_class = "success-message";
         }else if(isset($_SESSION['error'])){
             $message_class = "error-message";
         }else{
            $message_class = "no-message-response";
         }
    ?>
    <div class="message-sent <?php echo $message_class ?>">
        <p>
            <?php
                if(isset($_SESSION['response-message'])){
                    $response_message = $_SESSION['response-message'];
                    echo($response_message);
                    session_unset();
                } 
            ?>
        </p>
    </div>

    <div class="terms flex-center" id="terms">
        <div class="terms-container">
            <h4>Όροι και Προϋποθέσεις</h4>

            <div class="terms-text">
                <p>
                    Το περιεχόμενο της ιστοσελίδας διατίθεται «ως έχει» και ο/η κάτοχος αυτής δεν παρέχει καμία εγγύηση, ρητή ή μη, 
                    σχετικά με την αρτιότητα, ορθότητα, επικαιρότητα, εμπορικότητα, μη παραβίαση ή καταλληλότητα του περιεχομένου 
                    αυτού για οποιαδήποτε χρήση, εφαρμογή ή σκοπό. Η ιστοσελίδα, καθώς και ο κάτοχος αυτής, υπό οποιεσδήποτε συνθήκες, 
                    συμπεριλαμβανομένης και της περίπτωσης αμέλειας, δεν ευθύνεται για οποιασδήποτε μορφής ζημία υποστεί ο επισκέπτης/χρήστης 
                    των σελίδων, υπηρεσιών, επιλογών και περιεχομένων, στις οποίες προβαίνει με δική του πρωτοβουλία και με τη γνώση των παρόντων 
                    όρων.
                </p>

                <p>
                    Επίσης, η ιστοσελίδα δεν εγγυάται ότι οι σελίδες, οι υπηρεσίες, οι επιλογές και τα περιεχόμενα θα παρέχονται χωρίς 
                    διακοπή, χωρίς σφάλματα, ότι τα λάθη θα διορθώνονται ή ότι θα δίνονται απαντήσεις σε όλα τα ερωτήματα που της τίθενται. 
                    Ομοίως η ιστοσελίδα δεν εγγυάται ότι οποιοδήποτε άλλος συγγενικός δικτυακός τόπος ή οι εξυπηρετητές ("servers") μέσω των 
                    οποίων το περιεχόμενο τίθεται στη διάθεση των επισκεπτών/χρηστών παρέχονται χωρίς "ιούς" ή άλλα επιζήμια συστατικά. 
                    Το κόστος των ενδεχόμενων διορθώσεων ή εξυπηρετήσεων, το αναλαμβάνει ο επισκέπτης/χρήστης και σε καμία περίπτωση η ιστοσελίδα.
                </p>

                <p>
                    Πατώντας το κουμπί «αποδοχή», ο επισκέπτης  όχι μόνο  αποδέχεται τους ανωτέρω όρους, αλλά συμφωνεί και στην αποθήκευση 
                    και όποια επεξεργασία απαιτείται, των προσωπικών του δεδομένων, λόγω της φύσεως της ιστοσελίδας. Συνεπώς, πατώντας την 
                    επιλογή «αποδοχή των όρων», ταυτοχρόνως αποδέχεται, πως η ίδια η ιστοσελίδα και ο κάτοχος αυτής πιθανώς να αποθηκεύσει 
                    και να επεξεργαστεί προσωπικά δεδομένα του ίδιου, ως επισκέπτη, παραχωρώντας την άδεια στον κάτοχο αυτής.
                </p>
            </div>

            <button type="button" class="btn" id="close-terms">Κλείσε</button>
        </div>
    </div>

    <div class="contact-container">
        <div class="contact-form">
            <h1 class="page-title">Επικοινωνήστε μαζί μου</h1>

            <form action="actions/message.php" method="POST">
                <div class="form-group">
                    <label>‘Ονομα</label>
                    <input type="text" placeholder="Γράψτε το όνομα σας..." name="first_name" required>
                </div>

                <div class="form-group">
                    <label>Επίθετο</label>
                    <input type="text" placeholder="Γράψτε το επίθετο σας..." name="last_name" required>
                </div>

                <div class="form-group">
                    <label>Τηλέφωνο</label>
                    <input type="text" placeholder="Γράψτε το τηλέφωνο σας..." name="phone" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="Γράψτε το email σας..." name="email" required>
                </div>

                <div class="form-group">
                    <label>Μήνυμα</label>
                    <textarea rows="10" placeholder="Γράψτε το μήνυμα σας..." name="message" required></textarea>
                </div>

                <div class="conditions form-group">
                    <p id="read-terms">Διαβάστε τους όρους πρωτού στείλετε μήνυμα <i class="fas fa-file-contract"></i></p>

                    <div class="accept-terms">
                        <input type="checkbox" name="accept-terms" required> <span>Αποδέχομαι του όρους</span>
                    </div>
                </div>

                <button class="btn flex-center" type="submit" name="submit">Αποστολή <i class="fas fa-paper-plane"></i></button>
            </form>
        </div>

        <div class="my-contacts">
            <p class="contact">
                <i class="fas fa-envelope"></i> terezamichailidou@outlook.com
            </p>
            <p class="contact">
                <i class="fas fa-mobile-alt"></i> 6975750817
            </p>
            <p class="contact">
                <a href="https://bit.ly/36G2D2o" target="_blank">
                    <i class="fab fa-instagram-square"></i> https://bit.ly/36G2D2o
                </a>
            </p>
            <p class="contact">
                <a href="https://bit.ly/2IOedjw" target="_blank">
                    <i class="fab fa-facebook"></i> https://bit.ly/2IOedjw
                </a>
            </p>
            <p class="contact">
                <i class="fab fa-linkedin"></i> Tereza S. Michailidou
            </p>
            <p class="contact">
                <i class="fas fa-map-marker-alt"></i>Βέροια, Ημαθία
            </p>

            <p class="contact text-center">Ώρες Λειτουργείας <i class="far fa-clock"></i></p>

            <ul>
                <li>Δευτέρα 9:00 π.μ. - 2:00 μ.μ. και 5:00 μ.μ. - 21:00 μ.μ.</li>
                <li>Τρίτη 9:00 π.μ. - 2:00 μ.μ. και 5:00 μ.μ. - 21:00 μ.μ.</li>
                <li>Τετάρτη 9:00 π.μ. - 2:00 μ.μ. και 5:00 μ.μ. - 21:00 μ.μ.</li>
                <li>Πέμπτη 9:00 π.μ. - 2:00 μ.μ. και 5:00 μ.μ. - 21:00 μ.μ.</li>
                <li>Παρασκευή 9:00 π.μ. - 2:00 μ.μ. και 5:00 μ.μ. - 21:00 μ.μ.</li>
                <li>Σάββατο 9:00 π.μ. - 2:00 μ.μ. και 5:00 μ.μ. - 21:00 μ.μ.</li>
            </ul>
        </div>
    </div>
</div>

<?php require_once("includes/footer.php") ?>