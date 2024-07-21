@extends('layouts/landingLayout')

@section('title', 'Blank layout - Layouts')

@section('content')
    <main>
        <div class="trending-area fix pt-25 gray-bg pb-3">
            <div class="container">
                <div class="trending-main">
                    <div class="recent-articles">
                        <div class="recent-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-tittle mb-30">
                                        <h3>A-League Crowds</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 bg-dark rounded p-3 text-light">
                                    <div class="row">
                                        <div class="col-2">
                                            <h5> Season</h5>
                                            <select class="form-control" id="season" name="season">
                                                <option value="" disabled selected>Select Season...</option>
                                                <option value="2023-24">2023-24</option>
                                                <option value="2022-23">2022-23</option>
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <h5>Matches</h5>
                                            <p id="no_matches">0</p>
                                        </div>
                                        <div class="col-2">
                                            <h5>Total Crowds</h5>
                                            <p id="total_crowds">0</p>
                                        </div>
                                        <div class="col-2">
                                            <h5>Average Crowds</h5>
                                            <p id="average_crowds">0</p>
                                        </div>
                                        <div class="col-2">
                                            <h5>Highest Crowd</h5>
                                            <p id="highest_crowd">0</p>
                                        </div>
                                        <div class="col-2">
                                            <h5>Lowest Crowd</h5>
                                            <p id="lowest_crowd">0</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Club</th>
                                            <th scope="col">Matches</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Average</th>
                                        </tr>
                                    </thead>
                                    <tbody id="clubs_table_body">
                                        <!-- Club rows will be inserted here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
