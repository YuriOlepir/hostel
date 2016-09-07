               $(document).ready(function() {
                    if ($.cookie('desktopVersion') == '1') {
                         $("meta[name='viewport']").attr('content', 'width=1025');
                         $("#switch-to-mobile").show();
                         $("#switch-to-desktop").hide();
                    }
               });
               function switchToDesktop() {
                    $.cookie("desktopVersion", '1', {
                         path    : '/', 
                         domain  : 'hentaikey.com'
                    });
                    $("#switch-to-mobile").show();
                    $("#switch-to-desktop").hide();
                    $("meta[name='viewport']").attr('content', 'width=1025'); 
               }
               function switchToMobile() {
                    $.removeCookie("desktopVersion", {
                         path    : '/', 
                         domain  : 'hentaikey.com'
                    });
                    $("#switch-to-mobile").hide();
                    $("#switch-to-desktop").show();
                    $("meta[name='viewport']").attr('content', 'width=device-width, initial-scale=1'); 
               }