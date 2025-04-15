@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center text-warning">Edit Player Statistics</h2>
    <form id="playerForm">
        <div class="mb-3">
            <label class="form-label">Player Name</label>
            <input type="text" class="form-control" id="playerName" value="Neymar Jr">
        </div>
        <div class="mb-3">
            <label class="form-label">Position</label>
            <input type="text" class="form-control" id="playerPosition" value="Forward (#10)">
        </div>
        <div class="mb-3">
            <label class="form-label">Team</label>
            <input type="text" class="form-control" id="playerTeam" value="Soccer United">
        </div>
        <h4 class="text-warning">Season Statistics</h4>
        <div class="row">
            <div class="col-md-3"><label>Matches</label><input type="number" class="form-control" id="matches" value="25"></div>
            <div class="col-md-3"><label>Goals</label><input type="number" class="form-control" id="goals" value="15"></div>
            <div class="col-md-3"><label>Assists</label><input type="number" class="form-control" id="assists" value="8"></div>
            <div class="col-md-3"><label>Yellow Cards</label><input type="number" class="form-control" id="yellowCards" value="5"></div>
        </div>
        <h4 class="text-warning mt-4">Match Performances</h4>
        <table class="table table-dark" id="matchTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Opponent</th>
                    <th>Goals</th>
                    <th>Assists</th>
                    <th>Minutes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="date" class="form-control" value="2024-12-12"></td>
                    <td><input type="text" class="form-control" value="Team A"></td>
                    <td><input type="number" class="form-control" value="2"></td>
                    <td><input type="number" class="form-control" value="1"></td>
                    <td><input type="number" class="form-control" value="90"></td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-warning mt-3" onclick="addMatch()">Add Match</button>
        <button type="button" class="btn btn-save mt-3" onclick="saveData()">Save Changes</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
    function addMatch() {
        let table = document.getElementById("matchTable").getElementsByTagName('tbody')[0];
        let row = table.insertRow();
        row.innerHTML = `<td><input type="date" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>
                        <td><input type="number" class="form-control"></td>`;
    }
    function saveData() {
        alert("Data saved successfully!");
    }
</script>
@endsection
