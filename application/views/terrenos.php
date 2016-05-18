<h1>Espacios reservados <span><a href="<?= base_url('terreno/nuevo/'); ?>" class="turquoise-flat-button" style="top: 10px;"><span class="glyphicon glyphicon-plus-sign" style="top: -15px;"></span>  Nuevo</a></span></h1>
	
<div ng-app="archivoApp">	

<div ng-controller="tablaCtrl">
	
<div class="form-group">
	<input type="text" class="form-control" name="nrecibo" placeholder="Buscar..." ng-model="clave">
</div>

<table class="table table-bordered" >

	<thead>
		<tr>
			<th>N°</th>
		    <th>Nombre apartante</th>
		    <th>Lote</th>
		    <th>Manzana</th>
		    <th>Seccion</th>
		    <th>Fila</th>
		    <th>Panteon</th>
		    <th>Detalle</th>
		</tr>
	</thead>

	<tbody>
		<tr ng-repeat="terreno in terrenos | filter: clave | pagination: curPage * pageSize | limitTo: pageSize">
			<td ng-hide="clave.length">{{ ($index + 1) + (pageSize * curPage) }}</td>
			<td ng-show="clave.length">{{ $index + 1 }}</td>
			<td>{{terreno.nombre_apartante}}</td>
			<td>{{terreno.lt}}</td>
			<td>{{terreno.mz}}</td>
			<td>{{terreno.sec}}</td>
			<td>{{terreno.fila}}</td>
			<td>{{terreno.panteon}}</td>
			<td><a ng-href="http://localhost/panteones/terreno/ver/{{terreno.id}}">Detalle</a></td>
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
    	<a href="">Adelante <span aria-hidden="true" ng-disabled="curPage >= terrenos.length/pageSize - 1" ng-click="curPage = curPage+1" ng-class="{bloquear: (numberOfPages() - 1) == curPage}">
    	&rarr;</span>
    	</a>
    </li>

  </ul>
</nav>
</div>

</div>
<script src="<?= base_url('assets/js/angular.min.js'); ?> "></script>
<script src="<?= base_url('assets/js/terreno.js'); ?> "></script>