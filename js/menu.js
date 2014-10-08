/* Menu toggle created by Joeri Smits 04/05/2014 */

$(document).ready(function() {
    var uitgeklapt;

    if($(window).width() < 900) {
        uitgeklapt = false;
    }
    else
        uitgeklapt = true;

    var schuifTijd = 500;
    $(".menuFixedContent h2").click(function() {

        if(uitgeklapt) {
            $(".menuFixedContent").animate({ margin:'0 0 0 -50px' }, schuifTijd);
            $("#menu").animate({ margin:'0 0 0 -100px' }, schuifTijd);
            uitgeklapt = false;
        }
        else {
            $(".menuFixedContent").animate({ margin:'0' }, schuifTijd);
            $("#menu").animate({ margin:'0' }, schuifTijd);

            uitgeklapt = true;
        }
    });
})
