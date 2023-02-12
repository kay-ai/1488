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
});
