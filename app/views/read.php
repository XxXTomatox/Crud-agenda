<div class="container mt-5">
    <div class="row">
        <div class="col">
            <a href="./create">Agregar</a>
            <hr>

        <div class="table-responsive">
            <table class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
                <thead class="table-light">
                    <caption>Table Name</caption>
                    <tr>
                    <th>
                        Nombre
                    </th>
                    <th>
                        telefono
                    </th>
                    <th>Email</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        foreach ($contactos as $contacto):
                        ?>
                    <tr>
                    <td><?php echo $contacto["nombre"]?></td>
                    <td><?php echo $contacto["telefono"]?></td>
                    <td><?php echo $contacto["email"]?></td>
                    <td>
                        <a calss="btn btn-warning" href="./update">Actualizar</a>
                    </td>
                    <td>
                        <a class="btn btn-dander" href="">Eliminar</a>
                    </td>
                    </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
            </table>
        </div>
        
        </div>
    </div>
</div>