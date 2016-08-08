
  <div class="col-md-12">
  <label for="idbaja">Insert the name of the candidat	</br></label>
  <input type="text" class="form-control" placeholder="Candidat" ng-model=searchText autofocus/>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <button class="btn btn-info"  ng-click="comboVacant()" data-toggle="modal" data-target="#addNewCandidat" ><i class="fa fa-plus"></i>Insert a new Candidat</button>
      <button class="btn btn-info" ng-click="viewCandidat()"><i class="fa fa-refresh"></i></button>
    </div>
    <div class="col-md-6">
    </div>
  </div>
  <div class="table-responsive">
      <table  class="table table-striped table-bordered table-hover" >
        <thead >
          <th>Name</th>
          <th>Telephone</th>
          <th>Email</th>
          <th>Vacant to apply</th>
          <th>Estado</th>
        </thead>
        <tbody>
          <tr ng-repeat="candidat in candidatData | filter:searchText ">
            <td>{{candidat.1}}</td>
            <td>{{candidat.2}}</td>
            <td>{{candidat.3}}</td>
            <td>{{candidat.4}}</td>
            <td>{{candidat.5}}</td>
            <td>
              <button class="btn btn-warning btn-xs" ng-click="values($index);comboState()" data-toggle="modal" data-target="#updateCandidat"><i class="fa fa-pencil"></i></button>
            </td>
            <td>
              <button class="btn btn-success btn-xs" ng-click="promoveCandidat(candidat.0)"><i class="fa fa-check"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
</div>
  </div>


  <!-- Modal -->
<div class="modal fade" id="addNewCandidat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">New Candidat</h4>
        </div>
        <div class="modal-body">
          <form name="newCandidat">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" ng-model="candidat.name" required/>
            <label for="fechaini">Father Last Name:</label>
            <input type="text" class="form-control" ng-model="candidat.fatherlast" required/>
            <label for="fechafin">Mother Last Name:</label>
            <input type="text" class="form-control" ng-model="candidat.motherlast" required/>
            <label for="sal">Telephone:</label>
            <input type="text" class="form-control" ng-model="candidat.number" placeholder="4421746299" maxlength="10" required/>
            <label for="desc">Email:</label>
            <input type="email" class="form-control" ng-model="candidat.email" placeholder="example@example.com" required/>
            <label for="desc">Vacant:</label>
            <select name="repeatSelectVacant" id="repeatSelectVaca" class="form-control" ng-model="candidat.folioV" required>
              <option ng-repeat="option in vacantData" value="{{option.0}}">{{option.1}}</option>
            </select>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" ng-click="insertCandidat()" ng-disabled="newCandidat.$invalid">Go!</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="updateCandidat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Update a Candidat</h4>
        </div>
        <div class="modal-body">
          <form name="updateCandidat">
            <label for="name">First Name:</label>
            <input type="text" class="form-control" ng-model="candidatUp.name" required/>
            <label for="fechaini">Father Last Name:</label>
            <input type="text" class="form-control" ng-model="candidatUp.fatherlast" required/>
            <label for="fechafin">Mother Last Name:</label>
            <input type="text" class="form-control" ng-model="candidatUp.motherlast" required/>
            <label for="sal">Telephone:</label>
            <input type="text" class="form-control" ng-model="candidatUp.number" placeholder="4421746299" maxlength="10" required/>
            <label for="desc">Email:</label>
            <input type="email" class="form-control" ng-model="candidatUp.email" placeholder="example@example.com" required/>
            <label for="desc">State:</label>
            <select name="repeatSelectVacant" id="repeatSelectVaca" class="form-control" ng-model="candidatUp.state" required>
              <option ng-repeat="option in stateData" value="{{option.0}}">{{option.1}}</option>
            </select>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" ng-click="updateCandidated()" ng-disabled="updateCandidat.$invalid">Go!</button>
        </div>
      </div>
    </div>
  </div>
