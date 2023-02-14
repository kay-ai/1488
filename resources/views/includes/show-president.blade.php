@push('css')
    <style>
        label{
            font-weight: 600;
            font-size: 14px;
        }

        #show-president .modal-title{
            font-size: 19px;
            font-weight: 600;
            color: #0563bb;
            font-family: "Poppins", sans-serif;
            width: 100%;
        }
    </style>
@endpush
<div class="modal fade" id="show-president" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title p-0">View <span class="view_party_name"></span> Presidential Candidates</h5>
                <div class="d-flex justify-content-end" id="status_view" style="width: 75%;"></div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body" style="background: #f6f9ff;">

                <div id="main-content">
                    <div class="row bg-white justify-content-center shadow-sm p-2 mb-3 mx-1" style="border-radius: 10px">
                        <div class="col-md-12 mb-4 border-bottom">
                            <h5 class="mini-title">Presidential Candidate</h5>
                        </div>
                        <div class="loading-icon">
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                        </div>
                        <div class="row view_content text-center justify-content-center">
                           <div class="form-group col-md-4 mb-4">
                                <label class="control-label" for="view_presd_name">Name:</label>
                                <div><span class="cr-text" id="view_presd_name"></span></div>
                            </div>
                            <div class="form-group col-md-4 mb-4">
                                <label class="control-label" for="view_presd_nation">Nationality:</label>
                                <div><span class="cr-text" id="view_presd_nation"></span></div>
                            </div>
                            <div class="form-group col-md-4 mb-4">
                                <label class="control-label" for="view_party_name">Political Party:</label>
                                <div><span class="cr-text view_party_name"></span></div>
                            </div>
                            {{-- <div class="form-group col-md-4 mb-4">
                                <label class="control-label" for="view_presd_age">Age:</label>
                                <div><span class="cr-text" id="view_presd_age"></span></div>
                            </div> --}}
                            <div class="col-md-12 m-3 criteria_check border-top"></div>
                            <div class="form-group text-center col-md-3 mb-4">
                                <label class="control-label" for="view_presd_education_check">Education Check:</label>
                                <div><span class="cr-text" id="view_presd_education_check"></span></div>
                            </div>
                            <div class="form-group text-center col-md-3 mb-4">
                                <label class="control-label" for="view_presd_health_check">Health Check:</label>
                                <div><span class="cr-text" id="view_presd_health_check"></span></div>
                            </div>
                            <div class="form-group text-center col-md-3 mb-4">
                                <label class="control-label" for="view_presd_age_check">Age Check:</label>
                                <div><span class="cr-text" id="view_presd_age_check"></span></div>
                            </div>
                            <div class="form-group text-center col-md-3 mb-4">
                                <label class="control-label" for="view_presd_credibility_check">Credibility Check:</label>
                                <div><span class="cr-text" id="view_presd_credibility_check"></span></div>
                            </div>
                        </div>
                    </div>

                    <div class="row bg-white justify-content-center shadow-sm p-2 mb-3 mx-1" style="border-radius: 10px">
                        <div class="col-md-12 mb-4 border-bottom">
                            <h5 class="mini-title">Vice Presidential Candidate</h5>
                        </div>
                        <div class="loading-icon">
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                        </div>
                        <div class="row justify-content-center view_content text-center">
                            <div class="form-group col-md-4 mb-4">
                                <label class="control-label" for="view_vice_name">Name:</label>
                                <div><span class="cr-text" id="view_vice_name"></span></div>
                            </div>
                            <div class="form-group col-md-4 mb-4">
                                <label class="control-label" for="view_vice_nation">Nationality:</label>
                                <div><span class="cr-text" id="view_vice_nation"></span></div>
                            </div>
                            <div class="form-group col-md-4 mb-4">
                                <label class="control-label" for="view_party_name">Political Party:</label>
                                <div><span class="cr-text view_party_name"></span></div>
                            </div>
                            {{-- <div class="form-group col-md-4 mb-4">
                                <label class="control-label" for="view_vice_age">Age:</label>
                                <div><span class="cr-text" id="view_vice_age"></span></div>
                            </div> --}}
                            <div class="col-md-12 m-3 criteria_check border-top"></div>

                            <div class="form-group text-center col-md-3 mb-4">
                                <label class="control-label" for="view_vice_education_check">Education Check:</label>
                                <div><span class="cr-text" id="view_vice_education_check"></span></div>
                            </div>
                            <div class="form-group text-center col-md-3 mb-4">
                                <label class="control-label" for="view_vice_health_check">Health Check:</label>
                                <div><span class="cr-text" id="view_vice_health_check"></span></div>
                            </div>
                            <div class="form-group text-center col-md-3 mb-4">
                                <label class="control-label" for="view_vice_age_check">Age Check:</label>
                                <div><span class="cr-text" id="view_vice_age_check"></span></div>
                            </div>
                            <div class="form-group text-center col-md-3 mb-4">
                                <label class="control-label" for="view_vice_credibility_check">Credibility Check:</label>
                                <div><span class="cr-text" id="view_vice_credibility_check"></span></div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-cotent-between">
                <button type="button" class="btn btn-secondary mr-auto" data-bs-dismiss="modal">Close</button>
                @if(str_contains(url()->current(),  '/pending-requests'))
                    <a id="reject-btn" class="btn btn-danger"  role="button">Reject</a>
                    <a id="approve-btn" class="btn btn-primary"  role="button">Approve</a>
                @endif
            </div>
        </div>
    </div>
  </div><!-- End Extra Large Modal-->
