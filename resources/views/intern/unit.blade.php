<x-intern-layout>
    @section('title','Dashboard')
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">Unit Telkom</div>
        <div class="right"></div>
    </div>
    <div class="section" id="usern">

        <div id="rekappresensi">
            <h2>Unit Telkom</h2>
            <br>
            <div class="row">
                <div class="col-3">
                    <a href="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1669794565.54812857!800x800!85.png"
                        style="text-decoration:none; color:inherit;">
                        <div class="card">
                            <div class="card-body text-center"
                                style="padding:16px 12px !important; line-height:0.8rem;">
                                <span class="badge bg-danger"
                                    style="position:absolute; top:3px; right:10px; font-size:0.6rem; z-index:999"></span>
                                <ion-icon name="map-outline" style="font-size:1.6rem;" class="text-primary mb-1">
                                </ion-icon>
                                <br>
                                <span style="font-size: 0.8rem; font-weight:500">AOM <br><br></span>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="col-3">
                    <div class="card">
                        <a href="{{ route('intern.show', 'finance_collection') }}"
                            style="text-decoration: none; color: inherit;">
                            <div class="card-body text-center"
                                style="padding:16px 12px !important; line-height:0.8rem;">
                                <span class="badge bg-danger"
                                    style="position:absolute; top:3px; right:10px; font-size:0.6rem; z-index:999"></span>
                                <ion-icon name="call-outline" style="font-size:1.6rem;" class="text-success mb-1">
                                </ion-icon>
                                <br>
                                <span style="font-size: 0.8rem; font-weight:500">Finance & <br> Collection</span>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-3">
                    <div class="card">
                        <a href="{{ route('intern.show', 'daman') }}"
                        style="text-decoration: none; color: inherit;">
                        <div class="card-body text-center" style="padding:16px 12px !important; line-height:0.8rem;">
                            <span class="badge bg-danger"
                                style="position:absolute; top:3px; right:10px; font-size:0.6rem; z-index:999"></span>
                            <ion-icon name="git-compare-outline" style="font-size:1.6rem;" class="text-warning mb-1">
                            </ion-icon>
                            <br>
                            <span style="font-size: 0.8rem; font-weight:500">Daman <br><br></span>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <div class="card-body text-center" style="padding:16px 12px !important; line-height:0.8rem;">
                            <span class="badge bg-danger"
                                style="position:absolute; top:3px; right:10px; font-size:0.6rem; z-index:999"></span>
                            <ion-icon name="file-tray-full-outline" style="font-size:1.6rem;" class="text-danger mb-1">
                            </ion-icon>
                            <br>
                            <span style="font-size: 0.8rem; font-weight:500">BGES <br> <br></span>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>


                <div class="col-3">
                    <div class="card">
                    <a href="{{ route('intern.show', 'daman') }}"
                    style="text-decoration: none; color: inherit;">
                        <div class="card-body text-center" style="padding:16px 12px !important; line-height:0.8rem;">
                            <span class="badge bg-danger"
                                style="position:absolute; top:3px; right:10px; font-size:0.6rem; z-index:999"></span>
                            <i class="fa-sharp-duotone fa-solid fa-basketball-hoop text-primary mb-1"
                                style="font-size:1.6rem;"></i>
                            </ion-icon>
                            <br>
                            <span style="font-size: 0.8rem; font-weight:500">Basket <br><br></span>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-3">
                        <div class="card">
                        <a href="{{ route('intern.show', 'tennis_lapangan') }}"
                        style="text-decoration: none; color: inherit;">
                            <div class="card-body text-center"
                                style="padding:16px 12px !important; line-height:0.8rem;">
                                <span class="badge bg-danger"
                                    style="position:absolute; top:3px; right:10px; font-size:0.6rem; z-index:999"></span>
                                <i class="fa-regular fa-tennis-ball text-success mb-1" style="font-size:1.6rem;"></i>
                                <br>
                                <span style="font-size: 0.8rem; font-weight:500">Tennis Lapangan<br></span>
                            </div>
                            </a>
                        </div>
                </div>


                <div class="col-3">
                    <div class="card">
                    <a href="{{ route('intern.show', 'panahan') }}"
                    style="text-decoration: none; color: inherit;">
                        <div class="card-body text-center" style="padding:16px 12px !important; line-height:0.8rem;">
                            <span class="badge bg-danger"
                                style="position:absolute; top:3px; right:10px; font-size:0.6rem; z-index:999"></span>
                            <i class="fa-regular fa-bow-arrow text-warning mb-1" style="font-size:1.6rem;"></i>
                            <br>
                            <span style="font-size: 0.8rem; font-weight:500">Panahan <br><br></span>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                    <a href="{{ route('intern.show', 'mushola') }}"
                    style="text-decoration: none; color: inherit;">
                        <div class="card-body text-center" style="padding:16px 12px !important; line-height:0.8rem;">
                            <span class="badge bg-danger"
                                style="position:absolute; top:3px; right:10px; font-size:0.6rem; z-index:999"></span>
                            <i class="fa-regular fa-mosque text-danger mb-1" style="font-size:1.6rem;"></i>
                            <br>
                            <span style="font-size: 0.8rem; font-weight:500">Mushola <br> <br></span>
                        </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>


</x-intern-layout>