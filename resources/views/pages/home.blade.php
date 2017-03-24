@extends('layouts.master')

@section('content')
<div class="inner" ng-controller="BandsController" ng-cloak>
    <div class="message">
        <p>@{{ message }}</p>
    </div>
    <table ng-if="bands.length > 0" id="bands_table" class="sortable-theme-bootstrap" data-sortable>
        <thead>
            <tr>
                <th>&num;</th>
                <th>Name</th>
                <th data-sortable-type="date">Start Date</th>
                <th>Website</th>
                <th>Status</th>
                <th data-sortable="false"><button ng-click="showForm('add')" class="btn btn-sm btn-primary add-item"><span class="glyphicon glyphicon-plus"></span> Add a Band</button></th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="band in bands">
                <td>@{{ $index + 1 }}</td>
                <td>@{{ band.name }}</td>
                <td  data-value="">@{{ band.start_date | date }}</td>
                <td><a target="_blank" href="@{{ band.website }}">@{{ band.website }}</a></td>
                <td>@{{ band.still_active ? "Active" : "Inactive" }}</td>
                <td>
                    <button class="btn btn-sm btn-info edit-item" role="button" ng-click="showForm('edit', band.id)">
                        <span class="glyphicon glyphicon-edit"></span>
                    </button>
                    <button class="btn btn-sm btn-danger delete-item delete" role="button" ng-click="deleteBand(band.id)">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="no-data" ng-show="! bands || bands.length === 0">No bands found. <a href="" ng-click="showForm('add')">Click here</a> to add one!</p>
    <script type="text/ng-template" id="bandModalTemplate.html">
        <div class="modal-header">
            <button type="button" ng-click="close()" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">@{{ formTitle }}</h4>
        </div>
        <div class="modal-body">
            <small><strong>*</strong> indicates required field.</small>
            <form name="bandForm" ng-submit="submitForm(submitAction)" novalidate>
                <div class="form-group">
                    <label for="name">Band Name: <strong>*</strong></label>
                    <input type="text" id="name" class="form-control" name="name" ng-model="band.name" required>
                    <p ng-show="bandForm.name.$invalid && !bandForm.name.$pristine" class="help-block">Name is required.</p>
                </div>
                <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="text" id="start_date" class="form-control" name="start_date" ng-model="band.start_date" placeholder="mm/dd/yyyy">
                </div>
                <div class="form-group">
                    <label for="website">Website URL</label>
                    <input type="text" id="website" class="form-control" name="website" ng-model="band.website">
                </div>
                <div class="form-group">
                    <label for="still_active">
                        Still Active <input type="checkbox" id="still_active" class="form-checkbox" name="still_active" ng-model="band.still_active">
                    </label>
                </div>
                <button type="submit" ng-disabled="bandForm.$invalid" class="btn btn-primary" ng-click="save()">@{{ submitButtonLabel }} Band</button>
            </form>
        </div>
    </script>
</div>
@endsection