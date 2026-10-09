<?php

$pageTitle = "Contact Us";

include "header.php";

$status = $_GET['status'] ?? '';

?>

<section class="page-hero contact-hero">

    <div class="container">

        <span class="eyebrow">
            CONTACT PAPA G'S
        </span>

        <h1>
            Let's talk food.
        </h1>

        <p>

            Have a question, want to pre-book,
            or need delivery information?

            Send us a message.

        </p>

    </div>

</section>


<section class="section container contact-layout">


    <div class="contact-info">

        <span class="eyebrow">
            FIND US
        </span>

        <h2>
            Come hungry. Leave happy.
        </h2>


        <div class="contact-item">

            <span>
                📞
            </span>

            <div>

                <b>
                    Phone
                </b>

                <a href="tel:0814054568">
                    081 405 4568
                </a>

            </div>

        </div>


        <div class="contact-item">

            <span>
                📍
            </span>

            <div>

                <b>
                    Outlets
                </b>

                <p>
                    Grysblok & Pioneerspark
                </p>

            </div>

        </div>


        <div class="contact-item">

            <span>
                ✉️
            </span>

            <div>

                <b>
                    Email
                </b>

                <a href="mailto:enquiries@papagsgrills.com">

                    enquiries@papagsgrills.com

                </a>

            </div>

        </div>


        <div class="contact-item">

            <span>
                ⏱️
            </span>

            <div>

                <b>
                    Enquiries
                </b>

                <p>
                    Pre-bookings, delivery and general enquiries
                </p>

            </div>

        </div>

    </div>


    <div class="form-card"
         id="enquiry">


        <?php if ($status === 'success'): ?>

            <div class="notice success">

                Thank you!

                Your enquiry has been received.
                We'll get back to you soon.

            </div>

        <?php elseif ($status === 'error'): ?>

            <div class="notice error">

                We couldn't save your enquiry.

                Please check your details
                and try again.

            </div>

        <?php endif; ?>


        <span class="eyebrow">
            ENQUIRY FORM
        </span>

        <h2>
            Send us a message
        </h2>


        <form action="process_enquiry.php"
              method="POST"
              id="enquiryForm">


            <div class="form-row">

                <label>

                    Full Name

                    <input type="text"
                           name="name"
                           required
                           maxlength="100"
                           placeholder="Your name">

                </label>


                <label>

                    Phone

                    <input type="tel"
                           name="phone"
                           required
                           maxlength="30"
                           placeholder="081 000 0000">

                </label>

            </div>


            <label>

                Email Address

                <input type="email"
                       name="email"
                       maxlength="150"
                       placeholder="you@example.com">

            </label>


            <label>

                Subject

                <select name="subject"
                        required>

                    <option value="">
                        Select an enquiry type
                    </option>

                    <option>
                        Pre-booking
                    </option>

                    <option>
                        Delivery
                    </option>

                    <option>
                        Menu enquiry
                    </option>

                    <option>
                        General enquiry
                    </option>

                </select>

            </label>


            <label>

                Message

                <textarea name="message"
                          required
                          maxlength="1000"
                          rows="5"
                          placeholder="Tell us how we can help..."></textarea>

            </label>


            <button class="btn btn-primary btn-full"
                    type="submit">

                Send Enquiry

                <span>
                    →
                </span>

            </button>


        </form>

    </div>

</section>


<?php

include "footer.php";

?>