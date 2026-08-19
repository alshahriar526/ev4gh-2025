
<section class="ev-newsletter-section">
    <!-- Animated Floating Icons -->
    <div class="newsletter-bg-icons" aria-hidden="true">
        <i class="fas fa-envelope bg-icon icon-1"></i>
        <i class="fas fa-paper-plane bg-icon icon-2"></i>
        <i class="fas fa-at bg-icon icon-3"></i>
        <i class="fas fa-envelope-open-text bg-icon icon-4"></i>
        <i class="fas fa-paper-plane bg-icon icon-5"></i>
        <i class="fas fa-envelope bg-icon icon-6"></i>
    </div>

    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="card newsletter-card newsletter-content shadow-lg p-4 p-md-5 bg-body-tertiary rounded-4">
                    <span class="newsletter-badge">Stay Connected</span>
                    <h3 class="newsletter-title font-weight-bold">Subscribe to Our Newsletter</h3>
                    <p class="newsletter-desc text-muted">
                        Get the latest updates, news, and insights from Emerging Voices for Global Health directly in your inbox.
                    </p>

                    <!-- Animated Alert Message Box -->
                    <div id="newsletter-alert" class="alert d-none border-0 shadow-sm mb-3 w-100 text-center newsletter-alert-anim" role="alert">
                        <i id="newsletter-alert-icon" class="fas me-1"></i>
                        <span id="newsletter-alert-text"></span>
                    </div>

                    <form id="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST" class="newsletter-form">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-0 text-danger ps-3">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" id="newsletter-email" name="email" class="form-control" placeholder="Enter your email address" required>
                            <button type="submit" id="newsletter-btn" class="btn btn-subscribe">
                                <span id="btn-text">Subscribe</span>
                                <i id="btn-icon" class="fas fa-paper-plane ms-2"></i>
                                <span id="btn-spinner" class="spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('newsletter-form');
    const submitBtn = document.getElementById('newsletter-btn');
    const btnIcon = document.getElementById('btn-icon');
    const btnSpinner = document.getElementById('btn-spinner');
    
    const alertBox = document.getElementById('newsletter-alert');
    const alertIcon = document.getElementById('newsletter-alert-icon');
    const alertText = document.getElementById('newsletter-alert-text');

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        // 1. Loading Animation State
        submitBtn.disabled = true;
        btnIcon.classList.add('d-none');
        btnSpinner.classList.remove('d-none');
        alertBox.classList.add('d-none');

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                body: formData
            });

            const data = await response.json();

            // Reset Alert State
            alertBox.className = 'alert border-0 shadow-sm mb-3 w-100 text-center newsletter-alert-anim';
            alertIcon.className = 'fas me-1';

            // 2. Response Animations
            if (response.ok) {
                alertBox.classList.add('alert-success');
                alertIcon.classList.add('fa-check-circle');
                alertText.innerText = data.message;
                form.reset();
            } else if (response.status === 409) {
                alertBox.classList.add('alert-info');
                alertIcon.classList.add('fa-info-circle');
                alertText.innerText = data.message;
            } else if (response.status === 422) {
                alertBox.classList.add('alert-danger');
                alertIcon.classList.add('fa-exclamation-triangle');
                alertText.innerText = data.message;
            }

            alertBox.classList.remove('d-none');

        } catch (error) {
            alertBox.className = 'alert alert-danger border-0 shadow-sm mb-3 w-100 text-center newsletter-alert-anim';
            alertIcon.className = 'fas fa-exclamation-triangle me-1';
            alertText.innerText = 'Something went wrong. Please try again.';
            alertBox.classList.remove('d-none');
        } finally {
            // Restore Button State
            submitBtn.disabled = false;
            btnIcon.classList.remove('d-none');
            btnSpinner.classList.add('d-none');
        }
    });
});
</script>


<footer class="ev-footer" id="ev-footer">
    <div class="container py-5">
        <div class="row">

            <!-- About -->
            <div class="col-md-6 mb-4">
                <h5 class="footer-title">Follow us</h5>
                {{-- <p class="footer-text">
                    BRAC James P Grant School of Public Health, BRAC University.  
                </p> --}}

                <div class="footer-social mb-4">
                    <a target="_blank" href="https://www.linkedin.com/company/ev4gh" class="social-icon"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a target="_blank" href="https://www.facebook.com/EV4GH/" class="social-icon"><i
                            class="fab fa-facebook-f"></i></a>
                    {{-- <a target="_blank" href="https://x.com/ev4gh" class="social-icon"><i
                            class="fab fa-x-twitter"></i></a> --}}
                    <a target="_blank" href="https://www.youtube.com/@ev4ghsecretariat298" class="social-icon"><i
                            class="fab fa-youtube"></i></a>
                </div>
                <!--<a href="#XUEXSECN" class="my-navbar-donate-btn my-2">Donate Now</a>-->
            </div>
            
            

            <!-- Contact -->
            <div class="col-md-6 mb-4">
                <h5 class="footer-title">Contact Us</h5>

                <p class="footer-text">BRAC James P Grant School of Public Health, BRAC University
                    Floor 10-13, BRAC Tower, 65 Mohakhali, Bir Uttam A K Khandakar Road, Dhaka-1212, Bangladesh
                </p>

                <p class="footer-text mb-1">Phone: +880-2-48812213-18</p>
                <p class="footer-text">Email: ev_secretariat@bracu.ac.bd </p>
            </div>

        </div>
        <div class="footer-bottom text-center pt-3">
            <p class="mb-0" style="text-align: center!important">BRAC James P Grant School of Public Health, BRAC University serves as our secretariat</p>
        </div>
    </div>
</footer>
@yield('scripts')
