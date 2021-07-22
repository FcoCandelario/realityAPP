<template>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Registro de casos</div>

                    <div class="card-body">
                        <form>
                            
                                <div class="row">
                                
                                    <div class="col">
                                        <label for="name">Nombre completo</label>
                                        <input type="text" class="form-control" id="name" placeholder="Nombre completo">
                                    </div>
                                    
                                    <div class="col">
                                        <label for="age">Edad</label>
                                        <input type="text" class="form-control" id="age" placeholder="example@gmail.com">
                                    </div>

                                </div>
                                
                                <div class="row mt-4">

                                    <div class="col">
                                        <label for="gender">Género</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="female">Femenino</option>
                                            <option value="male">Masculino</option>
                                            <option value="other">Prefiero no especificar</option>
                                        </select>
                                    </div>
                                

                                    <div class="col">
                                        <label for="email">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                                    </div>

                                </div>

                                <div class="row mt-4">

                                    <div class="col">
                                        <label for="job">Actividad Laboral</label>
                                        <input type="text" class="form-control" id="job" placeholder="Actividad Laboral">
                                    </div>

                                </div>

                                <div class="row mt-4">

                                    <div class="col">
                                        <label for="case">Detalles del caso</label>
                                        <textarea type="text" class="form-control" id="case" placeholder="Descripción... "></textarea>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Asignación de casos</div>

                    <div class="card-body">
                        <form>

                                <div class="row">
                                
                                     <div class="col">
                                        <label for="gender">Especialidad</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="">Selecciona una especialidad</option>
                                            <option value="admin">Derecho Administrativo</option>
                                            <option value="penal">Derecho Penal</option>
                                            <option value="fiscal">Derecho Fiscal</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row mt-4">
                                
                                     <div class="col">
                                        <label for="gender">Selecciona al abogado</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="">Selecciona un abogado</option>
                                            <option value="1">Francisco Cervantes</option>
                                            <option value="2">Ricardo Martinez</option>
                                            <option value="3">Angelica Ramírez</option>
                                        </select>
                                        <span class="badge badge-secondary">(El select se cargaria dinamicamente según la especialidad)</span>
                                    </div>
                                    
                                </div>
                                
                                <div class="row mt-4">

                                    <div class="col">
                                        <label for="gender">Método de pago</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="female">Paypal</option>
                                            <option value="male">Tarjeta de crédito</option>
                                            <option value="other">Tarjeta de débito</option>
                                            <option value="other">Oxxo</option>
                                        </select>
                                        <span class="badge badge-secondary">Se puede implementar la API de paypal, conekta para pagos en tarjeta, oxxo </span>
                                    </div>
                                

                                    <div class="col">
                                        <label for="email">Fecha de la cita</label>
                                        <input type="date" class="form-control" id="email" placeholder="example@gmail.com">
                                        <span class="badge badge-secondary">(Si se tiene agenda por abogado se puede implentar fullcalendar)</span>
                                    </div>

                                </div>

                               
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
