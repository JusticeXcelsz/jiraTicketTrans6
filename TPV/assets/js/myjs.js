// Cookies banner
const cookieBanner = document.querySelector(".cookies");
const body = document.body;

$('#accept').click( () => {
    var market_value = $('#check3').val();
    var Statistics_value = $('#check2').val();
    var Preference_value = $('#check1').val();
    cookieBanner.classList.remove("active");
    localStorage.setItem("bannerDisplayed?", "true");
    document.cookie = 'marketing=' + market_value + '; stats=' + Statistics_value + '; reference=' + Preference_value + '';
});

setTimeout(() => {
    if (localStorage.getItem("bannerDisplayed?") == null || localStorage.getItem("bannerDisplayed?") == ''){
        $('.cookies').fadeIn('slow');
    }
}, 2000);