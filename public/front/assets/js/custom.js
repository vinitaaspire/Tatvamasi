


// $(document).ready(function () {

//     var current_fs, next_fs, previous_fs; //fieldsets
//     var opacity;
//     var current = 1;
//     var steps = $(".fieldset-step").length;

//     setProgressBar(current);

//     $(".next").click(function () {

//         current_fs = $(this).parent();
//         next_fs = $(this).parent().next();

//         //Add Class Active
//         $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
//         //show the next .fieldset-step
//         next_fs.show();
//         //hide the current .fieldset-step with style
//         current_fs.animate({ opacity: 0 }, {
//             step: function (now) {
//                 // for making fielset appear animation
//                 opacity = 1 - now;

//                 current_fs.css({
//                     'display': 'none',
//                     'position': 'relative'
//                 });
//                 next_fs.css({ 'opacity': opacity });
//             },
//             duration: 500
//         });
//         setProgressBar(++current);
//     });

    $(".previous").click(function () {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous .fieldset-step
        previous_fs.show();

        //hide the current .fieldset-step with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.addClass('d-none');
                previous_fs.removeClass('d-none');
            },
            duration: 500
        });
        setProgressBar(--current);
    });

//     function setProgressBar(curStep) {
//         var percent = parseFloat(100 / steps) * curStep;
//         percent = percent.toFixed();
//         $(".progress-bar")
//             .css("width", percent + "%")
//     }

//     $(".submit").click(function () {
//         return false;
//     })




//     /* start*/
//     $('.mobile_no').keyup(function () {
//         var a = $(this).val().length;
//         if (a == 10) {
//             $('.otp').removeClass('d-none').addClass('d-block');
//         } else {
//             $('.otp').removeClass('d-block').addClass('d-none');
//         }
//     });
//     /* end */

//     /* file uplaod start */
//     $('.custom-file-label').text('Upload Photo');
//     $('#customFileLangHTML').on('change', function (e) {
//         if ($("#customFileLangHTML").val() !== '') {
//             let txt = $("#customFileLangHTML").val();
//             $('.custom-file-label').text(txt);
//         } else {
//             $('.custom-file-label').text('Upload Photo');
//         }
//     })
//     /* file upload end */



// });
