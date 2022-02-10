
<?php 
    include './partials/_header.php';
?>
    
    <div class="container-fluid">
       <?php 
       include './partials/_navbar.php';
       ?>
        <div class="sub">
            <div class="overlay"></div>
            <div class="sub-head">
                <h3>We can support with ...</h3>
                
            </div>

            <div class="sub-form">
                <div class="form-inn">
                    <a href="#btn">Moving Abroad</a>
                    <a href="#btn">Stuck In a Chain</a>
                    <a href="#btn">Fast Sales</a>
                </div>
            </div>
        </div>

        <div class="cards">
            <div class="card-head">Why Choose The Property Vendee (TPV)?</div>

            <div class="card-body">
                <div class="card-1">
                    <div class="card-cont" id="cont-1">
                        <div class="myrow">
                            <img src="./assets/images/iconfinder.png" alt="Icon">
                            <div class="arrow">----</div>
                            <div class="txt">Legal Fees</div>
                        </div>
                        <div class="mycol">
                            <span></span>
                        </div>
                    </div>

                    <div class="card-cont">
                        <div class="myrow">
                            <img src="./assets/images/iconfinder.png" alt="Icon">
                            <div class="arrow">----</div>
                            <div class="txt">Completion</div>
                        </div>
                        <div class="mycol">
                            <span></span>
                        </div>
                    </div>

                    <div class="card-cont">
                        <div class="myrow">
                            <img src="./assets/images/iconfinder.png" alt="Icon">
                            <div class="arrow">----</div>
                            <div class="txt">Commission</div>
                        </div>
                        <div class="mycol">
                            <span></span>
                        </div>
                    </div>

                    <div class="card-cont">
                        <div class="myrow">
                            <img src="./assets/images/iconfinder.png" alt="Icon">
                            <div class="arrow">----</div>
                            <div class="txt">Maintenance</div>
                        </div>
                        <div class="mycol">
                            <span></span>
                        </div>
                    </div>

                    <div class="card-cont">
                        <div class="myrow">
                            <img src="./assets/images/iconfinder.png" alt="Icon">
                            <div class="arrow">---</div>
                            <div class="txt">Refurbishment</div>
                        </div>
                        <div class="mycol">
                            <span></span>
                        </div>
                    </div>

                    <div class="card-cont">
                        <div class="myrow">
                            <img src="./assets/images/iconfinder.png" alt="Icon">
                            <div class="arrow">----</div>
                            <div class="txt">Rent Gap</div>
                        </div>
                        <div class="mycol">
                            <span></span>
                        </div>
                    </div>

                    <div class="card-cont" id="cont-l">
                        <div class="myrow">
                            <img src="./assets/images/iconfinder.png" alt="Icon">
                            <div class="arrow">----</div>
                            <div class="txt">Valuation</div>
                        </div>
                    </div>
                </div>

                <div class="card-2">
                    <div class="c-head" id="fchead">
                        <p>Other</p>
                        <p>Agents / Brokers</p>
                    </div>
                    <div class="content">
                        <div class="list">Charge dditionally</div>
                        <div class="list">In 6-9 months plus</div>
                        <div class="list">Up to 5% of sale price</div>
                        <div class="list">Do not refurbish</div>
                        <div class="list">At least one month</div>
                        <div class="list">Charge dditionally</div>
                    </div>
                </div>

                <div class="card-3">
                    <div class="c-head">
                        <p>TPV</p>
                    </div>
                    <div class="content">
                        <div class="list">No Legal fees</div>
                        <div class="list">Guaranteed in 7-14 days</div>
                        <div class="list">No commission fees</div>
                        <div class="list">Free minor repairs</div>
                        <div class="list">Free refurbishment</div>
                        <div class="list">No Voids</div>
                        <div class="list">Free Appraisal</div>
                    </div>
                </div>
            </div>
        </div>

        <?php 
       include './partials/_footer.php';
       ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.top-btn').fadeOut();
            if (localStorage.getItem("bannerDisplayed?") != 'true'){
                $('.cookies').fadeIn('slow');
            }

            $(window).scroll(function() {
                if ($(this).scrollTop() != 0) {
                    $('.top-btn').fadeIn();
                } else {
                    $('.top-btn').fadeOut();
                }
            });

            $('#upBTN').click(()=>{
                $("html, body").animate({
                        scrollTop: 0
                    }, 900);
                    return false;
            });

            $('#accept').click( () => {
                var market_value = $('#check3').val();
                var Statistics_value = $('#check2').val();
                var Preference_value = $('#check1').val();
                localStorage.setItem("bannerDisplayed?", "true");
                document.cookie = 'marketing=' + market_value + '; stats=' + Statistics_value + '; reference=' + Preference_value + '';
                $('.cookies').fadeOut('slow');
            });

            $('#show-list').click(()=>{
                $('.hidden-nav').slideToggle('slow')
            });
        });
    </script>
</body>
</html> 