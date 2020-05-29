<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage epignosis
 */

?>
<div class="album py-5 bg-light">
    <div class="container pb-5">
        <div id="response"></div>
        <h4 class="mb-5 mt-5 font-weight-bold">Contact Form</h4>
        <div class="row">
            <div class="col-md-8 order-md-1">
                
                <form id="contact-form" class="needs-validation">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label for="firstName" class="text-muted text-uppercase">Your First Name *</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Enter your First name" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="lastName" class="text-muted text-uppercase">Your Last Name *</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Enter your lastname" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="text-muted text-uppercase">Your Email *</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="username" class="text-muted text-uppercase">YOUR MESSAGE FOR US *</label>
                        <textarea style="resize: none;" rows="5" id="message" class="form-control" placeholder="Enter your message"></textarea>
                    </div>
                    <button class="btn btn-outline-primary font-weight-bold text-uppercase mb-5 ls-2" type="submit">Send Message</button>
                </form>
            </div>
            <div class="col-md-4 order-md-1">
                <p class="text-muted text-left">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>
                    <i class="fa fa-twitter mr-2 text-primary"></i>
                    <i class="fa fa-facebook mr-2 text-primary"></i>
                    <i class="fa fa-instagram mr-2 text-primary"></i>
                    <i class="fa fa-pinterest mr-2 text-primary"></i>
                    <i class="fa fa-vimeo mr-2 text-primary"></i>
                </p>
            </div>
        </div>
    </div>
</div>