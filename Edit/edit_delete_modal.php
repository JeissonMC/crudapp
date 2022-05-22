<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $datos['id_Usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Alumno</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit/edit.php">
				<input type="hidden" class="form-control" name="ID" value="<?php echo $row['ID']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Codigo"  readonly="readonly" value="<?php echo $row['Codigo']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nombres:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Nombre" value="<?php echo $row['Nombre']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Apellidos:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Apellido" value="<?php echo $row['Apellido']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Edad:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Edad" value="<?php echo $row['Edad']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Curso:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Curso" value="<?php echo $row['Curso']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Telefono:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Telefono" value="<?php echo $row['Telefono']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dirección:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Direccion" value="<?php echo $row['Direccion']; ?>">
					</div>
				</div>
            </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Eliminar Alumno</h4></center>
            </div>
            <div class="modal-body">
            	<p class="text-center">Estas seguro que quieres borrarlo?</p>
				<h2 class="text-center"><?php echo $row['Nombre'] . ' ' . $row['Apellido']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="Delete/delete.php?ID=<?php echo $row['ID']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si, estoy seguro</a>
            </div>

        </div>
    </div>
</div>