
<h1>Archivo de registro</h1>

<div ng-app="archivoApp">	

<div ng-controller="tablaCtrl">
	
<div class="form-group">
	<input type="text" class="form-control" name="nrecibo" placeholder="Buscar..." ng-model="clave">
</div>

<table class="table table-bordered" >

	<thead>
		<tr>
			<th>N°</th>
		    <th>Nombre finado</th>
		    <th>Fecha fallecimiento</th>
		    <th>Panteon</th>
		    <th>Domicilio</th>
		    <th>Detalles</th>
		</tr>
	</thead>

	<tbody>
		<tr ng-repeat="difunto in difuntos | filter: clave | pagination: curPage * pageSize | limitTo: pageSize">
			<td ng-hide="clave.length">{{ ($index + 1) + (pageSize * curPage) }}</td>
			<td ng-show="clave.length">{{ $index + 1 }}</td>
			<td>{{difunto.nombre_finado}}</td>
			<td>{{difunto.fecha_fallecimiento}}</td>
			<td>{{difunto.panteon}}</td>
			<td>{{difunto.domicilio}}</td>
			<td><a ng-href="http://localhost/panteones/archivo/ver/{{difunto.id}}">Detalle</a></td>
		</tr>
	</tbody>

</table>

<nav ng-hide="clave.length">
  <ul class="pager">
    <li class="previous">
    	<a href="">
    		<span aria-hidden="true" ng-disabled="curPage == 0" ng-click="curPage=curPage-1" ng-class="{bloquear: curPage == 0}">&larr;</span> 
    	Atras</a>
    </li>

    <li>
    	<span>pagina {{curPage + 1}} de {{ numberOfPages() }}</span>
    </li>
    
    <li class="next">
    	<a href="">Adelante <span aria-hidden="true" ng-disabled="curPage >= difuntos.length/pageSize - 1" ng-click="curPage = curPage+1" ng-class="{bloquear: (numberOfPages() - 1) == curPage}">
    	&rarr;</span>
    	</a>
    </li>

  </ul>
</nav>
</div>

</div>
<script src="<?= base_url('assets/js/angular.min.js'); ?> "></script>
<script src="<?= base_url('assets/js/archivo.js'); ?> "></script>