<div class="container">
    <div class="row">
        <div class="col">
            <h1>crear contacto</h1>
            <div>
                <div calss="mb-3">
                    <label for="" calss= "form-label" >Nombre</label>
                    <input type="text" calss="form-control" id="nombre" name="nombre"> 
                </div>
                <div calss="mb-3">
                    <label for="" calss= "form-label" >telefono</label>
                    <input type="text" calss="form-control" id="telefono" name="telefono"> 
                </div>
                <div calss="mb-3">
                    <label for="" calss= "form-label" >email</label>
                    <input type="email" calss="form-control" id="email" name="email" > 
                </div>
                <button id="crear" class="btn btn-success">Crear contacto</button>
            </div>
        </div>
    </div>
</div>
<script>
       
       $("#crear").click(()=>{
            let nombre = $("#nombre").val();
            let telefono = $("#telefono").val();
            let email = $("#email").val();

            let validarCorreo =/^[\w-\.]+@([\w-])+\.)+[\w-]{2,4}$/;
            let validarTelefino = /^[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){3}|(\d{2}[\*\.\-\s]){4}|(\d{4}[\*\.\-\s]){2})|\d{8}|\d{10}|\d{12}$/;
            let vañldarNombre = /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;

            if(validarCorreo.test(email)){
                return email 
            }else{
                swal.fire({
                    title: "ERROR",
                    text: "email no valido",
                    imageUrl: './public/img/1.png',
                    imageWidth: 400,
                    imageHeight: 200,
                });
            }
                        
            if (validarTelefino.test(telefono)) {
                return telefono
            } else {
                swal.fire({
                    title: "ERROR",
                    text: "Telefono no valido",
                    imageUrl: './public/img/1.png',
                    imageWidth: 400,
                    imageHeight: 200,
                });
            }

            if (vañldarNombre.test(nombre)) {
                return nombre
            } else {
                swal.fire({
                    title: "ERROR",
                    text: "Nombre no valido",
                    imageUrl: './public/img/1.png',
                    imageWidth: 400,
                    imageHeight: 200,
                });
            }
        }

    //validaciones de nombre email y telefono no suift alert

            $.ajax({
                url:"./app/model/process/create.process.php",
                data:{
                    nombre,
                    telefono,
                    email,
                },
                type: "POST",
                success:()=>{
                    $('#nombre','#telefono','email').load('./app/views/create.php');
                    swal.fire({
                        title: "Todo Bien",
                        text: "Precione el boton para continuar",
                        imageUrl: './public/img/2.webp',
                        imageWidth: 400,
                        imageHeight: 200,
                    });
                },
                error:()=>{
                    $('#nombre','#telefono','email').load('./app/views/create.php');
                    swal.fire({
                        title: "ERROR",
                        text: "consuta con el admin",
                        imageUrl: './public/img/1.png',
                        imageWidth: 400,
                        imageHeight: 200,
                    });
                }
             })
       })
    })
</script>