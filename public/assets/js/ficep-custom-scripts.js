(function($) {
    // machine image loading function
    // search machine_image_id_
    if ($("[id ^= 'machine_image_id_']").length) {
        var tmp = $("[id ^= 'machine_image_id_']");
        tmp.each(function(index) {
            // GET THE IMAGE.
            let img = new Image();
            // This image source has to be changed into the appropriate one; the current img is HF-4C one 
            img.src = '../../../public/assets/images/ficep_presse/model-' + tmp[index].className.split(' ')[0] + '.jpg';

            // WAIT TILL IMAGE IS LOADED.
            img.onload = function() {
                fill_canvas(img); // FILL THE CANVAS WITH THE IMAGE.
            }

            function fill_canvas(img) {
                // CREATE CANVAS CONTEXT.
                var canvas = document.getElementById(tmp[index].id);
                var ctx = canvas.getContext('2d');

                canvas.width = img.width;
                canvas.height = img.height;

                ctx.drawImage(img, 0, 0); // DRAW THE IMAGE TO THE CANVAS.
            }
        });
    }

    //selection button sizing
    $("#customerSelection").ready(function() {
        var element = $("#customerSelection");
        var newHeight = $("#listViewButton").height(); //define the new height here
        element.height(newHeight);
    });

    // selection of plant, customer, technology, model in list view
    $("select")
        .change(function() {
            var value;
            // if (!($(this).val() == 'customer' || $(this).val() == 'plant' || $(this).val() == 'model' || $(this).val() == 'technology')) {
            //     //FILTRAGGIO TABELLA
            //     value = $(this).val();
            //     idSelected = $(this).attr("id");
            //     $("#tableBodyId tr").each(function() {
            //         // customer
            //         if (!($(this).children().eq(1).text().trim() == value) && (idSelected == 'customer')) {
            //             $(this).toggle();
            //         }
            //         //plant
            //         if (!($(this).children().eq(2).text().trim() == value) && (idSelected == 'plant')) {
            //             $(this).toggle();
            //         }
            //         //model
            //         if (!($(this).children().eq(4).text().trim() == value) && (idSelected == 'model')) {
            //             $(this).toggle();
            //         }
            //         //technology
            //         if (!($(this).children().eq(3).text().trim() == value) && (idSelected == 'technology')) {
            //             $(this).toggle();
            //         }
            //     });
            // }
            $("#tableBodyId tr").each(function() {
                $(this).show();
            });
            var values = [];
            $("select").each(function(i){
                values[i] = ($(this).val());
            });
            console.log(values)
            if (values[0] != 'customer') {
                $("#tableBodyId tr").each(function() {
                    // customer
                    if ($(this).children().eq(1).text().trim() != values[0]) {
                        $(this).hide();
                    }
                });
            }

            if (values[1] != 'plant') {
                $("#tableBodyId tr").each(function() {
                    // plant
                    if ($(this).children().eq(2).text().trim() != values[1]) {
                        $(this).hide();
                    }
                });
            }

            if (values[2] != 'model') {
                $("#tableBodyId tr").each(function() {
                    // model
                    if ($(this).children().eq(4).text().trim() != values[2]) {
                        $(this).hide();
                    }
                });
            }

            if (values[3] != 'technology') {
                $("#tableBodyId tr").each(function() {
                    // technology
                    if ($(this).children().eq(3).text().trim() != values[3]) {
                        $(this).hide();
                    }
                });
            }
        });

    $("#clearSelectionId").click(function() {
        $("#tableBodyId tr").each(function() {
            $("select").eq(0).val('customer');
            $("select").eq(1).val('plant');
            $("select").eq(2).val('model');
            $("select").eq(3).val('technology');
            $(this).show();
        })
    });

    //sets analogic table ok/warning/danger status
    $("#analogicTableId > tbody  > tr").each(function() {
        let actualVal = parseInt($(this).children().eq(1).text());
        let minVal = parseInt($(this).children().eq(2).text());
        let maxVal = parseInt($(this).children().eq(3).text());
        let tolerance = 10; //percentage of tolerance
        if (actualVal > minVal && actualVal < maxVal) {
            $(this).children('td[name="badge"]').children().text("Ok");
            $(this).children('td[name="badge"]').children().addClass("badge-success");
        } else if ((minVal - actualVal) <= (minVal / 100) * tolerance && (actualVal - maxVal) <= (maxVal / 100) * tolerance) {
            $(this).children('td[name="badge"]').children().text("Warning");
            $(this).children('td[name="badge"]').children().addClass("badge-warning");
        } else if ((minVal - actualVal) >= (minVal / 100) * tolerance || (actualVal - maxVal) >= (maxVal / 100) * tolerance) {
            $(this).children('td[name="badge"]').children().text("Danger");
            $(this).children('td[name="badge"]').children().addClass("badge-danger");
        }
    });

    //oee circle progress bar
    $("#containerOee").ready(function() {
        let percentage = 87;
        var bar = new ProgressBar.Circle(containerOee, {
            strokeWidth: 6,
            easing: 'easeInOut',
            duration: 0,
            color: '#0C68B1',
            trailColor: '#eee',
            trailWidth: 1,
            svgStyle: {
                display: 'block',
                width: '70%',
                transform: {
                    prefix: true,
                    value: 'translate(20%, 0%)'
                }
            },
            text: {
                value: percentage + "%",
                style: {
                    color: '#000',
                    position: 'absolute',
                    left: '35%',
                    top: '50%',
                    // You can specify styles which will be browser prefixed
                    transform: {
                        prefix: true,
                        value: 'translate(10%, -50%)'
                    }
                }
            }

        });
        bar.animate(percentage / 100);
    });

    //kpi process log selection

    $('#kpiProcessLogFormId').on('submit', function(e) {
        e.preventDefault();
        // get all the inputs into an array.
        var $inputs = $('#kpiProcessLogFormId :checked');
        var values = {};
        if ($inputs.length > 0) {
            $inputs.each(function(i) {
                values[i] = $(this).val();
            });
            //create widget for graph
            $('#widgetContainer').append(createWidget(values));
            $("#checkboxes").hide();
        }
    });

    //kpi analytics limit one checkboxes
    $("input[name='analyticsKpi1']").change(function() {
        var maxAllowed = 1;
        var cnt = $('#kpiAnalyticsFormId1 :checked').length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
        }
    });
    $("input[name='analyticsKpi2']").change(function() {
        var maxAllowed = 1;
        var cnt = $('#kpiAnalyticsFormId2 :checked').length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
        }
    });
    //kpi analytics get checked boxes
    $('#kpiAnalyticsFormId1').on('submit', function(e) {
        e.preventDefault();
        var $input = $('#kpiAnalyticsFormId1 :checked');
        $("#widgetTitle1").text($input.val());
        $("#widget1").hide();
    });
    $('#kpiAnalyticsFormId2').on('submit', function(e) {
        e.preventDefault();
        var $input = $('#kpiAnalyticsFormId2 :checked');
        $("#widgetTitle2").text($input.val());
        $("#widget2").hide();
    });

    //kpi analytics selection to show
    $("#widget1button").click(function() {
        if ($("#widget1").css("display") == "none") {
            $("#widget1").show();
        } else {
            $("#widget1").hide();
        }
    });

    $("#widget2button").click(function() {
        if ($("#widget2").css("display") == "none") {
            $("#widget2").show();
        } else {
            $("#widget2").hide();
        }
    });

})(jQuery);


