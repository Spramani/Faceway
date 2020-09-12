$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip();

    setInterval(function () {
        if ($('.modal.fade').hasClass('show')) {

        } else {
            $('.text_post_view video').trigger('pause');
        }
    }, 1);
})
toastr.options = {

    "closeButton": true,
    "debug": true,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false
}
$("#photo_input").change(function () {
    var text = $(this).val();
    $('#photo_media_text').text(text);

});
$("#video_input").change(function () {
    var text = $(this).val();
    $('#video_media_text').text(text);

});
$("#open-photo-popup-v2").on('hidden.bs.modal', function (e) {
    // alert('hide');
});
var base_url = window.location.origin + "/faceway/public/";



function secs(){
    var cs = $('#cs').val();
    $.ajax({
        method: 'POST',
        url: base_url + 'setcs' ,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {cs:cs},
        success: function (data) {
            $(".author-subtitle").html(data);
            $("#cs").val(data);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function profile_ref_post(user_id) {

    $.ajax({
        method: 'POST',
        url: base_url + 'profile/ref_post/' + user_id,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            $("#newsfeed-items-grid_profile").html(data);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function searchfriend() {
    var searchtxt = $('#home_search').val();
    if (searchtxt == "") {
        $(".home_search_list").html("");
    } else {
        $.ajax({
            method: 'POST',
            url:  base_url +  'profile/searchfriend',
            //data:"_token = <?php echo csrf_token(); ?>",
            data: {
                searchtxt: seasearchtxtrchtxt
            },
            success: function (data) {
                $(".home_search_list").html(data);
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(xhr.responseText);
            }
        });
    }

}

function post_text() {
    var post_text = $("#post_txt_box").val();

    $.ajax({
        method: 'POST',
        url: base_url +  'home/post_text',
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {
            post_text: post_text
        },
        success: function (sts) {
            $("#post_txt_box").val("");
            ref_post();
            if (sts['typ'] == 0) {
                toastr.warning(sts['msg']);
            }

        },
        error: function (xhr, status, error) {
            //var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}




$('#photo_post_form').on('submit', function (event) {

    event.preventDefault();
    $.ajax({
        url: base_url +  "home/post_photo",
        method: "POST",
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $("#photo_input").val('');
            $("#post_txt_box_photo").val('');
            $('#photo_media_text').text('');
            ref_post();
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
});

$('#video_post_form').on('submit', function (event) {

    event.preventDefault();
    $.ajax({
        url: base_url + "home/post_video",
        method: "POST",
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            if (data.name != '') {
                //alert(data.name);
            }

            $("#video_input").val('');
            $("#post_txt_box_video").val('');
            $('#video_media_text').text('');
            ref_post();
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
});



function post_delete(post_id) {
    $.ajax({
        method: 'POST',
        url: base_url +  'post_delete/' + post_id,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            ref_post();
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function ref_post() {
    $.ajax({
        method: 'POST',
        url: base_url + 'home/ref_post',
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            $("#newsfeed-items-grid_home").html(data);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function loadmorehome(last_id){
    $.ajax({
        method: 'POST',
        url: base_url + 'home/load_more/' + last_id,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        beforeSend: function(){
            $('#load-more-button').show();
        },
        success: function (data) {
            // $("#newsfeed-items-grid").html(data);
            $('#load-more-button').hide();
            $("#newsfeed-items-grid_home").append(data);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
  }
  function loadmoreprofile(last_id){
    $.ajax({
        method: 'POST',
        url: base_url + 'profile/load_more/' + last_id,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        beforeSend: function(){
            $('#load-more-button').show();
        },
        success: function (data) {
            // $("#newsfeed-items-grid").html(data);
            $('#load-more-button').hide();
            $("#newsfeed-items-grid_profile").append(data);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
  }
function submitreg() {
    var full_name = $('input[name=u_fullname]').val();
    var user_name = $('input[name=u_username]').val();
    var email = $('input[name=u_email]').val();
    var password = $('input[name=u_password]').val();
    var c_password = $('input[name=u_c_password]').val();
    var gender = $('select[name=u_gender]').val();


    if ($('input[name=u_acceptbtn').is(":checked")) {
        var acceptbtn = 1;

    } else {
        var acceptbtn = 0;
    }



    if (acceptbtn == 1) {
        $.ajax({
            method: 'POST',
            url: base_url + 'loginreg/registration',
            //data:"_token = <?php echo csrf_token(); ?>",
            data: {
                ufname: full_name,
                unameid: user_name,
                email: email,
                pass: password,
                cpass: c_password,
                gender: gender
            },
            success: function (data) {
                // alert("success : "+data['mass']);
                console.log(data);
                if (data['mass_staus'] == 1) {
                    toastr.success(data['mass']);
                } else {
                    toastr.warning(data['mass']);
                }
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(xhr.responseText);
            }
        });
    } else {
        toastr.warning("I accept the Terms and Conditions of the website");
        $("#acceptcbklabel").css('border', '1px dotted red');
        $("#acceptcbklabel").click(function () {
            $(this).css('border', '0')
        });
    }
}

function submitlogin() {
    var user_name = $('input[name=lname]').val();
    var pass = $('input[name=lpass]').val();
    if (user_name == "" || pass == "") {
        toastr.warning("Enter a Login Details");
    } else {
        $.ajax({
            method: 'POST',
            url: base_url + 'loginreg/login',
            //data:"_token = <?php echo csrf_token(); ?>",
            data: {
                user_name: user_name,
                pass: pass
            },
            success: function (data) {
                if (data['mass_staus'] == 1) {
                    window.location = 'home';
                } else {
                    toastr.warning(data['mass']);
                }
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(xhr.responseText);
            }
        });
    }
}

function seveprofile(userid) {
    var full_name = $('input[name=u_fullname]').val();
    var u_name = $('input[name=u_name]').val();
    var u_bio = $('textarea[name=u_bio]').val();
    var u_email = $('input[name=u_email]').val();
    var u_contact = $('input[name=u_contact]').val();
    var u_bod = $('input[name=datetimepicker]').val();
    var u_birthplace = $('input[name=u_birthplace]').val();
    var u_occupation = $('input[name=u_occupation]').val();
    var u_lives_in = $('input[name=u_live_in]').val();
    var u_website = $('input[name=u_website]').val();
    var u_statust = $('select[name=u_status]').val();
    var u_status = parseInt(u_statust);

    // alert(u_website);

    if ($('input[name=uisprivat]').prop("checked") == true) {
        var uisprivat = parseInt(1);
    } else {
        var uisprivat = parseInt(0);
    }



    $.ajax({
        method: 'POST',
        url: base_url + 'profile/profile_setting_save/' + userid,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {
            full_name: full_name,
            u_bio: u_bio,
            u_email: u_email,
            u_contact: u_contact,
            u_bod: u_bod,
            u_birthplace: u_birthplace,
            u_occupation: u_occupation,
            u_lives_in: u_lives_in,
            u_website: u_website,
            u_status: u_status,
            uisprivat: uisprivat
        },
        success: function (data) {
            if (data['type'] == 1) {
                toastr.success(data['msg']);
            } else {
                toastr.warning(data['msg']);
            }

        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });


}


function likepost(postid, el) {
    var thisel = el;
    $.ajax({
        method: 'POST',
        url: base_url + 'postlike/' + postid,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {
            postid: postid
        },
        success: function (data) {
            if (data['type'] == 1) {

                $('.likebtn' + postid).addClass('active');
                var test = $(thisel).parents('article').find('.post-additional-info>.post-add-icon span').text();
                var newtest = parseInt(test) + 1;
                $('.post_like_heart' + postid).find('span').text(parseInt(newtest));
            } else {

                $('.likebtn' + postid).removeClass('active');
                var test = $(thisel).parents('article').find('.post-additional-info>.post-add-icon span').text();
                var newtest = parseInt(test) - 1;
                $('.post_like_heart' + postid).find('span').text(parseInt(newtest));
            }

        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function addcomment(post_id) {
    var comment_box_id = "#comment_txtbox" + post_id;
    var comment_text = $(comment_box_id).val();

    if (comment_text == "") {

    } else {
        $.ajax({
            method: 'POST',
            url: base_url + 'addcomment/' + post_id,
            //data:"_token = <?php echo csrf_token(); ?>",
            data: {
                comment_text: comment_text
            },
            success: function (data) {
                //add text to comment
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(xhr.responseText);
            }
        });
        $(comment_box_id).val("");
    }


}

function comm_delete(comm_id, post_id) {
    $.ajax({
        method: 'POST',
        url: base_url + 'comm_delete/' + comm_id,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            refcomm(post_id);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function addcommentpop(post_id) {
    var comment_box_id = "#comment_txtboxpop" + post_id;
    var comment_text = $(comment_box_id).val();


    if (comment_text == "") {

    } else {
        $.ajax({
            method: 'POST',
            url: base_url + 'addcomment/' + post_id,
            //data:"_token = <?php echo csrf_token(); ?>",
            data: {
                comment_text: comment_text
            },
            success: function (data) {
                //add text to comment
                refcomm(post_id);
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                alert(xhr.responseText);
            }
        });
        $(comment_box_id).val("");
    }



}

function view_post(post_id) {
    console.log('hiiii');
    $("#mymodel").empty();
    $.ajax({
        method: 'POST',
        url: base_url +  'view_post/' + post_id,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            // alert(data);
            $("#mymodel").html(data);
            $('#open-photo-popup-v2').modal('show');

            setTimeout(function () {
                var divheight = $(".photo-item").height();

                $(".photo-item").css('line-height', divheight + "px");
            }, 150);


        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });


}

function refcomm(post_id) {
    $.ajax({
        method: 'POST',
        url: base_url +  'view_comm/' + post_id,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {

            $("#com_list").html(data);
            commcount(post_id);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function commcount(post_id) {
    var commid = ".post_comm" + post_id;
    $.ajax({
        method: 'POST',
        url: base_url + 'comm_count/' + post_id,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (total_comm) {

            $(commid + " span").text(total_comm);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function comm_like(comm_id) {


    // var thisel = el;
    $.ajax({
        method: 'POST',
        url: base_url + 'comm_like/' + comm_id,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            if (data['type'] == 1) {

                $('.comm_like' + comm_id).addClass('active');
                var commtxt = $('.comm_like' + comm_id + " span").text();
                var commtxt = parseInt(commtxt) + 1;
                $('.comm_like' + comm_id + " span").text(commtxt);
            } else {
                $('.comm_like' + comm_id).removeClass('active');
                var commtxt = $('.comm_like' + comm_id + " span").text();
                var commtxt = parseInt(commtxt) - 1;
                $('.comm_like' + comm_id + " span").text(commtxt);

            }

        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });



    // alert(comm_id);
}


//shubham
function hobbiesave() {
    var hobbiess = $('textarea[name=hobbiess]').val();
    var FavouriteTVShows = $('textarea[name=Favourite_TV_Shows]').val();
    var FavouriteMovies = $('textarea[name=Favourite_Movies]').val();
    var FavouriteGames = $('textarea[name=Favourite_Games]').val();
    var FavouriteMusicBands = $('textarea[name=Favourite_Music_Bands]').val();
    var FavouriteBooks = $('textarea[name=Favourite_Books]').val();
    var FavouriteWriters = $('textarea[name=Favourite_Writers]').val();
    var OtherInterests = $('textarea[name=Other_Interests]').val();
    $.ajax({
        method: 'POST',
        url: base_url + 'profile/profile_hobbies_save',
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {
            hobbiess: hobbiess,
            Favourite_TV_Shows: FavouriteTVShows,
            Favourite_Movies: FavouriteMovies,
            Favourite_Music_Bands: FavouriteMusicBands,
            Favourite_Games: FavouriteGames,
            Favourite_Books: FavouriteBooks,
            Favourite_Writers: FavouriteWriters,
            Other_Interests: OtherInterests
        },
        success: function (data) {
            if (data['type'] == 1) {
                toastr.success(data['msg']);
            } else {
                toastr.warning(data['msg']);
            }
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });


}

function educationsave() {
    var candu = $('input[name=c_and_u]').val();
    var candj = $('input[class=c_join]').val();
    var candd = $('textarea[name=add_o_c]').val();
    var sandu = $('input[name=s_and_s]').val();
    var sandj = $('input[class=s_join]').val();
    var sandd = $('textarea[name=add_o_ss]').val();





    $.ajax({
        method: 'POST',
        url: base_url + 'profile/profile_education_save',
        // data:"_token = <?php echo csrf_token(); ?>",
        // data:{candu:candu,},
        data: {
            candus: candu,
            candjs: candj,
            candds: candd,
            sandus: sandu,
            sandjs: sandj,
            sandds: sandd
        },
        success: function (data) {
            console.log(data);
            // if (data['type'] == 1) {
            //     toastr.success(data['msg']);
            // }   
            // else {
            //     toastr.warning(data['msg']);
            // }
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });

}

function changepassword() {

    var current_password = $('input[name=current_password]').val();
    var new_password = $('input[name=new_password]').val();
    var confirm_new_password = $('input[name=confirm_password]').val();
    $.ajax({
        method: 'POST',
        url: base_url + 'profile/changepassword_save',
        //data:"_token = <?php echo csrf_token(); ?>",  
        data: {
            current_password: current_password,
            new_password: new_password,
            confirm_new_password: confirm_new_password
        },
        success: function (data) {
            if (data['typ'] == 1) {
                toastr.success(data['msg']);
                $('input[name=current_password]').val("");
                $('input[name=new_password]').val("");
                $('input[name=confirm_password]').val("");

            } else {
                toastr.warning(data['msg']);
            }

        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });


}
function ref_firend_btn_box(serchid){
    $.ajax({
        method: 'POST',
        url: base_url + 'ref_firend_btn_box/' + serchid,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {

            $('#friend_btn_box').html(data);
           

        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function makefriend(serchid) {
    $.ajax({
        method: 'POST',
        url: base_url + 'makefriend/' + serchid,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            ref_firend_btn_box(serchid);
           

        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}
function acceptreq(serchid){

    $.ajax({
        method: 'POST',
        url: base_url + 'acceptreq/' + serchid,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            ref_firend_btn_box(serchid);
           

        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function makeunfriend(serchid){
    $.ajax({
        method: 'POST',
        url: base_url + 'makeunfriend/' + serchid,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            ref_firend_btn_box(serchid);

        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}

function checkemail() {
    var email = $('input[name=otp_email]').val();
    //    alert(email);

    $.ajax({

        method: 'POST',
        url: base_url + 'emailverification',
        data: {
            email: email
        },
        success: function (data) {
            if (data['typ'] == 1) {

                window.location.href = data['msg'];
            } else if (data['typ'] == 0) {
                toastr.warning(data['msg']);

            }
        }

    });
}



function sendotp(userid) {
    var email = $('#email_text').text();

    console.log(email);
    console.log(userid);

    $.ajax({

        method: 'POST',
        url: base_url + 'sendotp',
        data: {
            email: email,
            userid: userid
        },
        success: function (data) {
            console.log(data);
            if (data['typ'] == 1) {
                window.location.href = data['msg'];
            }
            //  window.location.href = data;

        }

    });
}
function checkotp(){
    var otpcode = $('input[name=otpcode]').val();
    
    var userid = $('input[name=hiddenid]').val();
    $.ajax({

        method: 'POST',
        url: base_url + 'checkotp',
        data: {
            otpcode: otpcode,
            userid: userid
        },
        success: function (data) {
            console.log(data);
            
            if (data['typ'] == 1) {
                $("#newpss").removeClass('d-none');
            } else if (data['typ'] == 0) {
                toastr.warning(data['msg']);
            }
        }
    });
}
function setpass(){
    var newpass = $('input[name=newpass]').val();
    var newcpass = $('input[name=newcpass]').val();
    var userid = $('input[name=hiddenid]').val();
    $.ajax({

        method: 'POST',
        url: base_url + 'setpass',
        data: {
            newpass: newpass,
            newcpass: newcpass,
            userid: userid
        },
        success: function (data) {
            console.log(data);
            
            if (data['typ'] == 1) {
                window.location.href = data['msg'];
            } else if (data['typ'] == 0) {
                toastr.warning(data['msg']);
            }
        }
    });

}
function noti_ref_requst(){
    $.ajax({
        method: 'POST',
        url: base_url + 'noti_ref_requst',
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            $("#requests_noti_recived").html(data);
            
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}
function noti_normal(){
    $.ajax({
        method: 'POST',
        url: base_url + 'noti_normal_requst',
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            $("#normal_noti").html(data);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}
function noti_normal_page(){
    $.ajax({
        method: 'POST',
        url: base_url + 'noti_normal_requst',
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            $("#normal_noti").html(data);
            $("#notipage_list").html(data);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}
function noti_ref_requst_page(){
    $.ajax({
        method: 'POST',
        url: base_url + 'noti_ref_requst',
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            $("#requests_noti_recived").html(data);
            $("#noti_requst").html(data);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}
function noti_ref_chat(){
    $.ajax({
        method: 'POST',
        url: base_url + 'noti_ref_chat',
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            // $("#requests_noti_recived").html(data);
            $("#chat_noti").html(data);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}
function openchat(cfid){
    $("#ourchat").empty();
    $.ajax({
        method: 'POST',
        url: base_url + 'openchat/' + cfid,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {},
        success: function (data) {
            $('#cuserchat').html(data['cuser'])
            $('#chatsendbtn').attr('onclick','sendmsg(' + data['cuser_id'] + ')');
            $('#cuserid').html(data['cuser_id']);
            $("#ourchat").html(data['chatlist']);
            $("#ourchatouter").scrollTop( $( "#ourchatouter" ).prop( "scrollHeight" ) );
            $("#ourchatouter").perfectScrollbar('update');
            
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });
}
function sendmsg(cfid){
    var chat_text = $('#chat_box').val();
    $.ajax({
        method: 'POST',
        url: base_url + 'sendchat/' + cfid,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {chat_text:chat_text},
        success: function (data) {
            // $('#cuserchat').html(data['cuser'])
            // $('#chatsendbtn').attr('onclick','sendmsg(' + data['cuser_id'] + ')');
            // $("#ourchat").html(data['chatlist']);
            $('#chat_box').val("");
           
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });

}
function chat_ref(cfid,lastchat){
    // $("#ourchat").empty();
    $.ajax({
        method: 'POST',
        url: base_url + 'loadchat/' + cfid,
        //data:"_token = <?php echo csrf_token(); ?>",
        data: {lastchat:lastchat},
        success: function (data) {
            $('#cuserchat').html(data['cuser'])
            $('#chatsendbtn').attr('onclick','sendmsg(' + data['cuser_id'] + ')');
            $('#cuserid').html(data['cuser_id']);
            $("#ourchat").append(data['chatlist']);
            $("#ourchatouter").scrollTop( $( "#ourchatouter" ).prop( "scrollHeight" ) );
            $("#ourchatouter").perfectScrollbar('update');
           //console.log(data);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(xhr.responseText);
        }
    });                                                 
}
