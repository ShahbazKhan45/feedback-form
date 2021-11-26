$(document).ready(function () {

    /*PORTFOLIO*/
    $('.various').click(function () {
        var leadprice = $(this).attr('name');
        $(".popupform .leadprice").val(leadprice)
    });


    $('.lazy').lazy();

    $(".validate-popupform").validate({});
    $(".validate-ftr").validate({});
    $(".selection").validate({});

    $(".modal-body").mCustomScrollbar({
        autoHideScrollbar: true,
    });


    // Progressive bar
    $(function () {
        CalculatePercentage();
    });
    function CalculatePercentage() {
        var firstNamePercentage = 20;
        var emailPercentage = 20;
        var phonePercentage = 20;
        var selectPercentage = 20;
        var complainPercentage = 20;
        var percent = 0;
        if ($('#cn').val() != '') {
            percent += firstNamePercentage;
        } 
        else if ($('#em').val() != '') {
            percent += emailPercentage;
        }
        else if ($('#pn').val() != '') {
            percent += phonePercentage;
        }
        else if ($('#s-op').val() != '') {
            percent += selectPercentage;
        }
        else if ($('#comp').val() != '') {
            percent += complainPercentage;
        }
        $('.progress').addClass('progress-striped').addClass('active');
        $('.progress .progress-bar:first').removeClass().addClass('progress-bar').addClass((percent <= 0) ? 'progress-bar-danger' : ((percent <= 100) ? 'progress-bar-warning' : 'progress-bar-success'));
        $('.progress .progress-bar:first').width(percent + '%');
        $('.progress .progress-bar:first').text(percent + '%');
    }

   

});


