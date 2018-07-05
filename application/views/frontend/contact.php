<div class="col-sm-8">
    <article class="single-blog-post">
        <div class="post-header text-center">

            <h2 class="post-title">Contact us</h2>
        </div>
        <div class="post-thumb">
            <img src="<?= base_url('assets/frontend/images/post-thumb-1.jpg'); ?>" alt="">
        </div>
        <div class="post-content">
            <p>
                Lorem ipsum dolor sits mate, commenter sad pacing elite, sed diam on my air mod temporal
                incident laborer et dolor manga aliya at, sed diam voluptuary. At zero Los et accuse eat
                just to
                due colors et cerebrum. Stet Clarita and gun egg run, no sea take Mata Sanctus est Lorem
                ipsum
                dolor sit meat. Lorem ipsum dolor sits mate, consenteth sad pacing editor, sed diam, not my
                ear
            mod temper causal etc just do to Dolores et sebum. Stet Clarita.</p>
        </div>
        <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">Contact form </h3>
            <?php echo $this->session->flashdata('msg'); ?>
            <form class="contact-form" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Name"
                            name="contact_us_name" autofocus="autofocus">
                        </div>
                    </div>
                    <div class="col-sm-6">  
                        <div class="form-group">
                            <input type="email" class="form-control" required="required"
                            placeholder="Email Id"
                            name="contact_us_email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control"  maxlength="100" required="required"
                            placeholder="Subject"
                            name="contact_us_subject">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea name="contact_us_message" id="message" required="required" class="form-control" rows="7"
                            placeholder="Your Message"></textarea>

                        </div>
                    </div>
                </div>
                <div class="form-group text-left">
                    <button type="submit" class="btn">Send Message</button>
                </div>
            </form>
        </div>
    </article>
</div>