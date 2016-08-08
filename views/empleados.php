<div class="col-md-12">
<label for="idbaja">Insert the name of the Employe	</br></label>
<input type="text" class="form-control" placeholder="Employe" ng-model=searchText autofocus/>
<hr>
<div class="row">
  <div class="col-md-6">

    <button class="btn btn-info" ng-click="viewEmploye()"><i class="fa fa-refresh"></i></button>
  </div>
  <div class="col-md-6">
  </div>
</div>
<div class="table-responsive">
    <table  class="table table-striped table-bordered table-hover" >
      <thead >
        <th>Nombre</th>
        <th>Fecha Inicio</th>
        <th>Fecha Termino</th>
        <th>Salario</th>
        <th>Descripcion</th>
      </thead>
      <tbody>
        <tr ng-repeat="employe in employeData | filter:searchText ">
          <td>{{employe.1}}</td>
          <td>{{employe.2}}</td>
          <td>{{employe.3}}</td>
          <td>{{employe.4}}</td>
          <td>{{employe.5}}</td>
          <td>
            <button class="btn btn-warning btn-xs" ng-click="values($index)" data-toggle="modal" data-target="#updateEmploye"><i class="fa fa-pencil"></i></button>
          </td>
          <td>
            <button class="btn btn-danger btn-xs" ng-click="deleteEmploye(employe.0)"><i class="fa fa-times"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
</div>
</div>

  <!-- Modal -->
<div class="modal fade" id="updateEmploye" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Update a Candidat</h4>
        </div>
        <div class="modal-body">
          <form name="updateCandidat">
            <label for="name">Name:</label>
            <input type="text" class="form-control" ng-model="employeUp.name"  ng-value=employeUp.name />
            <label for="fechaini">Begin Date:</label>
            <input type="text" class="form-control" ng-model="employeUp.startdate" ng-value=employeUp.name />
            <label for="fechafin">End Date:</label>
            <input type="text" class="form-control" ng-model="employeUp.enddate"  ng-value=employeUp.name />
            <label for="sal">Salary:</label>
            <input type="text" class="form-control" ng-model="employeUp.salary" placeholder="$$$$" maxlength="6"  ng-value=employeUp.salary />
            <label for="desc">Description:</label>
            <textarea class="form-control" ng-model=employeUp.des ng-value=employeUp.des />
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" ng-click="updateCandidat()" ng-disabled="updateCandidat.$invalid">Go!</button>
        </div>
      </div>
    </div>
  </div>
