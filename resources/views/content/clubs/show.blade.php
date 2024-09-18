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
                                        <h3 style="text-align: left">A-League Crowds</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 bg-dark rounded p-3 text-light">
                                    <div class="d-flex justify-content-between tab">
                                        <div class="">
                                            <p> SEASON</p>
                                            <select class="form-control" id="season" name="season">
                                                <option value="2023-24" selected>2023-24</option>
                                                <option value="2022-23">2022-23</option>
                                            </select>
                                        </div>
                                        <div class="">
                                            <p>MATCHES</p>
                                            <p id="no_matches">0</p>
                                        </div>
                                        <div class="">
                                            <p>TOTAL</p>
                                            <p id="total_crowds">0</p>
                                        </div>
                                        <div class="">
                                            <p>AVG</p>
                                            <p id="average_crowds">0</p>
                                        </div>
                                        <div class="">
                                            <p>HIGH</p>
                                            <p id="highest_crowd">0</p>
                                        </div>
                                        <div class="">
                                            <p>LOW</p>
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
