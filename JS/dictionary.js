$("#dictionary").change(function() {
    var type = $(this).val();
    $(".input_box:not(.hidden)").addClass("hidden");
    $(" #word" + type).removeClass("hidden");
});
$.getJSON("./json/EV.json", function(tags1) {
    $(" #wordEV").autocomplete({
        delay: 100,
        source: function(request, response) {
            var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(request.term), "i");
            response($.grep(tags1, function(item) {
                return matcher.exec(item);
            }));
        }
    });
});
$.getJSON("./json/VE.json", function(tags2) {
    $(" #wordVE").autocomplete({
        delay: 100,
        source: function(request, response) {
            var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(request.term), "i");
            response($.grep(tags2, function(item) {
                return matcher.exec(item);
            }));
        }
    });
});
$.getJSON("./json/VV.json", function(tags3) {
    $(" #wordVV").autocomplete({
        delay: 100,
        source: function(request, response) {
            var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(request.term), "i");
            response($.grep(tags3, function(item) {
                return matcher.exec(item);
            }));
        }
    });
});
$('.input_box').keypress(function(e) {
    var p = e.which;
    if (p == 13) {
        load_ajax();
    };
});
$('#search').click(function() {
    load_ajax();
});
$("#dictionary").change();
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}