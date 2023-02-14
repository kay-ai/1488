$(document).ready(function(){
    function getSuggestion(id, office, column){
        $(id).select2({
        maximumSelectionLength: 1,
        ajax: {
        url: "/get-suggestions",
        type: "POST",
        dataType: 'json',
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        delay: 350,
        data: function (params) {
            return {
                query: params.term,
                office: office,
                column: column,
            };
        },
        processResults: function (data) {

            return {
                results: $.map(data, function (item) {
                    return {
                        text: item[column],
                        id: item['MIN(id)']
                    }
                })
            };
        },
        cache: true
        }
    });
    }

    function populateFields(id){
        $('#'+id).on('change', function() {
            var selectedData = $('#'+id).select2('data')[0]['text'];
            var new_id = '#real_'+id;

            console.log(selectedData);
            console.log(new_id);

            $(new_id).val(selectedData);
        });
    }

    getSuggestion('#senate_name', 'senate', 'name');
    populateFields('senate_name');

    getSuggestion('#senate_state', 'senate', 'state');
    populateFields('senate_state');

    getSuggestion('#senate_party', 'senate', 'party');
    populateFields('senate_party');

    getSuggestion('#senate_constituency', 'senate', 'constituency');
    populateFields('senate_constituency');

    getSuggestion('#reps_name', 'reps', 'name');
    populateFields('reps_name');

    getSuggestion('#reps_state', 'reps', 'state');
    populateFields('reps_state');

    getSuggestion('#reps_party', 'reps', 'party');
    populateFields('reps_party');

    getSuggestion('#reps_constituency', 'reps', 'constituency');
    populateFields('reps_constituency');

    // Select the alert element
    const $alert = $('.alert');

    // Show the alert
    $alert.addClass('show');

    // Set the timer for 5 seconds
    let timer = setTimeout(function() {
        $alert.removeClass('show');
        $alert.fadeOut(2000);
    }, 5000);


    // Pause the timer when the mouse is over the alert
    $alert.hover(function() {
        clearTimeout(timer);
    }, function() {
    timer = setTimeout(function() {
            $alert.removeClass('show');
            $alert.fadeOut(2000);
        }, 5000);
    });
});

function showPresident(party, accnym){
    $('#show-president').modal('show');

    $(".view_party_name").html('('+accnym+')');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/get-president/",
        type: "POST",
        data: { party: party },
        beforeSend: function(){
            $(".loading-icon").removeClass('d-none');
            $(".view_content").addClass('d-none');
        },
        success: function(result) {
            if(result.length > 0){
                $.map(result, function (cand) {
                    console.log(cand.age_check);
                    if(cand.office == 'PRESIDENT'){
                        $("#view_presd_name").html(cand.name);
                        $("#view_presd_nation").html(cand.constituency);
                        $("#view_presd_education_check").html('<span class="badge bg-success">'+cand.educational_check+'</span>');
                        $("#view_presd_health_check").html('<span class="badge bg-success">'+cand.health_check+'</span>');
                        $("#view_presd_age_check").html('<span class="badge bg-success">'+cand.age_check+'</span>');
                        $("#view_presd_credibility_check").html('<span class="badge bg-success">'+cand.credibility_check+'</span>');
                    }else if(cand.office == 'VICE PRESIDENT'){
                        $("#view_vice_name").html(cand.name);
                        $("#view_vice_nation").html(cand.constituency);
                        $("#view_vice_education_check").html('<span class="badge bg-success">'+cand.educational_check+'</span>');
                        $("#view_vice_health_check").html('<span class="badge bg-success">'+cand.health_check+'</span>');
                        $("#view_vice_age_check").html('<span class="badge bg-success">'+cand.age_check+'</span>');
                        $("#view_vice_credibility_check").html('<span class="badge bg-success">'+cand.credibility_check+'</span>');
                    }
                });
            }else{
                $(".view_content").html('<p>There are no results for this party</p>');
            }
        },
        complete: function() {
            $(".loading-icon").addClass('d-none');
            $(".view_content").removeClass('d-none');
        }
    });
};
