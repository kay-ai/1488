$(document).ready(function(){
    function getSuggestion(id, url){
        $(id).select2({
        maximumSelectionLength: 1,
        ajax: {
        url: url,
        type: "POST",
        dataType: 'json',
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        delay: 250,
        data: function (params) {
            return {
            query: params.term,
            };
        },
        processResults: function (data) {
            return {
            results: $.map(data, function (item) {
                return {
                text: item.username,
                id: item.username
                }
            })
            };
        },
        cache: true
        }
    });
    }

    function populateFields(id){
        $(id).on('change', function() {
            var selectedData = $(id).select2('data')[0]['id'];

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/get-user/",
                type: "POST",
                data: { username: selectedData },
                success: function(result) {
                    console.log(result);
                    $("#staff_email").val(result.email);
                    $("#staff_staff_id").val(result.staff_id);
                },
            });
        });
    }

    getSuggestion('#senate_name', '/get-suggestions');
    populateFields('#senate_name');

    getSuggestion('#senate_state', '/get-suggestions');
    populateFields('#senate_state');

    getSuggestion('#senate_party', '/get-suggestions');
    populateFields('#senate_party');

    getSuggestion('#senate_constituency', '/get-suggestions');
    populateFields('#senate_constituency');

    getSuggestion('#hor_name', '/get-suggestions');
    populateFields('#hor_name');

    getSuggestion('#hor_state', '/get-suggestions');
    populateFields('#hor_state');

    getSuggestion('#hor_party', '/get-suggestions');
    populateFields('#hor_party');

    getSuggestion('#hor_constituency', '/get-suggestions');
    populateFields('#hor_constituency');
});