/*to implement in all pages
    - search bar ID = "searchId" and onkeyup="searchFunction()"
    - <tbody> id = "tableBodyId"
    - <tr> id = element to search (e.g. Name/alarm ecc..)
*/
function searchFunction() {
    // Declare variables 
    var input, tbody, tr, tmp, i;
    input = document.getElementById("searchId").value.toUpperCase();
    tbody = document.getElementById("tableBodyId");
    tr = tbody.getElementsByTagName("tr");
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        tmp = tr[i].id;
        if (tmp.indexOf(input) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}

var expanded = false;

function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if (!expanded) {
        checkboxes.style.display = "block";
        expanded = true;
    } else {
        checkboxes.style.display = "none";
        expanded = false;
    }
}

function deleteWidget() {
    var elem = document.getElementsByName("widget");
}

function createWidget(param) {
    var kpiWidgetDiv = "<div class='row grid-margin'>" +
        "<div class='col'>" +
        "<div class='card'>" +
        "<div class='card-header d-flex justify-content-between'>" +
        "<h4 class='mb-1 text-muted'>MACHINE STATES</h4>" +
        "<button class='btn icon icon-item text-black' onclick='this.parentNode.parentNode.parentNode.parentNode.remove();'>" +
        "<span class='icon-item mdi mdi-close'></span>" +
        "</button>" +
        "</div>" +
        "<div class='card-body'>" +
        "<div class='d-flex d-md-block d-xl-flex flex-row px-4 px-md-3 px-xl-4 rounded pt-2'>" +
        "<div class='align-self-center flex-grow text-right text-md-center text-xl-center py-md-2 py-xl-0'>" +
        "<p class='text-muted mb-0'>" +
        "</label>" + printParams(param) + "</p>" +
        "</div></div></div></div></div></div> ";
    return kpiWidgetDiv;
}

function printParams(vals) {
    let tmp = "";
    for (const [key, value] of Object.entries(vals)) {
        tmp += "parametro " + `${key}` + "  " + `${value}` + "<br>";
    }
    return tmp;
}